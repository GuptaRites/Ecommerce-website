<?php
include_once("session.php");
session_destroy();
unset($_SESSION['user_id']);
?>

<script>
    window.location.href = "../index.php";
</script>