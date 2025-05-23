<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nákup</title>
    <link rel="stylesheet" href="./css/pok.css">
</head>
<body>
    <section class="kontakt py-5" id="kontakt">
        <div class="container">
            <h2 class="text-center mb-4">Nákup</h2>
            <form class="d-flex flex-column align-items-center" id="purchaseForm">
                <div class="mb-3 w-50">
                    <label for="name" class="form-label">Meno a priezvisko</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="mb-3 w-50">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <section class="selection-section">
                    <label for="dropdown" class="selection-label">Color</label>
                    <select id="dropdown" class="selection-dropdown">
                        <option value="">--Vyberte farbu--</option>
                        <option value="black">Black</option>
                        <option value="siva">Sivá</option>
                        <option value="zlaty">Zlaty</option>
                    </select>
                </section>
                <section class="interactive-choice">
                    <h2>Rozmery hodiniek</h2>
                    <div class="radio-options">
                        <label>
                            <input type="radio" name="category" value="small">
                            malý: do 36 mm;
                        </label>
                        <label>
                            <input type="radio" name="category" value="medium">
                            stredná: 37-40 mm;
                        </label>
                        <label>
                            <input type="radio" name="category" value="large">
                            veľké: 42-46 mm;
                        </label>
                    </div>
                </section>
                <button type="button" class="btn btn-primary mt-3" id="submitButton" href=dakujem.php>Odoslať</button>
            </form>
        </div>
    </section>
    <script src="./js/script.js"></script>
</body>
</html>
