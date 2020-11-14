<?php get_header()?>
 <div style="margin-top:15px;margin-bottom:15px;display:flex" class="Container-itwfbd-0 jFkAwY">
        <?php get_template_part('templates/content','sidebar') ?>
      <div class="col-main">
    <h1 class="main-title">Bản tin</h1>
     <div class="std">
        <div class="news-list">
    <?php
$vnkings = new WP_Query(array(
'post_type'=>'post',
'post_status'=>'publish',
'cat' => 71,
'orderby' => 'ID',
'order' => 'DESC',
'posts_per_page'=> 5));
?>
<?php while ($vnkings->have_posts()) : $vnkings->the_post(); ?>
     <div class="news-item">
                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('thumbnail', array('class' => 'news-image')); ?></a>
                <div class="news-block">
                    <a href="<?php the_permalink() ?>" class="a-category">
                        <h3 class="news-title"><?php the_title();?></h3>
                    </a>
                   
                </div>
            </div>

<?php endwhile ; wp_reset_query() ;?>
   
        </div>
    </div>
</div>   
 </div>
<?php get_footer()?>