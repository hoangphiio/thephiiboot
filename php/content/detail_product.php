<?php include($level . data_path . 'detail_product__function.php');
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
                    <p> THE CLASSIC CHELSEA BOOT - BLACK</p>
                </a>
            </div>
        </div>
    </div>
</section>
<form method="POST">
    <main id="detail-product">
        <div class="deatail-product">
            <div class="detail-product__row">
                <?php foreach ($viewtail as $vd) { ?>
                <div class="detail-product__col-01">
                    <div class="wrapper">
                        <div class="image-gallery">
                            <aside class="thumbnails">
                                <a class="selected thumbnail"
                                    data-big="<?php echo $level . img_path . 'img-detail/' . $vd['hinh_1'] ?>">
                                    <div class="thumbnail-image"
                                        style="background-image: url('<?php echo $level . img_path . 'img-detail/' . $vd['hinh_1'] ?>')">
                                    </div>
                                </a>
                                <a class="thumbnail"
                                    data-big="<?php echo $level . img_path . 'img-detail/' . $vd['hinh_2'] ?>">
                                    <div class="thumbnail-image"
                                        style="background-image: url('<?php echo $level . img_path . 'img-detail/' . $vd['hinh_2'] ?>')">
                                    </div>
                                </a>
                                <a class="thumbnail"
                                    data-big="<?php echo $level . img_path . 'img-detail/' . $vd['hinh_3'] ?>">
                                    <div class="thumbnail-image"
                                        style="background-image: url('<?php echo $level . img_path . 'img-detail/' . $vd['hinh_3'] ?>')">
                                    </div>
                                </a>
                                <a class="selected thumbnail"
                                    data-big="<?php echo $level . img_path . 'img-detail/' . $vd['hinh_4'] ?>">
                                    <div class="thumbnail-image"
                                        style="background-image: url('<?php echo $level . img_path . 'img-detail/' . $vd['hinh_4'] ?>')">
                                    </div>
                                </a>
                                <a class="selected thumbnail"
                                    data-big="<?php echo $level . img_path . 'img-detail/' . $vd['hinh_5'] ?>">
                                    <div class="thumbnail-image"
                                        style="background-image: url('<?php echo $level . img_path . 'img-detail/' . $vd['hinh_5'] ?>')">
                                    </div>
                                </a>
                            </aside>

                            <main class="primary"
                                style="background-image: url('<?php echo $level . img_path . 'img-detail/' . $vd['hinh_1'] ?>');">
                            </main>
                        </div>

                    </div>
                </div>
                <div class="detail-product__col-02">
                    <div class="deail-product__name">
                        <h2><?php echo $vd['tensanpham'] ?> </h2>
                    </div>
                    <div class="detail-product__code">
                        <p><?php echo $vd['kytu'] ?></p>
                    </div>
                    <div class="detail-product__price">
                        <p><?php echo $vd['giasanpham'] ?>₫</p>
                    </div>
                    <div class="detail-product__installmen">
                        <p><?php echo $vd['tragop'] ?></p>
                    </div>
                    <div class="detail-product__color">
                        <p><?php echo $vd['ten_mausanpham'] ?></p>
                    </div>
                    <div class="detail-product__input-color">
                        <input id="swatch-0-black" type="radio" name="option1" value="BLACK" data-vhandle="black"
                            checked="">
                        <label for="swatch-0-black">
                            <span style="background-color: <?php echo $vd['mausanpham'] ?>;">BLACK</span>
                        </label>
                    </div>
                    <div class="detail-product__swatch">
                        <div class="detail-product__swatch--select">
                            <div data-value="39 EU" class="detail-product__swatch">
                                <input id="swatch-1-39-eu" type="radio" name="option2" value="39 EU"
                                    data-vhandle="39-eu" checked="">
                                <label for="swatch-1-39-eu">
                                    <p><?php echo $vd['size_39'] ?></sppan>
                                </label>
                            </div>
                            <div data-value="40 EU" class="detail-product__swatch">
                                <input id="swatch-1-40-eu" type="radio" name="option2" value="40 EU"
                                    data-vhandle="40-eu">
                                <label for="swatch-1-40-eu">
                                    <p><?php echo $vd['size_40'] ?></p>
                                </label>
                            </div>
                            <div data-value="41 EU" class="detail-product__swatch">
                                <input id="swatch-1-41-eu" type="radio" name="option2" value="41 EU"
                                    data-vhandle="41-eu">
                                <label for="swatch-1-41-eu">
                                    <p><?php echo $vd['size_41'] ?></p>
                                </label>
                            </div>
                            <div data-value="42 EU" class="detail-product__swatch">
                                <input id="swatch-1-42-eu" type="radio" name="option2" value="42 EU"
                                    data-vhandle="42-eu">
                                <label for="swatch-1-42-eu">
                                    <p><?php echo $vd['size_42'] ?></p>
                                </label>
                            </div>
                            <div data-value="43 EU" class="detail-product__swatch">
                                <input id="swatch-1-43-eu" type="radio" name="option2" value="43 EU"
                                    data-vhandle="43-eu">
                                <label for="swatch-1-43-eu">
                                    <p><?php echo $vd['size_43'] ?></p>
                                </label>
                            </div>
                            <div data-value="44 EU" class="detail-product__swatch">
                                <input id="swatch-1-44-eu" type="radio" name="option2" value="44 EU"
                                    data-vhandle="44-eu">
                                <label for="swatch-1-44-eu">
                                    <p><?php echo $vd['size_44'] ?></p>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="detail-product__modal">
                        <div class="detail-product__modal--p">
                            <p id="myBtn1">Hướng dẫn chọn size</p>
                        </div>
                        <!-- The Modal -->
                        <div id="myModal1" class="modal1">
                            <!-- Modal content -->
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <p>Some text in the Modal..</p>
                            </div>
                        </div>
                    </div>
                    <div class="detail-product__quantity">
                        <button type="button" id="sub" class="sub">-</button>
                        <input type="number" id="1" value="1" min="1" max="3" />
                        <button type="button" id="add" class="add">+</button>
                    </div>
                    <div class="detail-product__addcart">
                        <a href="<?php echo $level . pages_path . 'addcart.php?id_sanpham='.$vd['id_sanpham'] ?>">
                                <span class="button-addToCart">THÊM VÀO GIỎ HÀNG</span>
                        </a>
                    </div>
                    <div class="detail-product__hotline">
                        <p>Gọi đặt mua: <strong>090387915</strong></p>
                    </div>
                    <div class="detail-product__icon">
                        <div class="detail-product__icon--text">
                            <i class="far fa-newspaper"></i>
                            <p>KIỂM TRA HÀNG VÀ THÀNH TOÁN KHI <strong>NHẬN HÀNG</strong></p>
                        </div>
                        <div class="detail-product__icon--text">
                            <i class="fas fa-truck-moving"></i>
                            <p>GIAO HÀNG <strong>TOÀN QUỐC</strong></p>
                        </div>
                        <div class="detail-product__icon--text">
                            <i class="fas fa-shield-alt"></i>
                            <p>BẢO HÀNH, BẢO DƯỠNG <strong>3 NĂM</span></p>
                        </div>
                        <div class="detail-product__icon--text">
                            <i class="fas fa-medal"></i>
                            <p><strong>ĐỔI SIZE, ĐỔI MẪU</strong> ĐỐI VỚI SẢN PHẨM CHƯA QUA SỬ DỤNG</p>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>

        <div class="content">
            <div class="content__product">
                <div class="content-product__collection">
                    <div class="content-product__collection--text">
                        <p>Bộ sưu tập</p>
                    </div>
                    <div class="content-product__collection--classify">
                        <ul class="content-product__collection--tabs">
                            <li class="content-product__collection--tab1" onclick="openshoes2('shoes2man')">
                                <h3 class="hvr-underline-from-center">Giày thấp cổ</h3>
                            </li>
                            <li class="content-product__collection--tab1" onclick="openshoes2('shoes2women')">
                                <h3 class="hvr-underline-from-center">Giày cao cổ</h3>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="content__product--row shoes2" id="shoes2man">
                    <div class="content-product__col--list1">
                        <div class="content-product__shoesman">
                            <a href="#" class="content-product__shoesman1">
                                <img src="<?php echo $level . img_path . 'img-content/img-content-thapco-01.webp' ?>"
                                    alt="" />
                            </a>
                            <a href="#" class="content-product__shoesman2">
                                <img src="<?php echo $level . img_path . 'img-content/img-content-thapco-02.webp' ?>"
                                    alt="" />
                            </a>
                            <div class="content-product__shoesman--text">
                                <a href="#">THE MODERN DERBY – BLACK GRAIN</a>
                                <p>
                                    <span>1,600,000₫</span>
                                </p>
                            </div>
                        </div>

                        <div class="content-product__shoesman">
                            <a href="#" class="content-product__shoesman1">
                                <img src="<?php echo $level . img_path . 'img-content/img-content-thapco-03.webp' ?>"
                                    alt="" />
                            </a>
                            <a href="#" class="content-product__shoesman2">
                                <img src="<?php echo $level . img_path . 'img-content/img-content-thapco-04.webp' ?>"
                                    alt="" />
                            </a>
                            <div class="content-product__shoesman--text">
                                <a href="#">THE WOLF SPECTATOR OXFORD - BROWN</a>
                                <p>
                                    <span>1,800,000₫</span>
                                </p>
                            </div>
                        </div>

                        <div class="content-product__shoesman">
                            <a href="#" class="content-product__shoesman1">
                                <img src="<?php echo $level . img_path . 'img-content/img-content-thapco-05.webp' ?>"
                                    alt="" />
                            </a>
                            <a href="#" class="content-product__shoesman2">
                                <img src="<?php echo $level . img_path . 'img-content/img-content-thapco-06.webp' ?>"
                                    alt="" />
                            </a>
                            <div class="content-product__shoesman--text">
                                <a href="#">THE WOLF SPECTATOR OXFORD - BLACK</a>
                                <p>
                                    <span>1,800,000₫</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="content-product__col--list1">
                        <div class="content-product__shoesman">
                            <a href="#" class="content-product__shoesman1">
                                <img src="<?php echo $level . img_path . 'img-content/img-content-thapco-07.webp' ?>"
                                    alt="" />
                            </a>
                            <a href="#" class="content-product__shoesman2">
                                <img src="<?php echo $level . img_path . 'img-content/img-content-thapco-08.webp' ?>"
                                    alt="" />
                            </a>
                            <div class="content-product__shoesman--text">
                                <a href="#">THE WOLF METAL DERBY - BLACK</a>
                                <p>
                                    <span>1,700,000₫</span>
                                </p>
                            </div>
                        </div>

                        <div class="content-product__shoesman">
                            <a href="#" class="content-product__shoesman1">
                                <img src="<?php echo $level . img_path . 'img-content/img-content-thapco-09.webp' ?>"
                                    alt="" />
                            </a>
                            <a href="#" class="content-product__shoesman2">
                                <img src="<?php echo $level . img_path . 'img-content/img-content-thapco-10.webp' ?>"
                                    alt="" />
                            </a>
                            <div class="content-product__shoesman--text">
                                <a href="#">THE CLASSIC CAPTOE OXFORD – BLACK</a>
                                <p>
                                    <span>1,500,000₫</span>
                                </p>
                            </div>
                        </div>

                        <div class="content-product__shoesman">
                            <a href="#" class="content-product__shoesman1">
                                <img src="<?php echo $level . img_path . 'img-content/img-content-thapco-11.webp' ?>"
                                    alt="" />
                            </a>
                            <a href="#" class="content-product__shoesman2">
                                <img src="<?php echo $level . img_path . 'img-content/img-content-thapco-12.webp' ?>"
                                    alt="" />
                            </a>
                            <div class="content-product__shoesman--text">
                                <a href="#">THE MODERN BROGUE DERBY – BLACK GRAIN AND WHITE
                                </a>
                                <p>
                                    <span>1,700,000₫</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content__product--row shoes2" id="shoes2women" style="display: none">
                    <div class="content-product__col--list1">
                        <div class="content-product__shoesman">
                            <a href="#" class="content-product__shoesman1">
                                <img src="<?php echo $level . img_path . 'img-content/img-content-caoco-01.webp' ?>"
                                    alt="" />
                            </a>
                            <a href="#" class="content-product__shoesman2">
                                <img src="<?php echo $level . img_path . 'img-content/img-content-caoco-02.webp' ?>"
                                    alt="" />
                            </a>
                            <div class="content-product__shoesman--text">
                                <a href="#">THE WILD WALK CHELSEA BOOT – TAN</a>
                                <p>
                                    <span>2,050,000₫</span>
                                </p>
                            </div>
                        </div>

                        <div class="content-product__shoesman">
                            <a href="#" class="content-product__shoesman1">
                                <img src="<?php echo $level . img_path . 'img-content/img-content-caoco-03.webp' ?>"
                                    alt="" />
                            </a>
                            <a href="#" class="content-product__shoesman2">
                                <img src="<?php echo $level . img_path . 'img-content/img-content-caoco-04.webp' ?>"
                                    alt="" />
                            </a>
                            <div class="content-product__shoesman--text">
                                <a href="#">THE ALPHA WOLF HARNESS BOOT - BLACK</a>
                                <p>
                                    <span>2,450,000₫</span>
                                </p>
                            </div>
                        </div>

                        <div class="content-product__shoesman">
                            <a href="#" class="content-product__shoesman1">
                                <img src="<?php echo $level . img_path . 'img-content/img-content-caoco-05.webp' ?>"
                                    alt="" />
                            </a>
                            <a href="#" class="content-product__shoesman2">
                                <img src="<?php echo $level . img_path . 'img-content/img-content-caoco-06.webp' ?>"
                                    alt="" />
                            </a>
                            <div class="content-product__shoesman--text">
                                <a href="#">THE WILD WALK CHELSEA BOOT – BLACK SUEDE
                                </a>
                                <p>
                                    <span>2,050,000₫</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content__product--seeall">
                    <a href="#" class="content__product--btnsee hvr-sweep-to-right">
                        <span> XEM TẤT CẢ </span>
                    </a>
                </div>
            </div>
        </div>

        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="swiper-slide__outfit">
                        <div class="swiper-slide__img">
                            <img src="<?php echo $level . img_path . 'img-swiper/img-swiper-01.webp' ?>" alt="" />
                        </div>
                        <div class="swiper-slide__overlay">
                            <a href="#" class="swiper-slide__text">
                                <span class="hvr-underline-from-left">Shop this look</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide__outfit">
                        <div class="swiper-slide__img">
                            <img src="<?php echo $level . img_path . 'img-swiper/img-swiper-02.webp' ?>" alt="" />
                        </div>
                        <div class="swiper-slide__overlay">
                            <a href="#" class="swiper-slide__text">
                                <span class="hvr-underline-from-left">Shop this look</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide__outfit">
                        <div class="swiper-slide__img">
                            <img src="<?php echo $level . img_path . 'img-swiper/img-swiper-03.webp' ?>" alt="" />
                        </div>
                        <div class="swiper-slide__overlay">
                            <a href="#" class="swiper-slide__text">
                                <span class="hvr-underline-from-left">Shop this look</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide__outfit">
                        <div class="swiper-slide__img">
                            <img src="<?php echo $level . img_path . 'img-swiper/img-swiper-04.webp' ?>" alt="" />
                        </div>
                        <div class="swiper-slide__overlay">
                            <a href="#" class="swiper-slide__text">
                                <span class="hvr-underline-from-left">Shop this look</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide__outfit">
                        <div class="swiper-slide__img">
                            <img src="<?php echo $level . img_path . 'img-swiper/img-swiper-05.webp' ?>" alt="" />
                        </div>
                        <div class="swiper-slide__overlay">
                            <a href="#" class="swiper-slide__text">
                                <span class="hvr-underline-from-left">Shop this look</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide__outfit">
                        <div class="swiper-slide__img">
                            <img src="<?php echo $level . img_path . 'img-swiper/img-swiper-06.webp' ?>" alt="" />
                        </div>
                        <div class="swiper-slide__overlay">
                            <a href="#" class="swiper-slide__text">
                                <span class="hvr-underline-from-left">Shop this look</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide__outfit">
                        <div class="swiper-slide__img">
                            <img src="<?php echo $level . img_path . 'img-swiper/img-swiper-07.webp' ?>" alt="" />
                        </div>
                        <div class="swiper-slide__overlay">
                            <a href="#" class="swiper-slide__text">
                                <span class="hvr-underline-from-left">Shop this look</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide__outfit">
                        <div class="swiper-slide__img">
                            <img src="<?php echo $level . img_path . 'img-swiper/img-swiper-08.webp' ?>" alt="" />
                        </div>
                        <div class="swiper-slide__overlay">
                            <a href="#" class="swiper-slide__text">
                                <span class="hvr-underline-from-left">Shop this look</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide__outfit">
                        <div class="swiper-slide__img">
                            <img src="<?php echo $level . img_path . 'img-swiper/img-swiper-09.webp' ?>" alt="" />
                        </div>
                        <div class="swiper-slide__overlay">
                            <a href="#" class="swiper-slide__text">
                                <span class="hvr-underline-from-left">Shop this look</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </main>
</form>

<script>
$('.thumbnail').on('click', function() {
    var clicked = $(this);
    var newSelection = clicked.data('big');
    var $img = $('.primary').css("background-image", "url(" + newSelection + ")");
    clicked.parent().find('.thumbnail').removeClass('selected');
    clicked.addClass('selected');
    $('.primary').empty().append($img.hide().fadeIn('slow'));
});
</script>

<script>
// Get the modal
var modal1 = document.getElementById("myModal1");

// Get the button that opens the modal
var btn1 = document.getElementById("myBtn1");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn1.onclick = function() {
    modal1.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}
</script>

<script>
$('.add').click(function() {
    if ($(this).prev().val() < 3) {
        $(this).prev().val(+$(this).prev().val() + 1);
    }
});
$('.sub').click(function() {
    if ($(this).next().val() > 1) {
        if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
    }
});
</script>

<script>
function openshoes(shoesName) {
    var i;
    var x = document.getElementsByClassName("shoes");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    document.getElementById(shoesName).style.display = "block";
}

function openshoes1(shoes1Name) {
    var i;
    var x = document.getElementsByClassName("shoes1");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    document.getElementById(shoes1Name).style.display = "block";
}

function openshoes2(shoes2Name) {
    var i;
    var x = document.getElementsByClassName("shoes2");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    document.getElementById(shoes2Name).style.display = "block";
}
</script>

<!-- Initialize Swiper -->
<script>
var swiper = new Swiper(".swiper-container", {
    spaceBetween: 30,
    slidesPerView: 3,
    loop: true,

    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        // when window width is >= 480px
        480: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
        // when window width is >= 640px
        640: {
            slidesPerView: 3,
            spaceBetween: 40,
        },
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
</script>