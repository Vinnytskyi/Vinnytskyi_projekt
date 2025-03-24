<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/pp3.css">
</head>
<body>
    <!-- Navigačný panel -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <img src="photo_5312497550558880497_y-removebg-preview.png" alt="Asiris Logo" style="height: 40px;"  class="logo">
            <a class="navbar-brand" href="hhh.html">Asiris shop🛍️</a>
            <!-- Tlačidlo pre mobilné menu -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="pp.html">DOMOV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#vh">VYHODY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#zl">NAJZAUJÍMAVEJŠIE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#kl">KOLEKCIA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#rz">RECENZIE</a>
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
    <!-- Sekcia zvýraznených výhod moderných hodiniek -->
    <section class="section-highlight my-5 p-4 rounded shadow text-center py-5 border border-primary" id="mh">
        <h3 class="text-center text-highlight">Výhody moderných hodiniek</h3>
        <table class="styled-table">
            <thead>
                <tr>
                    <th>Výhoda</th>
                    <th>Popis</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Inteligentné funkcie</td>
                    <td>Moderné hodinky ponúkajú funkcie ako notifikácie, ovládanie hudby a platby.</td>
                </tr>
                <tr>
                    <td>Prispôsobivosť</td>
                    <td>Možno ich prispôsobiť podľa štýlu a potrieb používateľa.</td>
                </tr>
                <tr>
                    <td>Kompatibilita</td>
                    <td>Ľahko sa spárujú so smartfónmi a inými zariadeniami.</td>
                </tr>
                <tr>
                    <td>Inovácia</td>
                    <td>Moderné hodinky prinášajú najnovšie technológie do každodenného života.</td>
                </tr>
            </tbody>
        </table>
    </section>
    

    <h1 class="text-center">Hodinky</h1>
    <!-- Karusel s obrázkami hodiniek -->
    <div id="carouselExampleCaptions" class="carousel slide container-fluid" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.pexels.com/photos/190819/pexels-photo-190819.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block" alt="Image1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Štýlové hodinky</h5>
                    <p>Najlepšia voľba pre váš aktívny život.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.pexels.com/photos/280250/pexels-photo-280250.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block" alt="Image2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Modely 2024</h5>
                    <p>Nové technológie a moderný dizajn.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.pexels.com/photos/16287282/pexels-photo-16287282.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block" alt="Image3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Pohodlie a kvalita</h5>
                    <p>Hodinky na každý deň a špeciálne príležitosti.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Попереднє</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Наступне</span>
        </button>
    </div>

    <section class="products py-5" id="zl">
        <h2>Najzaujímavejšie modely</h2>
        <div class="product-grid">
            <!-- Sekcia so Najzaujímavejšie na produkty -->
    
            <div class="product-card sale">
                <div class="product-image">
                    <img src="https://images.pexels.com/photos/10477815/pexels-photo-10477815.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Modern Black">
                    <span class="badge">Najzaujímavejšie</span>
                </div>
                <h3>Modern Black</h3>
                <p>Elegantné čierne hodinky s dotykom minimalizmu.</p>
                <p>€299</p>
                <a href="nakup.html" class="buy-btn">
                    <i class="fas fa-shopping-cart"></i> Kúpiť teraz
                </a>
            </div>
    
            <div class="product-card sale">
                <div class="product-image">
                    <img src="https://images.pexels.com/photos/9561297/pexels-photo-9561297.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Futuristic Silver">
                    <span class="badge">Najzaujímavejšie</span>
                </div>
                <h3>Futuristic Silver</h3>
                <p>Moderné strieborné hodinky pre futuristický štýl.</p>
                <p>€279</p>
                <a href="nakup.html" class="buy-btn">
                    <i class="fas fa-shopping-cart"></i> Kúpiť teraz
                </a>
            </div>
    
            <div class="product-card sale">
                <div class="product-image">
                    <img src="https://images.pexels.com/photos/9203637/pexels-photo-9203637.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Golden Shine">
                    <span class="badge">Najzaujímavejšie</span>
                </div>
                <h3>Golden Shine</h3>
                <p>Moderné zlaté hodinky, ktoré očaria každého.</p>
                <p>€399</p>
                <a href="nakup.html" class="buy-btn">
                    <i class="fas fa-shopping-cart"></i> Kúpiť teraz
                </a>
            </div>
    
            <div class="product-card sale">
                <div class="product-image">
                    <img src="https://images.pexels.com/photos/4431866/pexels-photo-4431866.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Urban Brown">
                    <span class="badge">Najzaujímavejšie</span>
                </div>
                <h3>Urban Brown</h3>
                <p>Moderný hnedý dizajn pre mestský životný štýl.</p>
                <p>€259</p>
                <a href="nakup.html" class="buy-btn">
                    <i class="fas fa-shopping-cart"></i> Kúpiť teraz
                </a>            
            </div>
            
        </div>
    </section>
    

    <!-- Sekcia s kolekciou produktov -->
    <section class="products row py-5" id="kl">
        <h2>Kolekcia</h2>
        <div class="product-grid">
            <div class="product-card">
                <img src="https://images.pexels.com/photos/592815/pexels-photo-592815.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Modern Platinum">
                <h3>Modern Platinum</h3>
                <p>€599</p>
                <a href="nakup.html" class="buy-btn">
                    <i class="fas fa-shopping-cart"></i> Kúpiť teraz
                </a>
            </div>
            <div class="product-card">
                <img src="https://images.pexels.com/photos/190581/pexels-photo-190581.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Urban Gold Plus">
                <h3>Urban Gold Plus</h3>
                <p>€269</p>
                <a href="nakup.html" class="buy-btn">
                    <i class="fas fa-shopping-cart"></i> Kúpiť teraz
                </a>
            </div>
            <div class="product-card">
                <img src="https://images.pexels.com/photos/8892886/pexels-photo-8892886.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Ebony Edge">
                <h3>Ebony Edge</h3>
                <p>€379</p>
                <a href="nakup.html" class="buy-btn">
                    <i class="fas fa-shopping-cart"></i> Kúpiť teraz
                </a>
            </div>
            <div class="product-card">
                <img src="https://images.pexels.com/photos/23174727/pexels-photo-23174727.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Silver Grace">
                <h3>Silver Grace</h3>
                <p>€329</p>
                <a href="nakup.html" class="buy-btn">
                    <i class="fas fa-shopping-cart"></i> Kúpiť teraz
                </a>
            </div>
            <div class="product-card">
                <img src="https://images.pexels.com/photos/15671805/pexels-photo-15671805.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Golden Prestige">
                <h3>Golden Prestige</h3>
                <p>€389</p>
                <a href="nakup.html" class="buy-btn">
                    <i class="fas fa-shopping-cart"></i> Kúpiť teraz
                </a>
            </div>
            <div class="product-card">
                <img src="https://images.pexels.com/photos/10414981/pexels-photo-10414981.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Black Nova">
                <h3>Black Nova</h3>
                <p>€329</p>
                <a href="nakup.html" class="buy-btn">
                    <i class="fas fa-shopping-cart"></i> Kúpiť teraz
                </a>
            </div>
            <div class="product-card">
                <img src="https://images.pexels.com/photos/9561297/pexels-photo-9561297.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Heritage Luxe">
                <h3>Heritage Luxe</h3>
                <p>€439</p>
                <a href="nakup.html" class="buy-btn">
                    <i class="fas fa-shopping-cart"></i> Kúpiť teraz
                </a>
            </div>
            <div class="product-card">
                <img src="https://images.pexels.com/photos/15715981/pexels-photo-15715981.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Vintage Future">
                <h3>Vintage Future</h3>
                <p>€399</p>
                <a href="nakup.html" class="buy-btn">
                    <i class="fas fa-shopping-cart"></i> Kúpiť teraz
                </a>
            </div>
        </div>
    </section>
    
    <!-- Sekcia s recenziami zákazníkov -->
    <div class="reviews-container py-5" id="rz">
        <h2>Recenzie našich zákazníkov</h2>
    
        <div class="review">
            <div class="rating">⭐⭐⭐⭐⭐</div>
            <h3>Petra K., Bratislava</h3>
            <p>"Hodinky sú úžasné! Minimalistický dizajn presne podľa môjho vkusu. Doručenie bolo veľmi rýchle a všetko prišlo v perfektnom stave. Určite odporúčam!"</p>
        </div>
    
        <div class="review">
            <div class="rating">⭐⭐⭐⭐</div>
            <h3>Jozef M., Košice</h3>
            <p>"Kvalita hodín je veľmi dobrá a vyzerajú naživo ešte lepšie. Doručenie trvalo trochu dlhšie, ale inak som spokojný s celým procesom." </p>
        </div>
    
        <div class="review">
            <div class="rating">⭐⭐⭐⭐⭐</div>
            <h3>Lucia S., Žilina</h3>
            <p>"Elegantné hodinky, ktoré dopĺňajú každý outfit. Oceňujem profesionálny prístup a bezproblémovú komunikáciu s predajcom. Ďakujem!" </p>
        </div>
    </div>
    
     

<!-- Pätička  -->
<?php include 'includes/footer2.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
