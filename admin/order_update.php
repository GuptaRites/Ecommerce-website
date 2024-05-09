<?php
    include_once("database/connection.php");

    if(isset($_POST['order_update'])){
        $orderStatus = $_POST['order_status'];
        $id = $_POST['id'];

        $sql = $con->query("UPDATE `orders` SET `status`='$orderStatus' WHERE id = $id");
        
        header('Location:order.php');
    }
?>