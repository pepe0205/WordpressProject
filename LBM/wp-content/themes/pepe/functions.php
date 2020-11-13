<?php
		
define('THEME_URL', get_stylesheet_directory());
define('URL_CSS', get_template_directory_uri() . "/assets/css");
define('URL_JS', get_template_directory_uri() . "/assets/js");
define('CORE', THEME_URL . "/core");

//nhung file core
require_once(CORE . "/init.php");

//Chieu rong noi dung

if (!isset($content_width)){
	$content_width=620;
}



