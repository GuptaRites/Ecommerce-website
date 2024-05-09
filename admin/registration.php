<?php
include_once("session.php");
include_once('database/connection.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Sign Up</title>
    <script src="js/jquery-3.7.1.js"></script>
    <style>
        * {
            margin: 0;
            font-family: Arial;
        }

        body {
            /* background-color:rgb(244, 216, 216); */
            background-image: url(icon/background.avif);
            background-size: cover;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: rgb(244, 216, 216);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            opacity: 0.9;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            /* width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box; */
            height: 30px;
            width: 95%;
            margin: 5px;
            border-radius: 5px;
        }

        input:hover {
            background-color: rgb(227, 239, 249);
            border: 2px solid #b2967d;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .error {
            color: red;
        }

        h1,
        label,
        a,
        input,
        span {
            /* color: rgb(14, 2, 2); */
            font-weight: bold;
        }
    </style>
</head>

<body>
    

    <form action="registration_process.php" method="post" id="registrationForm" enctype="multipart/form-data">
        <h1>Admin Register here</h1>

        <label>Full Name:</label>
        <span class="error" id="nameError"></span>
        <input type="text" id="username" name="username" placeholder="Enter your full name" required>

        <label>User ID:</label>
        <span class="error" id="idError"></span>
        <input type="text" id="userid" name="userid" placeholder="Enter User ID" required>


        <label>Email:</label>
        <span class="error" id="emailError"></span>
        <input type="text" id="email" name="email" placeholder="Enter your Email" required>


        <label>Password:</label>
        <span class="error" id="passwordError"></span>
        <input type="password" id="password" name="password" placeholder="Enter Password" required>


        <label>Confirm Password:</label>
        <span class="error" id="cpasswordError"></span>
        <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" required>

        <center>
            <input type="submit" value="continue" id="submit" name="submit" class="inp-1">
        </center>


    </form>
    <script>
        $(document).ready(function () {
            $('#registrationForm').submit(function (event) {
                // Reset error messages
                $('.error').text('');

                // Validate username
                var username = $('#username').val();
                if (username.length < 3) {
                    $('#nameError').text('Please Enter your valid name');
                    event.preventDefault();
                }

                // Validate userID
                var username = $('#userid').val();
                if (username.length < 5) {
                    $('#idError').text('User ID must be at least 5 characters long');
                    event.preventDefault();
                }

                // Validate email
                var email = $('#email').val();
                if (!isValidEmail(email)) {
                    $('#emailError').text('Enter a valid email address');
                    event.preventDefault();
                }

                // Validate password
                var password = $('#password').val();
                if (password.length < 8) {
                    $('#passwordError').text('Please create a valid password');
                    event.preventDefault();
                }

                var cpassword = $('#confirmPassword').val();
                if (password.length < 8) {
                    $('#cpasswordError').text('Please create a valid password');
                    event.preventDefault();
                }

                if (cpassword != password) {
                    $('#cpasswordError').text('Password must be same');
                    event.preventDefault();
                }
            });

            // Function to validate email format
            function isValidEmail(email) {
                var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return emailRegex.test(email);
            }
        });
    </script>

</body>

</html>

