<?php
/**
 * @package WordPress
 * @subpackage Elegant Grunge
 */
get_header();
?>
<div id="content-container">
	<div id="content">
		<div id="content-body">
			<h1 class="page-title"><?php _e( 'Error 404 - Not found', 'elegant-grunge' ); ?></h1>
			<p><?php _e( 'Sorry, no posts could be found here. Try searching below:', 'elegant-grunge' ); ?></p>
			<?php get_search_form(); ?>
			<div class="clear"></div>
		</div>
		<?php get_sidebar(); ?>
		<div class="clear"></div>
	</div>
</div>
<?php get_footer(); ?>