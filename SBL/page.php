 <?php get_header(); ?>
  <div id="page" class="one_page">
   <?php if(have_posts()) : while( have_posts()) : the_post(); ?>
    <img class="thumb" src="<?php the_post_thumbnail_url(); ?>" style="width: 90%; padding-top: 20px;">
    <div class="post_content">
     <h1><?php the_title(); ?></h1>
     <div class="page_content"><?php the_content(); ?></div>
    </div>
   <?php endwhile ?>
   <?php endif; ?>
  </div><!-- page -->
  <footer>
   <?php get_footer(); ?>
  </footer>
 </body>
</html>
