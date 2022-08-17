<?php

if ($index_pages == true) {
    $level = lv0;
    include_once('config.php');
} else if ($index_pages == false) {
    $level = lv1;
    include_once('../config.php');
}
include_once($level . 'DB.php');
if (isset($_POST['submit'])) {
    $username = $_POST['taikhoan'];
    $password = $_POST['password'];
    $listAcc = DP::run_query("select * from khachhang", [], 2);

    if (empty($username) || empty($password)) {
        $error = "Vui lòng nhập đầy đủ thông tin.";
        echo "<script type='text/javascript'>alert('$error');</script>";
        echo "<script type='text/javascript'>history.go(-1);</script>";
    } else {
        foreach ($listAcc as $acc) {
            if ($username == $acc['taikhoan'] && $password == $acc['password']) {
                $_SESSION['taikhoan'] = $acc['taikhoan'];
                // header("location:" .$level.'index.php');
            } else {
                $error = "Tài khoản hoặc mật khẩu không chính xác.";
                echo "<script type='text/javascript'>alert('$error');</script>";
                echo "<script type='text/javascript'>history.go(-1);</script>";
            }
        }
    }
}
