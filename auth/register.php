<?php
require "../config.php";
require "../includes/Exception.php";
require "../includes/PHPMailer.php";
require "../includes/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
session_start();
if (isset($_SESSION["EMAIL"]) == true || isset($_SESSION["IS_LOGIN"]) == true) {
    header("Location: checkpoint.php");
}
if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $res = mysqli_query($con, "SELECT * FROM ams_users WHERE Email='$email'");
    $GreetName = mysqli_fetch_array($res, MYSQLI_ASSOC);
    $count = mysqli_num_rows($res);
    if ($count == 0) {
        $otp = rand(11111, 99999);
        mysqli_query(
            $con,
            "INSERT INTO ams_users (OTP, Email) VALUES ('$otp', '$email') "
        );

        $_SESSION["EMAIL"] = $email;

        $mail = new PHPmailer();

        $mail->isSMTP(); // Set mailer to use SMTP
        $mail->Host = "smtp.mailgun.org"; // Specify mailgun SMTP servers
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = "otp@amsystem.codes"; // SMTP username from https://mailgun.com/cp/domains
        $mail->Password = "8a801b07a93c183f930b212b2f718fcf-0677517f-c4783eaa"; // SMTP password from https://mailgun.com/cp/domains
        $mail->SMTPSecure = "tls"; // Enable encryption, 'ssl'
        $mail->From = "otp@amsystem.codes"; // The FROM field, the address sending the email
        $mail->FromName = "AGRIM"; // The NAME field which will be displayed on arrival by the email client
        $email_template = "register.html";
        $mail->addAddress($email); // Recipient's email address and optionally a name to identify him
        $mail->isHTML(true); // Set email to be sent as HTML, if you are planning on sending plain text email just set it to false
        // The following is self explanatory
        $message = file_get_contents($email_template);
        $message = str_replace("%email%", $email, $message);
        $message = str_replace("%otp%", $otp, $message);
        $message = str_replace("%name%", $GreetName["Name"], $message);
        $mail->Subject = "Welcome to AGRIM verify your account.";
        $mail->MsgHTML($message);
        $mail->AltBody = "One Time Password Is:" . $otp;
        if (!$mail->send()) {
            $Error = "<strong>Our Bad!</strong> Unable to send email please try again.";
        } else {
            header("Location: checkpoint.php");
        }
    } else {
        $Error = "
    <strong>Wait!</strong> Account already exist. Try Login.";
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

     <title>Register - AGRIM.</title>

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
           <h2 class="signin-title-primary">Welcome to AGRIM.</h2>
           <h3 class="signin-title-secondary">Creating a account is easy.</h3>
           <form method="post" action="register.php">
           <div class="form-group">
              <?php
              if(!empty($Error)):
                echo "<div class='alert alert-danger' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>" . $Error . "</div>";
              endif;
              ?>
             <input type="text" name="email" class="form-control" placeholder="Enter Your Email">
             <p class="mg-b-0 text-right">or register via <a href="./smsregister.php">Phone Number</a></p>
           </div><!-- form-group -->
           <input type="submit" class="btn btn-primary btn-block btn-signin" name="submit" value="Send OTP">
         </form>
           <p class="mg-b-0">Already have an account? <a href="./authsms.php">Login Now</a></p>
         </div>

       </div><!-- signin-right -->
       <div class="signin-left">
         <div class="signin-box">
           <h2 class="slim-logo"><a href="index.html">Agrim<span>.</span></a></h2>

           <p>AGRIM is Nepal's first eAgro platform, enabling farmers from all corners of the country to maximize the value of their crops. This platform establishes a link between farmers and customers. Our ultimate objective is to give both farmers and customers with a seamless selling/buying experience. </p>

           <p>Browse our site and see for yourself why you need Slim.</p>

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
