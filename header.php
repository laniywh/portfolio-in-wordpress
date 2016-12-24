<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head>
section and everything up until
<div id="content">
  *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lani_Huang_Portfolio
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>
  ">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="//gmpg.org/xfn/11">
  <!-- <link href="//fonts.googleapis.com/css?family=Raleway:400,400i,700" rel="stylesheet"> -->

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
  <div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content">
      <?php esc_html_e( 'Skip to content', 'lhp' ); ?></a>

    <header id="header">
      <div class="container">

        <?php
          wp_nav_menu( array(
            'menu'              => 'Main Menu',
            'theme-location'    => 'primary',
            'container'         => 'nav',
            'container_class'   => 'desktop-nav',
            'menu_class'        => 'nav'

            ) );
        ?>

        <div id="overlay" class="overlay">
          <?php
            wp_nav_menu( array(
              'menu'              => 'Main Menu',
              'theme-location'    => 'primary',
              'container'         => 'nav',
              'menu_class'        => 'nav'

              ) );
          ?>
        </div>

      </div>
      <div id="toggle" class="button-container">
        <span class="top"></span>
        <span class="middle"></span>
        <span class="bottom"></span>
      </div>
    </header>