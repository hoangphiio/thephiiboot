<section id="breadcrumb">
    <div class="breadcrumb">
        <div class="breadcrumb__arrows">
            <div class="breadcrumb__arrows--index">
                <a href="<?php echo $level . 'index.php' ?>">
                    <p>TRANG CHỦ / &nbsp;</p>
                </a>
            </div>
            <div class="breadcrumb__arrows--index2">
                <a href="">
                    <p>TẤT CẢ SẢN PHẨM / &nbsp;</p>
                </a>
            </div>
            <div class="breadcrumb__arrows--index3">
                <a href="">
                    <p>ĐĂNG KÝ</p>
                </a>
            </div>
        </div>
    </div>
</section>
<main class="register">
    <div class="register_container">
        <div class="register__row">
            <div class="resgister__col-01">
                <div class="register__img">
                    <img src="../img/img-register/img-resgister-01.jpg" alt="">
                </div>
                <div class="register__title">
                    <div class="register__title--text">
                        <h2>Tạo tài khoản</h2>
                        <p>Chất lượng tạo nên sự uy tín.</p>
                    </div>
                </div>
            </div>
            <div class="resgister__col-02">
                <form method="POST" action="<?= $level . data_path . 'register__function.php' ?>">
                    <div class="resgiter__userbox">
                        <div class="resgister__userbox--name">
                            <input type="text" name="tenkh" placeholder="Họ và tên" required id="username" size="30">
                        </div>
                        <div class="resgister__userbox--email">
                            <input type="text" name="email" placeholder="Email" id="email" size="30">
                        </div>
                        <div class="resgister__userbox--address">
                            <input type="text" name="diachi" placeholder="Địa chỉ" id="address" size="30">
                        </div>
                        <div class="resgister__userbox--account">
                            <input type="text" name="taikhoan" placeholder="Tên tài khoản" id="account" size="30">
                        </div>
                        <div class="resgister__userbox--password">
                            <input type="password" name="password" placeholder="Mật khẩu" id="password" size="30">
                        </div>
                        <div class="resgister__userbox--repassword">
                            <input type="password" name="repassword" placeholder="Nhập lại mật khẩu" id="repassword" size="30">
                        </div>
                    </div>
                    <div class="register__button" name="button_register">
                        <input type="submit" name="submit-regis" value="đăng ký">
                    </div>
            </div>
            </form>
        </div>
    </div>
</main>