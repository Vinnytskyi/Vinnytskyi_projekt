// Отримуємо посилання на форму та кнопку
const form = document.getElementById('purchaseForm');
const submitButton = document.getElementById('submitButton');

// Додаємо обробник події для кнопки
submitButton.addEventListener('click', function () {
    // Отримуємо значення полів
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const dropdown = document.getElementById('dropdown').value;
    const radioButtons = document.querySelectorAll('input[name="category"]');

    // Перевіряємо, чи вибрано радіо-кнопку
    let radioSelected = false;
    radioButtons.forEach((radio) => {
        if (radio.checked) {
            radioSelected = true;
        }
    });

    // Перевірка всіх обов'язкових полів
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

    // Якщо всі поля заповнені, переходимо до іншої сторінки
    window.location.href = 'dakujem.html';
});
