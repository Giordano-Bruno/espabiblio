<?php
/**
 * @package WordPress
 * @subpackage Elegant Grunge
 */
?>

<?php
/**
 * Check layout option and display sidebars as needed
 */
	$options = elegant_grunge_get_theme_options();
	$current_layout = $options['theme_layout'];

	if ( 'no-sidebar' == $current_layout )
		return;
?>

<div id="sidebar" class="sidebar">
<?php do_action( 'before_sidebar' ); ?>
	<ul>
	<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
		<li>
			<?php wp_list_pages( 'title_li=<h2>'.__( 'Pages', 'elegant-grunge' ) . '</h2>' ); ?>
		</li>
		<li>
			<h2><?php _e( 'Archives', 'elegant-grunge' )?></h2>
			<ul>
				<?php wp_get_archives( 'type=monthly' ); ?>
			</ul>
		</li>
		<?php /* If this is the frontpage */ if ( is_home() || is_page() ) : ?>
		<li>
			<?php wp_list_bookmarks(); ?>
		</li>
		<li>
			<h2><?php _e( 'Meta', 'elegant-grunge' )?></h2>
			<ul>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
				<?php wp_meta(); ?>
			</ul>
		</li>
		<?php endif; ?>
	<?php endif; ?>
	</ul>
</div><!-- #sidebar-1 -->

<?php if ( 'content-sidebar-sidebar' == $current_layout ) : ?>
<div id="sidebar-2" class="sidebar">
	<ul>
		<?php if ( ! dynamic_sidebar( 'sidebar-2' ) ):  ?>
		<li>
			<?php get_search_form(); ?>
		</li>
		<li>
			<?php wp_list_categories( 'show_count=1&title_li=<h2>'.__( 'Categories', 'elegant-grunge' ) . '</h2>' ); ?>
		</li>
		<?php endif; ?>
	</ul>
</div><!-- #sidebar-2 -->
<?php endif; ?>