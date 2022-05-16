<?php

class SetupDatabase
{
    private $username;
    private $password;
    private $server;
    private $dbname;
    private $mysqli;

    function __construct($username, $password, $server, $dbname)
    {
        $this->username = $username;
        $this->password = $password;
        $this->server = $server;
        $this->dbname = $dbname;
        $this->mysqli = new mysqli($this->server, $this->username, $this->password);
    }

    function ifExist()
    {

        if ($this->mysqli->connect_error) {

            header("Location: ");
            exit();
        }

        $database = $this->mysqli->query("SHOW DATABASES LIKE '$this->dbname'");
        $row = $database->fetch_assoc();

        if (!empty($row)) {

            return true;
        } else {

            return false;
        }
    }
    function databaseCreate()
    {

        if ($this->ifExist()) {

            header("Location: http://localhost/E-Challan/user_admin/Login/Login.php");
            exit();
        }

        if ($this->mysqli->query("CREATE DATABASE $this->dbname")) {

            $conn = new mysqli($this->server, $this->username, $this->password, $this->dbname);
            $queries = array(

                "CREATE TABLE `ams_allinvoice` (
  `paymentOption` varchar(11) NOT NULL,
  `invoiceID` int(11) NOT NULL,
  `cropsID` int(11) NOT NULL,
  `dateCreated` date NOT NULL DEFAULT current_timestamp(),
  `datePaid` date NOT NULL DEFAULT current_timestamp(),
  `id` int(11) NOT NULL,
  `invoiceNote` text NOT NULL,
  `isPaid` int(11) NOT NULL DEFAULT 0
);",

                "CREATE TABLE `ams_approval` (
  `approvalID` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
);",

                "CREATE TABLE `ams_cart` (
  `cartID` int(11) NOT NULL,
  `cropID` int(11) NOT NULL,
  `id` int(11) NOT NULL
);",

                "CREATE TABLE `ams_crops` (
  `id` int(11) NOT NULL,
  `cropsID` int(11) NOT NULL,
  `cropsName` varchar(50) DEFAULT 'Untitled Crops',
  `cropsPhoto` varchar(200) NOT NULL DEFAULT '',
  `quantity` varchar(50) NOT NULL DEFAULT '',
  `cropsType` varchar(100) NOT NULL,
  `farmersRate` varchar(100) NOT NULL,
  `cropsDescription` text NOT NULL,
  `cropsAge` varchar(10) NOT NULL DEFAULT '',
  `isApproved` int(11) NOT NULL DEFAULT 0,
  `totalAmount` varchar(100) NOT NULL,
  `dateAdded` date NOT NULL DEFAULT current_timestamp()
);",
"CREATE TABLE `ams_cropstype` (
  `categoryID` int(11) NOT NULL,
  `cropsType` varchar(100) NOT NULL
);",
"CREATE TABLE `ams_marketprice` (
  `marketID` int(11) NOT NULL,
  `CropName` varchar(200) NOT NULL,
  `CropMinPrice` varchar(200) NOT NULL,
  `Quantity` varchar(100) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `CropMaxPrice` varchar(100) NOT NULL,
  `CropAvgPrice` varchar(100) NOT NULL
);",
"CREATE TABLE `ams_transaction` (
  `tranxID` varchar(100) NOT NULL,
  `invoiceID` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `id` int(11) NOT NULL,
  `productID` varchar(100) NOT NULL,
  `datepaid` datetime NOT NULL DEFAULT current_timestamp(),
  `tid` int(11) NOT NULL
);",
"CREATE TABLE `ams_users` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL DEFAULT '',
  `Surname` varchar(15) NOT NULL DEFAULT '',
  `Email` varchar(50) NOT NULL DEFAULT '',
  `Phone` varchar(15) NOT NULL DEFAULT '',
  `dprofile` varchar(250) NOT NULL DEFAULT '',
  `OTP` varchar(10) NOT NULL DEFAULT '',
  `authToken` varchar(100) DEFAULT '',
  `Environment` varchar(50) NOT NULL DEFAULT 'vendor',
  `dateBirth` varchar(50) NOT NULL DEFAULT '',
  `Gender` varchar(50) NOT NULL DEFAULT '',
  `localAddress` varchar(50) NOT NULL DEFAULT '',
  `Country` varchar(20) NOT NULL DEFAULT 'Nepal',
  `provinceAddress` varchar(20) NOT NULL DEFAULT '',
  `districtAddress` varchar(20) NOT NULL DEFAULT '',
  `wadAddress` varchar(20) DEFAULT '',
  `familyMember` int(50) DEFAULT NULL,
  `isSuspended` int(11) NOT NULL DEFAULT 0
);",


                "INSERT INTO `ams_users` (`id`, `Name`, `Surname`, `Email`, `Phone`, `dprofile`, `OTP`, `authToken`, `Environment`, `dateBirth`, `Gender`, `localAddress`, `Country`, `provinceAddress`, `districtAddress`, `wadAddress`, `familyMember`, `isSuspended`) VALUES ('1', 'Hari', 'Bahadur', 'nujan@shotcoder.com.np', '9840938854', '', '', '', 'admin', '', 'male', '', 'Nepal', '', '', '', NULL, '0');",

            );

            foreach ($queries as $query) {
                $conn->query($query);
            }

            header("Location: $url");
            exit();
        } else {
            header("Location: ./installed.php");
            exit();
        }
    }
}
