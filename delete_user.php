<?php
// Підключення до бази даних
include 'db.php';
session_start();

// Перевірка, чи користувач авторизований
if (isset($_SESSION['user_id'])) {
    
    // Знаходимо останнього зареєстрованого користувача
    $query = "SELECT ID FROM users ORDER BY ID DESC LIMIT 1";
    $result = $conn->query($query);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $lastUserId = $row['ID'];

        // Видаляємо його
        $stmt = $conn->prepare("DELETE FROM users WHERE ID = ?");
        if ($stmt) {
            $stmt->bind_param("i", $lastUserId);
            if ($stmt->execute()) {
                // Якщо користувач сам себе видалив, закриваємо сесію
                if ($_SESSION['user_id'] == $lastUserId) {
                    session_destroy();
                }

                // Переадресація на сторінку реєстрації
                header("Location: registration.php?message=deleted");
                exit();
            } else {
                echo "Помилка при видаленні: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Помилка підготовки запиту: " . $conn->error;
        }
    } else {
        echo "Не знайдено користувачів для видалення.";
    }
} else {
    header("Location: goodbye.php");
    exit();
}
?>


