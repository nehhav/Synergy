<?php
include('dbcon.php');
include('../session.php');

$birth = $_POST['birth'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$middlename = $_POST['middlename'];
$sex = $_POST['sex'];
$email = $_POST['email'];
$address = $_POST['address'];
$contact_no = $_POST['contact_no'];

$conn->query("update members set firstname = '$firstname', lastname = '$lastname' , middlename = '$middlename' , sex = '$sex' , email = '$email', date_of_birth='$birth', address = '$address' , contact_no = '$contact_no' where member_id = '$session_id'");
?>

<script>
alert('Personal Info Successfully Updated');
window.location = 'profile.php';
</script>