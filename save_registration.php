<?php
include('db.php'); // Підключення до бази даних

// Отримуємо ID користувача для оновлення
$id = isset($_POST['id']) ? (int)$_POST['id'] : 0;
$fullname = trim($_POST['fullname']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);
$confirm_password = trim($_POST['confirm_password']);

// Якщо це оновлення
if ($id) {
    if (!empty($password)) {
        // Якщо пароль змінюється
        if ($password !== $confirm_password) {
            die('Heslá sa nezhodujú.');
        }
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Підготовка запиту для оновлення
        $stmt = $conn->prepare("UPDATE users SET fullname = ?, email = ?, password = ? WHERE id = ?");
        if ($stmt === false) {
            die('Помилка підготовки запиту для оновлення: ' . $conn->error);
        }

        $stmt->bind_param("sssi", $fullname, $email, $hashed_password, $id);
        $stmt->execute();
    } else {
        // Якщо пароль не змінюється
        $stmt = $conn->prepare("UPDATE users SET fullname = ?, email = ? WHERE id = ?");
        if ($stmt === false) {
            die('Помилка підготовки запиту для оновлення: ' . $conn->error);
        }

        $stmt->bind_param("ssi", $fullname, $email, $id);
        $stmt->execute();
    }
} else {
    // Нова реєстрація
    if ($password !== $confirm_password) {
        die('Heslá sa nezhodujú.');
    }
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Підготовка запиту для реєстрації нового користувача
    $stmt = $conn->prepare("INSERT INTO users (fullname, email, password) VALUES (?, ?, ?)");
    if ($stmt === false) {
        die('Помилка підготовки запиту для реєстрації: ' . $conn->error);
    }

    $stmt->bind_param("sss", $fullname, $email, $hashed_password);
    $stmt->execute();
}

// Перекидаємо назад на головну сторінку
header('Location: pp.php');
exit;
?>






