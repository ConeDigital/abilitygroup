<?php get_header() ; ?>

    <section class="hero-background product-hero" style="background-image: linear-gradient(176deg, rgba(0, 0, 0, 0.06), rgba(0, 0, 0, 0.42)), url('<?php  the_post_thumbnail_url(); ?>')">
        <div class="product-hero-content hero-content">
            <?php echo get_field('product-hero') ; ?>
        </div>
        <a href="#product-expl" class="cd-scroll-down toppy"><p>Our Products</p><div><i class="material-icons">keyboard_arrow_down</i></div></a>
    </section>
    <section id="product-expl" class="product-expl">
        <?php echo get_field('products-explanation') ; ?>
    </section>
    <section class="product-grid-section">
        <?php get_template_part( 'template-parts/product-grid', get_post_format() ); ?>
    </section>
<?php get_footer() ; ?>