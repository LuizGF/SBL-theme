<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="/wp-content/themes/SBL/style.css">
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <title><?php wp_title('-', true, 'right'); ?><?php bloginfo('title'); ?></title>
 </head>

 <body>
  <header>
   <div id="site_banner" style="background-image: url('<?php header_image() ?>');">
   </div><!--site_banner-->

   <div class="site_identity">
    <?php if( function_exists("the_custom_logo") ): ?>
     <?php if(has_custom_logo()) : ?> 
      <?php the_custom_logo(); ?>
     <?php else : ?>
      <div class="empty_space"></div>
     <?php endif; ?>
    <?php endif; ?>
    <h2 <?php if(!has_custom_logo()):?>class="n_clogo" <?php endif;?>style="color: #<?php header_textcolor();?>"><?php bloginfo("title"); ?></h2>
    <h4 style="color: #<?php header_textcolor(); ?>"><?php bloginfo("description"); ?></h4>
   </div> <!--site identity-->
    
 
   <div id="main_menu">
    <nav>
     <?php wp_nav_menu( array('menu_class' => 'main_nav_menu') ) ?>
    </nav>
   </div> <!--main_menu-->

   
   <script type="text/javascript">
	function open_mobile_button() {
		menu = document.getElementById('main_menu');
		if(menu.style.opacity =='0') {
			menu.style.opacity = '0.9';
			menu.style.zIndex = '1000'
		}
		else {
			menu.style.opacity = '0';
			menu.style.zIndex = -1;
		}
	}
   </script>
   <img class="mob_menu_icon" src="/wp-content/themes/SBL/mob_menu_icon.png" onclick="open_mobile_button()">
  </header>
  
