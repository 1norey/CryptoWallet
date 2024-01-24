<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="contact-us.css">
    <script src="contact-us.js"></script>
</head>
<body>
    <div class="wrapper">
        <form onsubmit="event.preventDefault(); validateForm();">
            <h1>Contact Us</h1>
            <input type="text" id="name" placeholder="Name Surname">
            <div id="nameError" class="error"></div>
            <input type="text" id="email" placeholder="Email">
            <div id="emailError" class="error"></div>
            <textarea cols="30" rows="10" placeholder="Message"></textarea>
            <button type="submit">Submit</button>
        </form>
    </div>
    <button><a href="home-page.php">Home Page</a></button>
    
</body>
</html>