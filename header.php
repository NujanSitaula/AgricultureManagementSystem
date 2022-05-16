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

}
else{
  header("Location: ./auth/auth.php");
}

if(isset($_POST['save'])){

$userid = $_POST['userid'];
$cropsid = $_POST['cropsid'];

$insertcart = mysqli_query($con, "INSERT INTO `ams_cart`(`cropID`, `id`) VALUES ('$cropsid','$userid')") or die($con -> error);

}
if(isset($_GET['delid'])){
  $cartID = $_GET['delid'];
  $cartQuery = mysqli_query($con, "DELETE FROM `ams_cart` WHERE cartID = '$cartID'");
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>
    <script
  src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="Team Agrim">

    <title>Welcome <?php echo $countUser['Name']; ?> - Agrim</title>

    <!-- vendor css -->
    <link href="./lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="./lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="./lib/datatables/css/jquery.dataTables.css" rel="stylesheet">
    <link href="./lib/rickshaw/css/rickshaw.min.css" rel="stylesheet">

    <!-- Slim CSS -->
    <link rel="stylesheet" href="./assets/css/slim.css">

  </head>
  <body class="dashboard-5">
    <div class="slim-header">
      <div class="container">
        <div class="slim-header-left">
          <h2 class="slim-logo"><a href="index.php">Agrim<span>.</span></a></h2>
        </div><!-- slim-header-left -->
        <div class="slim-header-right">
          <div class="dropdown dropdown-a">
            <a href="" class="header-notification cart"  data-toggle="dropdown">
              <i class="icon ion-ios-cart-outline"></i> <!-- <span class="badge badge-primary" style="font-size: 10px; margin-left: 5px;">0</span> !-->
            </a>
            <div class="dropdown-menu">
              <div class="dropdown-menu-header">
                <h6 class="dropdown-menu-title">Quick Cart</h6>
              </div><!-- dropdown-menu-header -->
              <div class="dropdown-activity-list">
                <?php
                $checkUserID = $countUser['id'];
                $cartQuery = "SELECT ams_cart.id, ams_cart.cartID, ams_cart.cropID, ams_crops.cropsName, ams_crops.cropsPhoto, ams_crops.farmersRate FROM ams_cart INNER JOIN ams_crops ON ams_cart.cropID = ams_crops.cropsID";
                $getcartItems = mysqli_query($con, $cartQuery);
                 while($cartItems = mysqli_fetch_array($getcartItems, MYSQLI_ASSOC)){
                   ?>
                <div class="activity-item">
                  <div class="row no-gutters">
                    <div class="col-2 tx-right"><image src='./assets/uploads/<?php echo $cartItems['cropsPhoto'];  ?>' class='img-fluid img-thumbnail'> </div>
                    <div class="col-8" style="padding-left: 10px;"><strong><?php echo $cartItems['cropsName'];  ?></strong></div>
                    <div class="col-2"><a href="?delid=<?php echo  $cartItems['cartID'];  ?>"><button class='btn btn-danger btn-sm rounded-0' type='button' data-toggle='tooltip' data-placement='top' title='Delete'><i class='fa fa-trash'></i></button></div>
                  </div><!-- row -->
                </div><!-- activity-item -->
              <?php  } ?>
              </div><!-- dropdown-activity-list -->
                <div class="activity-item">
                  <div class="row no-gutters">
                    <h5 class="m-2 text-primary pull-left">Total Amount : </h5><h5 class="m-2 text-primary" style="padding-left: 120px;">Rs. <?php
                    $allsum = mysqli_query($con, "SELECT SUM(ams_crops.farmersRate) FROM ams_cart INNER JOIN ams_crops ON ams_cart.cropID = ams_crops.cropsID");
                    $sum = mysqli_fetch_array($allsum, MYSQLI_ASSOC);
                    echo "<strong>" . $sum['SUM(ams_crops.farmersRate)'] . "</strong>";

                     ?></h5>
                  </div>
                  </div>
              <div class="dropdown-list-footer btn-primary">
                <a href="checkout.php" style="color: #fff;">CHECKOUT</a>
              </div>
            </div><!-- dropdown-menu-right -->
          </div><!-- dropdown -->
          <div class="dropdown dropdown-c">
            <a href="#" class="logged-user" data-toggle="dropdown">
              <img src="./assets/uploads/<?php echo $countUser['dprofile']; ?>" alt="Profile Photo Nujan">
              <span><?php echo $countUser['Name'] . " " . $countUser['Surname']; ?></span>
              <i class="fa fa-angle-down"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <nav class="nav">
                <a href="./profile.php" class="nav-link"><i class="icon ion-person"></i> View Profile</a>
                <a href="./settings.php" class="nav-link"><i class="icon ion-ios-gear"></i> Account Settings</a>
                <a href="../auth/logout.php" class="nav-link"><i class="icon ion-forward"></i> Sign Out</a>
              </nav>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </div><!-- header-right -->
      </div><!-- container -->
    </div>
    <div class="slim-navbar">
      <div class="container">
        <ul class="nav">
          <li class="nav-item <?php if($isActive == 1){echo "active";}  ?>">
            <a class="nav-link" href="./index.php">
              <i class="icon ion-ios-home-outline"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li class="nav-item <?php if($isActive == 3){echo "active";}  ?>">
            <a class="nav-link" href="./transactions.php">
              <i class="icon ion-document-text"></i>
              <span>Transactions</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="inventory.php">
              <i class="icon ion-ios-chatboxes-outline"></i>
              <span>Inventory</span>
              <span class="square-8"></span>
            </a>
          </li>
          <?php if($countUser['Environment'] == 'user'){

          echo"<li class='nav-item'>
            <a class='nav-link' href='./farmerapproval.php?uid=". $countUser['id'] ."'>
              <i class='icon ion-ios-analytics-outline'></i>
              <span>Apply For Farmer</span>
            </a>
          </li>";
        }
          elseif($countUser['Environment'] == 'vendor'){

          echo"<li class='nav-item'>
            <a class='nav-link' href='./vendor/'>
              <i class='icon ion-ios-analytics-outline'></i>
              <span>Goto Farmer Portal</span>
            </a>
          </li>";} ?>
        </ul>
      </div><!-- container -->
    </div><!-- slim-navbar -->
