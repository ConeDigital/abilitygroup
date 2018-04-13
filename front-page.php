<?php get_header() ; ?>

<section class="cd-hero">
    <div class="home-overlay"></div>
    <ul class="cd-hero-slider autoplay">
    <?php if( have_rows('slider-content') ): ?>
        <?php $r = 0; ?>
        <?php while( have_rows('slider-content') ) : the_row(); remove_filter('acf_the_content', 'wpautop'); ?>
            <li class="cd-bg-video <?php if($r == 0) echo 'selected'?>" style="background-image:radial-gradient(ellipse at 50% 100%, rgba(0,0,0, 0.5) 0%, rgba(0,0,0, 0.5) 100%), url('<?php echo get_sub_field('slider-background') ;?>')">
                <div class="cd-full-width">
                    <h2><?php echo get_sub_field('slider-headline') ;?></h2>
                    <?php echo get_sub_field('slider-text') ;?>
                    <a href="<?php echo get_sub_field('slider-link') ;?>" class="cd-btn">Läs mer</a>
                </div> <!-- .cd-full-width -->

                        <div class="cd-bg-video-wrapper" data-video="<?php echo get_sub_field('slider-video') ;?>">
                            <!-- video element will be loaded using jQuery -->
                        </div> <!-- .cd-bg-video-wrapper -->
                    </li>
                    <?php $r++; ?>
                <?php endwhile; ?>

            <?php endif; ?>
        </ul> <!-- .cd-hero-slider -->

        <div class="cd-slider-nav">
            <nav>
                <span class="cd-marker item-1"></span>

                <ul>
                    <?php if( have_rows('slider-content') ): ?>
                        <?php $i = 0; ?>
                        <?php while( have_rows('slider-content') ) : the_row(); remove_filter('acf_the_content', 'wpautop'); ?>
                            <li class="<?php if($i == 0) echo 'selected'?>"><a href="#0"><?php echo get_sub_field('slider-headline') ;?></a></li>
                            <?php $i++; ?>
                        <?php endwhile; ?>

                <?php endif; ?>
<!--                <li class="selected"><a href="#0">Medical</a></li>-->
<!--                <li><a href="#0">Dental</a></li>-->
<!--                <li><a href="#0">Food</a></li>-->
<!--                <li><a href="#0">Weld</a></li>-->
<!--                <li><a href="#0">Scientific</a></li>-->
            </ul>
        </nav>
    </div> <!-- .cd-slider-nav -->
</section> <!-- .cd-hero -->

    <section class="home-middle">
        <div class="home-middle-left">
            <?php the_field('home-top-content') ; ?>
        </div>
        <div class="home-middle-right">
            <div class="swiper-container home-swiper">
                <div class="swiper-wrapper">
                    <?php get_template_part( 'template-parts/product-swiper', get_post_format() ); ?>
                </div>
                <div class="swiper-pagination"></div>
                <!-- Add Pagination -->
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>
    <section class="home-bottom">
        <div class="home-bottom-left">
            <img src="<?php echo esc_url(home_url( '/wp-content/themes/abilitygroup/assets/images/ability-group.png' ) ); ?>">
            <p>Ability group fungerar som en extern IT-avdelning <a href="<?php echo esc_url(home_url( '/om-oss' ) ); ?>">om oss</a></p>
        </div>
    <div class="home-bottom-right">
        <h2><?php echo get_field('home-headline') ; ?></h2>
        <?php echo get_field('home-content') ; ?>
    </div>
</section>


<?php get_footer() ; ?>