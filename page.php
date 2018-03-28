<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package cone
 */

get_header() ; ?>

    <section id="section1" class="cd-section half-section hero-background">
        <div class="product-hero-content hero-content">
            <h1><?php the_title(); ?></h1>
        </div>
        <a href="#section2" class="cd-scroll-down"><div><i class="material-icons">keyboard_arrow_down</i></div></a>
    </section>

    <section id="section2" class="section">
        <?php the_content(); ?>
    </section>

<?php get_footer() ; ?>