<?php
include_once('../config.php');
$level = lv1;
include_once($level . 'DB.php');
session_start();
unset($_SESSION['taikhoan']);
header('location:' .$level.'index.php');
?>