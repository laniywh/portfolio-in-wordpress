<?php
/*
  Template Name: About Page
*/

$resume  = get_field('resume');

get_header(); ?>


<div class="container">
  <article class="mypage">
    <h1 class="page-title"><?php wp_title(''); ?></h1>

    <!-- BIO -->
    <?php
      if(has_post_thumbnail()) {
        the_post_thumbnail('post-thumbnail', ['class' => 'profile_pic']);
      }
    ?>

    <?php while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; ?>

    <!-- ONLINE EDUCATION -->
    <?php $loop = new WP_Query(array('post_type' => 'online_edu', 'orderby' => 'post_id', 'order' => 'DESC')); ?>

    <?php if($loop->have_posts()): ?>
      <h3>Online Education</h3>

      <div class="course-list">
        <ul>
          <?php while($loop->have_posts()): $loop->the_post(); ?>
            <li><a href="<?php the_field('link'); ?>" target="_blank"><?php the_title(); ?></a> - <?php the_field('date_finished'); ?></li>
          <?php endwhile; ?>
        </ul>
      </div>
    <?php endif; wp_reset_postdata();?>

    <!-- DOWNLOAD RESUME -->
    <?php if(!empty($resume)): ?>
      <div class="btn-container">
        <a class="btn btn-default resume-btn" href="<?php echo $resume; ?>" target="_blank">Download My Résumé</a>
      </div>
    <?php endif; ?>

  </article>
</div>


<?php get_footer(); ?>