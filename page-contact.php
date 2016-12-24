<?php
/*
  Template Name: Contact Page
*/

get_header(); ?>

<div class="mypage" id="contact">
  <div class="container">
    <h1 class="page-title"><?php wp_title(''); ?></h1>

    <!-- LINKS -->
    <?php $loop = new WP_Query(array('post_type' => 'links', 'orderby' => 'post_id', 'order' => 'ASC')); ?>

    <?php if($loop->have_posts()): ?>
      <ul class="links-social">
        <?php while($loop->have_posts()): $loop->the_post(); ?>
          <li><a href="<?php the_field('url'); ?>" target="_blank"><?php the_title(); ?></a>
        <?php endwhile; ?>
      </ul>
    <?php endif; wp_reset_postdata();?>

    <!-- CONTACT FORM -->
    <?php the_content(); ?>

  </div>
</div>

<?php get_footer(); ?>