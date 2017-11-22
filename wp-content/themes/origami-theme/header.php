<!DOCTYPE html>
<html lang="es">
  <head>
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css" />
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
    <!--[if IE]>
      <script src=”http://html5shiv.googlecode.com/svn/trunk/html5.js”></script>
    <![endif]-->
    <?php wp_head(); ?>
    <!--Start of Zendesk Chat Script-->
    <script type="text/javascript">
    window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
    d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
    _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
    $.src="https://v2.zopim.com/?5C9ef2oQpKamkUxotojMwaBdvlWWUk9y";z.t=+new Date;$.
    type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
    </script>
    <!--End of Zendesk Chat Script-->
  </head>
  <body <?php body_class(); ?>>
    <header id="main-header">
      <div class="full-width">
        <nav class="navbar navbar-expand-md navbar-dark p-0">
          <div class="menu-logo d-none d-md-block">
            <a class="link-logo" href="<?php bloginfo('url'); ?>/">
              <?php include (TEMPLATEPATH . '/partials/logo.php'); ?>
            </a>
          </div>
          <div class="ml-auto d-block d-md-none collapsed" id="burger-menu" data-toggle="collapse" data-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
            <div class="nav-icon"><span></span><span></span><span></span></div>
          </div>
          <div class="collapse navbar-collapse" id="navbarMain">
            <div class="menu-logo d-block d-md-none">
              <a class="link-logo" href="<?php bloginfo('url'); ?>/">
                <?php include (TEMPLATEPATH . '/partials/logo.php'); ?>
              </a>
            </div>
            <?php wp_nav_menu( array(
              'container' => false,
              'theme_location' => 'primary-menu',
              'items_wrap'  => '<ul class="navbar-nav navbar-custom justify-content-end justify-content-lg-center align-items-center" id="nav">%3$s</ul>',
            )); ?>
            <div class="d-flex d-md-none justify-content-center">
              <nav class="menu-footer">
                <p>Síguenos en:</p>
                <ul class="social-links">
                  <li>
                    <a href="https://www.facebook.com/origamicowork/" target="_blank">
                      <?php include (TEMPLATEPATH . '/partials/facebook.php'); ?>
                    </a>
                  </li>
                  <li>
                    <a href="https://twitter.com/OrigamiCowork" target="_blank">
                      <?php include (TEMPLATEPATH . '/partials/twitter.php'); ?>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.instagram.com/origami.cowork/" target="_blank">
                      <?php include (TEMPLATEPATH . '/partials/instagram.php'); ?>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.linkedin.com/company/origamicowork/" target="_blank">
                      <?php include (TEMPLATEPATH . '/partials/linkedin.php'); ?>
                    </a>
                  </li>
                  <li>
                    <a href="https://plus.google.com/106522681620298830785" target="_blank">
                      <?php include (TEMPLATEPATH . '/partials/google-plus.php'); ?>
                    </a>
                  </li>
                </ul>
                <h5>ORIGAMI COWORK</h5>
              </nav>
            </div>
          </div>
        </nav>
      </div>
    </header>
