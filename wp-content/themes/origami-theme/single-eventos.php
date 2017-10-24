<?php get_header(); ?>

<section class="fluid-secion">
  <div class="container">
    <div id="events-section">

    	<?php if (have_posts()) : ?>

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

		<?php endif; ?>

    </div>
  </div>
</section>

<?php get_footer(); ?>