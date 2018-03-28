<?php
/**
 * The template for displaying gallery
 *
 * @package cone
 */

get_header() ; ?>

    <div class="swiper-container gallery-top">
        <div class="swiper-wrapper">
            <?php if( have_rows('gallery') ): ?>
                <?php while( have_rows('gallery') ) : the_row();?>
                    <?php $image = get_sub_field('gallery-img');
                    if( !empty($image) ):
                        // vars
                        // thumbnail
                        $size = 'large';
                        $full = $image['sizes'][ $size ];
                        ?>
                    <div class="swiper-slide" style="background-image:url('')">
                        <img data-src="<?php echo $full; ?> " class="swiper-lazy">
                    </div>
                    <?php endif; ?>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-container gallery-thumbs">
            <div class="swiper-wrapper">
                <?php if( have_rows('gallery') ): ?>
                    <?php while( have_rows('gallery') ) : the_row();?>
                        <?php $image = get_sub_field('gallery-img');
                            if( !empty($image) ):
                                // vars
                                $url = $image['url'];
                                // thumbnail
                                $size = 'thumbnail';
                                $thumb = $image['sizes'][ $size ];
                            ?>
                            <div class="swiper-slide">
                                <img src="<?php echo $thumb; ?> ?>">
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>



<?php get_footer(); ?>