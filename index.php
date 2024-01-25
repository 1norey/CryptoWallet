<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <script>
      let nameRegex = /^[a-zA-Z]+ [a-zA-Z]+$/; 
let ageRegex = /^[0-9]+$/; 
let emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/; 
let usernameRegex = /^[a-zA-Z.-_]{3,10}$/; 
let passwordRegex = /^[A-Za-z!?\d._-]{6,}$/; 

function validateForm() {
    let nameInput = document.getElementById('name');
    let ageInput = document.getElementById('age');
    let emailInput = document.getElementById('email');
    let usernameInput = document.getElementById('username');
    let passwordInput = document.getElementById('password');
    let confirmPasswordInput = document.getElementById('confirmPassword');
    let termsCheckbox = document.getElementById('termsCheckbox');

    let nameError = document.getElementById('nameError');
    let ageError = document.getElementById('ageError');
    let emailError = document.getElementById('emailError');
    let usernameError = document.getElementById('usernameError');
    let passwordError = document.getElementById('passwordError');
    let confirmPasswordError = document.getElementById('confirmPasswordError');

    nameError.innerText = '';
    ageError.innerText = '';
    emailError.innerText = '';
    usernameError.innerText = '';
    passwordError.innerText = '';
    confirmPasswordError.innerText = '';

    if (!nameRegex.test(nameInput.value)) {
        nameError.innerText = 'Enter a valid name and surname';
        return;
    }

    if (!ageRegex.test(ageInput.value)) {
        ageError.innerText = 'Enter a valid age';
        return;
    }

    if (!emailRegex.test(emailInput.value)) {
        emailError.innerText = 'Enter a valid email address';
        return;
    }

    if (!usernameRegex.test(usernameInput.value)) {
        usernameError.innerText = 'Username must contain at least 3 characters';
        return;
    }

    if (!passwordRegex.test(passwordInput.value)) {
        passwordError.innerText = 'Password must contain at least 6 characters';
        return;
    }

    if (passwordInput.value !== confirmPasswordInput.value) {
        confirmPasswordError.innerText = 'Passwords do not match';
        return;
    }

    if (!termsCheckbox.checked) {
        alert("Please accept the terms & conditions");
        return;
    }

    alert("Form submitted successfully!");
    return true;
}
    </script>
</head>
<body>
  <div class="wrapper">
    <h2>Register</h2>
    <form action="registerController.php" method="post" onsubmit="return validateForm()">
      <div class="input-box">
        <input type="text" id="name" name="name" placeholder="Name Surname" required>
        <div class="error-message" id="nameError"></div>
      </div>
      <div class="input-box">
        <input type="number" id="age" name="age" placeholder="Age" required>
        <div class="error-message" id="ageError"></div>
      </div>
      <div class="input-box">
        <input type="text" id="email" name="email" placeholder="Email" required>
        <div class="error-message" id="emailError"></div>
      </div>
      <div class="input-box">
        <input type="text" id="username" name="username" placeholder="Username" required>
        <div class="error-message" id="usernameError"></div>
      </div>
      <div class="input-box">
        <input type="password" id="password" name="password" placeholder="Create password" required>
        <div class="error-message" id="passwordError"></div>
      </div>
      <div class="input-box">
        <input type="password" id="confirmPassword" placeholder="Confirm password" required>
        <div class="error-message" id="confirmPasswordError"></div>
      </div>
      <div class="policy">
        <input type="checkbox" id="termsCheckbox" required>
        <label for="termsCheckbox">I accept all terms & conditions</label>
      </div>
      <div class="input-box button">
      <input type="submit" name="registerBtn" value="Register"><br><br>
      </div>
      <div class="text">
        <h3>Already have an account? <a href="log-in.php">Login now</a></h3>
      </div>
    </form>
  </div>
</body>
</html>