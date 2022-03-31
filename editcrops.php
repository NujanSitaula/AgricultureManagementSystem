<?php
  require "./header.php";

  $getCropsId = $_GET['cropsID'];

  $query = mysqli_query($con, "SELECT * FROM ams_crops WHERE cropsID = '$getCropsId'") or die($con -> error);
  $getData = mysqli_fetch_array($query, MYSQLI_ASSOC);

  echo $getData['totalAmount'];


 ?>
 <div class="slim-mainpanel">
     <div class="container">
         <div class="slim-pageheader">
             <ol class="breadcrumb slim-breadcrumb">
                 <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                 <li class="breadcrumb-item"><a href="./viewcrops.php">Crops</a></li>
                 <li class="breadcrumb-item active" aria-current="page">Edit Crops</li>
             </ol>
             <h6 class="slim-pagetitle">Edit Crop</h6>
         </div><!-- slim-pageheader -->
         <div class="alert alert-solid alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Bravo!</strong> New crops has been successfully added and is under verification.
          </div><!-- alert -->
         <div class="section-wrapper">
             <label class="section-title">Edit Crop Details</label>
             <p class="mg-b-20 mg-sm-b-40">Editing cannot be undone.</p>
             <form method="post" action="viewcrops.php" enctype="multipart/form-data">
             <div class="form-layout">
                <div class="custom-file" style="margin-bottom: 10px !important;">
                 <input type="file" class="custom-file-input" id="uploadThumb" name="uploadThumb">
                 <label class="custom-file-label custom-file-label-primary" for="uploadThumb">Edit Thumbnail Of Crops</label>
               </div>
                 <div class="row mg-b-25">
                     <div class="col-lg-4">
                         <div class="form-group">
                             <label class="form-control-label">Crops Name: <span class="tx-danger">*</span></label>
                             <input class="form-control" value="<?php echo $getData['cropsName'];?>" type="text" name="cropname" placeholder="Enter Crop Name">
                         </div>
                     </div><!-- col-4 -->
                     <div class="col-lg-4">
                         <div class="form-group">
                           <input type="text" value="<?php echo $_GET['cropsID'];  ?>" name='cropsID' hidden>
                             <label class="form-control-label">Quantity: <span class="tx-danger">*</span></label>
                             <input class="form-control" type="number" value="<?php echo $getData['quantity'];?>" name="quantity" placeholder="Enter Quantity in KG">
                         </div>
                     </div><!-- col-4 -->
                     <div class="col-lg-4">
                         <div class="form-group">
                             <label class="form-control-label">Farmers Rate(रू): <span class="tx-danger">*</span></label>
                             <input class="form-control" value="<?php echo $getData['farmersRate'];?>" type="number" name="rate" placeholder="Enter Rate">
                         </div>
                     </div><!-- col-4 -->
                     <div class="col-lg-8">
                         <div class="form-group mg-b-10-force">
                             <label class="form-control-label">Description: <span class="tx-danger">*</span></label>
                             <input class="form-control" type="text" value="<?php echo $getData['cropsDescription'];?>" name="desc" placeholder="Enter Description">
                         </div>
                     </div><!-- col-8 -->
                     <div class="col-lg-4">
                         <div class="form-group mg-b-10-force">
                             <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                             <select class="form-control select2" name="select" data-placeholder="Select Category">
                               <option label="Select Category"></option>
                               <?php

                               $query = "SELECT * FROM ams_cropstype";
                               $result = mysqli_query($con, $query);
                                while($cropsCategory = mysqli_fetch_array($result, MYSQLI_ASSOC)){

                                 echo "<option value='" . $cropsCategory['cropsType'] . "'>" . $cropsCategory['cropsType'] . " </option>";

                               } ?>
                             </select>
                             </form>
                         </div>
                     </div><!-- col-4 -->
                 </div><!-- row -->

                 <div class="form-layout-footer">
                     <button class="btn btn-primary bd-0" name="editCrops">Save Crop</button>
                     <a href="./viewcrops.php"><button class="btn btn-secondary bd-0">Cancel Changes</button></a>
                 </div><!-- form-layout-footer -->
             </div><!-- form-layout -->


         </div><!-- section-wrapper -->
     </div>
 </div>
 <div class="slim-footer">
   <div class="container">
     <p>Copyright 2018 &copy; All Rights Reserved. Slim Dashboard Template</p>
     <p>Designed by: <a href="">ThemePixels</a></p>
   </div><!-- container -->
 </div><!-- slim-footer -->
 <script src="../lib/jquery/js/jquery.js"></script>
 <script src="../lib/popper.js/js/popper.js"></script>
 <script src="../lib/bootstrap/js/bootstrap.js"></script>
 <script src="../lib/jquery.cookie/js/jquery.cookie.js"></script>
 <script src="../lib/d3/js/d3.js"></script>
 <script src="../lib/rickshaw/js/rickshaw.min.js"></script>
 <script src="../lib/chart.js/js/Chart.js"></script>

 <script src="../assets/js/slim.js"></script>
 <script src="../assets/js/ResizeSensor.js"></script>
 </body>
 </html>
