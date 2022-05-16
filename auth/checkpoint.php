<?php
session_start();
require "../config.php";
if (isset($_SESSION["IS_LOGIN"])) {
    header("Location: loggedin.php");
    exit();
}
if (isset($_SESSION["EMAIL"])) {
 $Error = "<strong>Yey!</strong> OTP has been sent to your email.";
 $ErrorClass = "alert-success";

 if (isset($_POST["verify"])) {
     $otp = $_POST["otp"];
     $email = $_SESSION["EMAIL"];
     $res = mysqli_query(
         $con,
         "SELECT * FROM ams_users WHERE Email='$email' and OTP='$otp'"
     );
     $count = mysqli_num_rows($res);
     if ($count > 0) {
       //Generating Auth Token for user validity
   		//Generate a random string.
   		$authToken = openssl_random_pseudo_bytes(16);
   		//Convert the binary data into hexadecimal representation.
   		$authToken = bin2hex($authToken);
         mysqli_query($con, "UPDATE ams_users SET OTP='', authToken='$authToken' WHERE Email='$email'");
         $_SESSION["IS_LOGIN"] = $authToken;
         header("Location: ../index.php");
         exit();
         unset($_SESSION["EMAIL"]);
     } else {
         $Error = "<strong>You Missed It!</strong> Please enter a valid OTP.";
    $ErrorClass = "alert-danger";
     }
 }
} else {header("Location: ./auth.php"); exit();}
?>
	<!DOCTYPE html>
	<html lang="en">
		<head>
			<!-- Required meta tags -->
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

			<!-- Twitter -->
			<meta name="twitter:site" content="@themepixels">
			<meta name="twitter:creator" content="@themepixels">
			<meta name="twitter:card" content="summary_large_image">
			<meta name="twitter:title" content="Slim">
			<meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
			<meta name="twitter:image" content="http://themepixels.me/slim/img/slim-social.png">

			<!-- Facebook -->
			<meta property="og:url" content="http://themepixels.me/slim">
			<meta property="og:title" content="Slim">
			<meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

			<meta property="og:image" content="http://themepixels.me/slim/img/slim-social.png">
			<meta property="og:image:secure_url" content="http://themepixels.me/slim/img/slim-social.png">
			<meta property="og:image:type" content="image/png">
			<meta property="og:image:width" content="1200">
			<meta property="og:image:height" content="600">

			<!-- Meta -->
			<meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
			<meta name="author" content="ThemePixels">

			<title>Checkpoint - AGRIM.</title>

			<!-- Vendor css -->
			<link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
			<link href="../lib/Ionicons/css/ionicons.css" rel="stylesheet">

			<!-- Slim CSS -->
			<link rel="stylesheet" href="../assets/css/slim.css">

		</head>
		<body>
			<div class="d-md-flex flex-row-reverse">
				<div class="signin-right">

					<div class="signin-box">
						<h2 class="signin-title-primary">OTP Verification.</h2>
						<h3 class="signin-title-secondary">Verify your OTP Code.</h3>
						<form method="post">
						<div class="form-group">
							<?php if(!empty($Error)):

            echo  "<div class='alert " . $ErrorClass . "' role='alert'>
             <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
               <span aria-hidden='true'>&times;</span>
             </button>" . $Error . "</div>";


              endif; ?>
							<input type="text" name="otp" class="form-control" placeholder="Enter 5 Digit Code">
						</div><!-- form-group -->
						<input type="submit" class="btn btn-primary btn-block btn-signin" name="verify" value="Sign in">
					</form>
						<p class="mg-b-0">Need help logging in? <a href="page-signup2.html">Contact Developer</a></p>
					</div>

				</div><!-- signin-right -->
				<div class="signin-left">
					<div class="signin-box">
						<h2 class="slim-logo"><a href="index.html">Agrim<span>.</span></a></h2>

						<p>AGRIM is Nepal's first eAgro platform, enabling farmers from all corners of the country to maximize the value of their crops. This platform establishes a link between farmers and customers. Our ultimate objective is to give both farmers and customers with a seamless selling/buying experience. </p>

						<p>Browse our site and see for yourself why you need Agrim.</p>

						<p><a href="" class="btn btn-outline-secondary pd-x-25">Learn More</a></p>

						<p class="tx-12">&copy; Copyright 2022. | Team Agrim | All Rights Reserved.</p>
					</div>
				</div><!-- signin-left -->
			</div><!-- d-flex -->

			<script src="../lib/jquery/js/jquery.js"></script>
			<script src="../lib/popper.js/js/popper.js"></script>
			<script src="../lib/bootstrap/js/bootstrap.js"></script>

			<script src="../assets/js/slim.js"></script>


		</body>
	</html>
