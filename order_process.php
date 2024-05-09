<?php
include_once("session.php");

include_once("database/connection.php");


if (isset($_POST['order_btn'])){
    $fname = $_POST['fname'];
    // echo $fname;
    $lname = $_POST['lname'];
    // echo $lname;
    $address = $_POST['address'];
    $town = $_POST['town'];
    $country = $_POST['country'];
    $pin = $_POST['pin'];
    // echo $pin;
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];

    $user_id = $_SESSION['user_id'];
    
// echo $user_id;
    $q = "INSERT INTO `orders_detail`(`userid`, `fname`, `lname`, `address`, `town`, `country`, `pin`, `mobile`, `email`) 
    VALUES ('$user_id','$fname','$lname','$address','$town','$country','$pin','$mobile','$email')";

    $result = mysqli_query($con,$q);

    header('location:order.php');

}
?>