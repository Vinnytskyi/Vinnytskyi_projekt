<?php
// Показуємо всі помилки
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Підключення до бази даних через клас DBConnect
require_once 'core_logic/DBConnect.php';

session_start(); // Починаємо сесію

// Отримуємо з'єднання з базою даних
$conn = DBConnect::connect();

// Перевірка підключення
if (!$conn) {
    die('Помилка підключення до бази даних: ' . mysqli_connect_error());
}

// Знаходимо останнього зареєстрованого користувача
$sql = "SELECT ID FROM users ORDER BY ID DESC LIMIT 1";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $lastUserId = $row['ID'];

    // Видаляємо останнього користувача
    $deleteSql = "DELETE FROM users WHERE ID = ?";
    $stmt = $conn->prepare($deleteSql);

    if ($stmt) {
        $stmt->bind_param("i", $lastUserId);
        if ($stmt->execute()) {
            echo "Користувача з ID $lastUserId успішно видалено.<br>";

            // Знищуємо сесію
            session_destroy();

            // Перекидаємо на сторінку реєстрації
            header("Location: registration.php");
            exit();
        } else {
            echo "Помилка при видаленні: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Помилка при підготовці запиту на видалення: " . $conn->error;
    }
} else {
    echo "Немає користувачів для видалення.";
}

$conn->close();
?>


