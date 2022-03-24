<?php

require "../config.php";

session_start();

if(isset($_SESSION['IS_LOGIN'])){
  $authToken = $_SESSION['IS_LOGIN'];
$sql = mysqli_query($con, "SELECT * FROM ams_users WHERE authToken = '$authToken'");
$countUser= mysqli_fetch_array($sql, MYSQLI_ASSOC);
$count=mysqli_num_rows($sql);
if($countUser['Name'] == '' || $countUser['dateBirth'] == ''){
  header("Location: ../auth/moredetails.php");
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
    <link href="../lib/rickshaw/css/rickshaw.min.css" rel="stylesheet">

    <!-- Slim CSS -->
    <link rel="stylesheet" href="../assets/css/slim.css">

  </head>
  <body class="dashboard-5">
    <div class="slim-header">
      <div class="container">
        <div class="slim-header-left">
          <h2 class="slim-logo"><a href="index.html">Agrim<span>.</span></a></h2>
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
                <a href="page-profile.html" class="nav-link"><i class="icon ion-person"></i> View Profile</a>
                <a href="page-edit-profile.html" class="nav-link"><i class="icon ion-compose"></i> Edit Profile</a>
                <a href="page-activity.html" class="nav-link"><i class="icon ion-ios-bolt"></i> Activity Log</a>
                <a href="page-settings.html" class="nav-link"><i class="icon ion-ios-gear"></i> Account Settings</a>
                <a href="page-signin.html" class="nav-link"><i class="icon ion-forward"></i> Sign Out</a>
              </nav>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </div><!-- header-right -->
      </div><!-- container -->
    </div>
    <div class="slim-navbar">
      <div class="container">
        <ul class="nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">
              <i class="icon ion-ios-home-outline"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li class="nav-item with-sub">
            <a class="nav-link" href="#">
              <i class="icon ion-ios-nutrition-outline"></i>
              <span>Crops</span>
            </a>
            <div class="sub-item">
              <ul>
                <li><a href="form-elements.html">List Crops</a></li>
                <li><a href="form-layouts.html">Add Crops</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </li>
          <li class="nav-item with-sub">
            <a class="nav-link" href="#">
              <i class="icon ion-ios-book-outline"></i>
              <span>Pages</span>
            </a>
            <div class="sub-item">
              <ul>
                <li><a href="page-profile.html">Profile Page</a></li>
                <li><a href="page-invoice.html">Invoice</a></li>
                <li><a href="page-contact.html">Contact Manager</a></li>
                <li><a href="page-file-manager.html">File Manager</a></li>
                <li><a href="page-calendar.html">Calendar</a></li>
                <li><a href="page-timeline.html">Timeline</a></li>
                <li class="sub-with-sub">
                  <a href="#">Pricing</a>
                  <ul>
                    <li><a href="page-pricing.html">Pricing 01</a></li>
                    <li><a href="page-pricing2.html">Pricing 02</a></li>
                    <li><a href="page-pricing3.html">Pricing 03</a></li>
                  </ul>
                </li>
                <li class="sub-with-sub">
                  <a href="page-signin.html">Sign In</a>
                  <ul>
                    <li><a href="page-signin.html">Signin Simple</a></li>
                    <li><a href="page-signin2.html">Signin Split</a></li>
                  </ul>
                </li>
                <li class="sub-with-sub">
                  <a href="page-signup.html">Sign Up</a>
                  <ul>
                    <li><a href="page-signup.html">Signup Simple</a></li>
                    <li><a href="page-signup2.html">Signup Split</a></li>
                  </ul>
                </li>
                <li class="sub-with-sub">
                  <a href="#">Error Pages</a>
                  <ul>
                    <li><a href="page-404.html">404 Not Found</a></li>
                    <li><a href="page-505.html">505 Forbidden</a></li>
                    <li><a href="page-500.html">500 Internal Server</a></li>
                    <li><a href="page-503.html">503 Service Unavailable</a></li>
                  </ul>
                </li>
              </ul>
            </div><!-- dropdown-menu -->
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
