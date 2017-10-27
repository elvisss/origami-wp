<?php get_header(); ?>
<section class="full-section" id="main-section">
  <div class="swiper-container swiper-button-white" id="main-slider">
    <div class="swiper-wrapper">
      <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array( 'posts_per_page' => 4, 'paged' => $paged,'post_type' => 'banner' );
        $postslist = new WP_Query( $args );

        if ( $postslist->have_posts() ) :
          while ( $postslist->have_posts() ) : $postslist->the_post();
      ?>

            <div class="swiper-slide">
              <div class="main-banner-bg" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
                <div class="main-banner-content">
                  <div class="pr-4 pl-4">
                    <h3><?php echo get_the_title(); ?></h3>
                    <p><?php echo get_the_excerpt(); ?></p>
                  </div>
                </div>
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
</section>
<section class="fluid-section" id="review-section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-lg-7 col-xl-6">
        <div class="d-none d-lg-flex align-items-center justify-content-center wrapper-review">
          <div class="list-review">
            <div class="row">
              <div class="col-12 col-lg-4">
                <div class="list-cont-review"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/review1.png">
                  <p>Intercambia Ideas</p>
                </div>
              </div>
              <div class="col-12 col-lg-4">
                <div class="list-cont-review"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/review2.png">
                  <p>Colabora</p>
                </div>
              </div>
              <div class="col-12 col-lg-4">
                <div class="list-cont-review"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/review3.png">
                  <p>Crea</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-5 col-xl-6">
        <div class="d-flex align-items-center justify-content-center wrapper-review">
          <div class="content-review">
            <p>Somos el espacio de coworking ideal para las personas que quieren <b>intercambiar ideas</b> y están dispuestas a <b>colaborar</b>.<br>Te ofrecemos bellos espacios, cómodos, seguros y dinámicos, perfectos para atraer tu creatividad.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="fluid-section">
  <div class="row no-gutters">
    <div class="col-12 col-md-8">
      <div class="content-slider-room">
        <div id="slider-room">
          <div class="slide-room" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/room1.jpg');">
            <div class="slider-room-content">
              <h4>Sala de Reuniones 1</h4>
              <p>AFORO: 15 Personas</p>
            </div>
          </div>
          <div class="slide-room" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/room1.jpg');">
            <div class="slider-room-content">
              <h4>Sala de Reuniones 2</h4>
              <p>AFORO: 15 Personas</p>
            </div>
          </div>
          <div class="slide-room" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/room1.jpg');">
            <div class="slider-room-content">
              <h4>Sala de Reuniones 3</h4>
              <p>AFORO: 15 Personas</p>
            </div>
          </div>
          <div class="slide-room" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/room1.jpg');">
            <div class="slider-room-content">
              <h4>Sala de Reuniones 4</h4>
              <p>AFORO: 15 Personas</p>
            </div>
          </div>
          <div class="slide-room" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/room1.jpg');">
            <div class="slider-room-content">
              <h4>Sala de Reuniones 5</h4>
              <p>AFORO: 15 Personas</p>
            </div>
          </div>
          <div class="slide-room" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/room1.jpg');">
            <div class="slider-room-content">
              <h4>Sala de Reuniones 6</h4>
              <p>AFORO: 15 Personas</p>
            </div>
          </div>
          <div class="slide-room" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/room1.jpg');">
            <div class="slider-room-content">
              <h4>Sala de Reuniones 7</h4>
              <p>AFORO: 15 Personas</p>
            </div>
          </div>
        </div>
        <div class="d-none d-md-block" id="slider-room-thumbs">
          <div class="slide-thumbmail">
            <div class="slide-thumbnail-wrapper">
              <div class="swiper-slide-thumb" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/room1.jpg');"></div>
            </div>
          </div>
          <div class="slide-thumbmail">
            <div class="slide-thumbnail-wrapper">
              <div class="swiper-slide-thumb" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/room1.jpg');"></div>
            </div>
          </div>
          <div class="slide-thumbmail">
            <div class="slide-thumbnail-wrapper">
              <div class="swiper-slide-thumb" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/room1.jpg');"></div>
            </div>
          </div>
          <div class="slide-thumbmail">
            <div class="slide-thumbnail-wrapper">
              <div class="swiper-slide-thumb" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/room1.jpg');"></div>
            </div>
          </div>
          <div class="slide-thumbmail">
            <div class="slide-thumbnail-wrapper">
              <div class="swiper-slide-thumb" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/room1.jpg');"></div>
            </div>
          </div>
          <div class="slide-thumbmail">
            <div class="slide-thumbnail-wrapper">
              <div class="swiper-slide-thumb" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/room1.jpg');"></div>
            </div>
          </div>
          <div class="slide-thumbmail">
            <div class="slide-thumbnail-wrapper">
              <div class="swiper-slide-thumb" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/room1.jpg');"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-4">
      <div id="feature-event">
        <div class="top-feature-event">
          <h4>EVENTOS DESTACADOS</h4>
        </div>
        <div class="body-feature-event">
          <div class="boxes-feature-event" id="event-container">
            <?php

            $posts = get_posts(array(
                'posts_per_page' => -1,
                'post_type' => 'eventos',
                'meta_query'     => array(
                    array(
                        'key'       => 'evento_destacado',
                        'value'     => '1',
                        'compare'   => '='
                    )
                ),
                'orderby'   => 'meta_value',
                'meta_key'  => 'evento_fecha',
                'order'     => 'ASC',
            ));

            $group_posts = array();

            if( $posts ) {

                foreach( $posts as $post ) {

                    $date = get_field('evento_fecha', $post->ID, false);

                    $date = new DateTime($date);

                    $year = $date->format('Y');
                    $month = $date->format('m');

                    $group_posts[$year][$month][] = array($post, $date);

                }

            }

            foreach ($group_posts as $yearKey => $years) {

                // echo $yearKey;
                // echo '<br>';

                foreach ($years as $monthKey => $months) {

                  $month;
                  switch ($monthKey) {
                      case '01':
                          $month = 'Enero';
                          break;
                      case '02':
                          $month = 'Febrero';
                          break;
                      case '03':
                          $month = 'Marzo';
                          break;
                      case '04':
                          $month = 'Abril';
                          break;
                      case '05':
                          $month = 'Mayo';
                          break;
                      case '06':
                          $month = 'Junio';
                          break;
                      case '07':
                          $month = 'Julio';
                          break;
                      case '08':
                          $month = 'Agosto';
                          break;
                      case '09':
                          $month = 'Setiembre';
                          break;
                      case '10':
                          $month = 'Octubre';
                          break;
                      case '11':
                          $month = 'Noviembre';
                          break;
                      case '12':
                          $month = 'Diciembre';
                          break;
                      default:
                          $month = 'Enero';
                  }

                  ?>

                  <div class="box-fetaure-event">
                    <div class="box-top-feature">
                      <h3><?php echo $monthKey ?><span><?php echo $month ?></span></h3>
                    </div>
                    <div class="boxes-single-feature">

                  <?php

                    foreach ($months as $postKey => $posts) {

                      ?>

                      <div class="box-single-feature">
                        <div class="box-content-feature">
                          <div class="row no-gutters">
                            <div class="col-5"><a class="single-img-feature" style="background-image: url('<?php echo get_the_post_thumbnail_url($posts[0]->ID, 'thumbnail'); ?>');"></a>
                            </div>
                            <div class="col-7">
                              <div class="single-event-review">
                                <h2><?php echo $posts[0]->post_title; ?></h2>
                                <p class="date-event"><?php echo $posts[1]->format('l, d \d\e F'); ?> - <?php the_field('evento_horario', $posts[0]->ID) ?></p>
                                <p class="location-event"><?php the_field('evento_lugar', $posts[0]->ID) ?></p>
                                <?php
                                  $date = get_field('evento_fecha', $posts[0]->ID, false);
                                  $date = new DateTime($date);
                                ?>
                                <a class="link-event js-set-evento" href="#" data-toggle="modal" data-target=".me-apunto" data-event-name="<?php echo $posts[0]->post_title; ?>" data-event-date="<?php echo $date->format('j/m/Y'); ?>" data-event-img="<?php echo get_the_post_thumbnail_url($posts[0]->ID, 'large'); ?>" data-event-hour="<?php the_field('evento_horario', $posts[0]->ID) ?>" data-event-place="<?php the_field('evento_lugar', $posts[0]->ID) ?>">me apunto</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <?php
                    }

                }

            }

            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="fluid-section" id="plans-section">
  <div class="boxes-plans">
    <div class="row no-gutters" id="plans-accordion" role="tablist">
      <div class="card col-12 col-md-4 order-md-1 content-plan">
        <div class="card-header" id="headingOne" role="tab">
          <h2 class="mb-0"><a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">MEMBRESIA BASIC
              <div class="accordion-ico">
                <div class="horizontal"></div>
                <div class="vertical"></div>
              </div></a></h2>
        </div>
        <div class="collapse show" id="collapseOne" role="tabpanel" aria-labelledby="headingOne" data-parent="#plans-accordion">
          <div class="card-body box-plan">
            <h2>MEMBRESIA BASIC</h2>
            <div class="plan-content-price">
              <div class="plan-price">$200</div>
              <div class="plan-taxes">(NO INCLUYE IGV 18%)</div>
            </div>
            <div class="plan-review">
              <p>Trae tu computadora portátil, encuentra un lugar libre y comienza a trabajar.</p>
            </div>
            <ul class="plan-details">
              <li>
                <div class="plan-detail">Beneficios generales</div>
              </li>
              <li>
                <div class="plan-detail">Escritorio flexible</div>
              </li>
              <li>
                <p>(Asiento en cualquier lugar que se acomode a tu forma de trabajo)</p>
              </li>
              <li>
                <div class="plan-detail">Autoservicio cafetería</div>
              </li>
              <li>
                <p>(café, té y agua)</p>
              </li>
              <li>
                <div class="plan-detail">Welcome pack</div>
              </li>
              <li>
                <p>(materiales básicos de escritorio)</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card col-12 col-md-4 order-md-3 content-plan last-content-plan">
        <div class="card-header" id="headingThree" role="tab">
          <h2 class="mb-0"><a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">MEMBRESIA PREMIUM
              <div class="accordion-ico">
                <div class="horizontal"></div>
                <div class="vertical"></div>
              </div></a></h2>
        </div>
        <div class="collapse" id="collapseThree" role="tabpanel" aria-labelledby="headingThree" data-parent="#plans-accordion">
          <div class="card-body box-plan">
            <h2>MEMBRESIA PREMIUM</h2>
            <div class="plan-content-price">
              <div class="plan-price">$300</div>
              <div class="plan-taxes">(NO INCLUYE IGV 18%)</div>
            </div>
            <div class="plan-review">
              <p>Trae tu computadora portátil y con seguridad tendrás un espacio fijo para empezar a trabajar.</p>
            </div>
            <ul class="plan-details">
              <li>
                <div class="plan-detail">Beneficios generales</div>
              </li>
              <li>
                <div class="plan-detail">Escritorio flexible</div>
              </li>
              <li>
                <p>(Reservado)</p>
              </li>
              <li>
                <div class="plan-detail">Estacionamiento para visitas</div>
              </li>
              <li>
                <div class="plan-detail">Autoservicio cafetería</div>
              </li>
              <li>
                <p>(café, té y agua)</p>
              </li>
              <li>
                <div class="plan-detail">Welcome pack</div>
              </li>
              <li>
                <p>(Agenda y materiales básicos de escritorio)</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card col-12 col-md-4 order-md-2 content-plan">
        <div class="card-header" id="headingTwo" role="tab">
          <h2 class="mb-0"><a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">SALAS
              <div class="accordion-ico">
                <div class="horizontal"></div>
                <div class="vertical"></div>
              </div></a></h2>
        </div>
        <div class="collapse" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo" data-parent="#plans-accordion">
          <div class="card-body box-plan">
            <h2>SALAS</h2>
            <div class="plan-content-price">
              <div class="plan-price"><span>desde </span>$30<span>por hra.</span></div>
              <div class="plan-taxes">(NO INCLUYE IGV 18%)</div>
            </div>
            <div class="plan-review">
              <p>Para los que no estén afiliados, tenemos disponibles nuestros espacios para reuniones y/o presentaciones, totalmente equipados.</p>
            </div>
            <ul class="plan-details">
              <li>
                <div class="plan-detail">SALA DE REUNIONES ORIGAMI I Y II</div>
              </li>
              <li>
                <div class="plan-detail">DIRECTORIO I Y II</div>
              </li>
              <li>
                <div class="plan-detail">AUDITORIO SUM</div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="plan-bottom d-none d-md-block"><a href="<?php bloginfo('url'); ?>/servicios/">MÁS INFORMACIÓN</a></div>
</section>
<section class="fluid-section" id="comunity-section">
  <div class="wrapper-comunity">
    <div class="top-comunity">
      <h3> Nuestra Comunidad</h3>
    </div>
    <div class="body-comunity">
      <div class="swiper-container" id="comunity-slider">
        <div class="swiper-wrapper">
          <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array( 'posts_per_page' => -1, 'paged' => $paged,'post_type' => 'testimonio' );
            $postslist = new WP_Query( $args );

            if ( $postslist->have_posts() ) :
              while ( $postslist->have_posts() ) : $postslist->the_post();
          ?>
                <div class="swiper-slide" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
                  <div class="slider-room-content">
                    <p><?php echo get_the_excerpt(); ?></p>
                    <?php if( get_field('testimonio_autor') ): ?>
                      <h3><?php the_field('testimonio_autor'); ?></h3>
                    <?php endif; ?>
                  </div>
                </div>
          <?php
              endwhile;
            endif;
          ?>
        </div>
      </div>
    </div>
    <div class="swiper-button-next swiper-button-black"></div>
    <div class="swiper-button-prev swiper-button-black"></div>
  </div>
</section>

<section class="fluid-section" id="contact-section">
  <div class="bg-contact">
    <div class="container-fluid">
      <div class="wrapper-contact">
        <div id="main-contact">
          <?php echo do_shortcode( '[contact-form-7 id="116" title="Contact Form"]' ); ?>
        </div>
      </div>
    </div>
  </div>
</section>

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