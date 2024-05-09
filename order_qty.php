<?php

include_once("session.php");
include_once("database/connection.php");
include_once('header.php');
$id = $_GET['product_id'];
$q = "select * from product where id=$id";
$result = mysqli_query($con, $q);
// $count = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

?>
<table class="table table-borderless">
  <h4>Billing details</h4>
    <thead>
      <tr>
        <th>Images</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Quantity</th>

      </tr>
    </thead>
    <tbody>
        
       <tr>
        <td><img src="admin/images/<?php echo $row[4]; ?>" class="rounded-circle" alt="Cinque Terre"  height="150px" width="150px"> </td>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?> ₹/kg</td>

        <td>
        <form action="order_details.php" method="post">   
        <input type="number" min="0" name="qty">kg
        <br><br>
        <input type="hidden" value="<?php echo $id ?>" name="p_id">
        <input type="hidden" value="<?php echo $row[2]?>" name="price">
        <input type="submit" class="btn btn-primary" name="qty-btn" value="Next">
</form>    
    </td>
      </tr>

</tbody>
</table>

<?php
include_once("footer.php");
?>
