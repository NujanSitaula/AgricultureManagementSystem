<?php
session_start();
require "../config.php";
if(isset($_SESSION['IS_LOGIN'])){
  $authToken = $_SESSION['IS_LOGIN'];
$sql = mysqli_query($con, "SELECT * FROM ams_users WHERE authToken = '$authToken'");
$countUser= mysqli_fetch_array($sql, MYSQLI_ASSOC);
$count=mysqli_num_rows($sql);
if(empty($countUser['Name'])){
  header("Location: ./moredetails.php");
}
if(!empty($countUser['localAddress'])){
header("Location: ../index.php");
}

if($count == 1){
  if(isset($_POST['completeReg'])){
    $numberFamily = $_POST['familyMember'];
    $provinceAddress = $_POST['province'];
    $countryAddress = $_POST['country'];
    $districtAddress = $_POST['district'];
    $wadAddress = $_POST['wad'];
    $localAddress = $_POST['localLevel'];

  $query = mysqli_query($con, "UPDATE ams_users SET localAddress = '$localAddress', Country = '$countryAddress', provinceAddress = '$provinceAddress', wadAddress = '$wadAddress', districtAddress = '$districtAddress', familyMember = '$numberFamily' WHERE authToken = '$authToken'") or die("Error!" . $con -> error);
  if(!$con -> error){
    header('Location: ../index.php');
    }
  }
}
else{
  header("Location: logout.php");
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
  <style media="screen">
  input::-webkit-outer-spin-button,
  input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }

     input[type=number] {
   -moz-appearance: textfield;
 }
  </style>

 <body>
  <div class="signin-wrapper">
    <div class="signin-box signup">
      <h2 class="slim-logo"><a href="index.html">Agrim<span>.</span></a></h2>
      <h3 class="signin-title-primary">We need something more.</h3>
      <h5 class="signin-title-secondary lh-4">We want to know you more better.</h5>
      <div class="row row-xs mg-b-10">
        <div class="col-sm">
          <form action="./next.php" method="post">

          <label>Number of family mamber:</label>
          <input type="number" class="form-control" name="familyMember" required placeholder="In Number">
        </div>
      </div>
      <!-- row -->
      <div class="row row-xs mg-b-10">
        <div class="col-sm">
        <label>Address:</label>
        <select class="form-control select2-show-search" id="choose1" onchange="populate(this.id, 'choose2')" name="province" data-placeholder="Select Province" required>
          <option label="Select Province"></option>
          <option value="province1">Province No. 1</option>
          <option value="province2">Madhesh Province</option>
          <option value="province3">Bagmati Province</option>
          <option value="province4">Gandaki Province</option>
          <option value="province5">Lumbini Province</option>
          <option value="province6">Karnali Province</option>
          <option value="province7">Sudurpashchim Province</option>

        </select><br>
        <select class="form-control select2-show-search" id="choose2" onchange="populateLocal(this.id, 'choose3')" name="district" data-placeholder="Select District" required>
          <option label="Select District"></option>
        </select>
      </div>
      <div class="row row-xs mg-b-10">
 				<div class="col-sm">
          <br><select class="form-control select2-show-search" id="choose3" name="localLevel" data-placeholder="Select Local Level" required>
            <option label="Select Local Level"></option>
          </select>
 				</div>
 				<div class="col-sm mg-t-10 mg-sm-t-0">
 					<br><input type="text" required class="form-control" name="wad" placeholder="Wad No.">
 				</div>
        <div class="col-sm">
          <br><input type="text" class="form-control" name="country" placeholder="Country" value="Nepal" readonly="readonly">
        </div>
 			</div>

    </div>
      <!-- row -->
      <input type="submit" name="completeReg" value="Complete Signup" class="btn btn-primary btn-block btn-signin">
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
  <script src="../assets/js/nepaladdress.js"></script>
</body>
</html>

<?php
}
else{
  header("Location: ./auth.php");
}

 ?>
