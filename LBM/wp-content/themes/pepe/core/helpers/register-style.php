<?php 
function pepe_style(){
	$cssArray = array(
		'home',
		'chitiet',
		'cart',
		'news',
		'categoryStyle',
		'thanhtoan',
		'bill',
		'archive'
	);
	$jsArray= array(
		'add-to-cart',
		'category',
		'popup'

);
	foreach ($cssArray as $file ) {
		$label=str_replace(".", "", $file);
		wp_enqueue_style($label,URL_CSS. "/" .$file. ".css");

	}
	foreach ($jsArray as $file ) {
		$label=str_replace(".", "", $file);
		wp_enqueue_script($label,URL_JS. "/" .$file. ".js");

	}
//	wp_enqueue_style('mainstyle',get_template_directory_uri() . "/style.css");
	//wp_enqueue_style('homecss',URL_CSS."/home.css");

}
add_action('wp_enqueue_scripts','pepe_style');