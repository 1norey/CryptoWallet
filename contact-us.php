<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="contact-us.css">
    <script>
                let nameRegex = /^[a-zA-Z]+ [a-zA-Z]+$/; 
                 let emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/; 

        function validateForm() {
            let nameInput = document.getElementById('name');
            let emailInput = document.getElementById('email');
            let nameError = document.getElementById('nameError');
            let emailError = document.getElementById('emailError');

            nameError.innerText = '';
            emailError.innerText = '';

            if (!nameRegex.test(nameInput.value)) {
                nameError.innerText = 'Enter a valid name and surname';
                return false;
            }

            if (!emailRegex.test(emailInput.value)) {
                emailError.innerText = 'Enter a valid email address!';
                return false;
            }
            alert("Thank you for contacting us, we'll get back to you as soon as possible!");
            return true;
        }
    </script>
</head>
<body>
    <div class="wrapper">
        <form action="contactController.php" method="post" onsubmit="return validateForm();">
            <h1>Contact Us</h1>
            <input type="text" id="name" name="name" placeholder="Name Surname">
            <div id="nameError" class="error"></div>
            <input type="text" id="email" name="email" placeholder="Email">
            <div id="emailError" class="error"></div>
            <textarea cols="30" rows="10" name="message" placeholder="Message"></textarea>
            <!-- <button type="submit">Submit</button> -->
            <input type="submit" name="submitBtn" value="Submit">
        </form>
    </div>
    <button><a href="home-page.php">Home Page</a></button>
    
</body>
</html>