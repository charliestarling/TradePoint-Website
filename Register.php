<?php 
$title = "TradePoint :: Register";
require('includes/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="container">
        <h2>Registration Form</h2>
        <form id="registrationForm">
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" required>

            <label for="surname">Surname:</label>
            <input type="text" id="surname" name="surname" required>

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required minlength="8">

            <label for="confirmPassword">Re-enter Password:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required>

            <div id="passwordError" class="error"></div>

            <button type="submit">Register</button>
        </form>
    </div>

    <script>
        const form = document.getElementById('registrationForm');
        const password = document.getElementById('password');
        const confirmPassword = document.getElementById('confirmPassword');
        const passwordError = document.getElementById('passwordError');

        form.addEventListener('submit', function(event) {
            if (password.value !== confirmPassword.value) {
                event.preventDefault();
                passwordError.textContent = "Passwords do not match!";
            } else {
                passwordError.textContent = "";
            }
        });
    </script>

</body>
</html>
