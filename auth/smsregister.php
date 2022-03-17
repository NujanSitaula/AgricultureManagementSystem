<?php
    require "../config.php";
    require '../includes/Exception.php';
    require '../includes/PHPMailer.php';
    require '../includes/SMTP.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    session_start();
    if (isset($_SESSION["EMAIL"]) == true || isset($_SESSION["IS_LOGIN"]) == true) {
        header("Location: smscheckpoint.php");
    }
    if(isset($_POST['submit']))
        {
      $phone=$_POST['phone'];
    $res=mysqli_query($con,"SELECT * FROM ams_users WHERE Phone='$phone'");
    $GreetName = mysqli_fetch_array($res, MYSQLI_ASSOC);
    $count=mysqli_num_rows($res);
    if($count == 0){
    	$otp=rand(11111,99999);
    	mysqli_query($con,"INSERT INTO ams_users (OTP, Phone) VALUES ('$otp', '$phone') ") or die("Error!" . $con -> error);

    	$_SESSION['EMAIL']=$phone;

      $args = http_build_query(array(
                  'auth_token'=> '1c2f4c96f4af3cd74a7c9bccf03a4cf6284cc18360dbbce2112f52e9de4446b6',
                  'to'    => '977'. $phone,
                  'text'  => 'Welcome to AGRIM. Your OTP code for AGRIM is: '. $otp . ' Do not share this code with anyone.'));
          $url = "https://sms.aakashsms.com/sms/v3/send/";

          # Make the call using API.
          $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, $url);
          curl_setopt($ch, CURLOPT_POST, 1); ///
          curl_setopt($ch, CURLOPT_POSTFIELDS,$args);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
          // Response
          $response = curl_exec($ch);
          curl_close($ch);

          header("Location: smscheckpoint.php");


    }else{
      $Error = "<strong>Opps!</strong> Account already exists with this Number.";
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

         <title>Login - AGREM.</title>

         <!-- Vendor css -->
         <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
         <link href="../lib/Ionicons/css/ionicons.css" rel="stylesheet">

         <!-- Slim CSS -->
         <link rel="stylesheet" href="../assets/css/slim.css">

       </head>
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
         <div class="d-md-flex flex-row-reverse">
           <div class="signin-right">

             <div class="signin-box">
               <h2 class="signin-title-primary">Welcome to AGRIM!</h2>
               <h3 class="signin-title-secondary">Creating a account is easy.</h3>
               <form method="post" action="smsregister.php">
               <div class="form-group">
                  <?php if(!empty($Error)):
                    echo "<div class='alert alert-danger' role='alert'>
                      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                      </button>" . $Error . "</div>";
                        endif;

                      ?>
                 <input type="number" name="phone" maxlength="10" class="form-control" placeholder="Enter Your Phone Number">
                 <p class="mg-b-0 text-right">or register via <a href="./register.php">Email Address</a></p>
               </div><!-- form-group -->
               <input type="submit" class="btn btn-primary btn-block btn-signin" name="submit" value="Send OTP">
             </form>
               <p class="mg-b-0">Don't have an account? <a href="./auth.php">Register Now</a></p>
             </div>

           </div><!-- signin-right -->
           <div class="signin-left">
             <div class="signin-box">
               <h2 class="slim-logo"><a href="index.html">Agrim<span>.</span></a></h2>

               <p>AGRIM is Nepal's first eAgro platform, enabling farmers from all corners of the country to maximize the value of their crops. This platform establishes a link between farmers and customers. Our ultimate objective is to give both farmers and customers with a seamless selling/buying experience. </p>

               <p>Note: Agrim is a college project of Team Agrim.</p>

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
