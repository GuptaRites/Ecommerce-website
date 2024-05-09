<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <script src="js/jquery-3.7.1.js"></script>
    <style>
        * {
            margin: 0;
            font-family: Arial;
        }

        body {
            font-family: Arial;
            background-image: url(img/background.avif);
            background-size: cover;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: rgb(244, 216, 216);
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            opacity: 0.9;

        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
            border-radius: 5px;
        }

        input:hover {
            background-color: rgb(227, 239, 249);
            border: 2px solid #b2967d;
        }

        a {
            margin-left: 20%;
            text-decoration: none;
        }

        a:hover{
            color:red;
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

    <form id="changePasswod">
        <h2>Change Password</h2><br>
        <p>Fill details to Change your password.</p><br>

        <label>User Id</label><br>
        <span class="error" id="userError"></span>
        <input type="text" id="user" name="email" placeholder="Enter your User ID">

        <label>Old Password</label><br>
        <span class="error" id="passwordError"></span>
        <input type="text" id="password" name="user" placeholder="Enter your Old password">

        <input type="submit" vlue="reset password">

    </form>
    <script>
        $(document).ready(function () {
            $('#changePasswod').submit(function (event) {
                // Reset error messages
                $('.error').text('');

                // Validate userid
                var userId = $('#user').val();
                if (userId.length < 5) {
                    $('#userError').text('Enter your user ID');
                    event.preventDefault();
                }

                // Validate password
                var password = $('#password').val();
                if (password.length < 8) {
                    $('#passwordError').text('Enter you Old password');
                    event.preventDefault();
                }
            });
        });
    </script>

</body>

</html>