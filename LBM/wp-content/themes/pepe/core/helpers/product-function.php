<?php
	function percentSale($price,$price_sale){
		$sale = ($price_sale*100)/$price;
		$percent=100-$sale;
		return number_format($percent);
	}
	function removeThumb(){
		remove_action( 'woocommerce_product_thumbnails', 'woocommerce_show_product_thumbnails', 20 );
	}
	add_action('woocommerce_show_product_images','removeThumb');

?>