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
                        <a class="nav-link text-white" href="#zl">NAJPOPULÁRNEJŠÍ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#kl">KOLEKCIA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#rz">RECENZIE</a>
                    </li>

                </ul>
            </div>
            <div class="icon-container">
                <i class="bi bi-bag-fill icon"></i>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-bag-fill icon" viewBox="0 0 16 16">
                    <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4z"/>
                </svg>
            </div>
        </div>
    </nav>
    <!-- Sekcia zvýraznených výhod klasických hodiniek -->
    <section class="section-highlight my-5 p-4 rounded shadow text-center py-5 border border-primary" id="vh">
        <h3 class="text-center text-highlight">Výhody klasických hodiniek</h3>
        <table class="styled-table">
            <thead>
                <tr>
                    <th>Výhoda</th>
                    <th>Popis</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Trvácnosť</td>
                    <td>Mechanické hodinky majú dlhú životnosť a dajú sa ľahko opraviť.</td>
                </tr>
                <tr>
                    <td>Prestíž</td>
                    <td>Klasické hodinky zdôrazňujú štýl a status majiteľa.</td>
                </tr>
                <tr>
                    <td>Nezávislosť</td>
                    <td>Nevyžadujú batérie, fungujú na mechanickej energii.</td>
                </tr>
                <tr>
                    <td>Zberateľská hodnota</td>
                    <td>Často majú vysokú zberateľskú hodnotu a môžu časom rásť na cene.</td>
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
                <img src="https://images.pexels.com/photos/125779/pexels-photo-125779.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block" alt="Image1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Štýlové hodinky</h5>
                    <p>Najlepšia voľba pre váš aktívny život.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.pexels.com/photos/236900/pexels-photo-236900.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block" alt="Image2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Modely 2024</h5>
                    <p>Nové technológie a moderný dizajn.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.pexels.com/photos/236915/pexels-photo-236915.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block" alt="Image3">
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
        <h2>Najpopulárnejší modely</h2>
        <div class="product-grid">
            <!-- Sekcia so Najpopulárnejší na produkty -->
            <div class="product-card sale">
                <div class="product-image">
                    <img src="https://images.pexels.com/photos/5895642/pexels-photo-5895642.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Elegant Black">
                    <span class="badge">Najpopulárnejší</span>
                </div>
                <h3>Classic Elegance</h3>
                <p>Štýlové hodinky, ktoré nikdy nevyjdú z módy.</p>
                <p>€249</p>
                <a href="nakup.html" class="buy-btn">
                    <i class="fas fa-shopping-cart"></i> Kúpiť teraz
                </a>
            </div>

            <div class="product-card sale">
                <div class="product-image">
                    <img src="https://images.pexels.com/photos/12663961/pexels-photo-12663961.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Elegant Black">
                    <span class="badge">Najpopulárnejší</span>
                </div>
                <h3>Timeless Silver</h3>
                <p>Strieborné hodinky s eleganciou, ktorá pretrvá.</p>
                <p>€229</p>
                <a href="nakup.html" class="buy-btn">
                    <i class="fas fa-shopping-cart"></i> Kúpiť teraz
                </a>
            </div>

            <div class="product-card sale">
                <div class="product-image">
                    <img src="https://images.pexels.com/photos/13548994/pexels-photo-13548994.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Elegant Black">
                    <span class="badge">Najpopulárnejší</span>
                </div>
                <h3>Classic Gold</h3>
                <p>Zlaté hodinky, ktoré nikdy nevyjdú z módy.</p>
                <p>€349</p>
                <a href="nakup.html" class="buy-btn">
                    <i class="fas fa-shopping-cart"></i> Kúpiť teraz
                </a>
            </div>


            <div class="product-card sale">
                <div class="product-image">
                    <img src="https://images.pexels.com/photos/11638635/pexels-photo-11638635.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Elegant Black">
                    <span class="badge">Najpopulárnejší</span>
                </div>
                <h3>Vintage Brown</h3>
                <p>Klasický hnedý dizajn pre elegantný vzhľad.</p>
                <p>€219</p>
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
                <img src="https://images.pexels.com/photos/14525782/pexels-photo-14525782.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Hodinky 1">
                <h3>Luxury Platinum</h3>
                <p>€549</p>
                <a href="nakup.html" class="buy-btn">
                    <i class="fas fa-shopping-cart"></i> Kúpiť teraz
                </a>
            </div>
            <div class="product-card">
                <img src="https://images.pexels.com/photos/5421271/pexels-photo-5421271.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Hodinky 2">
                <h3>Urban Gold</h3>
                <p>€249</p>
                <a href="nakup.html" class="buy-btn">
                    <i class="fas fa-shopping-cart"></i> Kúpiť teraz
                </a>
            </div>
            <div class="product-card">
                <img src="https://images.pexels.com/photos/4061280/pexels-photo-4061280.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Hodinky 3">
                <h3>Elegant Ebony</h3>
                <p>€349</p>
                <a href="nakup.html" class="buy-btn">
                    <i class="fas fa-shopping-cart"></i> Kúpiť teraz
                </a>
            </div>
            <div class="product-card">
                <img src="https://images.pexels.com/photos/5058216/pexels-photo-5058216.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Hodinky 1">
                <h3>Majestic Silver</h3>
                <p>€299</p>
                <a href="nakup.html" class="buy-btn">
                    <i class="fas fa-shopping-cart"></i> Kúpiť teraz
                </a>
            </div>
            <div class="product-card">
                <img src="https://images.pexels.com/photos/7330090/pexels-photo-7330090.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Hodinky 2">
                <h3>Prestige Gold</h3>
                <p>€349</p>
                <a href="nakup.html" class="buy-btn">
                    <i class="fas fa-shopping-cart"></i> Kúpiť teraz
                </a>
            </div>
            <div class="product-card">
                <img src="https://images.pexels.com/photos/68201/male-watch-wrist-watch-packshot-time-68201.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Hodinky 3">
                <h3>Elegant Black</h3>
                <p>€299</p>
                <a href="nakup.html" class="buy-btn">
                    <i class="fas fa-shopping-cart"></i> Kúpiť teraz
                </a>
            </div>
            <div class="product-card">
                <img src="https://images.pexels.com/photos/13548995/pexels-photo-13548995.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Hodinky 1">
                <h3>Royal Heritage</h3>
                <p>€399</p>
                <a href="nakup.html" class="buy-btn">
                    <i class="fas fa-shopping-cart"></i> Kúpiť teraz
                </a>
            </div>
            <div class="product-card">
                <img src="https://images.pexels.com/photos/5447382/pexels-photo-5447382.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Hodinky 2">
                <h3>Vintage Classic</h3>
                <p>€379</p>
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
            <h3>Tomáš H., Nitra</h3>
            <p>"Skvelý nákup! Hodinky sú krásne a veľmi pohodlné na nosenie. Objednávka bola doručená včas a v perfektnom stave. Určite sa vrátim pre ďalšie kúpy!"</p>
        </div>
    
        <div class="review">
            <div class="rating">⭐⭐⭐⭐</div>
            <h3>Ivana P., Trenčín</h3>
            <p>"Nádherné hodinky s dokonalým dizajnom. Kvalita je naozaj vynikajúca a cena veľmi rozumná. Doručenie bolo rýchle a bez problémov." </p>
        </div>
    
        <div class="review">
            <div class="rating">⭐⭐⭐⭐⭐</div>
            <h3>Martin J., Prešov</h3>
            <p>"Veľmi pekné hodinky, ale trochu ma sklamalo, že neboli k dispozícii v mojej obľúbenej farbe. Inak všetko OK, spokojnosť s nákupom." </p>
        </div>
    </div>
     

<!-- Pätička  -->
<?php include 'includes/footer2.php'; ?>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
