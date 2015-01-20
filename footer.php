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

</div><!-- #main .site-main -->

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="footer-container">
    	<section id="footer-widget-1" class="widget-area">
			<?php if (!dynamic_sidebar( 'sidebar-3' )): ?>
				<h4>Email Address</h4>
				<address>hksa@u.washington.edu</address>
			<?php endif; ?>
		</section>
		<section class="widget-area">
		<?php if (! dynamic_sidebar( 'sidebar-4' )): ?>
			<h4>Mailing Address</h4>
			<address>
				University of Washington<br />
				SAO 73-74, Box 352238<br />
				Seattle, WA 98195
			</address>
			<h4>Office Location</h4>
			<address>
				University of Washington<br />
				Husky Union Building<br />
				RM b277<br />
			</address>
		<?php endif; ?>
		</section>

		<section class="widget-area">
			<?php if (! dynamic_sidebar( 'sidebar-5' )): ?>
				<h4><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h3>
	 			<p><?php bloginfo( 'description' ); ?></p>
	 			<h4><a href="#" title="Back to top">Back to top</a></h4>
			<?php endif; ?>
		</section>

	</div> <!-- .footer-container-->

</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>