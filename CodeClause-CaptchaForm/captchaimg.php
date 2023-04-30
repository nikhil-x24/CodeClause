<?php session_start();
require("captcha.php");
$str = rand(10000,99999);
$_SESSION['captcha'] = $str;
captcha($str);
?>