<?php
include_once("session.php");
if(isset($_SESSION['user_id'])){
include_once("session.php");
include_once("header.php");

$q = "select * from product";
$result = mysqli_query($con, $q);
$count = mysqli_num_rows($result);
?>

<div class="container">
    <a href="add_product.php"><button type="button" class="btn btn-success" style="position: absolute;
       top: 100px; right: 45px;">Add product</button>
    </a>


   <!-- <div style="height:50px;"></div> -->
    <table class="table table-borderless">
      <h2>Products</h2>
    <thead>
      <tr>
        <th>Images</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
    <?php
        $i=1;
     while ($row = mysqli_fetch_array($result)){
        ?>
      <tr>
        <td><img src="images/<?php echo $row[4]; ?>" class="rounded-circle" alt="Cinque Terre"  height="80px" width="120px"> </td>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?> ₹/kg</td>
        <td><a href="delete.php?delete_id=<?php echo $row[0]?>">X</a></td>
      </tr>
      <?php
        $i++;
        }
        ?>
    </tbody>
  </table>
</div>


<?php
include_once("footer.php");
?>
<?php
}
else{
    header('location:login.php');
}
?>