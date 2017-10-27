<?php get_header(); ?>
<section class="fluid-section">
  <?php if (have_posts()) : ?>
    <?php the_post(); ?>
    <?php the_content(); ?>
  <?php endif; ?>
</section>
<?php get_footer(); ?>