<?php
 require "./header.php";

  $query = mysqli_query($con, "SELECT * FROM ams_crops");

 ?>
 <div class="slim-mainpanel">
   <div class="container">
     <div class="slim-pageheader">
       <ol class="breadcrumb slim-breadcrumb">

       </ol>
       <h6 class="slim-pagetitle">Welcome User!</h6>
     </div><!-- slim-pageheader -->

     <div class="section-wrapper mg-t-20">
       <label class="section-title">CHECKOUT</label>
       <p class="mg-b-20 mg-sm-b-40">Explore the most popular crops of this week.</p>

       <div class="card card-invoice">
         <div class="card-body">
           <div class="table-responsive mg-t-40">
             <table class="table table-invoice">
               <thead>
                 <tr>
                   <th class="wd-20p">Image</th>
                   <th class="wd-40p">Crop Name</th>
                   <th class="tx-center">Description</th>
                   <th class="tx-right">QUTY</th>
                   <th class="tx-right">Amount</th>
                 </tr>
               </thead>
               <tbody>
                 <?php
                 $checkUserID = $countUser['id'];
                 $cartQuery = "SELECT ams_cart.id, ams_cart.cropID, ams_crops.cropsName, ams_crops.cropsPhoto, ams_crops.cropsDescription, ams_crops.farmersRate FROM ams_cart INNER JOIN ams_crops ON ams_cart.cropID = ams_crops.cropsID";
                 $getcartItems = mysqli_query($con, $cartQuery);
                  while($cartItems = mysqli_fetch_array($getcartItems, MYSQLI_ASSOC)){
                    ?>
                 <tr>
                   <td><image src='./assets/uploads/<?php echo $cartItems['cropsPhoto'];  ?>' class='img-fluid img-thumbnail'></td>
                   <td class="tx-12"><?php echo $cartItems['cropsName'];  ?></td>
                   <td class="tx-center"><?php echo $cartItems['cropsDescription'];  ?></td>
                   <td class="tx-right">1</td>
                   <td class="tx-right"><?php echo $cartItems['farmersRate'];  ?></td>
                 </tr>
                 <?php
                 $allproductId[] = $cartItems['cropID'];


                } ?>
                 <tr>
                   <td colspan="2" rowspan="4" class="valign-middle">
                     <div class="invoice-notes">
                       <label class="section-label-sm tx-gray-500">Notes</label>
                       <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                     </div><!-- invoice-notes -->
                   </td>
                   <td class="tx-right">Sub-Total</td>
                   <td colspan="2" class="tx-right"><?php
                   $allsum = mysqli_query($con, "SELECT SUM(ams_crops.farmersRate) FROM ams_cart INNER JOIN ams_crops ON ams_cart.cropID = ams_crops.cropsID");
                   $sum = mysqli_fetch_array($allsum, MYSQLI_ASSOC);
                   echo "Rs. " . $sum['SUM(ams_crops.farmersRate)'];
                   $total = $sum['SUM(ams_crops.farmersRate)'];
                   $tax = 13/100 * $total;
                   $nettotal = $tax + $total;
                   $gatewaytotal = $nettotal * 100;
                    ?></td>
                 </tr>
                 <tr>
                   <td class="tx-right">Tax (13%)</td>
                   <td colspan="2"  class="tx-right"><?php echo "Rs. " .$tax; ?></td>
                 </tr>
                 <tr>
                   <td class="tx-right">Discount</td>
                   <td colspan="2" class="tx-right">Rs. 0.00</td>
                 </tr>
                 <tr>
                   <td class="tx-right tx-uppercase tx-bold tx-inverse">Total Due</td>
                   <td colspan="2" class="tx-right"><h4 class="tx-primary tx-bold tx-lato"><?php echo "Rs. " . $nettotal;  ?></h4></td>
                 </tr>
               </tbody>
             </table>
           </div><!-- table-responsive -->

           <hr class="mg-b-60">


           <button class="btn btn-primary btn-block" id="payment-button">Pay Via Khalti</button>
         </div><!-- card-body -->
       </div>
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

 <script>
     var config = {
         // replace the publicKey with yours
         "publicKey": "test_public_key_10ec5b1d56564e05916e2f1f2ce7cbc5",
         "productIdentity": "<?php foreach($allproductId as $allproduct){
           echo $allproduct . ",";
         }?>",
         "productName": "Agrim CheckOut",
         "productUrl": "http://amsystem.codes",
         "paymentPreference": [
             "KHALTI",
             "EBANKING",
             "MOBILE_BANKING",
             "CONNECT_IPS",
             "SCT",
             ],
         "eventHandler": {
             onSuccess (payload) {
                 // hit merchant api for initiating verfication
                 console.log(payload);
                 jQuery.ajax({
                   type: 'post',
                   url: 'payment.php',
                   data: "tranx_id="+payload.idx+"&amt="+payload.amount+"&productname="+payload.product_identity+"&mobile="+payload.mobile,
                   success:function(result){
                     window.location.href="success.php";
                   }
                 });
             },
             onError (error) {
                 console.log(error);
             },
             onClose () {
                 console.log('widget is closing');
             }
         }
     };

     var checkout = new KhaltiCheckout(config);
     var btn = document.getElementById("payment-button");
     btn.onclick = function () {
         // minimum transaction amount must be 10, i.e 1000 in paisa.
         checkout.show({amount: <?php echo $gatewaytotal;  ?>});
     }
 </script>

 <script src="./js/slim.js"></script>
 </body>
 </html>
