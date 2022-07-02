<?php
$isActive = 3;
      require "./header.php";

      $invoiceID = $_GET['invoiceid'];

      $getInvoiceQuery = "SELECT * FROM ams_allinvoice WHERE invoiceID = '$invoiceID'";
      $newquery = mysqli_query($con, $getInvoiceQuery);
      $fetchinvoice = mysqli_fetch_array($newquery, MYSQLI_ASSOC);

?>
<div class="slim-mainpanel">
  <div class="container">
    <div class="slim-pageheader">
      <ol class="breadcrumb slim-breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Invoice Page</li>
      </ol>
      <h6 class="slim-pagetitle">Invoice Page</h6>
    </div><!-- slim-pageheader -->

    <div class="card card-invoice">
      <div class="card-body">
        <div class="invoice-header">
          <h1 class="invoice-title">Invoice</h1>
          <div class="billed-from">
            <h6><?php echo $countUser['Name'] . " " . $countUser['Surname'];?></h6>
            <p style="text-transform: capitalize;"><?php  echo $countUser['localAddress'] . ", " . $countUser['districtAddress'];?> Nepal.<br>
            Tel No: <?php echo $countUser['Phone']; ?><br>
            Email: <?php echo $countUser['Email']; ?></p>
          </div><!-- billed-from -->
        </div><!-- invoice-header -->

        <div class="row mg-t-20">
          <div class="col-md">
            <label class="section-label-sm tx-gray-500">Billed To</label>
            <div class="billed-to">
              <h6 class="tx-gray-800">Agrim, Inc.</h6>
              <p>Naxal, 44600, Kathmandu, Nepal.<br>
              Tel No: 9817089174<br>
              Email: contact@amsystem.codes</p>
            </div>
          </div><!-- col -->
          <div class="col-md">
            <label class="section-label-sm tx-gray-500">Invoice Information</label>
            <p class="invoice-info-row">
              <span>Invoice No</span>
              <span>AG-<?php echo $fetchinvoice['invoiceID']  ?></span>
            </p>
            <p class="invoice-info-row">
              <span>Status</span>
              <?php if($fetchinvoice['isPaid'] == 1){
              echo"<span class='text-success'>Paid</span>";}else{
                echo"<span class='text-danger'>Unpaid</span>";
              }
              ?>
            </p>
            <p class="invoice-info-row">
              <span>Issue Date:</span>
              <span><?php echo $fetchinvoice['dateCreated']  ?></span>
            </p>
            <p class="invoice-info-row">
              <span>Due Date:</span>
              <span><?php echo $fetchinvoice['dateCreated']  ?></span>
            </p>
          </div><!-- col -->
        </div><!-- row -->

        <div class="table-responsive mg-t-40">
          <table class="table table-invoice">
            <thead>
              <tr>
                <th class="wd-20p">Crop Name</th>
                <th class="wd-40p">Description</th>
                <th class="tx-center">QNTY</th>
                <th class="tx-right">Unit Price</th>
                <th class="tx-right">Amount</th>
              </tr>
            </thead>
            <?php
              $getCropsName = $fetchinvoice['cropsID'];
              $invoiceFetch = "SELECT * FROM ams_crops WHERE cropsID = '$getCropsName'";
              $invoiceQuery = mysqli_query($con, $invoiceFetch);

              $getInvoiceCropsData = mysqli_fetch_array($invoiceQuery, MYSQLI_ASSOC);




              ?>
            <tbody>
              <tr>
                <td><?php echo $getInvoiceCropsData['cropsName'];  ?></td>
                <td class="tx-12"><?php echo $getInvoiceCropsData['cropsDescription']; ?></td>
                <td class="tx-center"><?php echo $getInvoiceCropsData['quantity']; ?></td>
                <td class="tx-right">रू <?php echo $getInvoiceCropsData['farmersRate']; ?></td>
                <td class="tx-right">रू <?php echo $getInvoiceCropsData['totalAmount'];   ?></td>
              </tr>
              <tr>
                <td></td>
                <td class="tx-12"></td>
                <td class="tx-center"></td>
                <td class="tx-right"></td>
                <td class="tx-right"></td>
              </tr>
              <tr>
                <td></td>
                <td class="tx-12"></td>
                <td class="tx-center"></td>
                <td class="tx-right"></td>
                <td class="tx-right"></td>
              </tr>
              <tr>
                <td></td>
                <td class="tx-12"></td>
                <td class="tx-center"></td>
                <td class="tx-right"></td>
                <td class="tx-right"></td>
              </tr>
              <tr>
                <td colspan="2" rowspan="4" class="valign-middle">
                  <div class="invoice-notes">
                    <label class="section-label-sm tx-gray-500">Notes</label>
                    <p><?php echo $fetchinvoice['invoiceNote'];  ?> </p>
                  </div><!-- invoice-notes -->
                </td>
                <td class="tx-right">Sub-Total</td>
                <td colspan="2" class="tx-right">रू <?php echo $getInvoiceCropsData['totalAmount'];   ?></td>
              </tr>
              <tr>
                <td class="tx-right">Tax (0%)</td>
                <td colspan="2"  class="tx-right">रू 0.00</td>
              </tr>
              <tr>
                <td class="tx-right">Discount</td>
                <td colspan="2" class="tx-right">रू 0.00</td>
              </tr>
              <tr>
                <td class="tx-right tx-uppercase tx-bold tx-inverse">Total Due</td>
                <td colspan="2" class="tx-right"><h4 class="tx-primary tx-bold tx-lato">रू <?php echo $getInvoiceCropsData['totalAmount'];   ?></h4></td>
              </tr>
            </tbody>
          </table>
        </div><!-- table-responsive -->

        <hr class="mg-b-60">
        <?php
        if($fetchinvoice['isPaid'] == 0){
        echo"<a href='./requestpay.php' class='btn btn-primary btn-block'>Request Payment</a>";
      }
      echo"<a href='./requestpay.php' class='btn btn-primary btn-block'>Cancel</a>";
        ?>

      </div><!-- card-body -->
    </div><!-- card -->

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

<script src="../assets/js/slim.js"></script>
</body>
</html>
