    <?php wp_footer(); ?>

    <footer id="main-footer">
      <div class="wrapper-footer">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-3 d-none d-md-block">
              <div class="nav-footer-logo d-flex align-items-center justify-content-center menu-logo">
                <a href="<?php bloginfo('url'); ?>/">
                  <?php include (TEMPLATEPATH . '/partials/logo.php'); ?>
                </a>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="d-flex justify-content-center">
                <div class="list-footer-info">
                  <div class="info-detail info-address">
                    <div class="info-content d-flex align-items-center">
                      <p>Av. Contralmirante Montero Nº 421 Of. 6D<br/>Magdalena del Mar</p>
                    </div>
                  </div>
                  <div class="info-detail info-phone">
                    <div class="info-content d-flex align-items-center">
                      <p><a href="tel:+51968212887">(51) 968 212 887</a></p>
                    </div>
                  </div>
                  <div class="info-detail info-mail">
                    <div class="info-content d-flex align-items-center">
                      <p><a href="mailto:contacto@origamicowork.com">contacto@origamicowork.com</a></p>
                    </div>
                  </div>
                  <div class="info-detail info-web">
                    <div class="info-content d-flex align-items-center">
                      <p><a href="http://www.origamicowork.com">origamicowork.com</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-3 d-none d-md-block">
              <div class="social-content d-flex align-items-center justify-content-center">
                <ul class="social-links">
                  <li>
                    <a href="https://www.facebook.com/origamicowork/" target="_blank">
                      <?php include (TEMPLATEPATH . '/partials/facebook.php'); ?>
                    </a>
                  </li>
                  <li>
                    <a href="https://twitter.com/OrigamiCowork" target="_blank">
                      <?php include (TEMPLATEPATH . '/partials/twitter.php'); ?>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.instagram.com/origami.cowork/" target="_blank">
                      <?php include (TEMPLATEPATH . '/partials/instagram.php'); ?>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.linkedin.com/company/origamicowork/" target="_blank">
                      <?php include (TEMPLATEPATH . '/partials/linkedin.php'); ?>
                    </a>
                  </li>
                  <li>
                    <a href="https://plus.google.com/106522681620298830785" target="_blank">
                      <?php include (TEMPLATEPATH . '/partials/google-plus.php'); ?>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <a class="cd-top" href="#0">Top</a>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/libs/jquery.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/libs/popper.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/libs/bootstrap.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/libs/swiper.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/libs/slick.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/vendor/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>

    <script type="text/javascript">
      $(function() {

        var offset = 300,
        offset_opacity = 1200,
        scroll_top_duration = 700,
        $back_to_top = $('.cd-top');

        $(window).scroll(function(){
          ( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
          if( $(this).scrollTop() > offset_opacity ) { 
            $back_to_top.addClass('cd-fade-out');
          }
        });

        $back_to_top.on('click', function(event){
          event.preventDefault();
          $('body,html').animate({
            scrollTop: 0 ,
            }, scroll_top_duration
          );
        });

      });
    </script>

    <?php if( is_home() ): ?>

      <script type="text/javascript">
        $(function(){

          var mainSwiper = new Swiper('#main-slider', {
            paginationClickable: true,
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            autoplay: 3000,
            autoplayDisableOnInteraction: false,
            loop: true
          });

          $('#slider-room').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            asNavFor: '#slider-room-thumbs'
          });

          $('#slider-room-thumbs').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: '#slider-room',
            dots: false,
            arrows: false,
            focusOnSelect: true,
            autoplay: true,
            autoplaySpeed: 3000,
          });

          var comunitySwiper = new Swiper('#comunity-slider', {
            nextButton: '#comunity-section .swiper-button-next',
            prevButton: '#comunity-section .swiper-button-prev',
            autoplay: 3000,
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            autoplayDisableOnInteraction: false,
            slidesPerView: 'auto',
            loop: true,
            coverflow: {
              rotate: 0,
              stretch: 0,
              depth: 300,
              modifier: 1,
              slideShadows : true
            },
            breakpoints: {
              640: {
                coverflow: {
                  rotate: 0,
                  stretch: 0,
                  depth: 500,
                  modifier: 1,
                  slideShadows : true
                }
              }
            }
          });

          $("#event-container").mCustomScrollbar({
            theme:"rounded-dots",
            scrollInertia:400
          });

          $('.js-set-evento').on('click', function() {
            $('#form-evento-name').val($(this).data('event-name'));
            $('#form-evento-date').val($(this).data('event-date'));
            $('#form-evento-img').val($(this).data('event-img'));
            $('#form-evento-hour').val($(this).data('event-hour'));
            $('#form-evento-place').val($(this).data('event-place'));
          });

          $('#form-for-who').change(function(){
            if ($(this).val() == "freelance") {
              $('.js-business').hide();
            } else {
              $('.js-business').show();
            }
          });

        })
      </script>

    <?php endif; ?>

    <?php if( is_page('contacto') ): ?>

      <script type="text/javascript">
        $(function(){
          $('#form-for-who').change(function(){
            if ($(this).val() == "freelance") {
              $('.js-business').hide();
            } else {
              $('.js-business').show();
            }
          });
        });
      </script>

    <?php endif; ?>

    <?php if ( is_singular( 'eventos' ) ): ?>

      <script type="text/javascript">
        $(function(){
          $('.navbar-custom').addClass('navbar-dark');

          $('.js-set-evento').on('click', function() {
            $('#form-evento-name').val($(this).data('event-name'));
            $('#form-evento-date').val($(this).data('event-date'));
            $('#form-evento-img').val($(this).data('event-img'));
            $('#form-evento-hour').val($(this).data('event-hour'));
            $('#form-evento-place').val($(this).data('event-place'));
          });
          
        });
      </script>

    <?php endif; ?>

    <?php if( is_page('nosotros') ): ?>

      <script type="text/javascript">
        $(function(){
          $('.navbar-custom').addClass('navbar-dark');
        });
      </script>

    <?php endif; ?>

    <?php if( is_post_type_archive( 'eventos' )) : ?>

      <script src="<?php bloginfo('stylesheet_directory'); ?>/js/libs/sly.min.js"></script>
      <script src="<?php bloginfo('stylesheet_directory'); ?>/js/libs/bootstrap-datepicker.min.js" type="text/javascript"></script>
      <script src="<?php bloginfo('stylesheet_directory'); ?>/js/vendor/bootstrap-datepicker.es.min.js" type="text/javascript"></script>

      <script type="text/javascript">
        $(function(){
          $('.navbar-custom').addClass('navbar-dark');

          var $frame = $('#boxes-list-events');
          var $wrap = $frame.parent();
          $frame.sly({
            speed: 300,
            activatePageOn: 'click',
            scrollBar: $wrap.find('.scrollbar'),
            scrollBy: 100,
            dragHandle: true,
            clickBar: 1,
            dynamicHandle: true,
            minHandleSize: 28
          });

          var swiper = new Swiper('#events-slider', {
            nextButton: '.swiper-button-next',
      
            prevButton: '.swiper-button-prev',
            followFinger: false,
            freeMode: true,
            breakpoints: {
              768: {
                freeMode: false,
                followFinger: true
              }
            }
          });

          $('.box-list-event').on('click', function(e) {
            $('.box-list-event').removeClass('event-active');
            $(this).addClass('event-active');
            e.preventDefault();
            var slide = $(this).index();
            swiper.slideTo(slide)
          });

          $("#feature-container").mCustomScrollbar({
            theme:"rounded-dots",
            scrollInertia:400
          });

          $('.js-set-evento').on('click', function() {
            $('#form-evento-name').val($(this).data('event-name'));
            $('#form-evento-date').val($(this).data('event-date'));
            $('#form-evento-img').val($(this).data('event-img'));
            $('#form-evento-hour').val($(this).data('event-hour'));
            $('#form-evento-place').val($(this).data('event-place'));
          });

        });
      </script>

    <?php endif; ?>

    <?php if( is_page('comunidad') ): ?>

      <script type="text/javascript">
        $(function(){
          $('.navbar-custom').addClass('navbar-dark');
        });

        $('#gallery-comunity').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          // arrows: false,
          // fade: true,
          asNavFor: '#gallery-comunity-thumbs'
        });

        $('#gallery-comunity-thumbs').slick({
          slidesToShow: 4,
          slidesToScroll: 1,
          asNavFor: '#gallery-comunity',
          dots: false,
          // arrows: false,
          // centerMode: true,
          focusOnSelect: true,
          // autoplay: true,
          autoplaySpeed: 3000,
        });
      </script>

    <?php endif; ?>

    <?php if( is_page('espacios') ): ?>

      <script type="text/javascript">
        $(function(){
          $('.navbar-custom').addClass('navbar-dark');
        });

        var spacesSwiper = new Swiper('#space-slider-1', {
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev'
        });

        var spacesSwiper2 = new Swiper('#space-slider-2', {
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev'
        });

        var spacesSwiper3 = new Swiper('#space-slider-3', {
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev'
        });

        var spacesSwiper4 = new Swiper('#space-slider-4', {
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev'
        });

        var spacesSwiper5 = new Swiper('#space-slider-5', {
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev'
        });

        var spacesSwiper6 = new Swiper('#space-slider-6', {
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev'
        });

        var spacesSwiper7 = new Swiper('#space-slider-7', {
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev'
        });

        $('body').on('shown.bs.modal', '.spaces-modal', function() {
          spacesSwiper.update();
          spacesSwiper2.update();
          spacesSwiper3.update();
          spacesSwiper4.update();
          spacesSwiper5.update();
          spacesSwiper6.update();
          spacesSwiper7.update();
        });
      </script>

    <?php endif; ?>


  </body>
</html>