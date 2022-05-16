<?php

$isActive = 5;


    require "./header.php";

    if(isset($_GET['deleteCrop'])){
      $deleteCrop = $_GET['deleteCrop'];
      $deleteQuery = mysqli_query($con, "DELETE FROM `ams_crops` WHERE cropsID = '$deleteCrop'");
    }

$checkUserID = $countUser['id'];
if(isset($_POST['editCrops'])){
  $profileImage = time() . '_agrim_' . $_FILES['uploadThumb']['name'];

  $outcome = '../assets/uploads/' . $profileImage;
  $newCropsName = $_POST['cropname'];
  $newQuantity = $_POST['quantity'];
  $newRate = $_POST['rate'];
  $newDescription = $_POST['desc'];
  $newCategory = $_POST['select'];
  $cropsID = $_POST['cropsID'];
  $newTotalAmount = number_format($newQuantity * $newRate);

  if(move_uploaded_file($_FILES['uploadThumb']['tmp_name'], $outcome)){
  $newQuery = mysqli_query($con, "UPDATE `ams_crops` SET `cropsName`='$newCropsName',`cropsPhoto`='$profileImage',`quantity`='$newQuantity',`cropsType`='$newCategory',`farmersRate`='$newRate',`cropsDescription`='$newDescription',`totalAmount`='$newTotalAmount' WHERE cropsID = '$cropsID'");
  $success = "<strong>Nice!</strong> 1 crop has been successfully edited and is under verification.";
  }
  else{
    $newQuery = mysqli_query($con, "UPDATE `ams_crops` SET `cropsName`='$newCropsName',`quantity`='$newQuantity',`cropsType`='$newCategory',`farmersRate`='$newRate',`cropsDescription`='$newDescription',`totalAmount`='$newTotalAmount' WHERE cropsID = '$cropsID'");

    $success = "<strong>Nice!</strong> 1 crop has been successfully edited and is under verification.";
  }


}

?>
<div class="slim-mainpanel">
  <div class="container">
    <div class="slim-pageheader">
      <ol class="breadcrumb slim-breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
      </ol>
      <h6 class="slim-pagetitle">Market Price</h6>
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
      <label class="section-title">Today's Market Price</label>
      <p class="mg-b-20 mg-sm-b-40">View recent market rates.</p>
      <div class="table-wrapper">
        <table id="datatable1" class="table display responsive nowrap">
          <thead>
            <tr>
              <th class="wd-15p">Crop Name</th>
              <th class="wd-15p">Quantity</th>
              <th class="wd-20p">Min Price</th>
              <th class="wd-15p">Max Price</th>
              <th class="wd-10p">Avg Price</th>
              <th class="wd-25p">Category</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $query = "SELECT * FROM ams_marketprice";
            $result = mysqli_query($con, $query);
             while($crops = mysqli_fetch_array($result, MYSQLI_ASSOC)){

              echo "<tr><td>" . $crops['CropName'] . "</td><td>" . $crops['Quantity'] . " </td><td>" . $crops['CropMinPrice'] . " </td><td>" . $crops['CropMaxPrice'] . " </td><td>" . $crops['CropAvgPrice'] . " </td><td> <span class='tx-success'>" . $crops['Category'] . " <span>
              </td></tr>";

            } ?>
          </tbody>
        </table>
      </div><!-- table-wrapper -->
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
<script src="./lib/datatables/js/jquery.dataTables.js"></script>
<script src="./lib/datatables-responsive/js/dataTables.responsive.js"></script>
<script src="./lib/select2/js/select2.min.js"></script>

<script src="../assets/js/slim.js"></script>
<script>
  $(function(){
    'use strict';

    $('#datatable1').DataTable({
      responsive: true,
      language: {
        searchPlaceholder: 'Search...',
        sSearch: '',
        lengthMenu: '',
      }
    });

    $('#datatable2').DataTable({
      bLengthChange: false,
      searching: false,
      responsive: true
    });

    // Select2
    $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

  });
</script>
</body>
</html>
