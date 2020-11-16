<?php
	function percentSale($price,$price_sale){
		$sale = ($price_sale*100)/$price;
		$percent=100-$sale;
		return number_format($percent);
	}

?>