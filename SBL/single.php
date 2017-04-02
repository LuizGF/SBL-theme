 <?php get_header(); ?>
  <div id="page">
   <div id="one_post" class="conteiner">
    <main>
     <?php if( have_posts() ) : while( have_posts() ) : the_post() ?>
      <img class="thumb" src="<?php the_post_thumbnail_url(); ?>">
      <div class="post_content">
       <h1><?php the_title(); ?></h1>
       <h6>postado em: <?php the_time('d - F- Y  h:i'); ?></h6>
       <?php the_category(); ?>
       <?php the_content() ?>
       <div id="tags"><?php the_tags(); ?></div>
       <?php comments_template(); ?>
      </div><!-- post content -->
     <?php endwhile ?>
     <?php endif; ?>
    </main>
   </div><!--one_post_conteiner-->
   <section id="sidebar">
     <?php get_sidebar(); ?>
   </section><!--sidebar-->
  </div> <!--page_conteiner-->
  <footer>
   <?php get_footer(); ?>
  </footer>
 </body>
</html>
