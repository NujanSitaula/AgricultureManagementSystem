<?php
$isActive = 5;

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
            <h6 class="slim-pagetitle">Add User</h6>
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
            <label class="section-title">Add User Details</label>
            <p class="mg-b-20 mg-sm-b-40"> Please add valid user details</p>
            <form method="post" action="addcrops.php" enctype="multipart/form-data">
            <div class="form-layout">
               <div class="custom-file" style="margin-bottom: 10px !important;">
                <input type="file" class="custom-file-input" id="uploadThumb" name="uploadThumb">
                <label class="custom-file-label custom-file-label-primary" for="uploadThumb">Add Profile Image</label>
              </div>
                <div class="row mg-b-25">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">First Name: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="firstname" placeholder="Enter First Name">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Last Name: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="lastname" placeholder="Enter Last Name">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="email" name="email" placeholder="Enter Email">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-8">
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Phone: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="number" name="number" placeholder="Phone">
                        </div>
                    </div><!-- col-8 -->
                    <div class="col-lg-4">
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Gender: <span class="tx-danger">*</span></label>
                            <select class="form-control select2" name="select" data-placeholder="Select Gender">
                              <option label="Select Gender"></option>
                              <option value="male">Male</option>
                              <option value="female">Female</option>
                              <option value="other">Other</option>
                              <option value="prefer not to say">Prefer Not To Say</option>
                            </select>
                        </div>
                    </div><!-- col-4 -->
                </div><!-- row -->

                <div class="form-layout">
                  <label>Number of family mamber:</label>
                  <input type="number" class="form-control mb-2" name="familyMember" required placeholder="In Number">
                   <div class="custom-file mb-3" style="margin-bottom: 10px !important;">
                     <label>Address:</label>
                     <select class="form-control mb-2 select2-show-search" id="choose1" onchange="populate(this.id, 'choose2')" name="province" data-placeholder="Select Province" required>
                       <option label="Select Province"></option>
                       <option value="province1">Province No. 1</option>
                       <option value="province2">Madhesh Province</option>
                       <option value="province3">Bagmati Province</option>
                       <option value="province4">Gandaki Province</option>
                       <option value="province5">Lumbini Province</option>
                       <option value="province6">Karnali Province</option>
                       <option value="province7">Sudurpashchim Province</option>

                     </select>
                     <select class="form-control mb-2 select2-show-search" id="choose2" onchange="populateLocal(this.id, 'choose3')" name="district" data-placeholder="Select District" required>
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

                <div class="form-layout-footer mt-4">
                    <button class="btn btn-primary bd-0" name="add">Add User</button>
                    <button class="btn btn-secondary bd-0">Cancel</button>
                </div><!-- form-layout-footer -->
            </div><!-- form-layout -->
</form>

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
  <script src="../assets/js/nepaladdress.js"></script>
</body>
</html>
