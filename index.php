 <?php get_header(); ?>
  <div id="page">
   <div id="posts" class="conteiner">
    <main>
     <?php if( have_posts() ) : while( have_posts() ) : the_post() ?>
      <div class="post <?php if(has_post_thumbnail()) : ?>thumbnail_post<?php else :?>n_t_post<?php endif;?>" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
       <div class="post_preview_text_content "  >
        <div class="post_title">
         <h2><?php the_title(); ?></h2>
         <h6>Postado em: <?php the_time('d - F - Y  h:i'); ?></h6>
         <?php the_category(); ?>
        </div><!-- post_title -->
        <?php excerpt(25); ?>
        <a class="read_more_button" href="<?php the_permalink(); ?>">LER MAIS</a>
       </div><!-- post preview text content -->
      </div><!-- post -->
     <?php endwhile ?>
     <?php endif; ?>
    </main>
   </div><!--posts_conteiner-->
   <section id="sidebar">
     <?php get_sidebar(); ?>
   </section><!--sidebar-->
  </div><!--page_conteiner-->
  <footer>
   <?php get_footer(); ?>
  </footer>
 </body>
</html>
