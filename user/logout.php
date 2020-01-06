<?php

define('PAGE', 'LogOut');
define('TITLE', 'logout');
define('MENU', 'menu');
session_start();
session_destroy();
echo "<script> location.href='login.php';</script>";


?>