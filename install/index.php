<?php

include "./install.php";

if(file_exists("../config.php")){

}else{
  $getconfig = fopen("../config.php", "w");
}

if(isset($_POST['install'])){
$host =  $_POST['host'];
$dbname = $_POST['dbname'];
$username = $_POST['username'];
$password = $_POST['password'];

$configData = '<?php $servername="' . $host . '"; $dbname="' . $dbname . '"; $username="' . $username . '"; $password="' . $password . '"; $con = mysqli_connect($servername, $username, $password, $dbname); if(!$con){header("Location: ./install");}';


$configFile = "../config.php";

file_put_contents($configFile, $configData);

$setup = new SetupDatabase($username, $password, $host, $dbname);
$setup->databaseCreate();
}

 ?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Agrim Instellation Page</title>

    <!-- Vendor css -->
    <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../lib/Ionicons/css/ionicons.css" rel="stylesheet">

    <!-- Slim CSS -->
    <link rel="stylesheet" href="../assets/css/slim.css">

  </head>
  <body>

    <div class="signin-wrapper">

      <div class="signin-box signup">
        <form method="post">

        <h2 class="slim-logo"><a href="index.html">Agrim<span>.</span></a></h2>
        <h3 class="signin-title-primary">Install Agrim</h3>
        <h5 class="signin-title-secondary lh-4">It's easy to install and only takes a minute.</h5>
        <div class="row row-xs mg-b-10">
          <div class="col-sm"><input type="text" name="host" class="form-control" placeholder="Host Name eg: localhost"></div>
          <div class="col-sm mg-t-10 mg-sm-t-0"><input type="text" name="dbname" class="form-control" placeholder="Database Name"></div>
        </div><!-- row -->

        <div class="row row-xs mg-b-10">
          <div class="col-sm"><input type="text" class="form-control" name="username" placeholder="Username"></div>
          <div class="col-sm mg-t-10 mg-sm-t-0"><input type="password" name="password" class="form-control" placeholder="Password"></div>
        </div><!-- row -->

        <input type="submit" name="install" value="Install Agrim" class="btn btn-primary btn-block btn-signin">

        <p class="mg-t-40 mg-b-0">Need Help Installing Agrim? <a href="page-signin.html">Contact Us</a></p>
        </form>
      </div><!-- signin-box -->

    </div><!-- signin-wrapper -->

    <script src="../lib/jquery/js/jquery.js"></script>
    <script src="../lib/popper.js/js/popper.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.js"></script>

    <script src="../assets/js/slim.js"></script>


  </body>
</html>
