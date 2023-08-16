<?php
include('dbcon.php');
$get_id = $_GET['id'];
$conn->query("delete from user where user_id = '$get_id'");
header('location:admin_user.php');
?>