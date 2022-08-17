<?php
include_once('../config.php');
$level = lv1;
include_once($level. 'DB.php');
$id_sanpham = $_GET['id_sanpham'];
$viewtail = DP::run_query("SELECT * FROM ct_sanpham WHERE id_sanpham=?",[$id_sanpham], 2);
?>