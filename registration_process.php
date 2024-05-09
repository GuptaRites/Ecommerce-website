<?php
include_once('database/connection.php');

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $userid = $_POST['userid'];
    $email = $_POST['email'];
    $password =$_POST['password'];

    $q ="INSERT INTO `user`( `name`, `userId`, `email`, `Password`) 
    VALUES ('$username','$userid','$email','$password')";
   

    if(mysqli_query($con,$q)){
        echo "You are succesfully registered";

        header('location:login.php');
    }
    else{
        echo "error in inserting".mysqli_error($q);
    }
}
?>