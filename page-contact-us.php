<?php get_header() ; ?>

    <section id="section1" class="cd-section hero-background" style="min-height: 80%; max-height: 722px; background-image:  linear-gradient(176deg, rgba(0, 0, 0, 0.06), rgba(0, 0, 0, 0.42)), url('<?php the_post_thumbnail_url(); ?>')">
        <div class="product-hero-content hero-content">
            <h1><?php echo the_field('contact-hero') ?></h1>
        </div>
        <a href="#contact-cont" class="cd-scroll-down"><div><i class="material-icons">keyboard_arrow_down</i></div></a>
    </section>


    <section class="contact-headline">
        <h2>Contacts</h2>
    </section>
    <section id="contact-cont" class="contact-section">
        <div class="contact-left">
            <?php if( have_rows('contacts') ): ?>
                <?php while( have_rows('contacts') ) : the_row(); remove_filter('acf_the_content', 'wpautop'); ?>
                    <div class="contact-content">
                        <h4><?php echo get_sub_field('contacts-headline') ; ?></h4>
                        <div class="contact-info">
                            <div class="contact-info-left" style="background-image: url('<?php echo get_sub_field('contacts-img') ; ?>')">
                                <a target="_blank" href="<?php echo get_sub_field('map-link') ; ?>"><i class="material-icons"><?php echo get_sub_field('link-icon') ; ?></i></a>
                            </div>
                            <div class="contact-info-right">
                                <?php echo get_sub_field('contacts-content') ; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>

            <?php endif; ?>

        </div>
        <div class="contact-right .blue-quote">
            <blockquote>“Phasellus volutpat, metus eget egestas mollis, lacus lacus blandit dui, id egestas quam mauris ut lacus. Fusce neque. Suspendisse feugiat. Blandit dui, id egestas quam mauris ut lacus. Fusce neque. Suspendisse feugiat phasellus volutpat, metus eget.”</blockquote>
            <span>- Alex Stewart, Chief Mathematician at Visuray Ltd. and XCounter AB.</span>
        </div>
    </section>
    <section class="contact-other">
        <div class="contact-other-content">
            <h3>Pressreleases</h3>
            <p>For pressreleases, news and investor information please visit our group site</p>
            <a href="http://directconversion.com/investor-info/">Direct Conversion <i class="material-icons">arrow_forward</i></a>
        </div>
        <div class="contact-other-content">
            <h3>Latest News</h3>
            <p>Every week we present more news regarding the enterprise</p>
            <a href="http://directconversion.com/news/">Direct Conversion <i class="material-icons">arrow_forward</i></a>
        </div>
        <div class="contact-other-content">
            <div class="contact-links">
                <div class="contact-link">
                    <a class="go-to-link" href="http://directconversion.com/"></a>
                    <i class="material-icons">keyboard_arrow_right</i>
                    <p>Direct conversion</p>
                </div>
                <div class="contact-link">
                    <a class="go-to-link" href="http://ajat.fi/"></a>
                    <i class="material-icons">keyboard_arrow_right</i>
                    <p>Ajat</p>
                </div>
            </div>
        </div>
    </section>

<?php get_footer() ; ?>