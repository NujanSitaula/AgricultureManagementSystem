<?php

$isActive = 5;


    require "./header.php";

    if(isset($_GET['deleteCrop'])){
      $deleteCrop = $_GET['deleteCrop'];
      $deleteQuery = mysqli_query($con, "DELETE FROM `ams_users` WHERE id= '$deleteCrop'");
    }
    if(isset($_GET['suspendID'])){
      $userID = $_GET['suspendID'];
      $suspendQuery = mysqli_query($con, "UPDATE `ams_users` SET `isSuspended`= '1' WHERE `id` = '$userID'");
    }
    if(isset($_GET['unsuspendID'])){
      $userID = $_GET['unsuspendID'];
      $suspendQuery = mysqli_query($con, "UPDATE `ams_users` SET `isSuspended`= '0' WHERE `id` = '$userID'");
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
      </ol>
      <h6 class="slim-pagetitle">Data Tables</h6>
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
      <label class="section-title">View User</label>
      <p class="mg-b-20 mg-sm-b-40">View table of total user in the system.</p>

      <div class="table-wrapper">
        <table id="datatable1" class="table display responsive nowrap">
          <thead>
            <tr>
              <th class="wd-15p">Full Name</th>
              <th class="wd-15p">Email</th>
              <th class="wd-20p">Phone</th>
              <th class="wd-15p">Role</th>
              <th class="wd-10p">Profile</th>
              <th class="wd-25p">Status</th>
              <th class="wd-25p">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $query = "SELECT * FROM ams_users";
            $result = mysqli_query($con, $query);
             while($crops = mysqli_fetch_array($result, MYSQLI_ASSOC)){

              echo "<tr><td>" . $crops['Name'] . " " . $crops['Surname'] . "</td><td>" . $crops['Email'] . "</td><td>" . $crops['Phone'] . " </td><td>" . $crops['Environment'] . " </td><td><image src='../assets/uploads/" . $crops['dprofile'] . "' class='img-fluid img-thumbnail'> </td><td>"; if($crops['isSuspended'] == 1)
              {echo "<span class='tx-warning'>Suspended<span>";} else{echo "<span class='tx-success'>Active<span>";}
              echo " </td><td><ul class='list-inline m-0'>
                        <li class='list-inline-item'>
                        <a href='./edituser.php?id=". $crops['id'] ."'><button class='btn btn-success btn-sm rounded-0' type='button' data-toggle='tooltip'";  echo" data-placement='top' title='Edit User'><i class='fa fa-edit'></i></button></a>
                        </li>";
                        if($crops['isSuspended'] == 1){
                          echo "<li class='list-inline-item'>
                          <a href='./listuser.php?unsuspendID=". $crops['id'] ."'><button class='btn btn-primary btn-sm rounded-0' type='button' data-toggle='tooltip'";   echo " data-placement='top' title='Unsuspend User'><i class='fa fa-check-square'></i></button></a>
                          </li>";
                        }else{
                        echo "<li class='list-inline-item'>
                        <a href='./listuser.php?suspendID=". $crops['id'] ."'><button class='btn btn-warning btn-sm rounded-0' type='button' data-toggle='tooltip'";   echo " data-placement='top' title='Suspend User'><i class='fa fa-ban'></i></button></a>
                        </li>";}
                        echo "<li class='list-inline-item'>
                        <a href='./listuser.php?deleteCrop=". $crops['id'] ."'><button class='btn btn-danger btn-sm rounded-0' type='button' data-toggle='tooltip'";   echo " data-placement='top' title='Delete User'><i class='fa fa-trash'></i></button></a>
                        </li>
                       </ul></td></tr>";

            } ?>
          </tbody>
        </table>
      </div><!-- table-wrapper -->
    </div><!-- section-wrapper -->

  </div><!-- container -->
</div><!-- slim-mainpanel -->

<div class="slim-footer">
  <div class="container">
  </div><!-- container -->
</div><!-- slim-footer -->

<script src="../lib/jquery/js/jquery.js"></script>
<script src="../lib/popper.js/js/popper.js"></script>
<script src="../lib/bootstrap/js/bootstrap.js"></script>
<script src="../lib/jquery.cookie/js/jquery.cookie.js"></script>
<script src="../lib/datatables/js/jquery.dataTables.js"></script>
<script src="../lib/datatables-responsive/js/dataTables.responsive.js"></script>
<script src="../lib/select2/js/select2.min.js"></script>

<script src="../assets/js/slim.js"></script>
<script>
  $(function(){
    'use strict';

    $('#datatable1').DataTable({
      responsive: true,
      language: {
        searchPlaceholder: 'Search...',
        sSearch: '',
        lengthMenu: ''
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
