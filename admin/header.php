<?php

require "../config.php";

session_start();


if(isset($_SESSION['IS_LOGIN'])){
  $authToken = $_SESSION['IS_LOGIN'];
$sql = mysqli_query($con, "SELECT * FROM ams_users WHERE authToken = '$authToken'");
$countUser= mysqli_fetch_array($sql, MYSQLI_ASSOC);
$count=mysqli_num_rows($sql);
if(empty($countUser['Name'])){
  header("Location: ../auth/moredetails.php");
}
if($countUser['Environment'] == 'user'){
  header("Location: ../dashboard.php");
}

}
else{
  header("Location: ../auth/auth.php");
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="">
    <meta name="author" content="Team Agrim">

    <title>Agrim - Complete Solution For Farmers</title>

    <!-- vendor css -->
    <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="../lib/datatables/css/jquery.dataTables.css" rel="stylesheet">
    <link href="../lib/rickshaw/css/rickshaw.min.css" rel="stylesheet">

    <!-- Slim CSS -->
    <link rel="stylesheet" href="../assets/css/slim.css">

  </head>
  <body class="dashboard-5">
    <div class="slim-header">
      <div class="container">
        <div class="slim-header-left">
          <h2 class="slim-logo"><a href="index.php">Agrim<span>.</span></a></h2>
        </div><!-- slim-header-left -->
        <div class="slim-header-right">
          <div class="dropdown dropdown-c">
            <a href="#" class="logged-user" data-toggle="dropdown">
              <img src="../assets/uploads/<?php echo $countUser['dprofile']; ?>" alt="Profile Photo Nujan">
              <span><?php echo $countUser['Name'] . " " . $countUser['Surname']; ?></span>
              <i class="fa fa-angle-down"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <nav class="nav">
                <a href="./profile.php" class="nav-link"><i class="icon ion-person"></i> View Profile</a>
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
            <a class="nav-link" href="./transaction.php">
              <i class="icon ion-ios-gear-outline"></i>
              <span>Transaction</span>
            </a>
          </li>
          <li class="nav-item with-sub <?php if($isActive == 5){echo "active";}  ?>">
            <a class="nav-link" href="#">
              <i class="icon ion-ios-contact-outline"></i>
              <span>Users</span>
            </a>
            <div class="sub-item">
              <ul>
                <li><a href="./listuser.php">List Users</a></li>
                <li><a href="./adduser.php">Add User</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </li>
          <li class="nav-item <?php if($isActive == 6){echo "active";}  ?>">
            <a class="nav-link" href="approval.php">
              <i class="icon ion-ios-analytics-outline"></i>
              <span>Approval Request</span>
            </a>
          </li>
        </ul>
      </div><!-- container -->
    </div><!-- slim-navbar -->
