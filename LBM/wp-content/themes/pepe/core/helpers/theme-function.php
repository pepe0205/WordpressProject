<?php
// khai bao chuc nang cho THEME
if (!function_exists('pepe_theme_setup')){
	function pepe_theme_setup(){
		//thiet lap text domain
		$language_folder = THEME_URL . './languages';
		load_theme_textdomain('pepe',$language_folder);
		//Tu dong them link RSS len <head>

		add_theme_support('automatic-feed-links');

		//Them thumbnail
		add_theme_support('post-thumbnails');

		//post format

		add_theme_support('post-format' , array(
			'image',
			'video',
			'gallery',
			'quote',
			'link'
		));
		//them tittle tag
		add_theme_support('title-tag');

		//them background
		$default_background = array(
			'default-color'=> '#e8e8e8'
		);
		add_theme_support('custom-background',$default_background);

		//them menu

		register_nav_menu('primary-menu',__('Primary menu','pepe'));

		//tao sidebar 

		$sidebar = array(
			'name' => __('Main Sidebar','pepe'),
			'id'=>'main-sidebar',
			'description' => __('Default Sidebar'),
			'class' => 'main-sidebar',
			'before_title'=>'<h3 class = "widgettitle">',

			'after_title' => '<h3>' ,
		);
		register_sidebar ($sidebar);

	}
	add_action('init','pepe_theme_setup');

}