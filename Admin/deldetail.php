<?php
include 'connection.php';
$id = $_GET['id'];
$deletequery = "delete from cropdetails where id=$id";
$query = mysqli_query($con,$deletequery);
header('location:displayinadmin.php');
?>