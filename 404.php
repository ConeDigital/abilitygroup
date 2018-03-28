<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package cone
 */

 get_header() ; ?>

<section id="section1" class="cd-section half-section hero-background" style="background-image: url('<?php get_home_url() ?>/wp-content/uploads/2016/11/contact.jpg')">
    <div class="product-hero-content hero-content">
        <h1>Page not found (404)</h1>
        <a class="button-lg" href="<?php echo home_url(); ?>">Go back home</a>
    </div>
    <a href="#section2" class="cd-scroll-down"><div><i class="material-icons">keyboard_arrow_down</i></div></a>
</section>

<section id="section2" class="section 404-content">
    <div class="full"><h2><i class="material-icons">link</i> Useful links</h2></div>

    <div class="widget-links">
        <div class="links">
            <?php dynamic_sidebar('404-1'); ?>
        </div>

        <div class="links">
            <?php dynamic_sidebar('404-2'); ?>

            <div class="contact-content">
                <h4>Sales inquires</h4>
                <div class="contact-info">
                    <div class="contact-info-left" style="background-image: url('<?php home_url(); ?>/wp-content/uploads/2016/11/nat.jpg')">
                    </div>
                    <div class="contact-info-right">
                        <h6>Nathanael Allison</h6>
                        <a href="#">nathanael.allison@xcounter.com</a>
                        <p>+467 882 33 21</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

    <section class="contact-other">
        <div class="contact-other-content">
            <h3>Pressreleases</h3>
            <p>For pressreleases, news and investor information please visit our group site</p>
            <a href="#">Direct Conversion <i class="material-icons">arrow_forward</i></a>
        </div>
        <div class="contact-other-content">
            <h3>Latest News</h3>
            <p>Every week we present more news regarding the enterprise</p>
            <a href="#">Direct Conversion <i class="material-icons">arrow_forward</i></a>
        </div>
        <div class="contact-other-content">
            <div class="contact-links">
                <div class="contact-link">
                    <a class="go-to-link" href=""></a>
                    <i class="material-icons">keyboard_arrow_right</i>
                    <p>Direct conversion</p>
                </div>
                <div class="contact-link">
                    <a class="go-to-link" href=""></a>
                    <i class="material-icons">keyboard_arrow_right</i>
                    <p>Ajat</p>
                </div>
                <div class="contact-link">
                    <a class="go-to-link" href=""></a>
                    <i class="material-icons">keyboard_arrow_right</i>
                    <p>Visuray</p>
                </div>
            </div>
        </div>
    </section>

<?php get_footer() ; ?>