<?php 
function  stylesheet1(){
	wp_enqueue_style('style',get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','stylesheet1');
//register menu location
	register_nav_menus(array(
	'header' => __('Primary Menu') 

));