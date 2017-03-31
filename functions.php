<?php

	/*apply a limit of words in the excerpt */
	/*I got it on: http://smallenvelop.com/limit-post-excerpt-length-in-wordpress/ cause i'm a lazy one */
	function excerpt($limit) {		
		$excerpt = explode(' ', the_excerpt(), $limit);
		if (count($excerpt)>=$limit) {
		  array_pop($excerpt);
		  $excerpt = implode(" ",$excerpt).'...';
		} else {
		  $excerpt = implode(" ",$excerpt);
		}	
		$excerpt = preg_replace('`[[^]]*]`','',$excerpt);
		return $excerpt;
	}
/* WIDGETS */
 
if (function_exists('register_sidebar'))
{
    register_sidebar(array(
        'name'          => 'Sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));
}
 
?>

<?php
	add_theme_support("custom-logo", array(
		'width' => 200,
		'flex-width' => true,
		'flex-height' => true) 
	);

	//add_theme_support('header-image', array( 'width' => 500, 'height' => 150, 'flex-width' => true, 'flex-height' => true));
	add_theme_support('custom-header', array(
		'width' => 1280, 
		'height' => 400) 
	);

	//add_theme_support('dynamic-sidebar');

	register_nav_menu('header-menu','main_nav_menu');

	add_theme_support('post-thumbnails');

	add_action('after_setup_theme', 'theme_prefix_setup');
?>

