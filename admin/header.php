<?php
include_once("session.php");
include_once("database/connection.php");
$url = $_SERVER['REQUEST_URI'];
$url = parse_url($url, PHP_URL_PATH);
$arr_url = explode("/", $url);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <script src="js/jquery.validate.js"></script>
    <script src="js/additional-methods.min.js"></script>
    <script src="js/validator.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/ajax.js"></script>
    <style>
    .left {
        width: 20vw;
        padding: 10px;
        background-color: #ece5fc;
    }

    .right {
        width: 75vw;
        padding: 10px;
        background-color: #ece5fc;
    }
    .flex{
        display: flex;
       gap: 10px 10px;
    }

    .icon{
        height:50px;
    }
    .navbar{
        justify-content: space-between;
    }
    .color{
        background-color: yellow;
    }


    </style>

</head>

<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="navbar-brand" href="#">Fruitables  Website</a>
   <a href="#"><i><img src="icon/loginIcon.avif" alt="" class="icon"></i></a> 
   <!-- <a href="logout.php" class="my-auto">
        <button class="btn btn-primary">logout</button>
    </a> -->
    </nav>
 <br>
    <div class="container-fluid flex bg-black">
        <div class="left">
            <ul class="list-group">
              <li class="list-group-item <?php if ($arr_url[3] == "index.php") {
                                                        echo "color";
                                                    } ?> ">
                 <a href="index.php">Dashboard</a>
             </li>
             <li class="list-group-item <?php if ($arr_url[3] == "product.php") {
                                                        echo "color";
                                                    } ?> ">
                <a href="product.php">All product</a>
                 </li>
             <li class="list-group-item <?php if ($arr_url[3] == "order.php") {
                                                        echo "color";
                                                    } ?> ">
                <a href="order.php">order</a>
             </li>
             <li class="list-group-item <?php if ($arr_url[3] == "user.php") {
                                                        echo "color";
                                                    } ?> ">
                <a href="user.php">User</a>
             </li>
             <li class="list-group-item <?php if ($arr_url[3] == "logout.php") {
                                                        echo "color";
                                                    } ?> ">
                <a href="logout.php">Logout</a>
             </li>
            </ul>
        </div>
        <div class="right">
