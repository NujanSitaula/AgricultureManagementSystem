<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "ams";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$con) {
 header("Location: ./Install/");
}
else{

session_start();

if(isset($_SESSION['IS_LOGIN'])){
  $authToken = $_SESSION['IS_LOGIN'];
$sql = mysqli_query($con, "SELECT * FROM ams_users WHERE authToken = '$authToken'");
$countUser= mysqli_fetch_array($sql, MYSQLI_ASSOC);
$count=mysqli_num_rows($sql);
if($countUser['Name'] == '' || $countUser['dateBirth'] == ''){
  header("Location: ./auth/moredetails.php");
}
elseif($countUser['Country'] == '' || $countUser['localAddress'] == ''){
  header("Location: ./auth/next.php");
}
elseif($countUser['Environment'] == 'admin'){
  header("Location: ./admin/");
}
elseif($countUser['Environment'] == 'vendor'){
  header("Location: ./vendor/");
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
}

?>
