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
			<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ): the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>
			<div class="navigation">
				<div class="next">
					<?php next_posts_link( __( '&laquo; Older Entries', 'elegant-grunge' ) )?>
				</div>
				<div class="previous">
					<?php previous_posts_link( __( 'Newer Entries &raquo;', 'elegant-grunge' ) )?>
				</div>
			</div>
			<?php else : ?>
			<h2 class="center"><?php _e( 'Not Found', 'elegant-grunge' )?></h2>
			<p class="center">
				<?php _e( 'Sorry, but you are looking for something that isn&rsquo;t here.', 'elegant-grunge' )?>
			</p>
			<?php get_search_form(); ?>
			<?php endif; ?>
		</div>
		<?php get_sidebar(); ?>
	</div>
	<div class="clear"></div>
</div>
<?php get_footer(); ?>