<?php get_header() ; ?>
    <section  class=" half-section hero-background" style="background-image:  linear-gradient(176deg, rgba(0, 0, 0, 0.06), rgba(0, 0, 0, 0.42)), url('<?php  the_post_thumbnail_url(); ?>')">
        <div class="product-hero-content hero-content">
            <h1>Frequently asked questions</h1>
        </div>
        <a href="#faq1" class="cd-scroll-down"><div><i class="material-icons">keyboard_arrow_down</i></div></a>
    </section>




<section id="faq1" class="faq-container">

    <div class="questions">
        <h2>FAQ</h2>
        <ul class="faq-group">
            <?php if( have_rows('faq') ): ?>
                <?php while( have_rows('faq') ) : the_row(); remove_filter('acf_the_content', 'wpautop'); ?>
                <li>
                    <a class="faq-trigger" href="#0"><span class="plus"></span><?php echo get_sub_field('question') ; ?></a>
                    <div class="faq-content">
                        <p><?php echo get_sub_field('answer') ; ?></p>
                    </div>
                </li>
                <?php endwhile; ?>

            <?php endif; ?>
        </ul>
    </div>
    <aside class="sidebar">
        <h2>Contact Us</h2>
        <div class="sidebar-content">
            <h4>Press contact</h4>
            <p>Rasmus Ljungwe</p>
            <a href="tel:#">+46765257711</a>
            <a href="mailto:rasmus.ljungwe@xcounter.com">rasmus.ljungwe@xcounter.com</a>
        </div>
        <div class="sidebar-content">
            <h4>Sales Inquiries</h4>
            <p>Nathanael Allison</p>
            <a href="tel:+447833426281">+44 7833 426281</a>
            <a href="mailto:nathanael.allison@xcounter.com">nathanael.allison@xcounter.com</a>
        </div>
    </aside>

</section>
<?php get_footer() ; ?>
