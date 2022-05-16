<?php
require "./config.php";

$userID = $_GET['uid'];

$selectQuery = mysqli_query($con, "SELECT * FROM `ams_approval` WHERE id = $userID");
$getInfo = mysqli_fetch_array($selectQuery, MYSQLI_ASSOC);
$countUser = mysqli_num_rows($selectQuery);

if($countUser == 1){
 // Ma jaau kata kata !
}
else{
$query = mysqli_query($con, "INSERT INTO `ams_approval`(`id`) VALUES ('$userID')");
}



 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Agrim Has Been Installed</title>

    <!-- Vendor css -->
    <link href="./lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="./lib/Ionicons/css/ionicons.css" rel="stylesheet">

    <!-- Slim CSS -->
    <link rel="stylesheet" href="./assets/css/slim.css">

  </head>
  <style>
  .check-wrap {
	 width: 70px;
	 height: 70px;
	 border-radius: 50%;
	 border: 2px solid green;
	 position: relative;
	 overflow: hidden;
	 animation: wrap 0.3s ease-in-out forwards;
	 animation-delay: 0.3s;
	 transform: scale(0);
}
 .check-wrap::before, .check-wrap::after {
	 content: '';
	 position: absolute;
	 background-color: white;
	 width: 0;
	 height: 5px;
	 transform-origin: left;
	 animation-duration: 0.3s;
	 animation-timing-function: ease-in-out;
	 animation-fill-mode: forwards;
}
 .check-wrap::before {
	 top: 32px;
	 left: 21px;
	 transform: rotate(45deg);
	 animation-name: left;
	 animation-delay: 0.8s;
}
 .check-wrap::after {
	 top: 42px;
	 left: 29px;
	 transform: rotate(-45deg);
	 animation-name: right;
	 animation-delay: 1.1s;
}
 @keyframes wrap {
	 0% {
		 background-color: transparent;
		 transform: scale(0);
	}
	 100% {
		 background-color: green;
		 transform: scale(1);
	}
}
 @keyframes left {
	 0% {
		 width: 0;
	}
	 100% {
		 width: 15px;
	}
}
 @keyframes right {
	 0% {
		 width: 0;
	}
	 100% {
		 width: 30px;
	}
}

  </style>
  <body>

    <div class="signin-wrapper">

      <div class="signin-box signup">

        <h2 class="slim-logo"><a href="index.html">Agrim<span>.</span></a></h2>
        <h3 class="signin-title-primary mb-4 mt-4 text-center"><?php  if($getInfo['status'] == 0){echo "Request Sent";}  if($getInfo['status'] == 3){echo "Request Declined";} ?></h3>
        <div class="row row-xs mg-b-10 justify-content-center">
        <?php  if($getInfo['status'] == 0){echo "<div class='check-wrap'></div>";}  ?>
        </div><!-- row -->

      <center>  <?php  if($getInfo['status'] == 3){echo "<svg width='200' height='200'>
  <style>
    .cross1{
      transform-origin: 100px 100px;
      transform: rotate(45deg);
    }
    .cross2{
      transform-origin: 100px 100px;
      transform: rotate(-45deg);
    }

    .retry-circle{
      transform-origin: 100px 100px;
      transform: scale(0);
      animation-name: retry-circle, retry-circle-scale;
      animation-duration: .5s, 4s;
      animation-fill-mode: forwards, forwards;
      animation-iteration-count: 1, infinite;
      animation-delay: 0, 5s;
    }

    .cross{
      transform-origin: 100px 100px;
      animation-name: cross;
      animation-duration: 4s;
      animation-fill-mode: forwards;
      animation-iteration-count: infinite;
    }

   @keyframes cross{
     0%{
        transform: rotate(0);
      }
     2%{
       transform: rotate(10deg);
     }
     4%{
        transform: rotate(-10deg);
      }
     6%{
       transform: rotate(10deg);
     }
     8%{
       transform: rotate(-10deg);
     }
     10%{
       transform: rotate(0deg);
     }
     100%{
       transform: rotate(0);
     }
   }

    @keyframes retry-circle{
        0%{
          transform:scale(0);
      }
        50%{
          transform:scale(1.2);
      }
        75%{
          transform:scale(0.9);
      }
        100%{
          transform:scale(1);
      }
    }

    @keyframes retry-circle-scale{
     0%{
        transform: scale(1);
      }
     10%{
       transform: scale(1.2);
     }
     20%{
        transform: scale(0.9);
      }
     30%{
       transform: scale(1);
     }
     100%{
       transform: scale(1);
     }
    }

  </style>
<g class='retry-circle'>
  <circle r='59' cx='100' cy='100' fill='none' stroke='#DC001B' stroke-width='5' />
  <g class='cross'>
    <rect class='cross1' x='98' y='68' fill='#DC001B' width='5' height='65' rx='3' ry='3' />
    <rect class='cross2' x='98' y='68' fill='#DC001B' width='5' height='65' rx='3' ry='3' />
  </g>
</g>
</svg>";}  ?></center>
        <!-- row -->

        <p name="install" class="text-warning mb-2 text-center"><?php  if($getInfo['status'] == 0){echo "Request Under Approval";}  if($getInfo['status'] == 3){echo "Request Has Been Decline";} ?></p>
          <a href="./index.php"><button name="install" class="btn btn-primary btn-block">Go Back</button></a>

        <p class="mg-t-40 mg-b-0">Need Help With Approval? <a href="page-signin.html">Contact Us</a></p>
      </div><!-- signin-box -->

    </div><!-- signin-wrapper -->

    <script src="./lib/jquery/js/jquery.js"></script>
    <script src="./lib/popper.js/js/popper.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.js"></script>

    <script src="./assets/js/slim.js"></script>


  </body>
</html>
