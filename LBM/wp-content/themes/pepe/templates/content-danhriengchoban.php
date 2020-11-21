<div class="Products__Wrapper-sc-49ljmf-0 eAkDKe">
    <div class="Products__TikinowNudgeWrapper-sc-49ljmf-1 cgsRzL">
        <?php 
            global $tp_options;
            $id=  $tp_options['change-category'];

            $cat = get_term_by('id',$id,'product_cat');
           
        ?>
            <div class="flex-group">
            <h4 class="BlockTitle__Wrapper-qpz3fo-0 jHTCJn"><?php echo $cat->name;?></h4>
            <div class="content">
                <div data-view-id="home_you_may_like_container" class="List__Wrapper-sc-1ap7nsk-0 SutiD">
                    <?php $args = array( 
                        'post_type' => 'product',
                        'posts_per_page' => 10,
                        'ignore_sticky_posts' => 1, 
                        'product_cat' => $cat->slug
                         ); ?>

                    <?php $getposts = new WP_query( $args);?>
                    <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                    <?php global $product; ?>
                    <a data-view-id="home_you_may_like_item" data-view-index="1" href="<?php the_permalink();?>" title="<?php the_title(); ?>" rel="" class="Item__Wrapper-m1oy8w-0 gJJtEe" style="width: 20%;">
                        <div class="Item__Picture-m1oy8w-1 evEsoa"><?php echo get_the_post_thumbnail(get_the_ID(), 'thumbnail', array( 'class' =>'thumnail') ); ?>"</div>
                        <div class="title" style="height: 40px;"><?php the_title(); ?></div>
                        <?php 
                            if($product->is_on_sale()){    ?>
                        <p class="price"><?php echo $product->get_price_html(); ?><span class="percent deal"><?php echo percentSale($product->get_regular_price(),$product->get_sale_price());?>%</span></p>
                        <?php }else{ ?>
                        <p class="price"><?php echo $product->get_price_html(); ?></p>
                        <?php } ?>
                    </a>
                    <?php endwhile; wp_reset_postdata();?>
                    </div>
             </div>
            </div>
         
    </div>
    
    <div class="Products__TikinowNudgeWrapper-sc-49ljmf-1 cgsRzL">
        <?php 
            global $tp_options;
            $id=  $tp_options['change-category-2'];
            $cat = get_term_by('id',$id,'product_cat');
           
        ?>
            <div class="flex-group">
            <h4 class="BlockTitle__Wrapper-qpz3fo-0 jHTCJn"><?php echo $cat->name;?></h4>
            <div class="content">
                <div data-view-id="home_you_may_like_container" class="List__Wrapper-sc-1ap7nsk-0 SutiD">
                    <?php $args = array( 
                        'post_type' => 'product',
                        'posts_per_page' => 10,
                        'ignore_sticky_posts' => 1, 
                        'product_cat' => $cat->slug
                         ); ?>
                    <?php $getposts = new WP_query( $args);?>
                    <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                    <?php global $product; ?>
                    <a data-view-id="home_you_may_like_item" data-view-index="1" href="<?php the_permalink();?>" title="<?php the_title(); ?>" rel="" class="Item__Wrapper-m1oy8w-0 gJJtEe" style="width: 20%;">
                        <div class="Item__Picture-m1oy8w-1 evEsoa"><?php echo get_the_post_thumbnail(get_the_ID(), 'thumbnail', array( 'class' =>'thumnail') ); ?>"</div>
                        <div class="title" style="height: 40px;"><?php the_title(); ?></div>
                        <?php 
                            if($product->is_on_sale()){    ?>
                        <p class="price"><?php echo $product->get_price_html(); ?><span class="percent deal"><?php echo percentSale($product->get_regular_price(),$product->get_sale_price());?>%</span></p>
                        <?php }else{ ?>
                        <p class="price"><?php echo $product->get_price_html(); ?></p>
                        <?php } ?>
                    </a>
                    <?php endwhile; wp_reset_postdata();?>
                    </div>
             </div>
            </div>
         
    </div>
</div>