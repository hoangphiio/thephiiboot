<?php include_once($level . data_path . 'hot_product__function.php'); ?>
<div class="content">
    <div class="content__product">
        <div class="content-product__collection">
            <div class="content-product__collection--text">
                <p>Bộ sưu tập</p>
            </div>
            <div class="content-product__collection--classify">
                <ul class="content-product__collection--tabs">
                    <li class="content-product__collection--tab1" onclick="openshoes('shoesman')">
                        <h3 class="hvr-underline-from-center">Best Seller Nam</h3>
                    </li>
                    <li class="content-product__collection--tab1" onclick="openshoes('shoeswomen')">
                        <h3 class="hvr-underline-from-center">Best Seller Nữ</h3>
                    </li>
                </ul>
            </div>
        </div>
        <div class="content__product--row shoes" id="shoesman">
            <div class="content-product__col--list1">
                <?php foreach ($view1 as $v) { ?>
                <div class="content-product__shoesman">
                    <a href="<?php echo $level . pages_path . 'detail.php?id_sanpham=' . $v['id_sanpham'] ?>"
                        class="content-product__shoesman1">
                        <img src="<?php echo $level . img_path . 'img-content/' . $v['hinhdaidien1'] ?>" alt="" />
                    </a>
                    <a href="<?php echo $level . pages_path . 'detail.php?id_sanpham=' . $v['id_sanpham'] ?>"
                        class="content-product__shoesman2">
                        <img src="<?php echo $level . img_path . 'img-content/' . $v['hinhdaidien2'] ?>" alt="" />
                    </a>
                    <div class="content-product__shoesman--text">
                        <a href="#"><?php echo $v['tensanpham'] ?></a>
                        <p>
                            <span><?php echo $v['giasanpham'] ?>₫</span>
                        </p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="content__product--row shoes" id="shoeswomen" style="display: none">
            <div class="content-product__col--list1">
                <?php foreach ($view2 as $v) { ?>
                <div class="content-product__shoesman">
                    <a href="<?php echo $level . pages_path . 'detail.php?id_sanpham=' . $v['id_sanpham'] ?>"
                        class="content-product__shoesman1">
                        <img src="<?php echo $level . img_path . 'img-content/' . $v['hinhdaidien1'] ?>" alt="" />
                    </a>
                    <a href="<?php echo $level . pages_path . 'detail.php?id_sanpham=' . $v['id_sanpham'] ?>"
                        class="content-product__shoesman2">
                        <img src="<?php echo $level . img_path . 'img-content/' . $v['hinhdaidien2'] ?>" alt="" />
                    </a>
                    <div class="content-product__shoesman--text">
                        <a href="#"><?php echo $v['tensanpham'] ?></a>
                        <p>
                            <span><?php echo $v['giasanpham'] ?>₫</span>
                        </p>
                    </div>
                </div>
                <?php }?>
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