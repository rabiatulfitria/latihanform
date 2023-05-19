<?php 
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];

include_once ("config.php");
$result = mysqli_query($conn, "INSERT INTO `customer`(`first_name`,`last_name`,`phone`,`email`,`address`) VALUES ('$first_name','$last_name','$phone','$email','$address')");
header("Location: indeks.php");
?>