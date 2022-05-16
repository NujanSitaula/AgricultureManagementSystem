<?php

require "./config.php";

session_start();

if(isset($_SESSION['IS_LOGIN'])){
  $authToken = $_SESSION['IS_LOGIN'];
$sql = mysqli_query($con, "SELECT * FROM ams_users WHERE authToken = '$authToken'");
$countUser= mysqli_fetch_array($sql, MYSQLI_ASSOC);
$count=mysqli_num_rows($sql);
if(empty($countUser['Name'])){
  header("Location: ./auth/moredetails.php");
}
elseif(empty($countUser['localAddress'])){
  header("Location: ./auth/next.php");
}
elseif($countUser['Environment'] == 'admin'){
  header("Location: ./admin/");
}
elseif($countUser['Environment'] == 'vendor'){
  header("Location: ./dashboard.php");
}
elseif($countUser['Environment'] == 'user'){
  header("Location: ./dashboard.php");
}
else{
  die("Unextected Error Occured!");
}
}
else{
  header("Location: ./auth/auth.php");
}


?>
