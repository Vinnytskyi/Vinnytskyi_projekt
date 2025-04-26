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
            <div class="form-group">
                <label for="fullname">Meno a priezvisko</label>
                <input type="text" id="fullname" name="fullname" required>
            </div>
            <div class="form-group">
                <label for="email">Emailová adresa</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Heslo</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm_password">Potvrďte heslo</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>
            <button type="submit" class="btn-register">Registrovať sa</button>
        </form>
    </div>
</body>
</html>
