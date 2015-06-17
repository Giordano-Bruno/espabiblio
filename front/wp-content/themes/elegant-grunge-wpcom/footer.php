<?php
/**
 * @package WordPress
 * @subpackage Elegant Grunge
 */
?>
</div><!-- #content-body -->
<div id="footer-wrap-outer">
	<div id="footer-wrap">
		<div id="footer">
			<div id="subscribe-rss">
				<a href="<?php bloginfo( 'rss2_url' ); ?>"><?php _e( 'Subscribe RSS', 'elegant-grunge' ); ?></a>
			</div>
			<?php dynamic_sidebar( 'footer-1' ); ?>
			<div class="clear"></div>
			<div class="credit">
				<a href="http://wordpress.org/" rel="generator">Proudly powered by WordPress</a>
				<?php printf( __( 'Theme: %1$s by %2$s.', 'elegant-grunge' ), 'Elegant Grunge', '<a href="http://atastypixel.com/blog/wordpress/themes/elegant-grunge/?fromcreditlink" rel="designer">Michael Tyson</a>' ); ?>
			</div>
		</div>
	</div>
</div><!-- #footer-wrap-outer -->
<?php wp_footer(); ?>
</body>
</html>