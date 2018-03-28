<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package cone
 */
get_header();
$chartnr = 1;
?>

<?php while ( have_posts() ) : the_post(); ?>

    <?php get_header() ; ?>


    <a class="cd-nav-trigger"><i class="material-icons">menu</i></a>
    <nav id="cd-vertical-nav" >
        <ul>
            <li>
                <a href="#section1" data-number="1">
                    <span class="cd-dot"></span>
                    <span class="cd-label">Info</span>
                </a>
            </li>
            <li>
                <a href="#section2" class="black-dot" data-number="2">
                    <span class="cd-dot"></span>
                    <span class="cd-label">Technology</span>
                </a>
            </li>
            <li>
                <a href="#section3" class="black-dot" data-number="3">
                    <span class="cd-dot"></span>
                    <span class="cd-label">Application</span>
                </a>
            </li>
            <li>
                <a href="#section4"  data-number="4">
                    <span class="cd-dot"></span>
                    <span class="cd-label">Integration</span>
                </a>
            </li>
            <li>
                <a href="#section5" class="black-dot"  data-number="5">
                    <span class="cd-dot"></span>
                    <span class="cd-label">Technical Specification</span>
                </a>
            </li>
            <!-- other navigation items here-->
        </ul>
    </nav>

    <section id="section1" class="cd-section hero-background" style="min-height: 80%; max-height: 722px; background-image:  linear-gradient(176deg, rgba(0, 0, 0, 0.06), rgba(0, 0, 0, 0.42)), url('<?php  the_field('hero-img') ;?>'); background-position: center;">
        <div class="product-hero-content hero-content">
            <?php echo get_field('hero-content') ; ?>
        </div>
        <a href="#section2" class="cd-scroll-down"><p>Read more</p><div><i class="material-icons">keyboard_arrow_down</i></div></a>
    </section>

    <section id="section2" class="cd-section bottom tech-section">
        <div class="tech-left">
            <?php echo get_field('technology-content') ; ?>
        </div>
<!--        <div class="tech-right">-->
<!--            --><?php //echo get_field('technology-quote') ; ?>
<!--        </div>-->
    </section>
    <section id="section3" class="cd-section">
        <div class="app-left">
            <?php echo get_field('app-content') ; ?>
            <a href="#">Contact us <i class="material-icons">arrow_forward</i></a>
        </div>
        <div class="app-right">
            <div class="swiper-container product-swiper">
                <div class="swiper-wrapper">
                    <?php if( have_rows('app-images') ): ?>
                        <?php while( have_rows('app-images') ) : the_row(); remove_filter('acf_the_content', 'wpautop'); ?>
                            <?php $image = get_sub_field('app-image');
                            if( !empty($image) ):
                                // vars
                                $url = $image['url'];
                                // thumbnail
                                $size = 'medium';
                                $medium = $image['sizes'][ $size ];
                                ?>
                            <div class="swiper-slide" style="padding: 60px;">
                                <img src="<?php echo $medium ; ?>">
                            </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="swiper-pagination"></div>

            </div>
        </div>
    </section>
    <section id="section4" class="cd-section">
        <div class="align-content">
            <div class="int-left">
                <?php
                the_field('chart-integration');
                the_field('chart-features');
                ?>

            </div>
            <div class="int-right">
                <h2>Resolution and DQE for anti-coincidence on and off.</h2>
                <div class="select-chart">
                    <select class="change-chart">
                        <option id="chart1" value="1">DQE RQA 5</option>
                        <option id="chart2" value="2">MTF RQA 5</option>
                    </select>
                </div>

                <div id="container" class="chart" style="min-width: 310px; height: 400px;"></div>
            </div>
        </div>
    </section>
    <section id="section5" class="cd-section">
        <div class="align-content">
            <div class="spec-left">
                <h2><?php echo get_field('spec-headline') ; ?></h2>
                <img src="<?php echo get_field('spec-image') ; ?>">
            </div>
            <div class="spec-right">
                <div class="spec-content">
                    <div class="spec-header">
                        <p class="active-spec" data-value="physical">Physical</p>
                        <p class="" data-value="sensor">Sensor</p>
                        <p class=""  data-value="performance">Performance</p>
                    </div>
                    <?php if( have_rows('spec-content') ): ?>
                        <?php $headers = ['physical', 'sensor', 'performance']; ?>
                        <?php $h = 0; ?>
                        <?php while( have_rows('spec-content') ) : the_row(); remove_filter('acf_the_content', 'wpautop'); ?>
                            <div class="testet <?php echo $headers[$h]; if ($h != 0) echo " hide-chart";?>">
                                <?php echo get_sub_field('spec-info'); ?>
                            </div>
                            <?php $h++; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>

    <?php get_footer() ; ?>

<?php endwhile; ?>
