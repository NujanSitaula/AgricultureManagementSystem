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
          <div class="dropdown dropdown-a">
            <a href="" class="header-notification" data-toggle="dropdown">
              <i class="icon ion-ios-bolt-outline"></i>
            </a>
            <div class="dropdown-menu">
              <div class="dropdown-menu-header">
                <h6 class="dropdown-menu-title">Activity Logs</h6>
                <div>
                  <a href="">Filter List</a>
                  <a href="">Settings</a>
                </div>
              </div><!-- dropdown-menu-header -->
              <div class="dropdown-activity-list">
                <div class="activity-label">Today, December 13, 2017</div>
                <div class="activity-item">
                  <div class="row no-gutters">
                    <div class="col-2 tx-right">10:15am</div>
                    <div class="col-2 tx-center"><span class="square-10 bg-success"></span></div>
                    <div class="col-8">Purchased christmas sale cloud storage</div>
                  </div><!-- row -->
                </div><!-- activity-item -->
                <div class="activity-item">
                  <div class="row no-gutters">
                    <div class="col-2 tx-right">3:21am</div>
                    <div class="col-2 tx-center"><span class="square-10 bg-success"></span></div>
                    <div class="col-8">1 item sold <strong>Christmas bundle</strong></div>
                  </div><!-- row -->
                </div><!-- activity-item -->
                <div class="activity-label">Yesterday, December 12, 2017</div>
                <div class="activity-item">
                  <div class="row no-gutters">
                    <div class="col-2 tx-right">6:57am</div>
                    <div class="col-2 tx-center"><span class="square-10 bg-success"></span></div>
                    <div class="col-8">Earn new badge <strong>Elite Author</strong></div>
                  </div><!-- row -->
                </div><!-- activity-item -->
              </div><!-- dropdown-activity-list -->
              <div class="dropdown-list-footer">
                <a href="page-activity.html"><i class="fa fa-angle-down"></i> Show All Activities</a>
              </div>
            </div><!-- dropdown-menu-right -->
          </div><!-- dropdown -->
          <div class="dropdown dropdown-c">
            <a href="#" class="logged-user" data-toggle="dropdown">
              <img src="../assets/uploads/<?php echo $countUser['dprofile']; ?>" alt="Profile Photo Nujan">
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
          <li class="nav-item with-sub">
            <a class="nav-link" href="#" data-toggle="dropdown">
              <i class="icon ion-ios-gear-outline"></i>
              <span>Forms</span>
            </a>
            <div class="sub-item">
              <ul>
                <li><a href="form-elements.html">Form Elements</a></li>
                <li><a href="form-layouts.html">Form Layouts</a></li>
                <li><a href="form-validation.html">Form Validation</a></li>
                <li><a href="form-wizards.html">Form Wizards</a></li>
                <li><a href="form-editor.html">WYSIWYG Editor</a></li>
                <li><a href="form-select2.html">Select2</a></li>
                <li><a href="form-rangeslider.html">Range Slider</a></li>
                <li><a href="form-datepicker.html">Datepicker</a></li>
              </ul>
            </div><!-- dropdown-menu -->
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
              <span>Widgets</span>
            </a>
          </li>
        </ul>
      </div><!-- container -->
    </div><!-- slim-navbar -->
