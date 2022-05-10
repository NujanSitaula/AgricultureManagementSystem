<?php
 require "./header.php";

  $query = mysqli_query($con, "SELECT * FROM ams_crops");

 ?>
 <div class="slim-mainpanel">
   <div class="container">
     <div class="slim-pageheader">
       <ol class="breadcrumb slim-breadcrumb">

       </ol>
       <h6 class="slim-pagetitle">Welcome User!</h6>
     </div><!-- slim-pageheader -->

     <div class="section-wrapper mg-t-20">
       <label class="section-title">Popular Crops</label>
       <p class="mg-b-20 mg-sm-b-40">Explore the most popular crops of this week.</p>

       <div class="row">
         <?php
         while($listCrops = mysqli_fetch_array($query, MYSQLI_ASSOC)){
         echo " <div class='col-lg-4'>
            <div class='card mb-3 bd-0'>
              <img class='img-fluid' src='assets/uploads/" . $listCrops['cropsPhoto'] . "' alt='Image'>
              <div class='card-body bd bd-t-0'>
              <h6 class='card-title'>" . $listCrops['cropsName'] . "</h6>
                <p class='card-text'>" . $listCrops['cropsDescription'] . "</p>
                <form method='post' action='dashboard.php'>
                <input type='text' name='userid' class='uid' value='" . $countUser['id'] . " ' hidden>
                <input type='text' name='cropsid' class='cid' value='" . $listCrops['cropsID'] . "' hidden>
                <button type='submit' name='save' class='btn btn-primary'>Add To Cart</button>
                </form>
              </div>
            </div>
          </div>";
        }
         ?>
       </div><!-- row -->
     </div><!-- section-wrapper -->
   </div><!-- container -->
 </div><!-- slim-mainpanel -->

 <div class="slim-footer">
   <div class="container">
     <p>Copyright 2018 &copy; All Rights Reserved. Slim Dashboard Template</p>
     <p>Designed by: <a href="">ThemePixels</a></p>
   </div><!-- container -->
 </div><!-- slim-footer -->

 <script src="./lib/jquery/js/jquery.js"></script>
 <script src="./lib/popper.js/js/popper.js"></script>
 <script src="./lib/bootstrap/js/bootstrap.js"></script>
 <script src="./lib/jquery.cookie/js/jquery.cookie.js"></script>



 <script src="./js/slim.js"></script>
 </body>
 </html>
