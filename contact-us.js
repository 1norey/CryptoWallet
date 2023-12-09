        let nameRegex = /^[a-zA-Z]+ [a-zA-Z]+$/; 
        let emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/; 

        function validateForm() {
            let nameInput = document.getElementById('name');
            let emailInput = document.getElementById('email');
            let nameError = document.getElementById('nameError');
            let emailError = document.getElementById('emailError');
s
            nameError.innerText = '';
            emailError.innerText = '';

            if (!nameRegex.test(nameInput.value)) {
                nameError.innerText = 'Enter a valid name and surname';
                return;
            }

            if (!emailRegex.test(emailInput.value)) {
                emailError.innerText = 'Enter a valid email address!';
                return;
            }
            alert("Thank you for contacting us, we'll get back to you as soon as possible!");
        }