<!-- Swiper -->
<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="swiper-slide__outfit">
                <div class="swiper-slide__img">
                    <img src="img/img-swiper/img-swiper-01.webp" alt="" />
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
                    <img src="img/img-swiper/img-swiper-02.webp" alt="" />
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
                    <img src="img/img-swiper/img-swiper-03.webp" alt="" />
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
                    <img src="img/img-swiper/img-swiper-04.webp" alt="" />
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
                    <img src="img/img-swiper/img-swiper-05.webp" alt="" />
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
                    <img src="img/img-swiper/img-swiper-06.webp" alt="" />
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
                    <img src="img/img-swiper/img-swiper-07.webp" alt="" />
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
                    <img src="img/img-swiper/img-swiper-08.webp" alt="" />
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
                    <img src="img/img-swiper/img-swiper-09.webp" alt="" />
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