<?php get_header(); ?>


    <section id="section1" class="cd-section half-section hero-background page-hero"  style="background: url('<?php the_post_thumbnail_url(); ?>') no-repeat center center; background-size: cover">
        <div class="overlay"></div>
        <div class="product-hero-content hero-content">
            <h1><?php the_title(); ?></h1>
            <p><?php the_field('sub_menu') ?></p>
        </div>
        <a href="#solli" class="cd-scroll-down"><div><i class="material-icons">keyboard_arrow_down</i></div></a>
    </section>

    <section id="solli" class="solution">

        <div class="s-text-1">
            <?php the_field('information_1') ?>
        </div>

    </section>
    <?php if(get_field('information_2')) : ?>

    <section class="solution">
        <div class="s-img" style="background: url('<?php the_field('image_2') ?>') no-repeat center center; background-size: cover">
        </div>

        <div class="s-text f-six">
            <?php the_field('information_2') ?>
        </div>
    </section>
    <?php endif ; ?>

    <?php if(get_field('information_3')) : ?>
    <section class="solution">

        <div class="s-text">
            <?php the_field('information_3') ?>
        </div>

        <div class="s-img" style="background: url('<?php the_field('image_3') ?>') no-repeat center center; background-size: cover">

        </div>

    </section>
    <?php endif ; ?>

<?php get_footer(); ?>