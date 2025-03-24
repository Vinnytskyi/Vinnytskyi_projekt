<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/pp2.css">
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
                        <a class="nav-link text-white" href="#zl">ZLAVY</a>
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
    <!-- Sekcia zvýraznených výhod športových hodiniek -->
    <section class="section-highlight my-5 p-4 rounded shadow text-center py-5 border border-primary" id="sh">
        <h3 class="text-center text-highlight">Výhody športových hodiniek</h3>
        <ul class="list-unstyled">
          <li>
            <strong>Odolnosť:</strong> Sportové hodinky sú vyrobené tak, aby odolali náročným podmienkam a nárazom.
          </li>
          <li>
            <strong>Funkčnosť:</strong> Ponúkajú užitočné funkcie ako stopky, GPS, a monitorovanie srdcového tepu.
          </li>
          <li>
            <strong>Pohodlie:</strong> Sú navrhnuté pre pohodlné nosenie pri športových aktivitách.
          </li>
          <li>
            <strong>Vodeodolnosť:</strong> Väčšina športových hodiniek je vodeodolná, vhodná na plávanie a potápanie.
          </li>
        </ul>
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
                <img src="https://images.pexels.com/photos/51011/pexels-photo-51011.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block" alt="Image1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Štýlové hodinky</h5>
                    <p>Najlepšia voľba pre váš aktívny život.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.pexels.com/photos/23891842/pexels-photo-23891842.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block" alt="Image2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Modely 2024</h5>
                    <p>Nové technológie a moderný dizajn.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.pexels.com/photos/13007642/pexels-photo-13007642.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block" alt="Image3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Pohodlie a kvalita</h5>
                    <p>Hodinky na každý deň a špeciálne príležitosti.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Predchádzajúce</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Ďalej</span>
        </button>
    </div>

    <section class="products py-5" id="zl">
        <h2>Zľavy</h2>
        <div class="product-grid">
            <!-- Sekcia so zľavami na produkty -->
            <div class="product-card sale">
                <div class="product-image">
                    <img src="https://images.pexels.com/photos/18662969/pexels-photo-18662969.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Elegant Black">
                    <span class="badge">Zľava</span>
                </div>
                <h3>Elegant Black</h3>
                <p>Čistá čierna pre nadčasovú eleganciu.</p>
                <p class="price">€299</p>
                <a href="nakup.html" class="buy-btn">
                    <i class="fas fa-shopping-cart"></i> Kúpiť teraz
                </a>
            </div>

            <div class="product-card sale">
                <div class="product-image">
                    <img src="https://images.pexels.com/photos/1080751/pexels-photo-1080751.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Elegant Black">
                    <span class="badge">Zľava</span>
                </div>
                <h3>Elegant Black</h3>
                <p>Čistá čierna pre nadčasovú eleganciu.</p>
                <p class="price">€299</p>
                <a href="nakup.html" class="buy-btn">
                    <i class="fas fa-shopping-cart"></i> Kúpiť teraz
                </a>
            </div>

            <div class="product-card sale">
                <div class="product-image">
                    <img src="https://images.pexels.com/photos/11106314/pexels-photo-11106314.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Elegant Black">
                    <span class="badge">Zľava</span>
                </div>
                <h3>Elegant Black</h3>
                <p>Čistá čierna pre nadčasovú eleganciu.</p>
                <p class="price">€299</p>
                <a href="nakup.html" class="buy-btn">
                    <i class="fas fa-shopping-cart"></i> Kúpiť teraz
                </a>
            </div>


            <div class="product-card sale">
                <div class="product-image">
                    <img src="https://images.pexels.com/photos/14464638/pexels-photo-14464638.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Elegant Black">
                    <span class="badge">Zľava</span>
                </div>
                <h3>Elegant Black</h3>
                <p>Čistá čierna pre nadčasovú eleganciu.</p>
                <p class="price">€299</p>
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
                <img src="https://images.pexels.com/photos/9204686/pexels-photo-9204686.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Hodinky 1">
                <h3>Hodinky Classic</h3>
                <p>€199</p>
                <a href="nakup.html" class="buy-btn">
                    <i class="fas fa-shopping-cart"></i> Kúpiť teraz
                </a>
            </div>
            <div class="product-card">
                <img src="https://images.pexels.com/photos/11601957/pexels-photo-11601957.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Hodinky 2">
                <h3>Sport Chronograph</h3>
                <p>€249</p>
                <a href="nakup.html" class="buy-btn">
                    <i class="fas fa-shopping-cart"></i> Kúpiť teraz
                </a>
            </div>
            <div class="product-card">
                <img src="https://images.pexels.com/photos/9822736/pexels-photo-9822736.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Hodinky 3">
                <h3>Elegant Black</h3>
                <p>€299</p>
                <a href="nakup.html" class="buy-btn">
                    <i class="fas fa-shopping-cart"></i> Kúpiť teraz
                </a>
            </div>
            <div class="product-card">
                <img src="https://images.pexels.com/photos/23891842/pexels-photo-23891842.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Hodinky 1">
                <h3>Hodinky Classic</h3>
                <p>€199</p>
                <a href="nakup.html" class="buy-btn">
                    <i class="fas fa-shopping-cart"></i> Kúpiť teraz
                </a>
            </div>
            <div class="product-card">
                <img src="https://images.pexels.com/photos/9130515/pexels-photo-9130515.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Hodinky 2">
                <h3>Sport Chronograph</h3>
                <p>€249</p>
                <a href="nakup.html" class="buy-btn">
                    <i class="fas fa-shopping-cart"></i> Kúpiť teraz
                </a>
            </div>
            <div class="product-card">
                <img src="https://images.pexels.com/photos/3161378/pexels-photo-3161378.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Hodinky 3">
                <h3>Elegant Black</h3>
                <p>€299</p>
                <a href="nakup.html" class="buy-btn">
                    <i class="fas fa-shopping-cart"></i> Kúpiť teraz
                </a>
            </div>
            <div class="product-card">
                <img src="https://images.pexels.com/photos/19961769/pexels-photo-19961769.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Hodinky 1">
                <h3>Hodinky Classic</h3>
                <p>€199</p>
                <a href="nakup.html" class="buy-btn">
                    <i class="fas fa-shopping-cart"></i> Kúpiť teraz
                </a>
            </div>
            <div class="product-card">
                <img src="https://images.pexels.com/photos/13791415/pexels-photo-13791415.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Hodinky 2">
                <h3>Sport Chronograph</h3>
                <p>€249</p>
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
            <h3>Mária K., Bratislava</h3>
            <p>"Hodinky sú elegantné a kvalitné. Doručenie bolo rýchle, všetko prebehlo hladko. Určite odporúčam tento obchod!"</p>
        </div>
  
        <div class="review">
            <div class="rating">⭐⭐⭐⭐⭐</div>
            <h3>Peter T., Košice</h3>
            <p>"Objednal som hodinky ako darček a bol som nadmieru spokojný. Veľmi pekné balenie a rýchla odozva od obchodu. Odporúčam!"</p>
        </div>
  
        <div class="review">
            <div class="rating">⭐⭐⭐⭐</div>
            <h3>Jana M., Žilina</h3>
            <p>"Hodinky sú krásne, no doručenie trvalo o niečo dlhšie, ako som očakávala. Inak som spokojná a určite nakúpim znova."</p>
        </div>
    </div> 

   
<!-- Pätička  -->
<?php include 'footer2.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
