<?php
/**
 * Template Name: Contacto
 */
  get_header();
?>

<section class="fluid-section" id="contact-section">
  <div class="bg-contact">
    <div class="d-table">
      <div class="d-table-cell">
        <div class="container-fluid">
          <div class="wrapper-contact">
            <div class="full-contact" id="main-contact">
              <?php echo do_shortcode( '[contact-form-7 id="116" title="Contact Form"]' ); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>