<?php
session_start();
unset($_SESSION['userid']);
unset($_SESSION['username']);
unset($_SESSION['fullname']);
$time = time() + 3600 * 24 * 30;
setcookie("userid","",$hour);
setcookie("fullname","",$hour);
setcookie("active","",$hour);
session_destroy();
header('Location: login.php');
