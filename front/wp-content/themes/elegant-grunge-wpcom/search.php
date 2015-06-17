<?php
/**
 * @package WordPress
 * @subpackage Elegant Grunge
 */
?>
<?php get_header(); ?>
<div id="content-container">
	<div id="content">
		<div id="content-body">
			<h1 class="entry-title"><?php printf( __( 'Search Results for: %s', 'elegant-grunge' ), '<span>'.get_search_query() . '</span>' ); ?></h1>
			<?php if ( have_posts() ) : ?>
			<h2 class="entry-title"><?php _e( 'Search Results', 'elegant-grunge' )?></h2>
			<?php while ( have_posts() ): the_post(); ?>
			<div class="search_result">
				<h4><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'elegant-grunge' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h4>
				<small>
					<?php the_excerpt(); ?>
				</small>
				<p class="metadata">
					<?php comments_popup_link( __( 'Leave a comment', 'elegant-grunge' ), __( '1 comment', 'elegant-grunge' ), __( '% comments', 'elegant-grunge' ) ); ?>
					<?php the_tags( '&nbsp;&nbsp;|&nbsp;&nbsp;'.__( 'tags:', 'elegant-grunge' ) . ' ', ', ', '' ); ?>
					<?php if ( count( get_the_category() ) ) : ?>
					| <?php _e( 'posted in ', 'elegant-grunge' )?><?php the_category( ', ' )?>
					<?php endif; ?>
					<?php edit_post_link( __( 'Edit', 'elegant-grunge' ), '&nbsp;&nbsp;|&nbsp;&nbsp;', '' ); ?>
				</p>
			</div>
			<?php endwhile; ?>
			<div class="navigation">
				<div class="alignleft">
					<?php next_posts_link( __( '&laquo; Older Entries', 'elegant-grunge' ) )?>
				</div>
				<div class="alignright">
					<?php previous_posts_link( __( 'Newer Entries &raquo;', 'elegant-grunge' ) )?>
				</div>
			</div>
			<?php else : ?>
			<h2 class="center"><?php _e( 'No posts found. Try a different search?', 'elegant-grunge' )?></h2>
			<?php get_search_form(); ?>
			<?php endif; ?>
		</div>
		<?php get_sidebar(); ?>
	</div>
	<div class="clear"></div>
</div>
<?php get_footer(); ?>