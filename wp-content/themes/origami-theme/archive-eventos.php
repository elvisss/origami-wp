<?php get_header(); ?>

<section class="fluid-section">
  <div class="container">
    <div id="events-section">
      <div class="main-events-section">
        <div class="row no-gutters">

          <div class="swiper-container swiper-button-white" id="events-slider">
            <div class="swiper-wrapper">

              <?php
                $today = date( 'Y-m-d' );
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                  'posts_per_page' => -1,
                  'paged' => $paged,
                  'post_type' => 'eventos',
                  'meta_key' => 'evento_fecha',
                  'orderby' => 'meta_value_num',
                  'order' => 'ASC',
                  'meta_query' => array(
                      'relation' => 'AND',
                      array(
                          'key' => 'evento_destacado',
                          'value' => '1',
                          'compare' => '=',
                      ),
                      array(
                          'key' => 'evento_fecha',
                          'value' => $today,
                          'compare' => '>=',
                          'type' => 'DATE'
                      ),
                  ),
                );
                $postslist = new WP_Query( $args );
                $idc = 0;

                if ( $postslist->have_posts() ) :
                  while ( $postslist->have_posts() ) : $postslist->the_post(); $idc++;
              ?>

                  <div class="swiper-slide">
                    <figure class="feature-bg" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
                      <img class="d-md-none" src="<?php the_field('evento_portrait'); ?>" />
                    </figure>
                    <div class="feature-links">
                      <div class="wrap-feature-links">
                        <?php
                          $date = get_field('evento_fecha');
                          $date = new DateTime($date);
                        ?>
                        <a class="btn btn-main js-set-evento" href="#" data-toggle="modal" data-event-name="<?php echo get_the_title(); ?>" data-event-date="<?php echo $date->format('j/m/Y'); ?>" data-target=".me-apunto" data-event-img="<?php the_post_thumbnail_url('full'); ?>" data-event-hour="<?php the_field('evento_horario') ?>" data-event-place="<?php the_field('evento_lugar') ?>">Me apunto</a>
                        <a class="btn btn-main btn-inverse" href="#" data-toggle="modal" data-target=".event-featured-<?php echo $idc; ?>">Ver más</a>
                      </div>
                    </div>
                    <div class="feature-body d-block d-md-none">
                      <h2><?php echo get_the_title(); ?></h2>
                      <?php
                        $month_event_short = '';
                        switch (date('m', strtotime(get_field('evento_fecha')))) {
                            case '01':
                                $month_event_short = 'Enero';
                                break;
                            case '02':
                                $month_event_short = 'Febrero';
                                break;
                            case '03':
                                $month_event_short = 'Marzo';
                                break;
                            case '04':
                                $month_event_short = 'Abril';
                                break;
                            case '05':
                                $month_event_short = 'Mayo';
                                break;
                            case '06':
                                $month_event_short = 'Junio';
                                break;
                            case '07':
                                $month_event_short = 'Julio';
                                break;
                            case '08':
                                $month_event_short = 'Agosto';
                                break;
                            case '09':
                                $month_event_short = 'Setiembre';
                                break;
                            case '10':
                                $month_event_short = 'Octubre';
                                break;
                            case '11':
                                $month_event_short = 'Noviembre';
                                break;
                            case '12':
                                $month_event_short = 'Diciembre';
                                break;
                            default:
                                $month_event_short = 'Enero';
                        }
                      ?>
                      <div class="date"><?php echo $month_event_short; ?> <?php echo date('j', strtotime(get_field('evento_fecha'))) ?></div>
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
                          'posts_per_page' => -1,
                          'paged' => $paged,
                          'post_type' => 'eventos',
                          'meta_key' => 'evento_fecha',
                          'orderby' => 'meta_value_num',
                          'order' => 'ASC',
                          'meta_query' => array(
                              'relation' => 'AND',
                              array(
                                  'key' => 'evento_destacado',
                                  'value' => '1',
                                  'compare' => '=',
                              ),
                              array(
                                  'key' => 'evento_fecha',
                                  'value' => $today,
                                  'compare' => '>=',
                                  'type' => 'DATE'
                              ),
                          ),
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
                              <?php
                                $date = get_field('evento_fecha');
                                $date = new DateTime($date);
                              ?>
                              <?php echo $date->format('j/m/Y'); ?>
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
        <div class="close-modal" data-dismiss="modal" aria-label="Close">
          <div class="horizontal"></div>
          <div class="vertical"></div>
        </div>
        <div class="modal-content-event">
          <div class="row no-gutters">
            <div class="col-12 col-xl-6">
              <figure class="modal-event-bg">
                <img src="<?php the_field('evento_portrait'); ?>">
              </figure>
            </div>
            <div class="col-12 col-xl-6">
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
                      <?php
                        $date = get_field('evento_fecha');
                        $date = new DateTime($date);

                          $month_event = '';
                          switch (date('m', strtotime(get_field('evento_fecha')))) {
                              case '01':
                                  $month_event = 'Enero';
                                  break;
                              case '02':
                                  $month_event = 'Febrero';
                                  break;
                              case '03':
                                  $month_event = 'Marzo';
                                  break;
                              case '04':
                                  $month_event = 'Abril';
                                  break;
                              case '05':
                                  $month_event = 'Mayo';
                                  break;
                              case '06':
                                  $month_event = 'Junio';
                                  break;
                              case '07':
                                  $month_event = 'Julio';
                                  break;
                              case '08':
                                  $month_event = 'Agosto';
                                  break;
                              case '09':
                                  $month_event = 'Setiembre';
                                  break;
                              case '10':
                                  $month_event = 'Octubre';
                                  break;
                              case '11':
                                  $month_event = 'Noviembre';
                                  break;
                              case '12':
                                  $month_event = 'Diciembre';
                                  break;
                              default:
                                  $month_event = 'Enero';
                          }

                          $day_event = '';
                          switch (date('w', strtotime(get_field('evento_fecha')))) {
                              case '1':
                                  $day_event = 'Lunes';
                                  break;
                              case '2':
                                  $day_event = 'Martes';
                                  break;
                              case '3':
                                  $day_event = 'Miércoles';
                                  break;
                              case '4':
                                  $day_event = 'Jueves';
                                  break;
                              case '5':
                                  $day_event = 'Viernes';
                                  break;
                              case '6':
                                  $day_event = 'Sábado';
                                  break;
                              case '0':
                                  $day_event = 'Domingo';
                                  break;
                              default:
                                  $day_event = 'Lunes';
                          }
                      ?>
                      <p><?php echo $day_event; ?>, <?php echo $date->format('d'); ?> de <?php echo $month_event ?>  - <?php the_field('evento_horario') ?></p>
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
                  <?php
                    $date = get_field('evento_fecha');
                    $date = new DateTime($date);
                  ?>
                  <a class="btn btn-main js-set-evento" href="#" data-toggle="modal" data-event-name="<?php echo get_the_title(); ?>" data-event-date="<?php echo $date->format('j/m/Y'); ?>" data-target=".me-apunto" data-event-img="<?php the_post_thumbnail_url('full'); ?>" data-event-hour="<?php the_field('evento_horario') ?>" data-event-place="<?php the_field('evento_lugar') ?>">Me apunto</a>
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
        <div class="col-12 col-lg-8" id="main-events">

          <?php
            if (isset($_GET['año'])) {
              $year = $_GET['año']; 
            } else {
              $year = date('Y');
            }
            
            if (isset($_GET['mes'])) {
              $month = $_GET['mes'];
            } else {
              $month = date('m');
            }

            if (isset($_GET['dia'])) {
              $day = $_GET['dia'];
              $lastday = $_GET['dia'];
            } else {
              $day = '01';
              $lastday = '31';
            }

            $month_name;
            switch ($month) {
                case '01':
                    $month_name = 'Enero';
                    break;
                case '02':
                    $month_name = 'Febrero';
                    break;
                case '03':
                    $month_name = 'Marzo';
                    break;
                case '04':
                    $month_name = 'Abril';
                    break;
                case '05':
                    $month_name = 'Mayo';
                    break;
                case '06':
                    $month_name = 'Junio';
                    break;
                case '07':
                    $month_name = 'Julio';
                    break;
                case '08':
                    $month_name = 'Agosto';
                    break;
                case '09':
                    $month_name = 'Setiembre';
                    break;
                case '10':
                    $month_name = 'Octubre';
                    break;
                case '11':
                    $month_name = 'Noviembre';
                    break;
                case '12':
                    $month_name = 'Diciembre';
                    break;
                default:
                    $month_name = 'Enero';
            }

            $nextmonth = date('Y-m-d', strtotime('+1 month', strtotime($year.'-'.$month.'-01')));
            $prevmonth = date('Y-m-d', strtotime('-1 month', strtotime($year.'-'.$month.'-01')));
            $dates = array();

          ?>

          <div class="top-main-events">
            <div class="title-month">
              <h3>EVENTOS DEL MES</h3>
            </div>
            <div class="months-carousel d-block d-md-none">
              <div class="title-carousel">
                <h4><?php echo $month ?><span><?php echo $month_name ?></span></h4>
              </div>
              <a class="arrow-month arrow-month_left" href="<?php echo home_url('eventos') . '?año=' . date('Y', strtotime($prevmonth)) . '&mes=' . date('m', strtotime($prevmonth)) ?>"></a>
              <a class="arrow-month arrow-month_right" href="<?php echo home_url('eventos') . '?año=' . date('Y', strtotime($nextmonth)) . '&mes=' . date('m', strtotime($nextmonth)) ?>"></a>
            </div>
          </div>
          <div class="body-main-events">

            <?php
            	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            	$args = array(
            	  'posts_per_page' => -1,
            	  'paged' => $paged,
            	  'post_type' => 'eventos',
            	  'meta_key' => 'evento_fecha',
            	  'orderby' => 'meta_value_num',
            	  'order' => 'ASC',
            	  'meta_query' => array(
            	      'relation' => 'AND',
            	      array(
            	          'key' => 'evento_fecha',
            	          'value' => $year . $month . $day,
            	          'compare' => '>=',
            	      ),
            	      array(
            	          'key' => 'evento_fecha',
            	          'value' => $year . $month . $lastday,
            	          'compare' => '<=',
            	      ),
            	  ),
            	);
            	$postslist2 = new WP_Query( $args );
            	$idc = 0;

            	if ( $postslist2->have_posts() ) :
            	  while ( $postslist2->have_posts() ) : $postslist2->the_post(); $idc++;
            ?>

        	<?php
        		$date = get_field('evento_fecha');
        		$date = new DateTime($date);

            $month_event = '';
            switch (date('m', strtotime(get_field('evento_fecha')))) {
                case '01':
                    $month_event = 'Enero';
                    break;
                case '02':
                    $month_event = 'Febrero';
                    break;
                case '03':
                    $month_event = 'Marzo';
                    break;
                case '04':
                    $month_event = 'Abril';
                    break;
                case '05':
                    $month_event = 'Mayo';
                    break;
                case '06':
                    $month_event = 'Junio';
                    break;
                case '07':
                    $month_event = 'Julio';
                    break;
                case '08':
                    $month_event = 'Agosto';
                    break;
                case '09':
                    $month_event = 'Setiembre';
                    break;
                case '10':
                    $month_event = 'Octubre';
                    break;
                case '11':
                    $month_event = 'Noviembre';
                    break;
                case '12':
                    $month_event = 'Diciembre';
                    break;
                default:
                    $month_event = 'Enero';
            }

            $day_event = '';
            switch (date('w', strtotime(get_field('evento_fecha')))) {
                case '1':
                    $day_event = 'Lunes';
                    break;
                case '2':
                    $day_event = 'Martes';
                    break;
                case '3':
                    $day_event = 'Miércoles';
                    break;
                case '4':
                    $day_event = 'Jueves';
                    break;
                case '5':
                    $day_event = 'Viernes';
                    break;
                case '6':
                    $day_event = 'Sábado';
                    break;
                case '0':
                    $day_event = 'Domingo';
                    break;
                default:
                    $day_event = 'Lunes';
            }
        		array_push($dates, $date->format('\'d/m/Y\''));
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
                            <p><?php echo $day_event; ?>, <?php echo $date->format('d'); ?> de <?php echo $month_event ?>  - <?php the_field('evento_horario') ?></p>
                          </div>
                          <div class="social-main-event">
                            <a class="btn btn-main js-set-evento" href="#" data-toggle="modal" data-event-name="<?php echo get_the_title(); ?>" data-event-date="<?php echo $date->format('j/m/Y'); ?>" data-target=".me-apunto" data-event-img="<?php the_post_thumbnail_url('full'); ?>" data-event-hour="<?php the_field('evento_horario') ?>" data-event-place="<?php the_field('evento_lugar') ?>">Me apunto</a>
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
            	else:
            ?>
            <p>No hay resultados</p>

        <?php endif; ?>

          </div>
        </div>
        <div class="col-12 col-lg-4">
          <aside id="main-sidebar">
            <div class="aside-block d-none d-lg-block">
              <div id="datepicker"></div>
            </div>
            <div class="aside-block">
                <?php
                  if(function_exists('dynamic_sidebar')){
                    dynamic_sidebar('Sidebar Widget');
                  }
                ?>
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
              <div class="close-modal" data-dismiss="modal" aria-label="Close">
                <div class="horizontal"></div>
                <div class="vertical"></div>
              </div>
              <div class="modal-content-event">
                <div class="row no-gutters">
                  <div class="col-12 col-xl-6">
                    <figure class="modal-event-bg">
                      <img src="<?php the_field('evento_portrait'); ?>">
                    </figure>
                  </div>
                  <div class="col-12 col-xl-6">
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
                            <?php
                              $date = get_field('evento_fecha');
                              $date = new DateTime($date);

                                $month_event = '';
                                switch (date('m', strtotime(get_field('evento_fecha')))) {
                                    case '01':
                                        $month_event = 'Enero';
                                        break;
                                    case '02':
                                        $month_event = 'Febrero';
                                        break;
                                    case '03':
                                        $month_event = 'Marzo';
                                        break;
                                    case '04':
                                        $month_event = 'Abril';
                                        break;
                                    case '05':
                                        $month_event = 'Mayo';
                                        break;
                                    case '06':
                                        $month_event = 'Junio';
                                        break;
                                    case '07':
                                        $month_event = 'Julio';
                                        break;
                                    case '08':
                                        $month_event = 'Agosto';
                                        break;
                                    case '09':
                                        $month_event = 'Setiembre';
                                        break;
                                    case '10':
                                        $month_event = 'Octubre';
                                        break;
                                    case '11':
                                        $month_event = 'Noviembre';
                                        break;
                                    case '12':
                                        $month_event = 'Diciembre';
                                        break;
                                    default:
                                        $month_event = 'Enero';
                                }

                                $day_event = '';
                                switch (date('w', strtotime(get_field('evento_fecha')))) {
                                    case '1':
                                        $day_event = 'Lunes';
                                        break;
                                    case '2':
                                        $day_event = 'Martes';
                                        break;
                                    case '3':
                                        $day_event = 'Miércoles';
                                        break;
                                    case '4':
                                        $day_event = 'Jueves';
                                        break;
                                    case '5':
                                        $day_event = 'Viernes';
                                        break;
                                    case '6':
                                        $day_event = 'Sábado';
                                        break;
                                    case '0':
                                        $day_event = 'Domingo';
                                        break;
                                    default:
                                        $day_event = 'Lunes';
                                }
                            ?>
                            <p><?php echo $day_event; ?>, <?php echo $date->format('d'); ?> de <?php echo $month_event ?>  - <?php the_field('evento_horario') ?></p>
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
                        <?php
                          $date = get_field('evento_fecha');
                          $date = new DateTime($date);
                        ?>
                        <a class="btn btn-main js-set-evento" href="#" data-toggle="modal" data-event-name="<?php echo get_the_title(); ?>" data-event-date="<?php echo $date->format('j/m/Y'); ?>" data-target=".me-apunto" data-event-img="<?php the_post_thumbnail_url('full'); ?>" data-event-hour="<?php the_field('evento_horario') ?>" data-event-place="<?php the_field('evento_lugar') ?>">Me apunto</a>
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
        <div class="close-modal" data-dismiss="modal" aria-label="Close">
          <div class="horizontal"></div>
          <div class="vertical"></div>
        </div>
        <div class="modal-content-apunto">
          <?php echo do_shortcode( '[contact-form-7 id="115" title="Subscripción a Evento"]' ); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>

<script type="text/javascript">

  $(function(){

    var url = '<?php echo home_url('eventos'); ?>';

    var availableDates = [<?php echo implode(',', $dates) ?>];

    function isInArray(array, value) {
      return (array.find(item => {return item == value}) || []).length > 0;
    }

    $('#datepicker').datepicker({
    	todayHighlight: true,
    	maxViewMode: 1,
    	language: 'es',
    	daysOfWeekHighlighted: "1",
    	defaultViewDate: '01/<?php echo $month ?>/<?php echo $year ?>',
    	beforeShowDay: function(date) {
	      var dmy = (date.getDate() > 9 ? date.getDate() : '0' + date.getDate() ) + "/" + ( date.getMonth() + 1 ) + "/" + date.getFullYear();
	      if (isInArray(availableDates, dmy)) {
	        return {
	        	classes: 'active'
	        };
	      } else {
	        return false;
	      }
		}
    });

    $('#datepicker').on('changeMonth', function(e){
      var date = new Date(e.date);
      var year = date.getFullYear();
      var month = date.getMonth() + 1;
      window.location.replace(url + '?año=' +  year + '&mes=' + month);
    });

    $('#datepicker').on('changeDate', function(e){
      var date = new Date(e.date);
      var year = date.getFullYear();
      var month = date.getMonth() + 1;
      var day = date.getDate() > 9 ? date.getDate() : '0' + date.getDate();
      window.location.replace(url + '?año=' +  year + '&mes=' + month + '&dia=' + day);
    });

  });

</script>