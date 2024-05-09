<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//include 'databaseconnection.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fruits";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["forget_password"])) {
    // Validate email
    $email = $_POST["email"];
    $_SESSION['email'] = $email;

    // Check if email exists in the database
    $sql = "SELECT * FROM user WHERE email = '$email'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        // Generate a random OTP (6 digits)
        $otp = mt_rand(100000, 999999);

        // Store the OTP in the session for verification
        $_SESSION['otp'] = $otp;

        // Send the OTP to the user's email using PHPMailer
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     // SMTP server
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'rgupta717@rku.ac.in';                     // SMTP username
            $mail->Password   = 'uykj disv ktoe gdks';                         // SMTP password
            $mail->SMTPSecure = 'ssl';      // Enable TLS encryption
            $mail->Port       = 465 ;   
            //Recipients
            $mail->setFrom('rgupta717@rku.ac.in', 'shop With Me');
            $mail->addAddress($email);

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'OTP for Reset Password';
            $mail->Body    = "Your OTP for password reset is : $otp";

            $mail->send();

            // Redirect to the OTP verification page
            header("Location: varify.php");
            exit;
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <style>
        body{
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

   </head>

<body>
    <div >
        <div>
            <form method="post" action="" class="forget-password-form">
                <h2>Forget Password</h2>
                <?php
                        echo "<p style='color=red;'>Email not found. Please enter a valid email address.</p>";
                    }
                }
                ?>
                <label for="email">Enter Your Email</label><br>
                <input type="email" name="email" placeholder="Enter your email"><br><br>
                <button type="submit" name="forget_password">Forget Password</button>
            </form>
        </div>
    </div>
</body>
</html>
