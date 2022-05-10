<h1>Thanks For The Purchase!</h1>

<?php require "./config.php";


$query = mysqli_query($con, "SELECT * FROM ams_transaction WHERE datePaid = '2022-05-04 13:52:29'");

$check = mysqli_fetch_array($query, MYSQLI_ASSOC);

$row = $check["productID"];

$array =  explode(",", $row);

foreach ($array as $key) {

  if(!empty($key)){

    $query = mysqli_query($con, "SELECT * FROM ams_crops WHERE cropsID= '$key'");
    $crops = mysqli_fetch_array($query, MYSQLI_ASSOC);
    echo $crops['cropsName'];

  }


  // code...
}





?>
