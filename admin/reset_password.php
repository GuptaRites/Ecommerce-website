<?php
session_start();

include 'database/connection.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fruits";

// Check if the password reset form is submitted
if (isset($_POST["reset_password"])) {
    // Validate and update password
    $password = $_POST["password"];
    $email = $_SESSION['email'];

        $sql = "UPDATE admin SET Password = '$password'  WHERE Email = '$email'";
        
        if ($con->query($sql) === TRUE) {
            // Password updated successfully, redirect to login page
            header("Location: login.php");
            exit;
        } else {
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
</head>
    <style>
        body{
            background-image: url(img/background.avif);
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
            height: auto;
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
        
    </style>
<body>
    <h2>Reset Password</h2>
    <?php
              echo "Error updating password: " . $con->error;
            }
        } else {
            // Passwords do not match
            // echo "Passwords do not match. Please try again.";
        }
    ?>
    <form action=" " method="post">
        <label for="password">New Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <label for="confirm_password">Confirm New Password:</label><br>
        <input type="password" id="confirm_password" name="confirm_password" required><br><br>
        <input type="submit" name="reset_password" value="Reset Password">
    </form>
</body>
</html>
