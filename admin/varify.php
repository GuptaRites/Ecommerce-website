<?php
session_start();
include 'database/connection.php';

// Check if the OTP verification form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["verify_otp"])) {
    // Validate OTP
    $otp = $_POST["otp"];
    if ($_SESSION['otp'] == $otp) {
        // OTP is correct, redirect to reset password form
        header("Location: reset_password.php");
        exit;
    } else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify OTP</title>
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
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="otp">Enter OTP:</label><br>
        <?php
                // Incorrect OTP
                echo "Incorrect OTP. Please try again.";
            }
        }
        ?>
        <input type="text" id="otp" name="otp" required><br><br>
        <input type="submit" name="verify_otp" value="Verify OTP">
    </form>
</body>
</html>