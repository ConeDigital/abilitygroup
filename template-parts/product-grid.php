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

    <div class="product-grid">
        <div class="product-grid-img" style="background-image: url('<?php  the_post_thumbnail_url(); ?>')"></div>
        <div class="product-grid-content">
            <h4><?php the_title(); ?></h4>
            <p><?php the_excerpt() ; ?></p>
        </div>
        <div class="product-grid-bottom">
            <p>Read more</p>
        </div>
        <a href="<?php echo get_permalink(); ?>"></a>
    </div>

<?php endwhile; wp_reset_query(); ?>
