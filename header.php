<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package magicmakar
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
  <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'magic-makar' ); ?></a>

  <header id="masthead" class="site-header">
    <div class="site-branding">
      <?php
      
      magic_makar_custom_logo_output();
      
      ?>
    </div><!-- .site-branding -->

    <div class="site-info">
      <?php
      if ( is_front_page() && is_home() ) :
        ?>
        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        <?php
      else :
        ?>
        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
        <?php
      endif;
      $magic_makar_description = get_bloginfo( 'description', 'display' );
      if ( $magic_makar_description || is_customize_preview() ) :
        ?>
        <p class="site-description"><?php echo $magic_makar_description; /* WPCS: xss ok. */ ?></p>
      <?php endif; ?>
    </div>

    <nav id="site-navigation" class="main-navigation">
      <h1 class="screen-reader-text">Main Navigation</h1>
      <div class="navicon menu-toggle closed"><i class="fa fa-navicon"></i></div>
      <?php
        wp_nav_menu(
          array(
            'theme_location' => 'primary',
            'depth' => 2
          )
        );
      ?>
    </nav><!-- #site-navigation -->
  </header><!-- #masthead -->

  <div id="content" class="site-content">
