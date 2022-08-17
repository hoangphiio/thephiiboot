<?php
include_once("../config.php");
$level = lv1;
include_once($level . "DB.php");
if (isset($_GET['id_sanpham'])) {
    $id = $_GET['id_sanpham'];
    $sanpham = DP::run_query("SELECT * FROM ct_sanpham WHERE id_sanpham =?", [$id], 2);
    if ($sanpham[0]['soluongtonkho'] > 0) {
        if (isset($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id]['quantity'] += 1;
        } else {
            $name = $sanpham[0]['tensanpham'];
            $price = $sanpham[0]['giasanpham'];
            $img = $sanpham[0]['hinhdaidien1'];
            $_SESSION['cart'][$id] = array("id_sanpham" => $id, "hinhdaidien1" => $img, "tensanpham" => $name, "giasanpham" => $price, "quantity" => 1);
        }
    }
}
