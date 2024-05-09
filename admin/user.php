<?php
include_once("session.php");
if(isset($_SESSION['user_id'])){
include_once("session.php");
include_once("header.php");

$q = "select * from user";
$result = mysqli_query($con, $q);
$count = mysqli_num_rows($result);
?>

<table class="table table-borderless">
    <h2>User</h2>
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>User Id</th>
        <th>Email</th>
        <th>Password</th>
        <th>status</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        <?php
            $i=1;
             while ($row = mysqli_fetch_array($result)){
                ?>
              <tr>
                <td><?php echo $row[0]; ?> </td>
                <td><?php echo $row[1]; ?></td>
                <td><?php echo $row[2]; ?></td>
                <td><?php echo $row[3]; ?></td>
                <td><?php echo $row[4]; ?></td>
                <td><?php echo $row[5]; ?></td>
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