<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Agrim Has Been Installed</title>

    <!-- Vendor css -->
    <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../lib/Ionicons/css/ionicons.css" rel="stylesheet">

    <!-- Slim CSS -->
    <link rel="stylesheet" href="../assets/css/slim.css">

  </head>
  <style>
  .check-wrap {
	 width: 70px;
	 height: 70px;
	 border-radius: 50%;
	 border: 2px solid #6f42c1;
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
		 background-color: #146abb;
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
        <h3 class="signin-title-primary mb-4 mt-4 text-center">hurrah! Finally Installed!</h3>
        <div class="row row-xs mg-b-10 justify-content-center">
        <div class="check-wrap"></div>
        </div><!-- row -->

        <div class="row row-xs mg-b-10">

        </div><!-- row -->

        <a href="../index.php"><button name="install" class="btn btn-primary btn-block btn-signin">Let's Get Started</button></a>

        <p class="mg-t-40 mg-b-0">Need Help Installing Agrim? <a href="page-signin.html">Contact Us</a></p>
      </div><!-- signin-box -->

    </div><!-- signin-wrapper -->

    <script src="../lib/jquery/js/jquery.js"></script>
    <script src="../lib/popper.js/js/popper.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.js"></script>

    <script src="../assets/js/slim.js"></script>


  </body>
</html>
