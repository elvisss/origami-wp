var mainSwiper=new Swiper("#main-slider",{paginationClickable:!0,nextButton:".swiper-button-next",prevButton:".swiper-button-prev",autoplay:3e3,autoplayDisableOnInteraction:!1,loop:!0});$("#slider-room").slick({slidesToShow:1,slidesToScroll:1,asNavFor:"#slider-room-thumbs"}),$("#slider-room-thumbs").slick({slidesToShow:4,slidesToScroll:1,asNavFor:"#slider-room",dots:!1,arrows:!1,focusOnSelect:!0,autoplay:!0,autoplaySpeed:3e3});var comunitySwiper=new Swiper("#comunity-slider",{nextButton:"#comunity-section .swiper-button-next",prevButton:"#comunity-section .swiper-button-prev",autoplay:3e3,effect:"coverflow",grabCursor:!0,centeredSlides:!0,autoplayDisableOnInteraction:!1,slidesPerView:"auto",loop:!0,coverflow:{rotate:0,stretch:0,depth:300,modifier:1,slideShadows:!0}});$("#event-container").mCustomScrollbar({theme:"rounded-dots",scrollInertia:400});