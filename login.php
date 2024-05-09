<?php
include_once("database/connection.php");

include_once("session.php");

if(isset($_POST['lgn_btn'])){

    $uid = $_POST['id'];
    $pswd = $_POST['pswd'];

    $q ="SELECT userId,Password FROM user WHERE userId = '$uid'";
    $result = mysqli_query($con, $q);
    // $rowcount = mysqli_num_rows($q);
    $row = mysqli_fetch_array($result);
    //if($row[6]==0){
        if($uid == $row[0] && $pswd == $row[1]){
            $_SESSION['user_id'] = $row['userId'];

            header('location:index.php');
        } else{
            header('location:login.php');
            echo "<script>alert('invalid userid or password');</script>";
           
        }
    // } else{
    //     header('location:admin/index.php'); 
    // }  
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> -->
    <script src="js/jquery-3.7.1.js"></script>
    <style>
        * {
            margin: 0;
            font-family: Arial;
        }

        body {
            /* background-color:rgb(244, 216, 216); */
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
        p {
            color: black;
        }

        .error {
            color: red;
        }

        a {
            text-decoration: none;
        }

        a:hover{
            color:red;
        }

        h1,
        label,
        a,
        input,
        span {
            /* color: rgb(14, 2, 2); */
            font-weight: bold;
        }

        /* .box{
            background-color: black;
            width: 100%;
            height: 100%;
            opacity: 0.4;
        } */
    </style>

</head>

<body>

    <div class="box">
        <form id="login" action="login.php" method="POST">
            <div class="login">
                <h1>User Sign In</h1>
                <label>User ID</label>
                <span class="error" id="userError"></span>
                <input type="text" name="id" class="inp-1" id="user" placeholder="Enter Your User ID"><br>
                <label>Password</label>
                <span id="passwordError" class="error"></span>
                <input type="password" name="pswd" class="inp-1" id="password" placeholder="Enter Your Password"><br><br>

                <input type="submit" value="continue" id="submit" class="inp-1" name="lgn_btn">
                <br><br>
                <center>
                    <a href="forget.php">Forget  Password?</a><br><br>
                    <p>
                        or<br><br>
                    </p>
                    <a href="registration.php">Create New Account</a>
                </center>
            </div>
        </form>
    </div>
    <script>
        $(document).ready(function () {
            $('#login').submit(function (event) {
                // Reset error messages
                $('.error').text('');

                // Validate username
                var username = $('#user').val();
                if (username.length < 1) {
                    $('#userError').text('Please enter your User ID');
                    event.preventDefault();
                }

                // Validate password
                var password = $('#password').val();
                if (password.length < 1) {
                    $('#passwordError').text('Please enter your password');
                    event.preventDefault();
                }
            });


        });
    </script>

</body>
</html>


<?php

// if(isset($_POST['lgn_btn'])){ -->
    // $u_id=$_POST['id'];
    // $u_pswd= $_POST['pswd'];

    // $q = "SELECT * FROM user WHERE userId='$u_id' AND Password='$u_pswd'";
    // $result = mysqli_query($con,$q);
    // $count= mysqli_num_rows($result);


    //  header('location:index.php');
            
    // }

?>
