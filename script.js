function validateForm() {
    validateForm.preventDefault();

    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;

    if (username.value === "" ) {
        alert("Please enter a valid username.");
        username.focus();
        return false;
    }
    if (password.value === "" ) {
        alert("Please enter a valid password.");
        password.focus();
        return false;
    }
    let usernameRegex = /^[a-zA-Z0-9._-]\s+$/;
    if (!usernameRegex.test(username.toLowerCase())) {
        alert("Username can only contain letters (a-z, A-Z) and numbers (0-9).");
        return false;
    }
    let passwordRegex = /^[a-zA-Z0-9.-_!?]\s+$/;
    if (!passwordRegex.test(password)) {
        alert("Password can only contain letters (a-z, A-Z) and numbers (0-9).");
        return false;
    }

    return true; 
}
