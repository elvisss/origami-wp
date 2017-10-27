<?php
/**
 * Template Name: Espacios
 */
  get_header();
?>

<section class="fluid-section" id="main-section">
  <div class="spaces-section">
    <div class="container-fluid">
      <div class="gallery-spaces row no-gutters">
                    <div class="gallery-space col-12 col-md-4">
                      <div class="hover-tile-outer" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/space1.jpg');" data-toggle="modal" data-target=".spaces-modal-1">
                        <div class="hover-tile-container">
                          <div class="hover-tile hover-tile-visible"></div>
                          <div class="hover-tile hover-tile-hidden">
                            <h4>Espacio uno</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="gallery-space col-12 col-md-4">
                      <div class="hover-tile-outer" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/space1.jpg');" data-toggle="modal" data-target=".spaces-modal-2">
                        <div class="hover-tile-container">
                          <div class="hover-tile hover-tile-visible"></div>
                          <div class="hover-tile hover-tile-hidden">
                            <h4>Espacio dos</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="gallery-space col-12 col-md-4">
                      <div class="hover-tile-outer" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/space1.jpg');" data-toggle="modal" data-target=".spaces-modal-3">
                        <div class="hover-tile-container">
                          <div class="hover-tile hover-tile-visible"></div>
                          <div class="hover-tile hover-tile-hidden">
                            <h4>Espacio tres</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="gallery-space col-12 col-md-3">
                      <div class="hover-tile-outer" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/space1.jpg');" data-toggle="modal" data-target=".spaces-modal-4">
                        <div class="hover-tile-container">
                          <div class="hover-tile hover-tile-visible"></div>
                          <div class="hover-tile hover-tile-hidden">
                            <h4>Espacio cuatro</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="gallery-space col-12 col-md-3">
                      <div class="hover-tile-outer" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/space1.jpg');" data-toggle="modal" data-target=".spaces-modal-5">
                        <div class="hover-tile-container">
                          <div class="hover-tile hover-tile-visible"></div>
                          <div class="hover-tile hover-tile-hidden">
                            <h4>Espacio cinco</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="gallery-space col-12 col-md-3">
                      <div class="hover-tile-outer" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/space1.jpg');" data-toggle="modal" data-target=".spaces-modal-6">
                        <div class="hover-tile-container">
                          <div class="hover-tile hover-tile-visible"></div>
                          <div class="hover-tile hover-tile-hidden">
                            <h4>Espacio seis</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="gallery-space col-12 col-md-3">
                      <div class="hover-tile-outer" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/space1.jpg');" data-toggle="modal" data-target=".spaces-modal-7">
                        <div class="hover-tile-container">
                          <div class="hover-tile hover-tile-visible"></div>
                          <div class="hover-tile hover-tile-hidden">
                            <h4>Espacio siete</h4>
                          </div>
                        </div>
                      </div>
                    </div>
      </div>
    </div>
  </div>
</section>
    <div class="modal fade spaces-modal spaces-modal-1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog full-modal">
        <div class="modal-content">
          <div class="modal-body">
            <div class="close-modal" data-dismiss="modal" aria-label="Close">
              <div class="horizontal"></div>
              <div class="vertical"></div>
            </div>
            <div class="modal-full-content spaces-wrapper-content">
              <div class="spaces-slider swiper-container swiper-button-white" id="space-slider-1">
                <div class="swiper-wrapper">
                  <div class="swiper-slide" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/fotospace1.jpg');"></div>
                  <div class="swiper-slide" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/fotospace1.jpg');"></div>
                  <div class="swiper-slide" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/fotospace1.jpg');"></div>
                  <div class="swiper-slide" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/fotospace1.jpg');"></div>
                  <div class="swiper-slide" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/fotospace1.jpg');"></div>
                  <div class="swiper-slide" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/fotospace1.jpg');"></div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
              <div class="space-desc">
                <h4>espacio uno</h4>
              </div>
              <div class="space-review">
                <div class="space-wrapper-review">
                  <div class="space-properties">
                    <div class="space-property clearfix">
                      <div class="property-img property-people"><?php include (TEMPLATEPATH . '/partials/people.php'); ?></div>
                      <div class="property-desc d-flex align-items-center">
                        <p>4 personas</p>
                      </div>
                    </div>
                    <div class="space-property clearfix">
                      <div class="property-img property-people"><?php include (TEMPLATEPATH . '/partials/schedule.php'); ?></div>
                      <div class="property-desc d-flex align-items-center">
                        <p>L - V de 09:00 hrs - 18:00 hrs<br>S de 09:00 hrs - 13:00 hrs</p>
                      </div>
                    </div>
                    <div class="space-property clearfix">
                      <div class="property-img property-people"><?php include (TEMPLATEPATH . '/partials/calendar.php'); ?></div>
                      <div class="property-desc d-flex align-items-center">
                        <p>2 días hábiles de anticipación</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade spaces-modal spaces-modal-2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog full-modal">
        <div class="modal-content">
          <div class="modal-body">
            <div class="close-modal" data-dismiss="modal" aria-label="Close">
              <div class="horizontal"></div>
              <div class="vertical"></div>
            </div>
            <div class="modal-full-content spaces-wrapper-content">
              <div class="spaces-slider swiper-container swiper-button-white" id="space-slider-2">
                <div class="swiper-wrapper">
                  <div class="swiper-slide" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/fotospace1.jpg');"></div>
                  <div class="swiper-slide" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/fotospace1.jpg');"></div>
                  <div class="swiper-slide" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/fotospace1.jpg');"></div>
                  <div class="swiper-slide" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/fotospace1.jpg');"></div>
                  <div class="swiper-slide" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/fotospace1.jpg');"></div>
                  <div class="swiper-slide" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/fotospace1.jpg');"></div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
              <div class="space-desc">
                <h4>espacio dos</h4>
              </div>
              <div class="space-review">
                <div class="space-wrapper-review">
                  <div class="space-properties">
                    <div class="space-property clearfix">
                      <div class="property-img property-people"><?php include (TEMPLATEPATH . '/partials/people.php'); ?></div>
                      <div class="property-desc d-flex align-items-center">
                        <p>4 personas</p>
                      </div>
                    </div>
                    <div class="space-property clearfix">
                      <div class="property-img property-people"><?php include (TEMPLATEPATH . '/partials/schedule.php'); ?></div>
                      <div class="property-desc d-flex align-items-center">
                        <p>L - V de 09:00 hrs - 18:00 hrs<br>S de 09:00 hrs - 13:00 hrs</p>
                      </div>
                    </div>
                    <div class="space-property clearfix">
                      <div class="property-img property-people"><?php include (TEMPLATEPATH . '/partials/calendar.php'); ?></div>
                      <div class="property-desc d-flex align-items-center">
                        <p>2 días hábiles de anticipación</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade spaces-modal spaces-modal-3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog full-modal">
        <div class="modal-content">
          <div class="modal-body">
            <div class="close-modal" data-dismiss="modal" aria-label="Close">
              <div class="horizontal"></div>
              <div class="vertical"></div>
            </div>
            <div class="modal-full-content spaces-wrapper-content">
              <div class="spaces-slider swiper-container swiper-button-white" id="space-slider-3">
                <div class="swiper-wrapper">
                  <div class="swiper-slide" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/fotospace1.jpg');"></div>
                  <div class="swiper-slide" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/fotospace1.jpg');"></div>
                  <div class="swiper-slide" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/fotospace1.jpg');"></div>
                  <div class="swiper-slide" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/fotospace1.jpg');"></div>
                  <div class="swiper-slide" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/fotospace1.jpg');"></div>
                  <div class="swiper-slide" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/fotospace1.jpg');"></div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
              <div class="space-desc">
                <h4>espacio tres</h4>
              </div>
              <div class="space-review">
                <div class="space-wrapper-review">
                  <div class="space-properties">
                    <div class="space-property clearfix">
                      <div class="property-img property-people"><?php include (TEMPLATEPATH . '/partials/people.php'); ?></div>
                      <div class="property-desc d-flex align-items-center">
                        <p>4 personas</p>
                      </div>
                    </div>
                    <div class="space-property clearfix">
                      <div class="property-img property-people"><?php include (TEMPLATEPATH . '/partials/schedule.php'); ?></div>
                      <div class="property-desc d-flex align-items-center">
                        <p>L - V de 09:00 hrs - 18:00 hrs<br>S de 09:00 hrs - 13:00 hrs</p>
                      </div>
                    </div>
                    <div class="space-property clearfix">
                      <div class="property-img property-people"><?php include (TEMPLATEPATH . '/partials/calendar.php'); ?></div>
                      <div class="property-desc d-flex align-items-center">
                        <p>2 días hábiles de anticipación</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade spaces-modal spaces-modal-4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog full-modal">
        <div class="modal-content">
          <div class="modal-body">
            <div class="close-modal" data-dismiss="modal" aria-label="Close">
              <div class="horizontal"></div>
              <div class="vertical"></div>
            </div>
            <div class="modal-full-content spaces-wrapper-content">
              <div class="spaces-slider swiper-container swiper-button-white" id="space-slider-4">
                <div class="swiper-wrapper">
                  <div class="swiper-slide" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/fotospace1.jpg');"></div>
                  <div class="swiper-slide" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/fotospace1.jpg');"></div>
                  <div class="swiper-slide" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/fotospace1.jpg');"></div>
                  <div class="swiper-slide" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/fotospace1.jpg');"></div>
                  <div class="swiper-slide" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/fotospace1.jpg');"></div>
                  <div class="swiper-slide" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/fotospace1.jpg');"></div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
              <div class="space-desc">
                <h4>espacio cuatro</h4>
              </div>
              <div class="space-review">
                <div class="space-wrapper-review">
                  <div class="space-properties">
                    <div class="space-property clearfix">
                      <div class="property-img property-people"><?php include (TEMPLATEPATH . '/partials/people.php'); ?></div>
                      <div class="property-desc d-flex align-items-center">
                        <p>4 personas</p>
                      </div>
                    </div>
                    <div class="space-property clearfix">
                      <div class="property-img property-people"><?php include (TEMPLATEPATH . '/partials/schedule.php'); ?></div>
                      <div class="property-desc d-flex align-items-center">
                        <p>L - V de 09:00 hrs - 18:00 hrs<br>S de 09:00 hrs - 13:00 hrs</p>
                      </div>
                    </div>
                    <div class="space-property clearfix">
                      <div class="property-img property-people"><?php include (TEMPLATEPATH . '/partials/calendar.php'); ?></div>
                      <div class="property-desc d-flex align-items-center">
                        <p>2 días hábiles de anticipación</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade spaces-modal spaces-modal-5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog full-modal">
        <div class="modal-content">
          <div class="modal-body">
            <div class="close-modal" data-dismiss="modal" aria-label="Close">
              <div class="horizontal"></div>
              <div class="vertical"></div>
            </div>
            <div class="modal-full-content spaces-wrapper-content">
              <div class="spaces-slider swiper-container swiper-button-white" id="space-slider-5">
                <div class="swiper-wrapper">
                  <div class="swiper-slide" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/fotospace1.jpg');"></div>
                  <div class="swiper-slide" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/fotospace1.jpg');"></div>
                  <div class="swiper-slide" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/fotospace1.jpg');"></div>
                  <div class="swiper-slide" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/fotospace1.jpg');"></div>
                  <div class="swiper-slide" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/fotospace1.jpg');"></div>
                  <div class="swiper-slide" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/fotospace1.jpg');"></div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
              <div class="space-desc">
                <h4>espacio cinco</h4>
              </div>
              <div class="space-review">
                <div class="space-wrapper-review">
                  <div class="space-properties">
                    <div class="space-property clearfix">
                      <div class="property-img property-people"><?php include (TEMPLATEPATH . '/partials/people.php'); ?></div>
                      <div class="property-desc d-flex align-items-center">
                        <p>4 personas</p>
                      </div>
                    </div>
                    <div class="space-property clearfix">
                      <div class="property-img property-people"><?php include (TEMPLATEPATH . '/partials/schedule.php'); ?></div>
                      <div class="property-desc d-flex align-items-center">
                        <p>L - V de 09:00 hrs - 18:00 hrs<br>S de 09:00 hrs - 13:00 hrs</p>
                      </div>
                    </div>
                    <div class="space-property clearfix">
                      <div class="property-img property-people"><?php include (TEMPLATEPATH . '/partials/calendar.php'); ?></div>
                      <div class="property-desc d-flex align-items-center">
                        <p>2 días hábiles de anticipación</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade spaces-modal spaces-modal-6" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog full-modal">
        <div class="modal-content">
          <div class="modal-body">
            <div class="close-modal" data-dismiss="modal" aria-label="Close">
              <div class="horizontal"></div>
              <div class="vertical"></div>
            </div>
            <div class="modal-full-content spaces-wrapper-content">
              <div class="spaces-slider swiper-container swiper-button-white" id="space-slider-6">
                <div class="swiper-wrapper">
                  <div class="swiper-slide" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/fotospace1.jpg');"></div>
                  <div class="swiper-slide" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/fotospace1.jpg');"></div>
                  <div class="swiper-slide" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/fotospace1.jpg');"></div>
                  <div class="swiper-slide" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/fotospace1.jpg');"></div>
                  <div class="swiper-slide" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/fotospace1.jpg');"></div>
                  <div class="swiper-slide" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/fotospace1.jpg');"></div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
              <div class="space-desc">
                <h4>espacio seis</h4>
              </div>
              <div class="space-review">
                <div class="space-wrapper-review">
                  <div class="space-properties">
                    <div class="space-property clearfix">
                      <div class="property-img property-people"><?php include (TEMPLATEPATH . '/partials/people.php'); ?></div>
                      <div class="property-desc d-flex align-items-center">
                        <p>4 personas</p>
                      </div>
                    </div>
                    <div class="space-property clearfix">
                      <div class="property-img property-people"><?php include (TEMPLATEPATH . '/partials/schedule.php'); ?></div>
                      <div class="property-desc d-flex align-items-center">
                        <p>L - V de 09:00 hrs - 18:00 hrs<br>S de 09:00 hrs - 13:00 hrs</p>
                      </div>
                    </div>
                    <div class="space-property clearfix">
                      <div class="property-img property-people"><?php include (TEMPLATEPATH . '/partials/calendar.php'); ?></div>
                      <div class="property-desc d-flex align-items-center">
                        <p>2 días hábiles de anticipación</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade spaces-modal spaces-modal-7" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog full-modal">
        <div class="modal-content">
          <div class="modal-body">
            <div class="close-modal" data-dismiss="modal" aria-label="Close">
              <div class="horizontal"></div>
              <div class="vertical"></div>
            </div>
            <div class="modal-full-content spaces-wrapper-content">
              <div class="spaces-slider swiper-container swiper-button-white" id="space-slider-7">
                <div class="swiper-wrapper">
                  <div class="swiper-slide" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/fotospace1.jpg');"></div>
                  <div class="swiper-slide" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/fotospace1.jpg');"></div>
                  <div class="swiper-slide" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/fotospace1.jpg');"></div>
                  <div class="swiper-slide" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/fotospace1.jpg');"></div>
                  <div class="swiper-slide" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/fotospace1.jpg');"></div>
                  <div class="swiper-slide" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/fotospace1.jpg');"></div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
              <div class="space-desc">
                <h4>espacio siete</h4>
              </div>
              <div class="space-review">
                <div class="space-wrapper-review">
                  <div class="space-properties">
                    <div class="space-property clearfix">
                      <div class="property-img property-people"><?php include (TEMPLATEPATH . '/partials/people.php'); ?></div>
                      <div class="property-desc d-flex align-items-center">
                        <p>4 personas</p>
                      </div>
                    </div>
                    <div class="space-property clearfix">
                      <div class="property-img property-people"><?php include (TEMPLATEPATH . '/partials/schedule.php'); ?></div>
                      <div class="property-desc d-flex align-items-center">
                        <p>L - V de 09:00 hrs - 18:00 hrs<br>S de 09:00 hrs - 13:00 hrs</p>
                      </div>
                    </div>
                    <div class="space-property clearfix">
                      <div class="property-img property-people"><?php include (TEMPLATEPATH . '/partials/calendar.php'); ?></div>
                      <div class="property-desc d-flex align-items-center">
                        <p>2 días hábiles de anticipación</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php get_footer(); ?>