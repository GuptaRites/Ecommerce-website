<?php
include_once("session.php");
if(isset($_SESSION['user_id'])){

include_once("session.php");
include_once("header.php");

$q = "SELECT * from `orders` ";
$result = mysqli_query($con, $q);

?>
<table class="table table-borderless">
    <h2>Order</h2>
    <thead>
        <th>Customer Id</th>
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Total Price</th>
        <th>Order Time</th>
        <th>Status</th>
        <th>Action</th>
    </thead>
    <tbody>
        <?php
           $i=1;
           while ($row = mysqli_fetch_array($result)){
           ?>
        <tr>
            <td>
            <?php 
                // $q = "SELECT name FROM `user` WHERE userId = $row[1];"; 
                // $run = mysqli_query($con, $q);
                // $r = mysqli_fetch_array($run);
                // echo $r[0]; 
                // echo $run; 
                echo $row[1];?>
            </td>
            <td>
            <?php 
                $q = "SELECT p_name FROM `product` WHERE id= $row[2];"; 
                $run = mysqli_query($con, $q);
                $r = mysqli_fetch_array($run);
                echo $r[0]; ?>
            </td>
            <td><?php echo $row[3]; ?> kg</td>
            <td><?php echo $row[4]; ?> ₹</td>
            <td><?php echo $row[6]; ?></td>
            <td><?php echo $row[5]; ?></td>
            <td>
            <form action="order_update.php" method="POST">
                <select name="order_status" class="form-control">
                    <option value="Order Accepted">Order Accepted</option>
                    <option value="Order Canceled">Order Canceled</option>
                    <!-- <option value="Order Returned">Order Returned</option> -->
                    <option value="Order Deliverd">Order Deliverd</option>
                </select>
                <input type="hidden" name="id" value="<?php echo $row[0];?>">
                <input type="submit" name="order_update" class="btn btn-primary my-2" value="Update">
            </form>
            </td>
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