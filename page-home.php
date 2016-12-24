<?php
/*
  Template Name: Home Page
*/

$blurb_title          = get_field('blurb_title');
$blurb_description    = get_field('blurb_description');

get_header(); ?>

<div class="container">
  <div class="blurb">
    <h1 class="site-title"><?php echo $blurb_title; ?></h1>
    <p class="site-description"><?php echo $blurb_description; ?></p>
  </div><!-- /.blurb -->
</div>

<?php get_footer(); ?>