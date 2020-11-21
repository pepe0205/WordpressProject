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

		add_theme_support( 'woocommerce' );

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
			'name' =>  'Main SideBar',
			'id'=>'main-sidebar'
				
		);
		register_sidebar ($sidebar);

	}
	add_action('init','pepe_theme_setup');


}

if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
    // File does not exist... return an error.
    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
   function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
}
add_action( 'after_setup_theme', 'register_navwalker' );
  /* Tự động chuyển đến một trang khác sau khi login */
function my_login_redirect( $redirect_to, $request, $user ) {
        //is there a user to check?
        global $user;
        if ( isset( $user->roles ) && is_array( $user->roles ) ) {
                //check for admins
                if ( in_array( 'administrator', $user->roles ) ) {
                        // redirect them to the default place
                        return admin_url();
                } else {
                        return home_url();
                }
        } else {
                return $redirect_to;
        }
}
 
add_filter( 'login_redirect', 'my_login_redirect', 10, 3 );


function viewedProduct(){
	session_start();
	if(!isset($_SESSION["viewed"])){
		$_SESSION["viewed"] = array();
	}
	if(is_singular('product')){
		$_SESSION["viewed"][get_the_ID()] = get_the_ID();
	}
}
add_action('wp', 'viewedProduct');

   ?>