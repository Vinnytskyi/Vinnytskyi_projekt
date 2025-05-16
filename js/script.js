const form = document.getElementById('purchaseForm');
const submitButton = document.getElementById('submitButton');

submitButton.addEventListener('click', function () {
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const dropdown = document.getElementById('dropdown').value;
    const radioButtons = document.querySelectorAll('input[name="category"]');

    let radioSelected = false;
    radioButtons.forEach((radio) => {
        if (radio.checked) {
            radioSelected = true;
        }
    });

    if (!name) {
        alert('Prosím, vyplňte Meno a priezvisko.');
        return;
    }

    if (!email) {
        alert('Prosím, vyplňte váš Email.');
        return;
    }

    if (!dropdown) {
        alert('Prosím, vyberte farbu.');
        return;
    }

    if (!radioSelected) {
        alert('Prosím, vyberte Rozmery hodiniek.');
        return;
    }

    window.location.href = 'dakujem.php';
    
});
