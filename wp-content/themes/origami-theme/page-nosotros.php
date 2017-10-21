<?php
/**
 * Template Name: Nosotros
 */
  get_header();
?>

<section class="full-section" id="main-section">
  <div class="tab-content" id="pills-about">

    <?php if( have_rows('nosotros_secciones') ): $i = 0; ?>
      <?php while ( have_rows('nosotros_secciones') ) : the_row(); $i++; ?>

        <div class="tab-pane fade pill-content 
        <?php if ($i == 1) { ?>
            show active
        <?php } ?>
        " id="pills-<?php echo $i; ?>" role="tabpanel" aria-labelledby="pills-<?php echo $i; ?>-tab">
          <div class="pill-bg" style="background-image: url('<?php the_sub_field('nosotros_imagen'); ?>');"></div>
          <div class="flow-about">
            <div class="wrapper-flow-about"><img class="about-img" src="<?php bloginfo('stylesheet_directory'); ?>/images/origami.png" alt="">
              <div class="content-flow-about">
                <p><?php the_sub_field('nosotros_respuesta'); ?></p>
              </div>
            </div>
          </div>
        </div>

      <?php endwhile; ?>
    <?php endif; ?>

  </div>
  <div class="nav nav-pills pills-content d-flex justify-content-around justify-content-md-center" id="pills-tab-about" role="tablist">

    <?php if( have_rows('nosotros_secciones') ): $i = 0; ?>
      <?php while ( have_rows('nosotros_secciones') ) : the_row(); $i++; ?>

        <div class="pill-tab nav-item">
          <a class="
          <?php if ($i == 1) { ?>
              active
          <?php } ?>
          " id="pills-<?php echo $i; ?>-tab" data-toggle="pill" href="#pills-<?php echo $i; ?>" role="tab" aria-controls="pills-<?php echo $i; ?>">
            <?php the_sub_field('nosotros_pregunta'); ?>
          </a>
        </div>

      <?php endwhile; ?>
    <?php endif; ?>

  </div>
</section>

<?php get_footer(); ?>