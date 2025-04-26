<?php
// Налаштування підключення до бази даних
$servername = "localhost"; // Хост бази даних (локальний сервер у випадку XAMPP)
$username = "root";        // Ім'я користувача для доступу до БД (зазвичай "root" для XAMPP)
$password = "";            // Пароль користувача (для XAMPP зазвичай порожній)
$dbname = "formular";      // Назва вашої бази даних (вказуйте правильне ім'я)

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Помилка з'єднання з базою даних: " . $conn->connect_error); 
}
?>
