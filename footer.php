<?php
/**
 * The template for displaying the footer
 *
 * @package cone
 */
?>
<?php wp_footer(); ?>
<section class="footer">
    <div class="footer-sections">
        <h4>Ability Group</h4>
        <a href="<?php echo esc_url(home_url( '/' ) ); ?>">Hem</a>
        <a href="<?php echo esc_url(home_url( '/tjanster' ) ); ?>">Tjänster</a>
        <a href="<?php echo esc_url(home_url( '/om-oss' ) ); ?>">Om oss</a>
        <a href="<?php echo esc_url(home_url( '/kontakt' ) ); ?>">Kontakt</a>
    </div>
    <div class="footer-sections">
        <h4>Tjänster</h4>
        <?php $loop = new WP_Query( array( 'post_type' => 'solutions', 'posts_per_page' => 4 ) ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <a href="<?php the_permalink() ; ?>"><?php the_title() ; ?></a>
        <?php endwhile; wp_reset_query(); ?>
    </div>
    <div class="footer-sections">
        <h4>Kontakt info</h4>
        <a href="mailto:info@abilitygroup.se">info@abilitygroup.se</a>
        <a>070 438 49 45</a>

    </div>
    <div class="footer-sections">
        <h3>Vi framtidssäkrar svenska företag med digitala verktyg</h3>
<!--        <div class="footer-icons">-->
<!--            <a target="_blank" href="https://www.linkedin.com/company/25007266/">-->
<!--                <i class="fa fa-linkedin-square" aria-hidden="true"></i>-->
<!--            </a>-->
<!--            <a target="_blank" href="#">-->
<!--                <i class="fa fa-facebook-square" aria-hidden="true"></i>-->
<!--            </a>-->
<!--            <a target="_blank" href="#">-->
<!--                <i class="fa fa-twitter-square" aria-hidden="true"></i>-->
<!--            </a>-->
<!--        </div>-->
    </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
</body>
</html>
