<?php
$isActive = 3;
require "./header.php";

$userIDinvoice = $countUser['id'];
// echo $userIDinvoice;
$getInvoice = "SELECT * FROM `ams_allinvoice` WHERE id = '$userIDinvoice'";
$result = mysqli_query($con, $getInvoice);

// // $getTestData = mysqli_num_rows($result);
// while($getAllInvoice = mysqli_fetch_array($result, MYSQLI_ASSOC)){
//   echo $getAllInvoice['id'];
//
// }

?>
<div class="slim-mainpanel">
  <div class="container">
    <div class="slim-pageheader">
      <ol class="breadcrumb slim-breadcrumb">
      </ol>
      <h6 class="slim-pagetitle">View Invoice</h6>
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
      <label class="section-title">View Invoice</label>
      <p class="mg-b-20 mg-sm-b-40">View history of total total invoices.</p>

      <div class="table-wrapper">
        <table id="datatable1" class="table display responsive nowrap">
          <thead>
            <tr>
              <th class="wd-15p">Invoice ID</th>
              <th class="wd-15p">Due Date</th>
              <th class="wd-15p">Amount</th>
              <th class="wd-25p">Status</th>
              <th class="wd-25p">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
             while($crops = mysqli_fetch_array($result, MYSQLI_ASSOC)){

               $newUserId = $crops['cropsID'];

               $listCrops = "SELECT * FROM `ams_crops` WHERE cropsID = '$newUserId'";
               $runQuery = mysqli_query($con, $listCrops);
               while($listAllCrops = mysqli_fetch_array($runQuery, MYSQLI_ASSOC)){

              echo "<tr><td>AG" . $crops['invoiceID'] . "</td><td>" . $crops['dateCreated'] . " KG </td><td>रू " . $listAllCrops['totalAmount'] . " </td><td>"; if($crops['isPaid'] == 0)
              {echo "<span class='tx-danger'>Unpaid<span>";} else{echo "<span class='tx-success'>Paid<span>";}
              echo " </td><td><ul class='list-inline m-0'>
                        <li class='list-inline-item'>
                        <a href='./viewinvoice.php?invoiceid=". $crops['invoiceID'] ."'><button class='btn btn-success btn-sm rounded-0' type='button' data-toggle='tooltip'"; if($crops['isPaid'] == 1){echo "enabled";} echo" data-placement='top' title='View'><i class='fa fa-eye'></i> View</button></a>
                        </li>
                        <li class='list-inline-item'>
                        <a href='./viewcrops.php?deleteCrop=". $crops['invoiceID'] ."'><button class='btn btn-danger btn-sm rounded-0' type='button' data-toggle='tooltip'";  if($crops['isPaid'] == 1){echo "disabled";} echo " data-placement='top' title='Delete'><i class='fa fa-trash'></i> Cancle</button></a>
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
