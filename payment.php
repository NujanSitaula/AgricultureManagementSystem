<?php
require "./config.php";
$tnxID = $_POST['tranx_id'];
$amount = $_POST['amt'] / 100;
$productName = $_POST['productname'];
$mobile = $_POST['mobile'];
$userID = "1";
$status = "success";
$invoiceID ="1053";

$query = mysqli_query($con, "INSERT INTO `ams_transaction`(`tranxID`, `invoiceID`, `amount`, `status`, `mobile`, `id`, `productID`) VALUES ('$tnxID','$invoiceID','$amount','$status','$mobile', '$userID', '$productName')");



 ?>
