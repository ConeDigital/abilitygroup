<?php get_header(); ?>


    <section class=" half-section hero-background page-hero"  style="background: url('<?php the_post_thumbnail_url(); ?>') no-repeat center center; background-size: cover">
        <div class="overlay"></div>
        <div class="product-hero-content hero-content">
            <h1><?php echo the_field('contact-hero') ?></h1>
        </div>
        <a href="#omoss" class="cd-scroll-down"><div><i class="material-icons">keyboard_arrow_down</i></div></a>
    </section>

    <section id="omoss" class="solution about-us-section">

        <div class="s-text-1">
            <?php the_content() ; ?>
        </div>
    </section>
    <section class="staff-section">
        <h2>Ägare</h2>
        <div class="staff-grid">
            <?php if( have_rows('staff') ): ?>
                <?php while( have_rows('staff') ) : the_row(); remove_filter('acf_the_content', 'wpautop'); ?>
                    <div class="staff-grid-card">
                        <div class="staff-img" style="background-image: url('<?php the_sub_field('staff-img') ; ?>')"></div>
                        <p class="staff-name"><?php the_sub_field('staff-name') ; ?></p>
                        <span><?php the_sub_field('staff-title') ; ?></span>
                        <a href="mailto:<?php the_sub_field('staff-email') ; ?>"><?php the_sub_field('staff-email') ; ?></a>
                        <span><?php the_sub_field('staff-number') ; ?></span>
                    </div>
                <?php endwhile; ?>

            <?php endif; ?>

        </div>
    </section>

<?php get_footer(); ?>