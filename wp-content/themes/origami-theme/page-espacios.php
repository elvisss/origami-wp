<?php
/**
 * Template Name: Espacios
 */
  get_header();
?>

<?php
  $uploads = wp_upload_dir();
  $baseurl = $uploads['baseurl'];
?>

<section class="fluid-section" id="main-section">
  <div class="spaces-section">
    <div class="container-fluid">
      <div class="gallery-spaces row no-gutters">
                    <div class="gallery-space col-12 col-md-4">
                      <div class="hover-tile-outer" style="background-image: url('<?php echo $baseurl ?>/2017/11/sum1.jpg');" data-toggle="modal" data-target=".spaces-modal-1">
                        <div class="hover-tile-container">
                          <div class="hover-tile hover-tile-visible"></div>
                          <div class="hover-tile hover-tile-hidden">
                            <h4>Auditorio SUM</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="gallery-space col-12 col-md-4">
                      <div class="hover-tile-outer" style="background-image: url('<?php echo $baseurl ?>/2017/11/comedor1.jpg');" data-toggle="modal" data-target=".spaces-modal-2">
                        <div class="hover-tile-container">
                          <div class="hover-tile hover-tile-visible"></div>
                          <div class="hover-tile hover-tile-hidden">
                            <h4>Comedor</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="gallery-space col-12 col-md-4">
                      <div class="hover-tile-outer" style="background-image: url('<?php echo $baseurl ?>/2017/11/directorio-1.jpg');" data-toggle="modal" data-target=".spaces-modal-3">
                        <div class="hover-tile-container">
                          <div class="hover-tile hover-tile-visible"></div>
                          <div class="hover-tile hover-tile-hidden">
                            <h4>Directorio I</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="gallery-space col-12 col-md-3">
                      <div class="hover-tile-outer" style="background-image: url('<?php echo $baseurl ?>/2017/11/directorio2.jpg');" data-toggle="modal" data-target=".spaces-modal-4">
                        <div class="hover-tile-container">
                          <div class="hover-tile hover-tile-visible"></div>
                          <div class="hover-tile hover-tile-hidden">
                            <h4>Directorio II</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="gallery-space col-12 col-md-3">
                      <div class="hover-tile-outer" style="background-image: url('<?php echo $baseurl ?>/2017/11/sala_libre.jpg');" data-toggle="modal" data-target=".spaces-modal-5">
                        <div class="hover-tile-container">
                          <div class="hover-tile hover-tile-visible"></div>
                          <div class="hover-tile hover-tile-hidden">
                            <h4>Sala Libre</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="gallery-space col-12 col-md-3">
                      <div class="hover-tile-outer" style="background-image: url('<?php echo $baseurl ?>/2017/11/sala_origami1.jpg');" data-toggle="modal" data-target=".spaces-modal-6">
                        <div class="hover-tile-container">
                          <div class="hover-tile hover-tile-visible"></div>
                          <div class="hover-tile hover-tile-hidden">
                            <h4>Sala Origami I</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="gallery-space col-12 col-md-3">
                      <div class="hover-tile-outer" style="background-image: url('<?php echo $baseurl ?>/2017/11/salaverde.jpg');" data-toggle="modal" data-target=".spaces-modal-7">
                        <div class="hover-tile-container">
                          <div class="hover-tile hover-tile-visible"></div>
                          <div class="hover-tile hover-tile-hidden">
                            <h4>Sala Origami II</h4>
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
                  <div class="swiper-slide" style="background-image: url('<?php echo $baseurl ?>/2017/11/sum1.jpg');"></div>
                  <div class="swiper-slide" style="background-image: url('<?php echo $baseurl ?>/2017/11/sum2.jpg');"></div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
              <div class="space-desc">
                <h4>Auditorio SUM</h4>
              </div>
              <div class="space-review">
                <div class="space-wrapper-review">
                  <div class="space-properties">
                    <div class="space-property clearfix">
                      <div class="property-img property-people"><?php include (TEMPLATEPATH . '/partials/people.php'); ?></div>
                      <div class="property-desc d-flex align-items-center">
                        <p>40 personas</p>
                      </div>
                    </div>
                    <div class="space-property clearfix">
                      <div class="property-img property-people"><?php include (TEMPLATEPATH . '/partials/schedule.php'); ?></div>
                      <div class="property-desc d-flex align-items-center">
                        <p>L - V de 09:00 hrs - 18:00 hrs</p>
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
                  <div class="swiper-slide" style="background-image: url('<?php echo $baseurl ?>/2017/11/comedor1.jpg');"></div>
                  <div class="swiper-slide" style="background-image: url('<?php echo $baseurl ?>/2017/11/comedor2.jpg');"></div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
              <div class="space-desc">
                <h4>Comedor</h4>
              </div>
              <div class="space-review">
                <div class="space-wrapper-review">
                  <div class="space-properties">
                    <div class="space-property clearfix">
                      <div class="property-img property-people"><?php include (TEMPLATEPATH . '/partials/people.php'); ?></div>
                      <div class="property-desc d-flex align-items-center">
                        <p>104 personas</p>
                      </div>
                    </div>
                    <div class="space-property clearfix">
                      <div class="property-img property-people"><?php include (TEMPLATEPATH . '/partials/schedule.php'); ?></div>
                      <div class="property-desc d-flex align-items-center">
                        <p>L - V de 09:00 hrs - 18:00 hrs</p>
                      </div>
                    </div>
                    <div class="space-property clearfix">
                      <div class="property-img property-people"><?php include (TEMPLATEPATH . '/partials/calendar.php'); ?></div>
                      <div class="property-desc d-flex align-items-center">
                        <p>Uso Libre</p>
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
                  <div class="swiper-slide" style="background-image: url('<?php echo $baseurl ?>/2017/11/directorio-1.jpg');"></div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
              <div class="space-desc">
                <h4>Directorio I</h4>
              </div>
              <div class="space-review">
                <div class="space-wrapper-review">
                  <div class="space-properties">
                    <div class="space-property clearfix">
                      <div class="property-img property-people"><?php include (TEMPLATEPATH . '/partials/people.php'); ?></div>
                      <div class="property-desc d-flex align-items-center">
                        <p>10 personas</p>
                      </div>
                    </div>
                    <div class="space-property clearfix">
                      <div class="property-img property-people"><?php include (TEMPLATEPATH . '/partials/schedule.php'); ?></div>
                      <div class="property-desc d-flex align-items-center">
                        <p>L - V de 09:00 hrs - 18:00 hrs</p>
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
                  <div class="swiper-slide" style="background-image: url('<?php echo $baseurl ?>/2017/11/directorio2.jpg');"></div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
              <div class="space-desc">
                <h4>Directorio II</h4>
              </div>
              <div class="space-review">
                <div class="space-wrapper-review">
                  <div class="space-properties">
                    <div class="space-property clearfix">
                      <div class="property-img property-people"><?php include (TEMPLATEPATH . '/partials/people.php'); ?></div>
                      <div class="property-desc d-flex align-items-center">
                        <p>10 personas</p>
                      </div>
                    </div>
                    <div class="space-property clearfix">
                      <div class="property-img property-people"><?php include (TEMPLATEPATH . '/partials/schedule.php'); ?></div>
                      <div class="property-desc d-flex align-items-center">
                        <p>L - V de 09:00 hrs - 18:00 hrs</p>
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
                  <div class="swiper-slide" style="background-image: url('<?php echo $baseurl ?>/2017/11/sala_libre.jpg');"></div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
              <div class="space-desc">
                <h4>Sala Libre</h4>
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
                        <p>L - V de 09:00 hrs - 18:00 hrs<br>S de 09:00 hrs - 12:00 hrs</p>
                      </div>
                    </div>
                    <div class="space-property clearfix">
                      <div class="property-img property-people"><?php include (TEMPLATEPATH . '/partials/calendar.php'); ?></div>
                      <div class="property-desc d-flex align-items-center">
                        <p>Uso Libre</p>
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
                  <div class="swiper-slide" style="background-image: url('<?php echo $baseurl ?>/2017/11/sala_origami1.jpg');"></div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
              <div class="space-desc">
                <h4>Sala Origami I</h4>
              </div>
              <div class="space-review">
                <div class="space-wrapper-review">
                  <div class="space-properties">
                    <div class="space-property clearfix">
                      <div class="property-img property-people"><?php include (TEMPLATEPATH . '/partials/people.php'); ?></div>
                      <div class="property-desc d-flex align-items-center">
                        <p>6 personas</p>
                      </div>
                    </div>
                    <div class="space-property clearfix">
                      <div class="property-img property-people"><?php include (TEMPLATEPATH . '/partials/schedule.php'); ?></div>
                      <div class="property-desc d-flex align-items-center">
                        <p>L - V de 09:00 hrs - 18:00 hrs<br>S de 09:00 hrs - 12:00 hrs</p>
                      </div>
                    </div>
                    <div class="space-property clearfix">
                      <div class="property-img property-people"><?php include (TEMPLATEPATH . '/partials/calendar.php'); ?></div>
                      <div class="property-desc d-flex align-items-center">
                        <p>1 día hábil de anticipación</p>
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
                  <div class="swiper-slide" style="background-image: url('<?php echo $baseurl ?>/2017/11/salaverde.jpg');"></div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
              <div class="space-desc">
                <h4>Sala Origami II</h4>
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
                        <p>L - V de 09:00 hrs - 18:00 hrs<br>S de 09:00 hrs - 12:00 hrs</p>
                      </div>
                    </div>
                    <div class="space-property clearfix">
                      <div class="property-img property-people"><?php include (TEMPLATEPATH . '/partials/calendar.php'); ?></div>
                      <div class="property-desc d-flex align-items-center">
                        <p>1 día hábil de anticipación</p>
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