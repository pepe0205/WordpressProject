<ul data-view-id="main_navigation" style="z-index:2" class="Navigation__Wrapper-knnw0g-0 jJSxyD">
    <?php
    $args = array(
        'type'          => 'product',
        'child_of'      => 0,
        'parent'        => 0,
        'hide_empty'    => 0,
        'taxonomy'      => 'product_cat'
    );
    $categories = get_categories($args);
    foreach ($categories as $category) { 
        $term_link = get_term_link($category,'product_cat');
        ?>
        <li data-view-id="main_navigation_item" class="MenuItem-sc-181aa19-0 cOJYFK">
            <a href="<?php echo $term_link; ?>" rel="" class="MenuItem__MenuLink-sc-181aa19-1 bDtEiz"><span class="icon-wrap"><i class="icon-main-menu-global lv1-icon tikicon"></i></span><span class="text abc"> <?php echo $category->name; ?> </span></a>
            <div class="SubMenu__NavSub-ykxlng-0 bgEYwg header-sub-menu">
           
                <ul>
                    <?php
                    $argsSub = array(
                        'hierarchical' => 1,

                        'show_option_none' => '',

                        'hide_empty' => 0,

                        'parent' => $category->term_id,

                        'taxonomy' => 'product_cat'
                    );
                    $sub_cat = get_categories($argsSub);
                    foreach ($sub_cat as $sc) { ?>
                        </span><span data-view-id="main_navigation_sub_item" class="SubMenu__NavSubItem-ykxlng-1 iethhs"><a href="<?php echo get_term_link($sc->slug, 'product_cat') ?>" rel="nofollow"><?php echo $sc->name; ?></a></span><span data-view-id="main_navigation_sub_item" class="SubMenu__NavSubItem-ykxlng-1 iethhs">
                        <?php } ?>


                </ul>
            </div>
        </li>
    <?php } ?>


    <li data-view-id="main_navigation_item" class="MenuItem-sc-181aa19-0 cOJYFK">
        <a href="http://localhost:88/LBM/category/tin-tuc/" rel="" class="MenuItem__MenuLink-sc-181aa19-1 bDtEiz"><span class="icon-wrap"><i class="icon-main-menu-global lv1-icon tikicon"></i></span><span class="text abc">Tin Tức</span></a>

    </li>
</ul>
