<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in Page</title>
    <link rel="stylesheet" href="log-in.css">
    <script src="script.js"></script>
</head>
<body>
    <div class="container">
        <h2>Pocket Free</h2>
        <form id="My" onsubmit="validateForm(); return false;">
            <div class="field">
                <input type="text" id="username" placeholder="Username">
                <div class="error-message" id="usernameError"></div>
            </div>

            <div class="field">
                <input type="password" id="password" placeholder="Password">
                <div class="error-message" id="passwordError"></div>
            </div>
            <div class="field-button">
                <button type="submit">Log in</button>
            </div>
        </form>
    </div>
</body>
</html>