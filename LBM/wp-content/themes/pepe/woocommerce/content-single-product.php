
<?php do_action( 'woocommerce_after_single_product' ); ?>
<main>
    <div class="Container-itwfbd-0 jFkAwY">
        <div itemscope="" itemType="https://schema.org/Product" class="indexstyle__Wrapper-qd1z2k-0 llsmxc">
            <meta itemProp="url" content="https://tiki.vn/ban-ui-hoi-nuoc-cam-tay-xiaomi-zanjia-gt-301w-1200w-p21266460.html"/>
            <meta itemProp="image" content="https://salt.tikicdn.com/cache/w444/ts/product/18/84/e6/c08e87916edc6f018fb0527af3c14f75.jpg"/>
            <div class="indexstyle__ProductImages-qd1z2k-2 cSuyir">
                <div class="group-images">
                    <div class="thumbnail">
                        <div class="ImageLens__Wrapper-uaw433-0 bhKhSH">
                            <div class="container"><?php global $product;    global $woocommerce;?>
                                <img src="<?php echo wp_get_attachment_url( $product->get_image_id() ); ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="image-badges"></div>
                </div>
                <div class="review-images">
                    <div class="review-images__list">
                        <a class="active"><img src="<?php echo wp_get_attachment_url( $product->get_image_id() ); ?>"></a>
                        <?php 
                            $attachment_ids = $product->get_gallery_attachment_ids();
                            foreach( $attachment_ids as $attachment_id ) {
                            $image_link =wp_get_attachment_url( $attachment_id );?>
                        <a class=""><img src="<?php echo $image_link ?>"></a>
                        <?php }?>
                    </div>
                </div>
                <span></span>
            </div>
            <div class="indexstyle__StyledSeperate-qd1z2k-1 giarZk"></div>
            <div class="indexstyle__ProductContent-qd1z2k-3 hPysQm">
                <div class="header">
                    <div class="icon-inline-with-title"><a href="#"><img src="https://salt.tikicdn.com/ts/upload/e9/68/49/50ac83c9f95bd008cc840e638f0f5791.png" alt="tikinow"></a></div>
                    <h1 class="title" itemProp="name"><?php woocommerce_template_single_title();?></h1>
                    <div itemProp="aggregateRating" itemscope="" itemType="http://schema.org/AggregateRating">
                        <meta itemProp="ratingValue" content="4.2"/>
                        <meta itemProp="ratingCount" content="245"/>
                        <meta itemProp="bestRating" content="5"/>
                        <meta itemProp="worstRating" content="1"/>
                    </div>
                    <div class="indexstyle__Review-qd1z2k-4 iZkBwo">
                        <p style="font-size:16px" class="Stars__Wrapper-sc-1t6kjxa-0 iQZcjJ"><i class="icomoon icomoon-star"></i><i class="icomoon icomoon-star"></i><i class="icomoon icomoon-star"></i><i class="icomoon icomoon-star"></i><span class="half-star"><i class="icomoon icomoon-star"></i><i class="icomoon icomoon-star"></i></span></p>
                    </div>

                </div>
                <div class="body">
                    <div class="summary">
                        <div class="left" itemProp="offers" itemscope="" itemType="http://schema.org/Offer">
                            <div class="price-and-icon ">
                                <div class="style__StyledProductPrice-sc-15mbtqi-0 hJdJUx">
                                	  <?php 
                            if($product->is_on_sale()){    ?>
                                    <div class="product-price"><span class="product-price__list-price"><?php echo $product->get_price_html(); ?></span><span class="product-price__discount-rate">-<?php echo percentSale($product->get_regular_price(),$product->get_sale_price());?>%</span></div>
                                     <?php }else{ ?>
                         <div class="product-price"><span class="product-price__current-price"><?php echo $product->get_price_html();?></span>                    
                          <?php } ?>
                                </div>
                                <div class="style-sc-11ucdwk-0 cnwTJf">
                                    <div class="item"><img src="https://salt.tikicdn.com/ts/upload/2e/da/c9/4b9c0150392c753ccb65b2595500e9d6.png" width="130" height="24"><img class="view-more" src="https://frontend.tikicdn.com/_desktop-next/static/img/pdp_revamp_v2/question.svg"><a class="view-more-link" href="https://hotro.tiki.vn/hc/vi/sections/900000370543-Ch%C6%B0%C6%A1ng-tr%C3%ACnh-R%E1%BA%BB-h%C6%A1n-ho%C3%A0n-ti%E1%BB%81n-" target="_blank"></a></div>
                                </div>
                            </div>
                            <div class="indexstyle__AddToCart-qd1z2k-7 fZaWsF add-to-cart">
                                <div class="qty-and-message">
                                    <div class="QualityInput__Wrapper-sc-15mlmyf-0 iyaBQp">
                                        <p class="label">Số Lượng</p>
                                        <div class="group-input"><button class="disable"><img src="https://frontend.tikicdn.com/_desktop-next/static/img/pdp_revamp_v2/icons-remove.svg"/></button><input type="text" value="1" class="input"/><button><img src="https://frontend.tikicdn.com/_desktop-next/static/img/pdp_revamp_v2/icons-add.svg"/></button></div>
                                    </div>
                                </div>
                                <div class="group-button"><button class="btn btn-add-to-cart">Chọn mua</button></div>
                             
                            </div>
                            <div class="lazyload-placeholder"></div>
                        </div>
                        <div class="right">
                            <div class="style__StyledCurrentSeller-i5oomf-0 eDEtVI">
                                <div class="seller-info">
                                    <div class="seller-description">Cam kết chính hiệu bởi</div>
                                    <div class="seller-icon-and-name">
                                        <img class="icon-store" src="https://frontend.tikicdn.com/_desktop-next/static/img/pdp_revamp_v2/logo.svg"/>
                                        <div><a href="https://tiki.vn/cua-hang/mistore" class="seller-name"><span>Mistore</span><span class="view-more">Xem Shop</span></a></div>
                                    </div>
                                </div>
                                <div class="style__StyledCustomerBenefits-sc-4w35vj-0 jbngMy">
                                    <div class="benefit-item compensation"><img src="https://frontend.tikicdn.com/_desktop-next/static/img/icons/compensation.svg"/><span>Hoàn tiền<br><b>
                                        111%
                                        </b></br><a style="color:#242424; text-decoration: underline;" href="https://drive.google.com/file/d/1po3r6qApp-q7JDB5kwGKujVtvInfO-ih/view" target="_blank">nếu giả</a></span>
                                    </div>
                                    <div class="benefit-item guarantee">
                                        <img src="https://frontend.tikicdn.com/_desktop-next/static/img/pdp_revamp_v2/guarantee.svg"/>
                                        <span>
                                            <!-- -->Mở hộp<br/>kiểm tra<br/>nhận hàng<!-- --> 
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div itemProp="brand" itemscope="" itemType="http://schema.org/Brand">
        <meta itemProp="name" content="Xiaomi"/>
        <meta itemProp="url" content="/thuong-hieu/xiaomi.html"/>
    </div>
    <div itemProp="aggregateRating" itemscope="" itemType="http://schema.org/AggregateRating">
        <div itemProp="itemReviewed" itemscope="" itemType="https://schema.org/Product">
            <meta itemProp="name" content="Bàn Ủi Hơi Nước Cầm Tay Xiaomi Zanjia GT-301W (1200W)"/>
            <meta itemProp="url" content="https://tiki.vn/ban-ui-hoi-nuoc-cam-tay-xiaomi-zanjia-gt-301w-1200w-p21266460.html"/>
            <meta itemProp="image" content="https://salt.tikicdn.com/cache/w780/ts/product/18/84/e6/c08e87916edc6f018fb0527af3c14f75.jpg"/>
        </div>
        <meta itemProp="ratingValue" content="4.2"/>
        <meta itemProp="ratingCount" content="245"/>
        <meta itemProp="bestRating" content="5"/>
        <meta itemProp="worstRating" content="1"/>
    </div>
   
    </div>
    <div class="Container-itwfbd-0 jFkAwY">
    <div class="ProductSlide__Wrapper-sc-18ee076-0 bwVgyp">
        <h4 class="BlockTitle__Wrapper-qpz3fo-0 jHTCJn">Sản Phẩm Tương Tự</h4>
        <div class="slider-container">
            <div class="Slider__Wrapper-pmvh7n-0 hkkAKO">
                <div class="slick-slider slick-initialized" dir="ltr">
                    <a data-role="none" class="slick-arrow slick-prev slick-disabled" style="display: block;"><span class="icon"><i class="tikicon icon-arrow-back"></i></span></a>
                    <div class="slick-list">
                        <div class="slick-track" style="width: 4712px; opacity: 1; transform: translate3d(0px, 0px, 0px);">
                            <?php 
                                $arr = array(
                                'type' => 'product',
                                       'child_of' => 0,
                                       'parent' => 0,
                                       'hide_empty' => 0,
                                       'taxonomy' => 'product_cat'
                                );
                                $related = $product->get_related( $posts_per_page );
                                $categories = get_categories( $arr );
                                foreach($categories as $category ){
                                $cat = get_term_by('id', $category->term_id,'product_cat');
                                $args = array( 
                                'post_type'             => 'product',
                                'posts_per_page'        => 10,
                                'ignore_sticky_posts'   => 1, 
                                'product_cat'           => $cat->slug,
                                'post__in'              => $related,
                                'post__not_in'          => array( $product->get_id() ),
                                ); ?>
                            <?php $getposts = new WP_query( $args);?>
                            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                            <?php global $product; ?>
                            <div data-index="0" class="slick-slide slick-active slick-current" tabindex="-1" aria-hidden="false" style="outline: none; width: 248px;">
                                <div>
                                    <a data-view-id="product_item" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="" class="Item__Wrapper-m1oy8w-0 gJJtEe">
                                        <div class="Item__Picture-m1oy8w-1 evEsoa"><img src="<?php echo wp_get_attachment_url( $product->get_image_id() ); ?>" /></div>
                                        <div class="title" style="max-height: 40px; height: auto;"><?php the_title(); ?></div>
                                        <div class="bottom" style="flex: unset;">
                                            <div class="Item__Review-m1oy8w-3 ibucdt">
                                                <p class="Stars__Wrapper-sc-1t6kjxa-0 iQZcjJ" style="font-size: 13px;"><i class="icomoon icomoon-star"></i><i class="icomoon icomoon-star"></i><i class="icomoon icomoon-star"></i><i class="icomoon icomoon-star"></i><i class="icomoon icomoon-star disable"></i></p>
                                            </div>
                                        </div>
                                        <?php if($product->is_on_sale()){    ?>
                                        <p class="price"><?php echo $product->get_price_html(); ?><span class="percent deal"><?php echo percentSale($product->get_regular_price(),$product->get_sale_price());?>%</span></p>
                                        <?php }else{ ?>
                                        <p class="price"><?php echo $product->get_price_html(); ?></p>
                                        <?php } ?>
                                    </a>
                                </div>
                            </div>
                            <?php endwhile; wp_reset_postdata(); }?>
                        </div>
                    </div>
                    <a data-role="none" class="slick-arrow slick-next" style="display: block;"><span class="icon"><i class="tikicon icon-arrow-back"></i></span></a>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="Container-itwfbd-0 jFkAwY">
        <div class="ProductDescription__Wrapper-fuzaih-0 khHtLW">
            <span></span>
            <div class="left">
            
                <div class="group">
                    <div class="content">
                        <div class="ToggleContent__Wrapper-sc-1hm81e2-1 iGyNLs">
                            <div class="ToggleContent__View-sc-1hm81e2-0 eIzUuC">
                                <div>
                                   <?php woocommerce_template_single_excerpt(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>