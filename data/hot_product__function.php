<?php
include_once('config.php');
$level = lv0;
include_once($level. 'DB.php');

$view1 = DP::run_query("SELECT * FROM ct_sanpham WHERE loai_sanpham = 1",[], 2);
$view2 = DP::run_query("SELECT * FROM ct_sanpham WHERE loai_sanpham = 2",[], 2);
?>