<?php

session_start();
require "./config.php";
if(isset($_SESSION['IS_LOGIN'])){
  $authToken = $_SESSION['IS_LOGIN'];
$sql = mysqli_query($con, "SELECT * FROM ams_users WHERE authToken = '$authToken'") or die($con -> error );
$countUser= mysqli_fetch_array($sql, MYSQLI_ASSOC);
$checkUserID = $countUser['id'];
$cartQuery = "SELECT * FROM ams_cart WHERE id='$checkUserID'";
$getcart = mysqli_query($con, $cartQuery);
 while($cartItems = mysqli_fetch_array($getcart, MYSQLI_ASSOC)){
echo"<div class='activity-item'>
  <div class='row no-gutters'>
    <div class='col-2 tx-right'><image src='./assets/uploads/1648631047_agrim_screenshot.png' class='img-fluid img-thumbnail'> </div>
    <div class='col-8' style='padding-left: 10px;'><strong>Local Aalu</strong></div>
    <div class='col-2'><button class='btn btn-danger btn-sm rounded-0' type='button' data-toggle='tooltip' data-placement='top' title='Delete'><i class='fa fa-trash'></i></button></div>
  </div><!-- row -->
</div><!-- activity-item -->";
} }
else{
  echo "Nujan";
}
?>
