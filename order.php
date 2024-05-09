<?php
include_once("session.php");
if(isset($_SESSION['user_id'])){
include_once('header.php');
include_once("database/connection.php");

$u_id = $_SESSION['user_id'];

$q = "SELECT * from `orders` where customer_id = '$u_id'";
$result = mysqli_query($con, $q);
// $q2 = "";

?>
<br>
<table class="table table-borderless">
      <h2>Your orders</h2>
    <thead>
      <tr>
        <th>Images</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Total Price</th>
        <th>Status</th>
        <th>Order Date</th>
      </tr>
    </thead>
    <tbody>
       
            <?php
           
            $i=1;
            while ($row = mysqli_fetch_array($result)){
            ?>
        <tr>
            <td>
                <?php 
                $q = "SELECT p_img FROM `product` WHERE id= $row[2];";
                $run = mysqli_query($con, $q);
                $r = mysqli_fetch_array($run);
                 ?>
                 <img src="admin/images/<?php echo $r[0]; ?>" alt="product image" class="rounded-circle" height="80px" width="120px">
            </td>
            <td>
                <?php 
                $q = "SELECT p_name FROM `product` WHERE id= $row[2];"; 
                $run = mysqli_query($con, $q);
                $r = mysqli_fetch_array($run);
                echo $r[0]; ?>
            </td>
            <td>
                <?php 
                $q = "SELECT p_prize FROM `product` WHERE id= $row[2];";
                $run = mysqli_query($con, $q);
                $r = mysqli_fetch_array($run);
                echo $r[0]; ?> ₹/kg
            </td>
            <td><?php echo $row[3]; ?> kg</td>
            <td><?php echo $row[4]; ?> ₹</td>
            <td><?php echo $row[5]; ?></td>
            <td><?php echo $row[6]; ?></td>

        </tr>
        <?php
        $i++;
        } 
        ?>
    </tbody>

</table>
<?php
include_once("footer.php");
?>

<?php
}
else{
    header('location:login.php');
}
?>