 <div class="HotSlider__Wrapper-sc-63b0fm-0 fHEeZn" data-view-id="home_categories_container">
            <h4 class="BlockTitle__Wrapper-qpz3fo-0 jHTCJn">NGÀNH HÀNG QUAN TÂM</h4>
            <div class="slide-container">
                <div class="Slider__Wrapper-pmvh7n-0 jWOuqr">
                    <div class="slick-slider slick-initialized" dir="ltr">
                        <a data-role="none" class="slick-arrow slick-prev slick-disabled" style="display: block;"><span class="icon"><i class="tikicon icon-arrow-back"></i></span></a>
                        <div class="slick-list">
                            <div class="slick-track" style="width: 4200px; opacity: 1; transform: translate3d(0px, 0px, 0px);">
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
                              
                            <div data-index="0" class="slick-slide slick-active slick-current" tabindex="-1" aria-hidden="false" style="outline: none; width: 210px;">
                                    <div>
                                        <div tabindex="-1" class="HotSlider__Slide-sc-63b0fm-1 dDgEtN" style="width: 100%; display: inline-block;">
                                            <div class="element" data-view-id="home_categories_item" data-view-index="0">
                                                <a class="categories" href="<?php the_permalink(); ?>">
                                                    <div class="image"><?php echo get_the_post_thumbnail(get_the_ID(), 'thumbnail', array( 'class' =>'thumnail') ); ?>" </div>
                                                    <p><?php the_title(); ?></p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; wp_reset_postdata(); ?>
                                
                              
                              
                            </div>
                        </div>
                        <a data-role="none" class="slick-arrow slick-next" style="display: block;"><span class="icon"><i class="tikicon icon-arrow-back"></i></span></a>
                    </div>
                </div>
            </div>
        </div>