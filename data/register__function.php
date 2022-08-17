<?php
include_once('../config.php');
$level = lv1;
include_once($level . 'DB.php');

if(isset($_POST['submit-regis']))
{
    $hoten = $_POST['tenkh'];
    $email = $_POST['email'];
    $diachi = $_POST['diachi'];
    $taikhoan = $_POST['taikhoan'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    $checkusername =  DP::run_query("SELECT * FROM khachhang", [], 2);
    $checkuser = 0;
    $checkmail = 0;
    $password = md5($password);
    foreach ($checkusername as $check) {
        if ($check['taikhoan'] == $taikhoan)
            $checkuser = 1;
    }
    if ($checkuser == 1)
        $error1 = "Tài khoản đã được sử dụng.";
        echo "<script type='text/javascript'>alert('$error1');</script>";
        echo "<script type='text/javascript'>history.go(-1);</script>";
    
    
    foreach ($checkusername as $check1) {
        if ($check1['email'] == $email)
            $checkmail = 1;
    }
    
    if ($checkmail == 1)
        $error1 = "Email này đã được sử dụng.";
        echo "<script type='text/javascript'>alert('$error1');</script>";
        echo "<script type='text/javascript'>history.go(-1);</script>";
    
    if ($password == $repassword && $checkuser == 0 && $checkmail == 0) {
        $result1 = DP::run_query("INSERT INTO khachhang(tenkh, taikhoan, password, email, diachi) values(?,?,?,?,?) ", [$hoten, $taikhoan, $password, $email, $diachi], 1);
        header('location:' .$level .'index.php');
    }
}
?>