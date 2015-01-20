<?php
/**
* The template for displaying the footer.
*
* Contains the closing of the id=main div and all content after
*
* @package hksawp
*
*/
?>

<!--</div><!-- #main .site-main -->

<footer id="colophon" class="front-footer" role="contentinfo">
    <?php /*<div class="footer-container">
        <section id="footer-widget-1" class="widget-area">
            <a href="http://www.facebook.com/group.php?gid=2200920384"
            target="_blank">
                <img src="logos/facebook.png" /></a>
            <a href="https://twitter.com/hksasingcon"
            target="_blank">
                <img src="logos/twitter.png" /></a>
            <a href="http://www.youtube.com/user/hksasingcon?feature=watch"
            target="_blank">
            <img src="logos/youtube.png" /></a>
            <a href="">
            <img src="logos/weibo.png" /></a>
            <h4>Email Address</h4>
            <address>hksa@u.washington.edu</address>
        </section>
        <section id="footer-widget-2" class="widget-area">
            <h4>Mailing Address</h4>
            <address>
                University of Washington<br />
                SAO 73-74, Box 352238<br />
                Seattle, WA 98195
            </address>
            <h4>Office Location</h4>
            <address>
                University of Washington<br />
                Condon Hall<br />
                RM 223D, Table #28<br />
            </address>
        </section>
        <section id="footer-widget-3" class="widget-area">
            <h3 class="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h3>
            <p class="site-description"><?php bloginfo( 'description' ); ?></p>
        </section>
    </div> <!-- .footer-container--> */?>
    <div class="site-info">
        <?php do_action( 'shape_credits' ); ?>
        <a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'shape' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'shape' ), 'WordPress' ); ?></a>
        <span class="sep"> | </span>
        <?php printf( __( 'Theme: %1$s by %2$s.', 'shape' ), 'Shape', '<a href="http://themeshaper.com/" rel="designer">ThemeShaper</a>' ); ?>
    </div><!-- .site-info -->
</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>