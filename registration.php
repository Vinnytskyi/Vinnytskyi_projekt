<?php
session_start();

require_once('app_config/config.php');
require_once('core_logic/DBConnect.php');

$conn = DBConnect::connect();

$fullname = '';
$email = '';
$userId = 0;

// Якщо передано ?edit=1 — завантажуємо останнього користувача
if (isset($_GET['edit']) && $_GET['edit'] == 1) {
    $result = $conn->query("SELECT id, fullname, email FROM users ORDER BY id DESC LIMIT 1");
    if ($result && $result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $userId = $user['id'];
        $fullname = $user['fullname'];
        $email = $user['email'];
    }
}
?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title><?php echo $userId ? 'Editovať profil' : 'Registrácia'; ?></title>
    <link rel="stylesheet" href="./css/registration.css">
</head>
<body>
<div class="registration-container">
    <form action="save_registration.php" method="post" class="registration-form">
        <h2><?php echo $userId ? 'Editovať profil' : 'Registrácia'; ?></h2>

        <?php if ($userId): ?>
            <input type="hidden" name="id" value="<?php echo $userId; ?>">
        <?php endif; ?>

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
        <button type="submit" class="btn-register"><?php echo $userId ? 'Aktualizovať' : 'Registrovať sa'; ?></button>
    </form>
</div>
</body>
</html>
