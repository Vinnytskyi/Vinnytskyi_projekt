<?php
session_start(); 
if (isset($_SESSION['fullname'])) 
    $fullname = $_SESSION['fullname']; 
?>

<body>
 <link rel="stylesheet" href="./css/dropdown.css">
    <!-- Navigačný panel -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <!-- Logo -->
            <img src="./img/photo_5312497550558880497_y-removebg-preview.png" alt="Asiris Logo" style="height: 40px;" class="logo">
            <a class="navbar-brand" href="pp.php">Asiris shop🛍️</a>

            <!-- Tlačidlo pre mobilné menu -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="pp.php">DOMOV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#o nas">O NAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#kl">KATALOG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#kontakt">KONTAKT</a>
                    </li>
                </ul>
            </div>

            <!-- Dropdown для аватара та імені -->
            <div class="dropdown">
                <img src=".\img\vecteezy_user-profile-avatar_11209565.png" alt="Avatar" class="rounded-circle" style="width: 53px; height: 53px; cursor: pointer;" id="avatarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="avatarDropdown">
                    <li class="text-center"><strong><?= htmlspecialchars($fullname); ?></strong></li> <!-- Виведення ім'я користувача -->
                    <li><a class="dropdown-item" href="index.php?edit=1&id=1&S">Edit</a></li>
                    <li>
                        <form action="delete_user.php" method="POST">
                            <button type="submit" class="dropdown-item" onclick="return confirm('Naozaj sa chcete odhlásiť??')">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
            <!-- Ikona koša -->
            <div class="icon-container">
                <i class="bi bi-bag-fill icon"></i>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-bag-fill icon" viewBox="0 0 16 16">
                    <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4z"/>
                </svg>
            </div>
        </div>
    </nav>
</body>