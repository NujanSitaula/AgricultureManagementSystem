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

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Agrim - Complete Solution For Farmers">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/slim/img/slim-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/slim">
    <meta property="og:title" content="Agrim - Complete Solution For Farmers">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/slim/img/slim-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/slim/img/slim-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="Team Agrim">

    <title>Slim Responsive Bootstrap 4 Admin Template</title>

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
                $cartQuery = "SELECT ams_cart.id, ams_cart.cropID, ams_crops.cropsName, ams_crops.cropsPhoto, ams_crops.farmersRate FROM ams_cart INNER JOIN ams_crops ON ams_cart.cropID = ams_crops.cropsID";
                $getcartItems = mysqli_query($con, $cartQuery);
                 while($cartItems = mysqli_fetch_array($getcartItems, MYSQLI_ASSOC)){
                   ?>
                <div class="activity-item">
                  <div class="row no-gutters">
                    <div class="col-2 tx-right"><image src='./assets/uploads/<?php echo $cartItems['cropsPhoto'];  ?>' class='img-fluid img-thumbnail'> </div>
                    <div class="col-8" style="padding-left: 10px;"><strong><?php echo $cartItems['cropsName'];  ?></strong></div>
                    <div class="col-2"><button class='btn btn-danger btn-sm rounded-0' type='button' data-toggle='tooltip' data-placement='top' title='Delete'><i class='fa fa-trash'></i></button></div>
                  </div><!-- row -->
                </div><!-- activity-item -->
              <?php  } ?>
              </div><!-- dropdown-activity-list -->
                <div class="activity-item">
                  <div class="row no-gutters">
                    <h5>Total Amount: </h5><?php
                    $allsum = mysqli_query($con, "SELECT SUM(ams_crops.farmersRate) FROM ams_cart INNER JOIN ams_crops ON ams_cart.cropID = ams_crops.cropsID");
                    $sum = mysqli_fetch_array($allsum, MYSQLI_ASSOC);
                    echo "<strong>" . $sum['SUM(ams_crops.farmersRate)'] . "</strong>";

                     ?>
                  </div>
                  </div>
              <div class="dropdown-list-footer btn-primary">
                <a href="page-activity.html" style="color: #fff;">CHECKOUT</a>
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
          <li class="nav-item with-sub <?php if($isActive == 2){echo "active";}  ?>">
            <a class="nav-link" href="#">
              <i class="icon ion-ios-nutrition-outline"></i>
              <span>Crops</span>
            </a>
            <div class="sub-item">
              <ul>
                <li><a href="./viewcrops.php">List Crops</a></li>
                <li><a href="./addcrops.php">Add Crops</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </li>
          <li class="nav-item <?php if($isActive == 3){echo "active";}  ?>">
            <a class="nav-link" href="./invoice.php">
              <i class="icon ion-document-text"></i>
              <span>Invoice</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="page-messages.html">
              <i class="icon ion-ios-chatboxes-outline"></i>
              <span>Messages</span>
              <span class="square-8"></span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="widgets.html">
              <i class="icon ion-ios-analytics-outline"></i>
              <span>Apply For Farmer</span>
            </a>
          </li>
        </ul>
      </div><!-- container -->
    </div><!-- slim-navbar -->
