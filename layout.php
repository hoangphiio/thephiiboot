<!DOCTYPE html>
<html lang="en">

<?php
include($level . php_path . head_path . 'head.php');
include_once($level . 'DB.php');
session_start();
?>

<body>
    <?php
    include_once($level . php_path  . header_path . 'header.php');
    include_once($level.data_path.'login__function.php');

    ?>
    <?php
    if ($index_pages == true) {
        include_once($level . php_path . content_path . 'wrapper.php');
        include($level . php_path . content_path . 'hot_product.php');
        include($level . php_path . content_path . 'product_collection1.php');
        include($level . php_path . content_path . 'content_banner.php');
        include($level . php_path . content_path . 'product_collection2.php');
        include($level . php_path . content_path . 'slideshow.php');
        include($level . php_path . content_path . 'swiper.php');


    }
    if ($logout_pages == true) {
        include_once($level . data_path . 'logout__function.php');
    }
    if ($register_pages == true) {
        include_once($level . php_path . content_path . 'register.php');
        include($level . data_path . 'register__function.php');
    }
    if ($detail_pages == true) {
        include_once($level . php_path . content_path . 'detail_product.php');
    }
    if ($addcart_pages == true) {
        include_once($level . php_path . content_path . 'shopping_cart.php');
    }
    ?>
    <?php
    include_once($level . php_path . footer_path . 'footer.php');
    ?>
</body>

</html>