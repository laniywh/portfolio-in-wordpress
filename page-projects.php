<?php
/*
  Template Name: Projects Page
*/

get_header(); ?>

<div class="mypage content" id="projects">
  <h1 class="page-title"><?php wp_title(''); ?></h1>

  <?php $tags = get_tags(); ?>
  <?php $loop = new WP_Query(array('post_type' => 'my_projects', 'orderby' => 'post_id', 'order' => 'ASC', 'posts_per_page' => -1)); ?>


  <ul class="header-tags">
    <li class="project-tag project-tag-default project-tag-all">All</li>
    <?php foreach($tags as $tag): ?>
      <li class="project-tag project-tag-default project-tag-<?php echo $tag->slug; ?>"><?php echo $tag->name; ?></li>
    <?php endforeach; ?>
  </ul>


  <div class="thumb-container">
    <div class="grid">

      <?php while($loop->have_posts()): $loop->the_post(); ?>

        <?php
          $details_link = get_field('details_link');
          $demo_link = get_field('demo_link');
        ?>

        <?php
          $projTagsArr = wp_get_post_tags($post->ID);
          $projTagSlugsArr = wp_get_post_tags($post->ID, array('fields' => 'slugs'));
          $projTagSlugsStr = implode(' ', $projTagSlugsArr);
        ?>

        <div class="grid-item width<?php echo get_field('item_width'); echo " $projTagSlugsStr"; ?>">
          <div class="project-container">
            <?php the_post_thumbnail('post-thumbnail', array('class' => 'project-thumb')); ?>

            <div class="project-hidable project-text">
              <div class="project-title"><?php the_title(); ?></div>
              <div class="project-content"><?php the_content(); ?></div>
              <div class="btns-container">
                <?php if(!empty($demo_link)): ?>
                  <a class="btn btn-inverse" href="<?php echo $demo_link; ?>" target="_blank">Demo</a>
                <?php endif; ?>
                <?php if(!empty($details_link)): ?>
                  <a class="btn btn-inverse" href="<?php echo $details_link; ?>" target="_blank">Details</a>
                <?php endif; ?>
              </div>
              <ul class="tag-list">
                Tags:
                <?php foreach($projTagsArr as $projTag): ?>
                  <li class="project-tag project-tag-inverse project-tag-<?php echo $projTag->slug; ?>"><?php echo $projTag->name; ?></li>
                <?php endforeach; ?>
              </ul>
            </div><!-- end .project-text -->

          </div><!-- end .project-container -->
        </div><!-- end .grid-item -->

      <?php endwhile; wp_reset_postdata();?>

    </div>
  </div>



</div>

<?php get_footer(); ?>