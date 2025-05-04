<?php
session_start(); 
require_once('app_config/config.php');
require_once('core_logic/DBConnect.php');

$conn = DBConnect::connect();
$fullname = trim($_POST['fullname']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);
$confirm_password = trim($_POST['confirm_password']);
$id = isset($_POST['id']) ? (int)$_POST['id'] : 0;

// Перевірка пароля
if (!empty($password) && $password !== $confirm_password) {
    die('Heslá sa nezhodujú.');
}

if ($id > 0) {
    // ОНОВЛЕННЯ користувача
    if (!empty($password)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("UPDATE users SET fullname = ?, email = ?, password = ? WHERE id = ?");
        $stmt->bind_param("sssi", $fullname, $email, $hashed_password, $id);
    } else {
        $stmt = $conn->prepare("UPDATE users SET fullname = ?, email = ? WHERE id = ?");
        $stmt->bind_param("ssi", $fullname, $email, $id);
    }
} else {
    // РЕЄСТРАЦІЯ нового користувача
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO users (fullname, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $fullname, $email, $hashed_password);
}

if ($stmt === false) {
    die('Chyba žiadosti: ' . $conn->error);
}

$stmt->execute();

$_SESSION['fullname'] = $fullname; 


header('Location: pp.php');
exit;
?>
