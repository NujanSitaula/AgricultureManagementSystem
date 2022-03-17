<?php
session_start();
require "../config.php";
if(isset($_SESSION['IS_LOGIN'])){
  $authToken = $_SESSION['IS_LOGIN'];
$sql = mysqli_query($con, "SELECT * FROM ams_users WHERE authToken = '$authToken'");
$GreetName = mysqli_fetch_array($sql, MYSQLI_ASSOC);
$count=mysqli_num_rows($sql);
if($count == 1){
  echo "Found Auth";

}
else{
  header("Location: logout.php");
}
echo $authToken;

echo $GreetName['Name'];
 ?>


<?php
}
else{
  header("Location: index.php");
}

 ?>
