<?php

session_start();

unset($_SESSION['EMAIL']);
unset($_SESSION['IS_LOGIN']);

header("Location: auth.php");

 ?>
