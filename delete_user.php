<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'core_logic/DBConnect.php';

session_start(); 

$conn = DBConnect::connect();

if (!$conn) {
    die('Chyba pripojenia k databáze: ' . mysqli_connect_error());
}

$sql = "SELECT ID FROM users ORDER BY ID DESC LIMIT 1";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $lastUserId = $row['ID'];

    $deleteSql = "DELETE FROM users WHERE ID = ?";
    $stmt = $conn->prepare($deleteSql);

    if ($stmt) {
        $stmt->bind_param("i", $lastUserId);
        if ($stmt->execute()) {
            echo "Používateľ s ID $lastUserId bol úspešne odstránený.<br>";

            session_destroy();

            header("Location: goodbye.php");
            exit();
        } else {
            echo "Chyba pri odstraňovaní: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Chyba pri príprave žiadosti o odstránenie: " . $conn->error;
    }
} else {
    echo "Nie sú žiadni používatelia na odstránenie.";
}

$conn->close();
?>


