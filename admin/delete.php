<?php
include_once("session.php");
include_once("database/connection.php");

$id = $_GET['delete_id'];


$q = "DELETE FROM product WHERE id = $id";

if(mysqli_query($con, $q)){
    header('Location:product.php');

} else{
    echo "error in deleting!!!";
}
?>