let usernameRegex = /^[a-zA-Z.-_]{3,10}$/;
let passwordRegex = /^[A-Za-z!?\d._-]{6,}$/;

function validateForm() {
    let usernameInput = document.getElementById('username');
    let passwordInput = document.getElementById('password');
    let usernameError = document.getElementById('usernameError');
    let passwordError = document.getElementById('passwordError');

    usernameError.innerText = '';
    passwordError.innerText = '';

    if (!usernameRegex.test(usernameInput.value)) {
        usernameError.innerText = 'Username must contain at least 3 characters!';
        return;
    }
    if (!passwordRegex.test(passwordInput.value)) {
        passwordError.innerText = 'Password must contain at least 6 characters!';
        return;
    }
    alert("Form submitted successfully!");
}