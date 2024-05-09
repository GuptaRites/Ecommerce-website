<?php
include_once("session.php");
if(isset($_SESSION['user_id'])){
include_once("header.php");
include_once("database/connection.php");
?>

<div class="container-fluid">
    <div class="row">
        <div class=col-lg-3></div>
        <div class=col-lg-6>
            <h2>Add New Product</h2>
            <form action="add_product.php" method="post" id="form1" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="">select image</label>
                    <input type="file" class="form-control" id="slider1" name="pimg">
                </div>
                <div class="form-group">
                    <label for="title">Title (Product Name)</label>
                    <input type="text" class="form-control" name="name" id="title" placeholder="Enter product name">
                </div>
                <div class="form-group">
                    <label for="prize">Prize</label>
                    <input type="int" class="form-control" name="prize" id="prize" placeholder="Enter product prize">
                </div>
                <div class="form-group">
                    <label for="desc">Description</label>
                    <input type="text" class="form-control" name="desc" id="desc" placeholder="Enter product Description">
                </div>

                <input type="submit" class="btn" value="Submit" name="btn" />


            </form>
        </div>
    </div>
</div>



<?php
include_once("footer.php");

if (isset($_POST['btn'])) {

    $pname = $_POST['name'];
    $prize = $_POST['prize'];
    $desc = $_POST['desc'];

    if ($_FILES['pimg']['name'] == "") {
        echo "select a file to upload";
    } else {
        $pimg_name = uniqid() . $_FILES['pimg']['name'];

        $q = "INSERT INTO `product`(`p_name`, `p_prize`, `p_desc`, `p_img`) VALUES ('$pname','$prize','$desc','$pimg_name')";
        if (mysqli_query($con, $q)) {
            // echo "Add product successfully.";
            if (!is_dir("images")) {
                mkdir("images");
            }
            move_uploaded_file($_FILES['pimg']['tmp_name'], "images/" . $pimg_name);
            header('Location:product.php');
        } else {
            echo "error in inserting product!!!";
        }
    }

}
?>
<?php
}
else{
    header('location:login.php');
}
?>