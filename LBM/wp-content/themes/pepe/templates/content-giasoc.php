 <div data-view-id="home_deal" class="TikiDeal__Wrapper-sc-1p33ah9-0 bjCkCy">
            <div class="header">
                <div><img src="https://frontend.tikicdn.com/_desktop-next/static/img/giasoc.svg" alt="flash deal"><img src="https://frontend.tikicdn.com/_desktop-next/static/img/flash.gif" alt="flash deal"><img src="https://frontend.tikicdn.com/_desktop-next/static/img/homnay.svg" alt="flash deal"></div>
                <div class="navigation">
                    <a href="/deal-hot?tab=now&amp;page=1" data-view-id="home_deal_view_more" title="Xem tất cả Deal Hot">
                        Xem Tất Cả 
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="body">
                <div data-view-id="home_flashdeal_container" class="List__Wrapper-sc-1ap7nsk-0 SutiD">
                    <?php
                        $tax_query[] = array(
                            'taxonomy' => 'product_visibility',
                            'field'    => 'name',
                            'terms'    => 'featured',
                            'operator' => 'IN',
                        );
                    ?>
                    <?php $args = array( 'post_type' => 'product','posts_per_page' => 10,'ignore_sticky_posts' => 1, 'tax_query' => $tax_query); ?>
                    <?php $getposts = new WP_query( $args);?>
                    <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                    <?php global $product; ?>
                         <a data-view-id="home_flashdeal_item" data-view-index="0" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="" class="Item__Wrapper-m1oy8w-0 gJJtEe" style="width: 20%;">
                        <div class="Item__Picture-m1oy8w-1 evEsoa"><?php echo get_the_post_thumbnail(get_the_ID(), 'thumbnail', array( 'class' =>'thumnail') ); ?>" </div>
                        <div class="title" style="height: 40px;"><?php the_title(); ?></div>
                        <div class="bottom" style="justify-content: flex-end;">
                            <div class="Item__Deal-m1oy8w-4 enbScK">
                                <div class="progress">
                                    <div class="bar">
                                        <div class="percent" style="width: 40%;"></div>
                                        <div class="content">
                                            <p class="text">Đã bán 2</p>
                                        </div>
                                    </div>
                                    <p class="CountDown__Wrapper-sc-1l1i54a-0 kNpsGs" style="width: 90px; margin-left: 10px;">0 ngày 07:09:28</p>
                                </div>
                            </div>
                        </div>
                        <?php 
                            if($product->is_on_sale()){    ?>
                                 <p class="price"><?php echo $product->get_price_html(); ?><span class="percent deal"><?php echo percentSale($product->get_regular_price(),$product->get_sale_price());?>%</span></p>
                        <?php }else{ ?>
                            <p class="price"><?php echo $product->get_price_html(); ?></p>
                        <?php } ?>
                    </a>
                    <?php endwhile; wp_reset_postdata(); ?>
                   
                </div>
            </div>
           
        </div>