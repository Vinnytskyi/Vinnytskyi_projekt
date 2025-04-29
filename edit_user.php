<?php
session_start();

require_once('app_config/config.php');
require_once('core_logic/DBConnect.php');
require_once('core_logic/Users.php');

// Підключення до бази даних
$conn = DBConnect::connect();

// Отримання даних з форми
$fullname = trim($_POST['fullname']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);
$confirm_password = trim($_POST['confirm_password']);

// Визначення ID користувача (або з сесії, або з форми)
$id = 0;
if (isset($_SESSION['user']) && isset($_SESSION['user']['id'])) {
    $id = $_SESSION['user']['id'];
} elseif (isset($_POST['id']) && $_POST['id'] !== '') {
    $id = (int)$_POST['id'];
} else {
    die('Не вдалося визначити користувача для збереження.');
}

// Перевірка пароля
if (!empty($password) && $password !== $confirm_password) {
    die('Паролі не співпадають.');
}

// Оновлення користувача
if ($id > 0) {
    if (!empty($password)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("UPDATE users SET fullname = ?, email = ?, password = ? WHERE id = ?");
        $stmt->bind_param("sssi", $fullname, $email, $hashed_password, $id);
    } else {
        $stmt = $conn->prepare("UPDATE users SET fullname = ?, email = ? WHERE id = ?");
        $stmt->bind_param("ssi", $fullname, $email, $id);
    }

    if ($stmt === false) {
        die('Помилка підготовки запиту: ' . $conn->error);
    }

    $stmt->execute();

    // Оновлюємо сесію після зміни даних
    if (isset($_SESSION['user'])) {
        $_SESSION['user']['fullname'] = $fullname;
        $_SESSION['user']['email'] = $email;
    }

} else {
    // Якщо реєстрація нового (рідко буде використовуватись тут)
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO users (fullname, email, password) VALUES (?, ?, ?)");
    if ($stmt === false) {
        die('Помилка підготовки запиту: ' . $conn->error);
    }
    $stmt->bind_param("sss", $fullname, $email, $hashed_password);
    $stmt->execute();
}

// Переадресація
header('Location: pp.php');
exit;
