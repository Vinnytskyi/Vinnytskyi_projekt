<?php
include('db.php'); // Підключення до бази даних

// Перевірка, чи є параметр ID в URL
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$fullname = '';
$email = '';
$password = '';
$confirm_password = '';

// Якщо ID задано, беремо дані користувача з бази даних
if ($id) {
    $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $fullname = $user['fullname'];
        $email = $user['email'];
    } else {
        die("Користувача не знайдено");
    }
}

?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrácia</title>
    <link rel="stylesheet" href="./css/registration.css">
</head>
<body>
    <div class="registration-container">
        <form action="save_registration.php" method="post" class="registration-form">
            <h2>Registrácia</h2>
            <input type="hidden" name="id" value="<?php echo $id; ?>"> <!-- Відправляємо ID для оновлення -->

            <div class="form-group">
                <label for="fullname">Meno a priezvisko</label>
                <input type="text" id="fullname" name="fullname" value="<?php echo htmlspecialchars($fullname); ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Emailová adresa</label>
                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
            </div>
            <div class="form-group">
                <label for="password">Heslo</label>
                <input type="password" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="confirm_password">Potvrďte heslo</label>
                <input type="password" id="confirm_password" name="confirm_password">
            </div>
            <button type="submit" class="btn-register">Registrovať sa</button>
        </form>
    </div>
</body>
</html>
