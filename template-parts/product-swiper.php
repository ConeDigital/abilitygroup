<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package Skeleton
 */
?>

<?php $loop = new WP_Query( array( 'post_type' => 'solutions', '12' => -1 ) ); ?>

<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

    <div class="swiper-slide">
        <div class="home-swiper-top" style="background-image: url('')">
            <img src="<?php  the_post_thumbnail_url(); ?>">
        </div>
        <div class="home-swiper-bottom">
            <h2><?php the_title(); ?></h2>
            <?php the_excerpt() ; ?>
        </div>
        <a href="<?php echo get_permalink(); ?>"></a>
    </div>

<?php endwhile; wp_reset_query(); ?>