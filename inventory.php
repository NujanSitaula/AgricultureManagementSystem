<?php
 require "./header.php";

  $query = mysqli_query($con, "SELECT * FROM ams_crops WHERE isApproved = 1");

 ?>
 <div class="slim-mainpanel">
   <div class="container">
     <div class="slim-pageheader">
       <ol class="breadcrumb slim-breadcrumb">

       </ol>
       <h6 class="slim-pagetitle">Welcome User!</h6>
     </div><!-- slim-pageheader -->

     <div class="section-wrapper mg-t-20">
       <label class="section-title">My Inventory</label>
       <p class="mg-b-20 mg-sm-b-40">List of items you've purchased.</p>

       <div class="row">
         <?php
         $query = mysqli_query($con, "SELECT * FROM ams_transaction WHERE id='29'");

         while($check = mysqli_fetch_array($query, MYSQLI_ASSOC)){

             $array = explode(",", $check['productID']);


             foreach ($array as $key) {

               if($key != 0){

                 $q= mysqli_query($con, "SELECT * FROM ams_crops WHERE cropsID= '$key'");
                 $crops = mysqli_fetch_array($q, MYSQLI_ASSOC);
                 if(!empty($crops['cropsName'])){
                   echo " <div class='col-lg-4'>
                      <div class='card mb-3 bd-0'>
                        <img class='img-fluid' src='assets/uploads/" . $crops['cropsPhoto'] . "' alt='Image'>
                        <div class='card-body bd bd-t-0'>
                        <h6 class='card-title'>" . $crops['cropsName'] . "</h6>
                          <p class='card-text'>" . $crops['cropsDescription'] . "</p>
                        </div>
                      </div>
                    </div>";
                 }
               }
             }


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
