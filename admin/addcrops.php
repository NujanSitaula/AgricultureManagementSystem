<?php
$isActive = 2;

require "./header.php";


if(isset($_POST["add"])){
  $profileImage = time() . '_agrim_' . $_FILES['uploadThumb']['name'];

  $outcome = '../assets/uploads/' . $profileImage;

  $cropname = $_POST["cropname"];
  $quantity = $_POST["quantity"];
  $rate = $_POST["rate"];
  $desc = $_POST["desc"];
  $category = $_POST["select"];
  $user_id = $countUser['id'];
  $totalAmount = number_format($quantity * $rate);

  if(move_uploaded_file($_FILES['uploadThumb']['tmp_name'], $outcome)){
    $query = "INSERT INTO `ams_crops`(`id`, `cropsName`, `quantity`, `cropsType`, `farmersRate`, `cropsDescription`, `cropsPhoto`, `totalAmount`) VALUES ('$user_id','$cropname','$quantity','$category','$rate','$desc','$profileImage', '$totalAmount')";
    mysqli_query($con, $query);
    $success = "<strong>Bravo!</strong> New crops has been successfully added and is under verification.";
  }
  else{
    $query = "INSERT INTO `ams_crops`(`id`, `cropsName`, `quantity`, `cropsType`, `farmersRate`, `cropsDescription`) VALUES ('$user_id','$cropname','$quantity','$category','$rate','$desc')";
    mysqli_query($con, $query);
    $success = "<strong>Bravo!</strong> New crops has been successfully added and is under verification.";
  }


}

?>

<div class="slim-mainpanel">
    <div class="container">
        <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
            </ol>
            <h6 class="slim-pagetitle">Add Crops</h6>
        </div><!-- slim-pageheader -->
        <?php if(!empty($success)):
        echo "<div class='alert alert-solid alert-success' role='alert'>
           <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
             <span aria-hidden='true'>&times;</span>
           </button>
           ". $success ."
         </div>";
       endif;?>
        <div class="section-wrapper">
            <label class="section-title">Add Crop Details</label>
            <p class="mg-b-20 mg-sm-b-40"> Please add valid crop details</p>
            <form method="post" action="addcrops.php" enctype="multipart/form-data">
            <div class="form-layout">
               <div class="custom-file" style="margin-bottom: 10px !important;">
                <input type="file" class="custom-file-input" id="uploadThumb" name="uploadThumb">
                <label class="custom-file-label custom-file-label-primary" for="uploadThumb">Add Thumbnail For Crops</label>
              </div>
                <div class="row mg-b-25">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Crops Name: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="cropname" placeholder="Enter Crop Name">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Quantity: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="number" name="quantity" placeholder="Enter Quantity in KG">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Farmers Rate(रू): <span class="tx-danger">*</span></label>
                            <input class="form-control" type="number" name="rate" placeholder="Enter Rate">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-8">
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Description: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="desc" placeholder="Enter Description">
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
                    <button class="btn btn-primary bd-0" name="add">Save Crop</button>
                    <button class="btn btn-secondary bd-0">Cancel</button>
                </div><!-- form-layout-footer -->
            </div><!-- form-layout -->


        </div><!-- section-wrapper -->
    </div>
</div>
<div class="slim-footer">
  <div class="container">
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
