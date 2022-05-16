<?php $servername="localhost"; $dbname="ams"; $username="root"; $password="root"; $con = mysqli_connect($servername, $username, $password, $dbname); if(!$con){header("Location: ../install/");}
