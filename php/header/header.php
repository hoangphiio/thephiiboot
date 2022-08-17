<?php 
    if($index_pages == true || $detail_pages == true || $addcart_pages == true)//có nhiêu thêm nhiêu
    {
        include($level . data_path . 'login__function.php');
    }
?>
<header id="header">
    <div class="container">
        <div class="menu">
            <div class="menu__header--logo">
                <a href="<?php echo $level . 'index.php' ?>" class="menu__header img-logo">
                    <img src="<?php echo $level . img_path . 'img-logo/logo.png' ?>" alt="" />
                </a>
                <div class="menu__header--icon">
                    <?php if (isset($_SESSION['taikhoan']) || !empty($_SESSION['taikhoan'])) : ?>
                    <div class="logout">
                        <p><?php echo $_SESSION['taikhoan'] ?> | <a
                                href="<?php echo $level . data_path . 'logout__function.php' ?>">Đăng
                                xuất</a></p>
                    </div>
                    <?php endif ?>
                    <?php if (!isset($_SESSION['taikhoan']) || empty($_SESSION['taikhoan'])) : ?>
                    <a class="account" id="modal-account" title="Tài khoản">
                        <span>
                            <i class="fas fa-user-circle"></i>
                        </span>
                    </a>
                    <?php endif ?>
                    <div id="myModal" class="modal">
                        <!-- Modal content -->
                        <div class="modal-content">
                            <div class="modal-content__pagelogin">
                                <span class="close">&times;</span>
                                <p>ĐĂNG NHẬP</p>
                            </div>
                            <form method="POST" >
                                <div class="modal-content__listlogin">
                                    <div class="modal-content__input">
                                        <div class="modal-content__username">
                                            <label for="username">
                                                <p>Tên tài khoản</p>
                                            </label>
                                            <input type="text" placeholder="Tên đăng nhập" name="taikhoan" />
                                        </div>
                                        <div class="modal-content__password">
                                            <label for="psw">
                                                <p>Mật khẩu</p>
                                            </label>
                                            <input type="password" placeholder="Mật khẩu" name="password" required />
                                        </div>
                                    </div>
                                    <div class="modal-content__rememberlogin">
                                        <label>
                                            <input type="checkbox" checked="checked" name="remember" />
                                            Nhớ tài khoản
                                        </label>
                                    </div>
                                    <div class="modal-content__login">
                                        <input type="submit" name="submit" value="Đăng nhập" class="hvr-grow-shadow">
                                    </div>
                                    <div class="modal-content__forgotlogin">
                                        <p>
                                            <a href="#">Quên mật khẩu?</a>
                                            <br />
                                            hoặc
                                            <a href="<?php echo $level . pages_path . 'register.php' ?>">Đăng ký</a>
                                        </p>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                    <!-- Side Bar -->
                    <a href="#" class="search" title="Tài khoản" onclick="openNav()">
                        <span>
                            <i class="fas fa-search"></i>
                        </span>
                    </a>
                    <div class="menu__header-sidebar" id="menu-header__mysearch">
                        <div class="menu-header__close">
                            <p>Tìm kiếm</p>
                            <span class="menu-hearder__btn-sidebar" onclick="closeNav()"
                                id="menu-header__btn-close">&times;</span>
                        </div>
                        <div class="menu-header__title-search">
                            <input type="text" placeholder="Tìm kiếm sản phẩm" size="30" maxlength="40"
                                class="menu-header__search" />
                            <button class="menu-header__btnsearch">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                    <!-- Side Bar -->

                    <a href="<?php echo $level . pages_path . 'addcart.php' ?>" class="cart" title="Giỏ hàng"
                        onclick="openNav1()">
                        <span>
                            <i class="fas fa-shopping-cart"></i>
                        </span>
                    </a>
                    <div class="menu__header-sidebar" id="menu-header__myaddcart">
                        <div class="menu-header__close">
                            <p>Giỏ hàng</p>
                            <span class="menu-hearder__btn-sidebar" onclick="closeNav1()"
                                id="menu-header__btn-close">&times;</span>
                        </div>
                        <div class="menu__header-cart">
                            <div class="menu-header__cartview">
                                <table class="menu-header__addcart">
                                    <tbody>
                                        <td>
                                            <tr>
                                                <p>Hiện chưa có sản phẩm nào được thêm</p>
                                            </tr>
                                        </td>
                                    </tbody>
                                </table>
                            </div>
                            <span class="menu-header__line"></span>
                            <div class="menu-header__totaltable">
                                <table class="menu-header__listbill">
                                    <tbody>
                                        <tr>
                                            <td class="menu-header__text-left">TỔNG TIỀN:</td>
                                            <td class="menu-header__text-right" id="total-cart">
                                                0₫
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="menu-header__listhover">
                                    <tr>
                                        <td class="menu-header__hover-left hvr-shutter-in-vertical">
                                            <p>XEM GIỎ HÀNG</p>
                                        </td>
                                        <td class="menu-header__hover-right hvr-shutter-in-vertical">
                                            <p>THANH TOÁN</p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="menu-header__bars" id="menu-header__mybars">
                        <a onclick="myFunction()" class="menu-header__iconrs">
                            <i class="fas fa-bars" id="menu-header__barrs"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu__nav" id="menu__nav-responsive">
            <ul class="menu__nav--main">
                <li class="menu__nav--dropdown">
                    <div class="menu__nav--title hvr-underline-from-center">
                        <a href="#" title="Giày Nam"> Giày Nam</a>
                        <i class="fas fa-sort-down"></i>
                    </div>
                    <div class="menu__nav--dropdown-list">
                        <div class="menu__nav--all">
                            <ul class="menu__nav--dropdown-shoesmen">
                                <li>
                                    <a href="#" title="CHELSEA BOOT" class="hvr-underline-from-center">
                                        CHELSEA BOOT
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="DERBY" class="hvr-underline-from-center">
                                        DERBY
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="HARNESS BOOT" class="hvr-underline-from-center">
                                        HARNESS BOOT
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="ZIP BOOT" class="hvr-underline-from-center">
                                        ZIP BOOT
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="COMBAT BOOT" class="hvr-underline-from-center">
                                        COMBAT BOOT
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="OXFORD" class="hvr-underline-from-center">
                                        OXFORD
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="MONKSTRAP" class="hvr-underline-from-center">
                                        MONKSTRAP
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class="menu__nav--dropdown">
                    <div class="menu__nav--title hvr-underline-from-center">
                        <a href="#" title="Giày Nam"> Giày nữ</a>
                        <i class="fas fa-sort-down"></i>
                    </div>
                    <div class="menu__nav--dropdown-list">
                        <div class="menu__nav--all">
                            <ul class="menu__nav--dropdown-shoesmen">
                                <li>
                                    <a href="#" title="COMBAT BOOT" class="hvr-underline-from-center">
                                        COMBAT BOOT</a>
                                </li>
                                <li>
                                    <a href="#" title="CHELSEABOOT NỮ" class="hvr-underline-from-center">CHELSEABOOT
                                        NỮ</a>
                                </li>
                                <li>
                                    <a href="#" title="DERBY" class="hvr-underline-from-center">
                                        DERBY
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class="menu__nav--dropdown">
                    <div class="menu__nav--title hvr-underline-from-center">
                        <a href="#" title="Giày Nam"> Phụ kiện</a>
                        <i class="fas fa-sort-down"></i>
                    </div>
                    <div class="menu__nav--dropdown-list">
                        <div class="menu__nav--all">
                            <ul class="menu__nav--dropdown-shoesmen">
                                <li>
                                    <a href="#" title="CHAIN" class="hvr-underline-from-center">
                                        CHAIN</a>
                                </li>
                                <li>
                                    <a href="#" title="BANDANA" class="hvr-underline-from-center">BANDANA</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class="menu__nav--dropdown">
                    <div class="menu__nav--title hvr-underline-from-center">
                        <a href="#" title="Giày Nam"> Giới thiệu</a>
                    </div>
                </li>

                <li class="menu__nav--dropdown">
                    <div class="menu__nav--title hvr-underline-from-center">
                        <a href="#" title="Giày Nam"> Lối sống đẹp</a>
                        <i class="fas fa-sort-down"></i>
                    </div>
                    <div class="menu__nav--dropdown-list">
                        <div class="menu__nav--all">
                            <ul class="menu__nav--dropdown-shoesmen">
                                <li>
                                    <a href="#" title="BEAUTIFUL LIFESTYLE" class="hvr-underline-from-center">
                                        BEAUTIFUL LIFESTYLE
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="CÁC TIP VỀ THỜI TRANG" class="hvr-underline-from-center">CÁC TIP
                                        VỀ THỜI TRANG</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class="menu__nav--dropdown">
                    <div class="menu__nav--title hvr-underline-from-center">
                        <a href="#" title="Giày Nam"> Chính sách</a>
                        <i class="fas fa-sort-down"></i>
                    </div>
                    <div class="menu__nav--dropdown-list">
                        <div class="menu__nav--all">
                            <ul class="menu__nav--dropdown-shoesmen">
                                <li>
                                    <a href="#" title="CHÍNH SÁCH ĐỔI HÀNG" class="hvr-underline-from-center">
                                        CHÍNH SÁCH ĐỔI HÀNG
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="CHÍNH SÁCH BẢO HÀNH" class="hvr-underline-from-center">
                                        CHÍNH SÁCH BẢO HÀNH
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="CHÍNH SÁCH THANH TOÁN" class="hvr-underline-from-center">
                                        CHÍNH SÁCH THANH TOÁN
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="HÌNH THỨC VẬN CHUYỂN" class="hvr-underline-from-center">
                                        HÌNH THỨC VẬN CHUYỂN
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="CHÍNH SÁCH BẢO MẬT" class="hvr-underline-from-center">
                                        CHÍNH SÁCH BẢO MẬT
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="CHÍNH SÁCH BẢO VỆ THÔNG TIN CÁ NHÂN"
                                        class="hvr-underline-from-center">
                                        CHÍNH SÁCH BẢO VỆ THÔNG TIN CÁ NHÂN
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</header>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("modal-account");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
    modal.style.transition = "all 5s ease 5.8s";
};

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
};
</script>

<script>
function myFunction() {
    var x = document.getElementById("menu__nav-responsive");
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    if (x.className === "menu__nav") {
        x.className += " responsive";
        document.getElementById("menu-header__barrs").style.color = "white";
    } else {
        x.className = "menu__nav";
        document.body.style.backgroundColor = "white";
        document.getElementById("menu-header__barrs").style.color = "black";
    }
}
</script>

<script>
function openNav() {
    document.getElementById("menu-header__mysearch").style.width = "30%";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("menu-header__mysearch").style.width = "0";
    document.body.style.backgroundColor = "white";
}
</script>