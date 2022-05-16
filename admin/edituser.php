<?php
$isActive = 5;

require "./header.php";


if(isset($_POST['saveProfile'])){
    $profileImage = time() . '_agrim_' . $_FILES['uploadImage']['name'];

    $outcome = '../assets/uploads/' . $profileImage;
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $genderOption = $_POST['genderOption'];
    $numberFamily = $_POST['familyMember'];
    $provinceAddress = $_POST['province'];
    $countryAddress = $_POST['country'];
    $districtAddress = $_POST['district'];
    $wadAddress = $_POST['wad'];
    $localAddress = $_POST['localLevel'];
    $checkUser = $_SESSION['IS_LOGIN'];
    if(move_uploaded_file($_FILES['uploadImage']['tmp_name'], $outcome)){
      $sql = mysqli_query($con, "UPDATE ams_users SET dprofile = '$profileImage' `Name`='$firstName',`Surname`='$lastName',`Gender`='$genderOption',`localAddress`='$localAddress',`Country`='$countryAddress',`provinceAddress`='$provinceAddress',`districtAddress`='$districtAddress',`wadAddress`='$wadAddress',`familyMember`='$numberFamily' WHERE authToken = '$checkUser'") or die("Error!" . $con -> error);
    }


    $query = mysqli_query($con, "UPDATE `ams_users` SET `Name`='$firstName',`Surname`='$lastName',`Gender`='$genderOption',`localAddress`='$localAddress',`Country`='$countryAddress',`provinceAddress`='$provinceAddress',`districtAddress`='$districtAddress',`wadAddress`='$wadAddress',`familyMember`='$numberFamily' WHERE authToken = '$checkUser'") or die("Error!" . $con -> error);


  }
$userkoID = $_GET['id'];
$sqlQuery = mysqli_query($con, "SELECT * FROM ams_users WHERE id = '$userkoID'");
$editUser= mysqli_fetch_array($sqlQuery, MYSQLI_ASSOC);
?>

<div class="slim-mainpanel">
    <div class="container">
        <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
                <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="./viewcrops.php">Crops</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Crops</li>
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
            <form method="post" enctype="multipart/form-data">
            <div class="form-layout">
               <div class="custom-file" style="margin-bottom: 10px !important;">
                <input type="file" class="custom-file-input" id="uploadThumb" name="uploadImage">
                <label class="custom-file-label custom-file-label-primary" for="uploadThumb">Add Profile Image</label>
              </div>
                <div class="row mg-b-25">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">First Name: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" value="<?php echo $editUser['Name'];  ?>" name="firstname" placeholder="Enter First Name">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Last Name: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" value="<?php echo $editUser['Surname'];  ?>" name="lastname" placeholder="Enter Last Name">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                            <input class="form-control" disabled type="email" value="<?php echo $editUser['Email'];  ?>" name="email" placeholder="Enter Email">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-8">
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Phone: <span class="tx-danger">*</span></label>
                            <input class="form-control" disabled type="number" value="<?php echo $editUser['Phone'];  ?>" name="number" placeholder="Phone">
                        </div>
                    </div><!-- col-8 -->
                    <div class="col-lg-4">
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Gender: <span class="tx-danger">*</span></label>
                            <select class="form-control select2" name="genderOption" data-placeholder="Select Gender">
                              <option label="Select Gender"></option>
                              <option value="Male"<?php if($editUser['Gender'] == "Male"){echo "selected";}  ?>>Male</option>
                              <option value="Female" <?php if($editUser['Gender'] == "Female"){echo "selected";}  ?>>Female</option>
                              <option value="Other" <?php if($editUser['Gender'] == "Other"){echo "selected";}  ?>>Other</option>
                              <option value="Prefer-Not-To-Say" <?php if($editUser['Gender'] == "Prefer-Not-To-Say"){echo "selected";}  ?>>Prefer Not To Say</option>
                            </select>
                        </div>
                    </div><!-- col-4 -->
                </div><!-- row -->

                <div class="form-layout">
                  <label>Number of family mamber:</label>
                  <input type="number" class="form-control mb-2" value="<?php echo $editUser['familyMember'];  ?>" name="familyMember" required placeholder="In Number">
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
             					<br><input type="text" required class="form-control" value="<?php echo $editUser['wadAddress'];  ?>" name="wad" placeholder="Wad No.">
             				</div>
                    <div class="col-sm">
                      <br><input type="text" class="form-control" name="country" placeholder="Country" value="Nepal" readonly="readonly">
                    </div>
             			</div>

                <div class="form-layout-footer mt-4">
                    <button class="btn btn-primary bd-0" name="saveProfile">Edit User</button>
                    <button class="btn btn-secondary bd-0">Cancel</button>
                </div><!-- form-layout-footer -->
            </div><!-- form-layout -->
</form>

        </div><!-- section-wrapper -->
    </div>
</div>
<div class="slim-footer">
  <div class="container">
    <p>Copyright 2022 &copy; All Rights Reserved. Agrim</p>
    <p>Designed by: <a href="">Team Agrim</a></p>
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
