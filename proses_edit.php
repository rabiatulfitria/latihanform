<?php
include_once("config.php");

$id = $_GET['id'];

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$result = mysqli_query($conn, "UPDATE `customer` SET first_name='$first_name',last_name='$last_name',email='$email',phone='$phone', address='$address' WHERE id='$id';");

error_reporting(E_ALL);
ini_set('display_errors', 1);

header("Location:indeks.php");
?>