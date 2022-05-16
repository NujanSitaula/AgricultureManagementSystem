<html>
<head>
    <script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>
    <script
  src="https://code.jquery.com/jquery-3.6.0.js"></script>
</head>
<body>
    <button style="background-color: purple; color: white; padding: 10px;" id="payment-button">Pay with Khalti</button>
    <!-- Place this where you need payment button -->
    <!-- Paste this code anywhere in you body tag -->
    <script>
        var config = {
            // replace the publicKey with yours
            "publicKey": "test_public_key_10ec5b1d56564e05916e2f1f2ce7cbc5",
            "productIdentity": "1234567890",
            "productName": "Dragon",
            "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
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
                      data: "tranx_id="+payload.idx+"&amt="+payload.amount+"&productname="+payload.product_name+"&mobile="+payload.mobile,
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
            checkout.show({amount: 1000});
        }
    </script>

    <script type="text/javascript">

    </script>
</body>
</html>
