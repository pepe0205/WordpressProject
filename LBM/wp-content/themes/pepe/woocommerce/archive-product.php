<div style="margin-top:15px;margin-bottom:15px;display:flex" class="Container-itwfbd-0 jFkAwY">
     <?php get_template_part('templates/content','sidebar') ?>



<div class="Container-itwfbd-0 jFkAwY custom-archive">
	<div class="ProductSlide__Wrapper-sc-18ee076-0 bwVgyp">

		<header class="woocommerce-products-header">
			<?php if (apply_filters('woocommerce_show_page_title', true)) : ?>
				<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
			<?php endif; ?>
		</header>
		<?php
		if (woocommerce_product_loop()) {

			/**
			 * Hook: woocommerce_before_shop_loop.
			 *
			 * @hooked woocommerce_output_all_notices - 10
			 * @hooked woocommerce_result_count - 20
			 * @hooked woocommerce_catalog_ordering - 30
			 */
			do_action('woocommerce_before_shop_loop');

			woocommerce_product_loop_start();

			if (wc_get_loop_prop('total')) {
				while (have_posts()) {
					the_post();

					/**
					 * Hook: woocommerce_shop_loop.
					 */
					do_action('woocommerce_shop_loop');

					wc_get_template_part('content', 'product');
				}
			}
			woocommerce_product_loop_end();
			global $product;
		} ?>
		<div class="slider-container">
			<div class="Slider__Wrapper-pmvh7n-0 hkkAKO">
				<div class="slick-slider slick-initialized" dir="ltr">
					<a data-role="none" class="slick-arrow slick-prev slick-disabled" style="display: block;"><span class="icon"><i class="tikicon icon-arrow-back"></i></span></a>
					<div class="slick-list">
						<div class="slick-track" style="width: 4712px; opacity: 1; transform: translate3d(0px, 0px, 0px);">
							<?php
							$id = get_queried_object_id();

							$cat = get_term_by('id', $id, 'product_cat');
							$args = array(
								'post_type' => 'product',
								'posts_per_page' => 10,
								'ignore_sticky_posts' => 1,
								'product_cat' => $cat->slug
							); ?>
							<?php $getposts = new WP_query($args); ?>
							<?php global $wp_query;
							$wp_query->in_the_loop = true; ?>
							<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
								<?php global $product; ?>
								<div data-index="0" class="slick-slide slick-active slick-current" tabindex="-1" aria-hidden="false" style="outline: none; width: 248px;">
									<div>
										<a data-view-id="product_item" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="" class="Item__Wrapper-m1oy8w-0 gJJtEe">
											<div class="Item__Picture-m1oy8w-1 evEsoa"><img src="<?php echo wp_get_attachment_url($product->get_image_id()); ?>" /></div>
											<div class="title" style="max-height: 40px; height: auto;"><?php the_title(); ?></div>
											<div class="bottom" style="flex: unset;">
												<div class="Item__Review-m1oy8w-3 ibucdt">
													<p class="Stars__Wrapper-sc-1t6kjxa-0 iQZcjJ" style="font-size: 13px;"><i class="icomoon icomoon-star"></i><i class="icomoon icomoon-star"></i><i class="icomoon icomoon-star"></i><i class="icomoon icomoon-star"></i><i class="icomoon icomoon-star disable"></i></p>
												</div>
											</div>
											<?php if ($product->is_on_sale()) {    ?>
												<p class="price"><?php echo $product->get_price_html(); ?><span class="percent deal"><?php echo percentSale($product->get_regular_price(), $product->get_sale_price()); ?>%</span></p>
											<?php } else { ?>
												<p class="price"><?php echo $product->get_price_html(); ?></p>
											<?php } ?>
										</a>
									</div>
								</div>
							<?php endwhile;
							wp_reset_postdata(); ?>
						</div>
					</div>
					<a data-role="none" class="slick-arrow slick-next" style="display: block;"><span class="icon"><i class="tikicon icon-arrow-back"></i></span></a>
				</div>
			</div>
		</div>
	</div>
</div>
</div>