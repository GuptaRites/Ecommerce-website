<?php
include_once("session.php");
if(isset($_SESSION['user_id'])){
include_once('header.php');
include_once("database/connection.php");

$u_id = $_SESSION['user_id'];

$q = "SELECT * from `user` where userId = '$u_id'";
$result = mysqli_query($con, $q);
$row = $result->fetch_assoc();
$count = mysqli_num_rows($result);

?>
<br>


<div class="d-flex justify-content-center">
<div class="card" style="width:200px">
  <img class="card-img-top" src="icon/profile1.jpeg" alt="profile"  height="200px">
  <div class="card-body">
    <h4 class="card-title">Hello,</h4>
    <p class="card-text"><?php echo $row['name']; ?></p>
  </div>
</div>
<div class="card" >
    <div class="card-body">
        <h3>User Id</h3>
        <h5><?php echo $row['userId']; ?></h5>
        <br>
        <h3>Email</h3>
        <h5><?php echo $row['email']; ?></h5>
    </div>
</div>
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