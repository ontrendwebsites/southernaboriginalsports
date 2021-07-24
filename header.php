<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

  <head>
    <meta charset="utf-8">

    <?php // force Internet Explorer to use the latest rendering engine available ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php wp_title(''); ?></title>

    <?php // mobile meta (hooray!) ?>
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
    <!--[if IE]>
      <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <![endif]-->
    <?php // or, set /favicon.ico for IE10 win ?>
    <meta name="msapplication-TileColor" content="#f01d4f">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php // wordpress head functions ?>
    <?php wp_head(); ?>
    <?php // end of wordpress head ?>

    <?php // drop Google Analytics Here ?>
    <?php // end analytics ?>

  </head>

  <body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

    <!-- Pushy Menu -->
    <nav class="pushy pushy-right">
      <div class="pushy-content">
      <?php wp_nav_menu(array(
       'container' => false,                           // remove nav container
       'container_class' => 'menu cf',                 // class of container (should you choose to use it)
       'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
       'menu_class' => 'nav top-nav cf',               // adding custom nav class
       'theme_location' => 'main-nav',                 // where it's located in the theme
       'before' => '',                                 // before the menu
             'after' => '',                                  // after the menu
             'link_before' => '',                            // before each link
             'link_after' => '',                             // after each link
             'depth' => 0,                                   // limit the depth of the nav
       'fallback_cb' => ''                             // fallback function (if there is one)
      )); ?>
      </div>
    </nav>

    <!-- Site Overlay -->
    <div class="site-overlay"></div>

    <div id="container" class="remodal-bg">

      <header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

        <button class="menu-btn hamburger hamburger--elastic" type="button">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
          <p><small>menu</small></p>
        </button>

        <div id="inner-header" class="wrap cf position-relative">
          
          <ul class="social-icons o-flex-layout position-absolute">
            <li><a href="https://www.facebook.com/Southern-Aboriginal-Sports-104624365043189" target="_blank"><i class="fab fa-facebook"></i></a></li>
            <li><a href=""><i class="fab fa-instagram"></i></a></li>
            <li><a href=""><i class="fas fa-paper-plane"></i></a></li>
          </ul>

          <section class="section-header-logo o-grid-layout o-grid-layout--auto-1">
            <?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
            <a class="header-logo" href="<?php echo home_url(); ?>" rel="nofollow">
              <?php get_template_part('library/images/inline', 'sas-logo-main.svg'); ?>
            </a>
            <div class="o-flex-layout o-flex-layout--column header-layout">

              <nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
              <?php wp_nav_menu(array(
               'container' => false,                           // remove nav container
               'container_class' => 'menu cf',                 // class of container (should you choose to use it)
               'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
               'menu_class' => 'nav top-nav cf',               // adding custom nav class
               'theme_location' => 'main-nav',                 // where it's located in the theme
               'before' => '',                                 // before the menu
                 'after' => '',                                  // after the menu
                 'link_before' => '',                            // before each link
                 'link_after' => '',                             // after each link
                 'depth' => 0,                                   // limit the depth of the nav
               'fallback_cb' => ''                             // fallback function (if there is one)
              )); ?>
              </nav>

              <h4 class="alt-font">
                <?php //bloginfo('description'); ?>
                <span>100%</span> Aboriginal owned and Community Grown
              </h4>

            </div>
          </section>

        </div>

      </header>
