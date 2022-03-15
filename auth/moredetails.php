<?php
require "./config.php";
session_start();

$checkUser = $_SESSION['EMAIL'];
if(isset($_POST[saveProfile])){
  $profileImage = time() . '_agrim_' . $_FILES['uploadImage']['name'];

  $outcome = 'uploads/' . $profileImage;

  if(move_uploaded_file($_FILES['uploadImage']['tmp_name'], $outcome)){
    $sql = "INSERT INTO ams_users (dprofile) VALUES ('$profileImage')";
  }

}

//Generating Auth Token for user validity
//Generate a random string.
$authToken = openssl_random_pseudo_bytes(16);
//Convert the binary data into hexadecimal representation.
$authToken = bin2hex($authToken);
echo $authToken;
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
    <link href="./lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="./lib/Ionicons/css/ionicons.css" rel="stylesheet">

    <!-- Slim CSS -->
    <link rel="stylesheet" href="./css/slim.css">

  </head>
  <body>

    <div class="signin-wrapper">

      <div class="signin-box signup">


        <h2 class="slim-logo"><a href="index.html">Agrim<span>.</span></a></h2>
        <h3 class="signin-title-primary">Complete Your Signup Process</h3>
        <h5 class="signin-title-secondary lh-4">It's easy to fill and only takes a minute.</h5>
<div class="col-mid-12 text-center">
  <img src="./img/img0.jpg" class="img-fluid rounded-circle mb-2" id="profileDisplay" width="90" alt=""><br>
  <button class="btn btn-primary btn-signin" onclick="getProfile()">Upload Profile Photo</button>
  <form action="moredetails.php" enctype="multipart/form-data" method="post">
  <input type="file" style="display: none;" name="uploadImage" onchange="displayImage(this)" id="uploadImage">

</div>



        <div class="row row-xs mg-b-10">
          <div class="col-sm"><input type="text" class="form-control" placeholder="Firstname"></div>
          <div class="col-sm mg-t-10 mg-sm-t-0"><input type="text" class="form-control" placeholder="Lastname"></div>
        </div><!-- row -->

        <div class="row row-xs mg-b-10">
          <div class="col-sm"><input type="email" class="form-control" placeholder="Email"></div>
          <div class="col-sm mg-t-10 mg-sm-t-0"><input type="password" class="form-control" placeholder="Password"></div>
        </div><!-- row -->

        <input type="submit" name="saveProfile" value="Next Step" class="btn btn-primary btn-block btn-signin">

        <div class="signup-separator"><span>or signup using</span></div>

        <button class="btn btn-facebook btn-block">Sign Up Using Facebook</button>
        <button class="btn btn-twitter btn-block">Sign Up Using Twitter</button>

        <p class="mg-t-40 mg-b-0">Not nujan@gmail.com? <a href="page-signin.html">Log Out</a></p>
        </form>
      </div><!-- signin-box -->

    </div><!-- signin-wrapper -->

    <script src="./lib/jquery/js/jquery.js"></script>
    <script src="./lib/popper.js/js/popper.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.js"></script>

    <script src="./js/slim.js"></script>
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

  </body>
</html>
