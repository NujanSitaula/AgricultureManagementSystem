<?php

$isActive = 6;


    require "./header.php";

    if(isset($_GET['approveID'])){
      $deleteCrop = $_GET['approveID'];
      $deleteQuery = mysqli_query($con, "UPDATE `ams_users` SET `Environment`='vendor' WHERE id= '$deleteCrop'");
      $deleteQuery = mysqli_query($con, "UPDATE `ams_approval` SET `status`= 1 WHERE id= '$deleteCrop'");
    }
    if(isset($_GET['declineID'])){
      $userID = $_GET['declineID'];
      $suspendQuery = mysqli_query($con, "UPDATE `ams_approval` SET `status`= '3' WHERE `id` = '$userID'");
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
      <label class="section-title">View Crops</label>
      <p class="mg-b-20 mg-sm-b-40">View history of total crops you've added.</p>

      <div class="table-wrapper">
        <table id="datatable1" class="table display responsive nowrap">
          <thead>
            <tr>
              <th class="wd-15p">Full Name</th>
              <th class="wd-15p">Email</th>
              <th class="wd-20p">Phone</th>
              <th class="wd-25p">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $query = "SELECT * FROM ams_approval WHERE status = 0";
            $result = mysqli_query($con, $query);
             while($crops = mysqli_fetch_array($result, MYSQLI_ASSOC)){
               $cropID = $crops['id'];
               $usertheQuery = mysqli_query($con, "SELECT * FROM ams_users WHERE id = $cropID");
               while($getResult = mysqli_fetch_array($usertheQuery)){

              echo "<tr><td>" . $getResult['Name'] . " " . $getResult['Surname'] . "</td><td>" . $getResult['Email'] . "</td><td>" . $getResult['Phone'] . " </td> <td><ul class='list-inline m-0'>";
                        echo "<li class='list-inline-item'>
                        <a href='./approval.php?approveID=". $getResult['id'] ."'><button class='btn btn-success btn-sm rounded-0' type='button' data-toggle='tooltip'";   echo " data-placement='top' title='Approve'><i class='fa fa-check'></i></button></a>
                        </li>
                        <li class='list-inline-item'>
                        <a href='./approval.php?declineID=". $getResult['id'] ."'><button class='btn btn-danger btn-sm rounded-0' type='button' data-toggle='tooltip'";   echo " data-placement='top' title='Deline'><i class='fa fa-times'></i></button></a>
                        </li>
                       </ul></td></tr>";

            }} ?>
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
