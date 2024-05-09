<?php
include_once('header.php');

include_once("database/connection.php");

$q = "select * from product";
$result = mysqli_query($con, $q);
$count = mysqli_num_rows($result);
?>
  <div id="demo" class="carousel slide" data-ride="carousel">

<!-- Indicators -->
<ul class="carousel-indicators">
  <li data-target="#demo" data-slide-to="0" class="active"></li>
  <li data-target="#demo" data-slide-to="1"></li>
  <li data-target="#demo" data-slide-to="2"></li>
</ul>

<!-- The slideshow -->
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="img/baner-2.png" alt="banner">
  </div>
  <div class="carousel-item">
    <img src="img/baner-1.jpg" alt="banner">
  </div>
  <div class="carousel-item">
    <img src="img/baner-3.jpg" alt="banner">
  </div>
</div>

<!-- Left and right controls -->
<a class="carousel-control-prev" href="#demo" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
  <span class="carousel-control-next-icon"></span>
</a>

</div>

<!-- Shop section start  -->
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
                     <!-- <a href="#">
                      <button class="btn border border-secondary rounded-pill px-3 text-primary">
                      <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart </button></a> -->
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
</div>

<?php
include_once('footer.php');
?>