<?php
require "../config.php";
session_start();
error_reporting(0);
$checkUser = $_SESSION['IS_LOGIN'];
$checkEmail = mysqli_query($con, "SELECT * FROM ams_users WHERE authToken = '$checkUser'");
$countUser = mysqli_fetch_array($checkEmail, MYSQLI_ASSOC);
$userEmail = $countUser['Email'];
if($countUser['Name'] != '' || $countUser['dateBirth'] != ''){
  header("Location: ./next.php");
}
if(isset($_POST[saveProfile])){
  $profileImage = time() . '_agrim_' . $_FILES['uploadImage']['name'];

  $outcome = '../assets/uploads/' . $profileImage;

  if(move_uploaded_file($_FILES['uploadImage']['tmp_name'], $outcome)){
    $sql = mysqli_query($con, "UPDATE ams_users SET dprofile = '$profileImage' WHERE authToken = '$checkUser'") or die("Error!" . $con -> error);
  }
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $dateofBirth = $_POST['dateofBirth'];
  $genderOption = $_POST['genderOption'];

  $query = mysqli_query($con, "UPDATE ams_users SET Name = '$firstName', Surname = '$lastName', Gender = '$genderOption', dateBirth = '$dateofBirth' WHERE authToken = '$checkUser'") or die("Error!" . $con -> error);
  if(!$con -> error){
    header('Location: ./next.php');
  }

}
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
 	<title>Complete your signup process.</title>
 	<!-- Vendor css -->
 	<link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
 	<link href="../lib/Ionicons/css/ionicons.css" rel="stylesheet">
 	<link href="../lib/select2/css/select2.min.css" rel="stylesheet">
 	<!-- Slim CSS -->
 	<link rel="stylesheet" href="../assets/css/slim.css"> </head>

 <body>
 	<div class="signin-wrapper">
 		<div class="signin-box signup">
 			<h2 class="slim-logo"><a href="index.html">Agrim<span>.</span></a></h2>
 			<h3 class="signin-title-primary">Complete Your Signup Process</h3>
 			<h5 class="signin-title-secondary lh-4">It's easy to fill and only takes a minute.</h5>
 			<div class="col-mid-12 text-center"> <img src="../assets/img/img0.jpg" class="img-fluid rounded-circle mb-2" id="profileDisplay" width="90" alt="">
 				<br>
 				<button class="btn btn-primary btn-signin" onclick="getProfile()">Upload Profile Photo</button>
 				<form action="moredetails.php" enctype="multipart/form-data" method="post">
 					<input type="file" style="display: none;" name="uploadImage" onchange="displayImage(this)" id="uploadImage"> </div>
 			<div class="row row-xs mg-b-10">
 				<div class="col-sm">
 					<input type="text" class="form-control" name="firstName" required placeholder="First Name">
 				</div>
 				<div class="col-sm mg-t-10 mg-sm-t-0">
 					<input type="text" required class="form-control" name="lastName" placeholder="Last Name">
 				</div>
 			</div>
 			<!-- row -->
 			<div class="row row-xs mg-b-10">
 				<div class="col-sm">
 					<div class="input-group">
 						<div class="input-group-prepend">
 							<div class="input-group-text"> <i class="icon ion-calendar tx-16 lh-0 op-6"></i> </div>
 						</div>
 						<input type="text" class="form-control fc-datepicker" name="dateofBirth" placeholder="DOB: MM/DD/YYYY"> </div>
 				</div>
 				<div class="col-sm mg-t-10 mg-sm-t-0">
 					<select class="form-control select2-show-search" name="genderOption" data-placeholder="Select Gender" required>
 						<option label="Select Gender"></option>
 						<option value="Male">Male</option>
 						<option value="Female">Female</option>
 						<option value="Other">Other</option>
 						<option value="Prefer Not To Say">Prefer Not To Say</option>
 					</select>
 				</div>
 			</div>
 			<!-- row -->
 			<input type="submit" name="saveProfile" value="Next Step" class="btn btn-primary btn-block btn-signin">
 			<p class="mg-t-40 mg-b-0"><?php if($countUser['Email'] != ''){
        echo "Not " . $countUser['Email'] . "?";
      }
      else{
        echo "Not " . $countUser['Phone'] . "?";
      } ?> <a href="page-signin.html">Log Out</a></p>
 			</form>
 		</div>
 		<!-- signin-box -->
 	</div>
 	<!-- signin-wrapper -->
 	<script src="../lib/jquery/js/jquery.js"></script>
 	<script src="../lib/popper.js/js/popper.js"></script>
 	<script src="../lib/bootstrap/js/bootstrap.js"></script>
 	<script src="../lib/jquery.cookie/js/jquery.cookie.js"></script>
 	<script src="../lib/select2/js/select2.min.js"></script>
 	<script src="../lib/moment/js/moment.js"></script>
 	<script src="../lib/jquery-ui/js/jquery-ui.js"></script>
 	<script src="../assets/js/slim.js"></script>

    <script type="text/javascript">
        function getProfile(){
          document.querySelector('#uploadImage').click();
        }
        function displayImage(e){
          if (e.files[0]){
            var reader = new FileReader();
            reader.onload = function(e) {
              document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
            }
            reader.readAsDataURL(e.files[0]);
          }
        }
    </script>
    <script>
      $(function(){
        'use strict'

        // Datepicker
        $('.fc-datepicker').datepicker({
          showOtherMonths: true,
          selectOtherMonths: true
        });

        $('#datepickerNoOfMonths').datepicker({
          showOtherMonths: true,
          selectOtherMonths: true,
          numberOfMonths: 2
        });

      });
    </script>
    <script>
        $(function(){
          'use strict';

          $('.select2').select2({
            dropdownCssClass: 'hover-danger',
            minimumResultsForSearch: Infinity
          });

      });
    </script>

  </body>
</html>
