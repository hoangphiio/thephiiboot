<?php
include_once("../config.php");
$level = lv1;
include_once($level."DB.php");
session_start();
$id_sanpham=$_GET['id_sanpham'];
    if($id_sanpham == 0)
    {
        unset($_SESSION['cart']);
    }
    else
    {
    unset($_SESSION['cart'][$id_sanpham]);
    }
header("location:".$level.pages_path."addcart.php");
exit();
?>