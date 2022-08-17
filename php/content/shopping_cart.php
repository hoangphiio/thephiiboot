<?php include_once($level . data_path . 'addcart__function.php'); ?>
<?php
$total = 0;
$bigtotal = 0;

if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $k) {
        if (isset($k)) {
            $checkcart = true;
        }
    }
}
if ($checkcart == true) {
?>
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
                        <p> GIỎ HÀNG</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <main id="shopping-cart">
        <div class="shopping-cart">
            <div class="shopping-cart__row">
                <form method="POST">
                    <div class="shopping-cart__col">
                        <div class="shopping-cart-table">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Hình ảnh</th>
                                        <th class="p-name">Tên sản phẩm</th>
                                        <th>Giá sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Tổng tiền</th>
                                        <th><a href="<?php echo $level . data_path . "delcart__function.php?id_sanpham=" . '0' ?>"><i class="fas fa-times"></a></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($_SESSION['cart'] as $cartitem) { ?>
                                        <tr>
                                            <td class="shopping-cart__cart-pic">
                                                <img src="<?php echo $level . img_path . 'img-content/' . $cartitem['hinhdaidien1'] ?>" />
                                            </td>
                                            <td class="shopping-cart__cart-title">
                                                <h5>
                                                    <?php echo $cartitem['tensanpham'] ?>
                                                </h5>
                                            </td>
                                            <td class="shopping-cart__price"><?php echo $cartitem['giasanpham'] . '₫' ?></td>
                                            <td class="shopping-cart__qua-col">
                                                <div class="shopping-cart__quantity">
                                                    <div class="pro-qty">
                                                        <input type="number" id="1" value="<?php echo $cartitem['quantity'] ?>" name="<?php echo $cartitem['id_sanpham']  ?>" readonly />
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="shopping-cart__total-price">
                                                <?php echo $cartitem['giasanpham'] * $cartitem['quantity'] . '₫' ?></td>
                                            <td class="shopping-cart__close-td"><a href="<?php echo $level . data_path . "delcart__function.php?id_sanpham=" . '0' ?>"><i class="fas fa-times"></a></i></td>
                                        </tr>
                                    <?php
                                        $total = $cartitem['quantity'] * $cartitem['giasanpham'];
                                        $bigtotal += $total;
                                    } ?>
                                </tbody>

                            </table>
                        </div>
                        <div class="shopping-cart__button">
                            <div class="shopping-cart__continue hvr-grow-shadow">
                                <a href="#">
                                    <button>TIẾP TỤC MUA SẮM</button>
                                </a>
                            </div>
                            <div class="shopping-cart__total">
                                <div class="shopping-cart__proceed-checkout">
                                    <ul>
                                        <li class="cart-total">Tổng tiền: <span><?php echo $bigtotal . '₫' ?></span></li>
                                    </ul>
                                    <a href="#" class="proceed-btn hvr-grow-shadow">THANH TOÁN</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
<?php
} else {
    echo "You have not purchased any products!!";
}

?>