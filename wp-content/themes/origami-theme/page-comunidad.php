<?php
/**
 * Template Name: Comunidad
 */
	get_header();
?>
<section class="fluid-section" id="main-comunity">
  <div class="full-page">
    <div class="container">
      <div id="gallery-comunity">

          <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array( 'posts_per_page' => -1, 'paged' => $paged,'post_type' => 'testimonio' );
            $postslist = new WP_Query( $args );

            if ( $postslist->have_posts() ) :
              while ( $postslist->have_posts() ) : $postslist->the_post();
          ?>
              <div class="main-feed">
                <div class="row no-gutters">
                  <div class="col-12 col-md-4 feed-img"><img src="<?php the_post_thumbnail_url(); ?>"></div>
                  <div class="col-12 col-md-8 feed-content">
                    <div class="feed-wrap">
                      <div class="feed-top">
                        <h2><?php echo get_the_title(); ?></h2>
                      </div>
                      <div class="feed-body">
                        <p><?php echo get_the_content(); ?></p>
                      </div>
                      <div class="feed-name">
                        <h3><?php the_field('testimonio_autor'); ?></h3>
                        <?php if( get_field('testimonio_rol') ): ?>
                          <h5><?php the_field('testimonio_rol'); ?></h5>
                        <?php endif; ?>
                      </div>

                      <?php if( get_field('testimonio_redes_sociales') ): ?>
                        <div class="feed-social">
                          <?php while ( has_sub_field('testimonio_redes_sociales') ) : ?>
                            <a class="feed-ico" target="_blank" href="<?php the_sub_field('red_socialurl'); ?>">
                              <i class="fa fa-<?php the_sub_field('testimonio_red_social'); ?>"></i>
                            </a>
                          <?php endwhile; ?>
                        </div>
                      <?php endif; ?>

                    </div>
                  </div>
                </div>
              </div>
          <?php
              endwhile;
            endif;
          ?>

      </div>
      <div class="wrap-comunity-thumbs d-none d-md-block">
        <div class="slick-button-black" id="gallery-comunity-thumbs">

          <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array( 'posts_per_page' => -1, 'paged' => $paged,'post_type' => 'testimonio' );
            $postslist = new WP_Query( $args );

            if ( $postslist->have_posts() ) :
              while ( $postslist->have_posts() ) : $postslist->the_post();
          ?>

                <div class="thumb-feed">
                  <div class="feed-thumb-content">
                    <div class="feed-thumb-img">
                      <figure>
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="" />
                      </figure>
                    </div>
                    <div class="feed-thumb-name">
                      <h5><?php the_field('testimonio_autor'); ?></h5>
                    </div>
                  </div>
                </div>

          <?php
              endwhile;
            endif;
          ?>

        </div>
      </div>
    </div>
  </div>
  <div class="line-comunity">
    <h4>COMUNIDAD DE EMPRENDEDORES</h4>
  </div>
  <div class="boxes-comunity">
    <div class="container">
      <div class="row">

        <?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $args = array( 'posts_per_page' => 10, 'paged' => $paged,'post_type' => 'emprendedor' );
          $postslist = new WP_Query( $args );

          if ( $postslist->have_posts() ) :
            while ( $postslist->have_posts() ) : $postslist->the_post();
        ?>

          <div class="col-6 col-md-4 box-comunity">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="" />
          </div>

        <?php
            endwhile;
          endif;
        ?>

      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>