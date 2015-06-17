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
			<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
			<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<div class="post-date">
					<span><?php the_time( get_option( 'date_format' ) ); ?></span>
				</div>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<div class="post-author">
					<?php
					printf( __( '<span class="author vcard">By <a class="url fn n" href="%1$s" title="%2$s">%3$s</a></span>', 'elegant-grunge' ),
					get_author_posts_url( get_the_author_meta( 'ID' ) ), esc_attr( sprintf( __( 'View all posts by %s', 'elegant-grunge' ), get_the_author() ) ), get_the_author() );
					?>
				</div>
				<div class="entry">
					<?php the_content(); ?>
				</div>
				<div class="clear"></div>
				<?php wp_link_pages( array( 'before' => '<p><strong>'.__( 'Pages', 'elegant-grunge' ) . ':</strong> ', 'after' => '</p>' ) ); ?>
				<?php if ( get_the_author_meta( 'description' ) ) : ?>
					<div id="entry-author-info" class="clearfix">
						<h2><?php echo sprintf( __( 'About %s', 'elegant-grunge' ), get_the_author() ); ?></h2>
						<div id="author-avatar">
							<?php echo get_avatar ( get_the_author_meta( 'user_email' ), 60 ); ?>
						</div>
						<div id="author-description">
							<?php the_author_meta( 'description' ); ?>
								<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" class="more-link">
									<?php printf( __( 'View all posts by %s', 'elegant-grunge' ), get_the_author() ); ?>
								</a>
						</div>
					</div>
				<?php endif; ?>
				<div class="metadata">
					<?php printf( __( 'This entry was posted on %1$s at %2$s', 'elegant-grunge' ), get_the_time( __( 'l, F jS, Y', 'elegant-grunge' ) ), get_the_time() ); ?>
					<?php the_tags( ' ' . __( 'and tagged with', 'elegant-grunge' ) . ' ', ', ', ' ' ); ?>
					<?php if ( count( get_the_category() ) ) : ?>
						<?php echo ' '; ?>
						<?php printf( __( 'and posted in %1$s.', 'elegant-grunge' ), get_the_category_list( ', ' ) ); ?>
					<?php endif; ?>
					<?php printf( __( 'You can follow any responses to this entry through the <a href="%s">RSS 2.0</a> feed.', 'elegant-grunge' ), get_post_comments_feed_link() );
					?>
					<?php edit_post_link( __( 'Edit', 'elegant-grunge' ), '', '.' ); ?>
				</div>
				<div class="hr"><hr /></div>
			</div>
			<div class="single navigation clearfix">
				<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&laquo;', 'Previous post link', 'elegant-grunge' ) . '</span> %title' ); ?></div>
				<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&raquo;', 'Next post link', 'elegant-grunge' ) . '</span>' ); ?></div>
			</div>
			<?php comments_template( '', true ); ?>
			<?php endwhile; else : ?>
			<p>
				<?php _e( 'Sorry, no posts matched your criteria.', 'elegant-grunge' ); ?>
			</p>
			<?php endif; ?>
		</div>
		<?php get_sidebar(); ?>
	</div>
	<div class="clear"></div>
</div>
<?php get_footer(); ?>