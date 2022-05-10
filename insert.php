<?php
require "./config.php";

$userid = $_POST['userid'];
$cropsid = $_POST['cropsid'];

$query = mysqli_query($con, "INSERT INTO `ams_cart`(`cropID`, `id`) VALUES ('$cropsid','$userid')");

echo "Crops Added To Cart Successfully.";

 ?>
