<?php

require "../config.php";

session_start();

if($_SESSION['IS_LOGIN'] == true){

$email= $_SESSION["IS_LOGIN"];
$sqlNew = "SELECT * FROM ams_users WHERE Email = '$email' AND Name = ''";
$checkdb = mysqli_query($con, $sqlNew);
$GreetName = mysqli_fetch_array($checkdb, MYSQLI_ASSOC);
$check = mysqli_num_rows($checkdb);

if($check == 1){
    header ("Location: ./moredetails.php");
}
else{
 echo $check;
  echo "Nice Myan";
  echo $_SESSION['IS_LOGIN'];
}


}
else{
  header("Location: ./auth.php");
}

 ?>
