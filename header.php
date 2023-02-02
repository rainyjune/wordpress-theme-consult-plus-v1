<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Consult_Plus_v1
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
  <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'consult-plus-v1' ); ?></a>
  <div class="site-top">
    <div class="content">
      <span class="label">Email :</span> info@consultplus.com <span>|</span>  <span class="label">Phone :</span> +91 5685 666
    </div>
  </div>
  <header id="masthead" class="site-header">
    <div class="site-branding">
      <?php
      the_custom_logo();
      ?>
    </div><!-- .site-branding -->

    <nav id="site-navigation" class="main-navigation">
      <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'consult-plus-v1' ); ?></button>
      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'menu-1',
          'menu_id'        => 'primary-menu',
        )
      );
      ?>
    </nav><!-- #site-navigation -->
  </header><!-- #masthead -->
