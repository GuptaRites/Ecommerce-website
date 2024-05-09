<?php
include_once("session.php");
if(isset($_SESSION['user_id'])){
include_once('header.php');



include_once("database/connection.php");

$q = "select * from product";
$result = mysqli_query($con, $q);
$count = mysqli_num_rows($result);
?>
<br>
<!-- shop section -->
<div class="container">
    <div class="row container_box">
        <?php
        $i=1;
     while ($row = mysqli_fetch_array($result)){
        ?>
        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-12 col-xs-12 item_box">
            <div class="card">
                <img class="card-img-top" src="admin/images/<?php echo $row[4]; ?>" alt="Card image" class="img-fluid" height="200px">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $row[1]; ?></h4>
                    <p class="card-text"><?php echo $row[3]; ?></p>
                    <div class="d-flex justify-content-between flex-lg-wrap">
                     <p class="text-dark fs-5 fw-bold mb-0">₹ <?php echo $row[2]; ?> / kg</p>
                      <a href="order_qty.php?product_id=<?php echo $row[0]?>" class="btn border border-secondary rounded-pill px-3 text-primary">
                      <i class="fa fa-shopping-bag me-2 text-primary"></i> Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $i++;
        }
        ?>
    </div>
</div>


<?php
include_once('footer.php');
?>

<?php
}
else{
    header('location:login.php');
}
?>