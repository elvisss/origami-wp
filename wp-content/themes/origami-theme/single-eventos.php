<?php get_header(); ?>

<section class="fluid-section">
  <div class="container">
    <div id="events-section">

    	<?php if (have_posts()) : ?>

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

		<?php endif; ?>

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