<?php
/**
 * Template Name: Eventos
 */
  get_header();
?>

<section class="fluid-secion">
  <div class="container">
    <div id="events-section">
      <div class="main-events-section">
        <div class="row no-gutters">

          <div class="swiper-container swiper-button-white" id="events-slider">
            <div class="swiper-wrapper">

              <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                  'posts_per_page' => 10,
                  'paged' => $paged,
                  'post_type' => 'evento',
                  'meta_key' => 'evento_destacado',
                  'meta_value' => '1',
                  'compare' => '='
                );
                $postslist = new WP_Query( $args );
                $idc = 0;

                if ( $postslist->have_posts() ) :
                  while ( $postslist->have_posts() ) : $postslist->the_post(); $idc++;
              ?>

                  <div class="swiper-slide">
                    <div class="feature-bg" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></div>
                    <div class="feature-links">
                      <div class="wrap-feature-links">
                        <a class="btn btn-main js-set-evento" href="#" data-toggle="modal" data-event-name="<?php echo get_the_title(); ?>" data-event-date="<?php the_field('evento_fecha') ?>" data-target=".me-apunto">Me apunto</a>
                        <a class="btn btn-main btn-inverse" href="#" data-toggle="modal" data-target=".event-featured-<?php echo $idc; ?>">Ver más</a>
                      </div>
                    </div>
                    <div class="feature-body d-block d-md-none">
                      <h2><?php echo get_the_title(); ?></h2><a class="date" href="#"></a>
                    </div>
                  </div>

              <?php
                  endwhile;
                endif;
              ?>

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>

          <div class="col-12 col-md-4 d-none d-md-block ml-auto" id="list-events">
            <div class="wrap-list-events">
              <div class="main-list-events">
                <div class="cont-list-events" id="feature-container">
                  <div id="boxes-list-events">
                    <div class="slidee">

                      <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                          'posts_per_page' => 10,
                          'paged' => $paged,
                          'post_type' => 'evento',
                          'meta_key' => 'evento_destacado',
                          'meta_value' => '1',
                          'compare' => '='
                        );
                        $postslist = new WP_Query( $args );
                        $idc = 0;

                        if ( $postslist->have_posts() ) :
                          while ( $postslist->have_posts() ) : $postslist->the_post(); $idc++;
                      ?>
                          <div class="box-list-event
                          <?php if ($idc == 1) { ?>
                              event-active
                          <?php } ?>" data-slide="slide-<?php echo $idc; ?>">
                            <h2><a href="#"><?php echo get_the_title(); ?></a></h2>
                            <a class="date" href="#">
                              <?php the_field('evento_fecha'); ?>
                            </a>
                          </div>
                      <?php
                          endwhile;
                        endif;
                      ?>

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
</section>

<?php
  $idc = 0;

  if ( $postslist->have_posts() ) :
    while ( $postslist->have_posts() ) : $postslist->the_post(); $idc++;
?>

<div class="modal fade event-modal event-featured-<?php echo $idc; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-xl">
    <div class="modal-content">
      <div class="modal-body">
        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <div class="modal-content-event">
          <div class="row no-gutters">
            <div class="col-12 col-lg-6">
              <div class="modal-event-bg" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></div>
            </div>
            <div class="col-12 col-lg-6">
              <div class="wrap-content-event">
                <div class="event-title">
                  <h2><?php echo get_the_title(); ?></h2>
                </div>
                <div class="event-info">
                  <div class="box-event-info">
                    <div class="info-img d-none d-md-block"><i class="fa fa-map-marker"></i></div>
                    <div class="info-content">
                      <p><b><?php the_field('evento_lugar') ?></b></p>
                      <p>(<?php the_field('evento_direccion') ?>)</p>
                    </div>
                  </div>
                  <div class="box-event-info">
                    <div class="info-img d-none d-md-block"><i class="fa fa-clock-o"></i></div>
                    <div class="info-content">
                      <p><?php the_field('evento_fecha') ?> - <?php the_field('evento_horario') ?></p>
                    </div>
                  </div>
                </div>
                <div class="event-content">
                  <h4><?php the_field('evento_sub_title') ?></h4>
                  <div class="box-event-content">
                    <?php echo get_the_content(); ?>
                  </div>
                </div>
                <div class="event-social">
                  <a class="btn btn-main js-set-evento" href="#" data-toggle="modal" data-target=".me-apunto" data-event-name="<?php echo get_the_title(); ?>" data-event-date="<?php the_field('evento_fecha') ?>">Me apunto</a>
                  <a class="btn btn-social btn-facebook" target="_blank" href="http://www.facebook.com/sharer/sharer.php?s=100&p[url]=<?php echo urlencode(get_permalink()); ?>">
                    <i class="fa fa-facebook"></i>Share
                  </a>
                  <a class="btn btn-social btn-twitter" href="https://twitter.com/intent/tweet?text=<?php echo urlencode(get_the_title()); ?>+<?php echo get_permalink(); ?>" target="_blank">
                    <i class="fa fa-twitter"></i>Share
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
    endwhile;
  endif;
?>

<section class="fluid-section">
  <div class="container">
    <div class="container-events">
      <div class="row no-gutters">
        <div class="col-12 col-md-8" id="main-events">
          <div class="top-main-events">
            <h3>EVENTOS DEL MES</h3>
          </div>
          <div class="body-main-events">

            <?php
              $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
              $start = '01/10/2017';
              $end = '31/10/2017';
              $args = array(
                'posts_per_page' => 100,
                'paged' => $paged,
                'post_type' => 'evento',
                'meta_key' => 'evento_fecha',
                'meta_value' => '10',
                'meta_compare' => 'LIKE',
              );
              $postslist2 = new WP_Query( $args );
              $idc = 0;

              if ( $postslist2->have_posts() ) :
                while ( $postslist2->have_posts() ) : $postslist2->the_post(); $idc++;
            ?>

                <div class="main-event">
                  <div class="row no-gutters">
                    <div class="col-4"><a data-toggle="modal" data-target=".event-<?php echo $idc; ?>" class="bg-main-event" href="#" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></a></div>
                    <div class="col-8">
                      <div class="wrap-main-event">
                        <div class="content-main-event">
                          <div class="title-main-event">
                            <h2><a href="#" data-toggle="modal" data-target=".event-<?php echo $idc; ?>"><?php echo get_the_title(); ?></a></h2>
                          </div>
                          <div class="desc-main-event">
                            <a class="author" href="#" data-toggle="modal" data-target=".event-<?php echo $idc; ?>"><?php the_field('evento_sub_title') ?></a>
                            <p><?php the_field('evento_lugar') ?></p>
                            <p><?php the_field('evento_fecha') ?> - <?php the_field('evento_horario') ?></p>
                          </div>
                          <div class="social-main-event">
                            <a class="btn btn-main btn-sm js-set-evento" href="#" data-toggle="modal" data-target=".me-apunto" data-event-name="<?php echo get_the_title(); ?>" data-event-date="<?php the_field('evento_fecha') ?>">Me apunto</a>
                            <a class="btn btn-social btn-facebook d-none d-md-inline-block" target="_blank" href="http://www.facebook.com/sharer/sharer.php?s=100&p[url]=<?php echo urlencode(get_permalink()); ?>">
                              <i class="fa fa-facebook"></i>Share
                            </a>
                            <a class="btn btn-social btn-twitter d-none d-md-inline-block" href="https://twitter.com/intent/tweet?text=<?php echo urlencode(get_the_title()); ?>+<?php echo get_permalink(); ?>" target="_blank">
                              <i class="fa fa-twitter"></i>Share
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

            <?php
                endwhile;
              endif;
            ?>

          </div>
        </div>
        <div class="col-12 col-md-4 d-none d-md-block">
          <aside id="main-sidebar">
            <div class="aside-block">
              <div id="datepicker"></div>
              <input id="my_hidden_input" type="hidden">
            </div>
            <div class="aside-block">
              <div style="height: 700px; width: 100%; background-color: #d1d1d1;"></div>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
  $idc = 0;

  if ( $postslist2->have_posts() ) :
    while ( $postslist2->have_posts() ) : $postslist2->the_post(); $idc++;
?>
      <div class="modal fade event-modal event-<?php echo $idc; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-xl">
          <div class="modal-content">
            <div class="modal-body">
              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-content-event">
                <div class="row no-gutters">
                  <div class="col-12 col-lg-6">
                    <div class="modal-event-bg" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></div>
                  </div>
                  <div class="col-12 col-lg-6">
                    <div class="wrap-content-event">
                      <div class="event-title">
                        <h2><?php echo get_the_title(); ?></h2>
                      </div>
                      <div class="event-info">
                        <div class="box-event-info">
                          <div class="info-img d-none d-md-block"><i class="fa fa-map-marker"></i></div>
                          <div class="info-content">
                            <p><b><?php the_field('evento_lugar') ?></b></p>
                            <p>(<?php the_field('evento_direccion') ?>)</p>
                          </div>
                        </div>
                        <div class="box-event-info">
                          <div class="info-img d-none d-md-block"><i class="fa fa-clock-o"></i></div>
                          <div class="info-content">
                            <p><?php the_field('evento_fecha') ?> - <?php the_field('evento_horario') ?></p>
                          </div>
                        </div>
                      </div>
                      <div class="event-content">
                        <h4><?php the_field('evento_sub_title') ?></h4>
                        <div class="box-event-content">
                          <?php echo get_the_content(); ?>
                        </div>
                      </div>
                      <div class="event-social">
                        <a class="btn btn-main js-set-evento" href="#" data-toggle="modal" data-target=".me-apunto" data-event-name="<?php echo get_the_title(); ?>" data-event-date="<?php the_field('evento_fecha') ?>">Me apunto</a>
                        <a class="btn btn-social btn-facebook" target="_blank" href="http://www.facebook.com/sharer/sharer.php?s=100&p[url]=<?php echo urlencode(get_permalink()); ?>">
                          <i class="fa fa-facebook"></i>Share
                        </a>
                        <a class="btn btn-social btn-twitter" href="https://twitter.com/intent/tweet?text=<?php echo urlencode(get_the_title()); ?>+<?php echo get_permalink(); ?>" target="_blank">
                          <i class="fa fa-twitter"></i>Share
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php
    endwhile;
  endif;
?>

<div class="modal fade me-apunto" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <div class="modal-content-apunto">
          <?php echo do_shortcode( '[contact-form-7 id="115" title="Subscripción a Evento"]' ); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>