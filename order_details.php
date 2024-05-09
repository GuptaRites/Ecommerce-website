<?php
include_once("session.php");
if(isset($_SESSION['user_id'])){
include_once('header.php');

include_once("database/connection.php");


if(isset($_POST['qty-btn'])){
    $u_id = $_SESSION['user_id'];
    $qty = $_POST['qty'];
    $p_id = $_POST['p_id'];
    $p_price = $_POST['price'];

    $total_price = ($qty * $p_price);
    // echo $total_price;
    $q = "INSERT INTO `orders`(`customer_id`, `product_id`, `qty`, `total_price`) VALUES ('$u_id','$p_id','$qty','$total_price')";
    
    $result = mysqli_query($con,$q);
   
}
?>

<!-- Checkout Page Start -->
<div class="container-fluid py-5 ju">
        <div class="container py-5">
            <h1 class="mb-4">Billing Address</h1>
            <form action="order_process.php" method="post" class="was-validated">
                <div class="row g-5">
                    <div class="col-md-12 col-lg-6 col-xl-7">
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <div class="form-item w-100">
                                    <label class="form-label my-3">First Name<sup>*</sup></label>
                                    <input type="text" class="form-control" id="uname" name="fname" required>
                                    <div class="valid-feedback"></div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <div class="form-item w-100">
                                    <label class="form-label my-3">Last Name<sup>*</sup></label>
                                    <input type="text" class="form-control" id="uname" name="lname" required>
                                    <div class="valid-feedback"></div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-item">
                            <label class="form-label my-3">Address <sup>*</sup></label>
                            <input type="text" class="form-control" id="uname" placeholder="House Number Street Name" name="address" required>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-item">
                            <label class="form-label my-3">Town/City<sup>*</sup></label>
                            <input type="text" class="form-control" id="uname" name="town" required>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-item">
                            <label class="form-label my-3">Country<sup>*</sup></label>
                            <input type="text" class="form-control" id="uname" name="country" required>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-item">
                            <label class="form-label my-3">Pincode<sup>*</sup></label>
                            <input type="text" class="form-control" id="uname" name="pin" required>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-item">
                            <label class="form-label my-3">Mobile<sup>*</sup></label>
                            <input type="tel" class="form-control" id="uname" name="mobile" required>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-item">
                            <label class="form-label my-3">Email Address<sup>*</sup></label>
                            <input type="email" class="form-control" id="uname" name="email" required>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                    
                        <hr>
                        
                        
                    </div>
     
                        <div class="row g-4 text-center align-items-center justify-content-center pt-4">
                            <button type="submit" name="order_btn"
                                class="btn border-secondary py-3 px-4 text-uppercase w-100 text-primary">Place Order</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Checkout Page End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i
            class="fa fa-arrow-up"></i></a>
<?php
include_once("footer.php");
?>

<?php
}
else{
    header('location:login.php');
}
?>