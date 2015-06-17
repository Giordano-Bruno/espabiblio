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
			<?php
			if ( have_posts() )
				the_post();
			?>
			<h1 class="page-title">
			<?php if ( is_day() ) : ?>
				<?php printf( __( 'Daily Archives: <span>%s</span>', 'elegant-grunge' ), get_the_date() ); ?>
			<?php elseif ( is_month() ) : ?>
				<?php printf( __( 'Monthly Archives: <span>%s</span>', 'elegant-grunge' ), get_the_date( 'F Y' ) ); ?>
			<?php elseif ( is_year() ) : ?>
				<?php printf( __( 'Archives: <span>%s</span>', 'elegant-grunge' ), get_the_date( 'Y' ) ); ?>
			<?php elseif ( is_category() ) : ?>
				<?php printf( __( 'Category Archives: %s', 'elegant-grunge' ), '<span>'.single_cat_title( '', false ) . '</span>' ); ?>
			<?php elseif ( is_tag() ) : ?>
				<?php printf( __( 'Tag Archives: %s', 'elegant-grunge' ), '<span>'.single_tag_title( '', false ) . '</span>' ); ?>
			<?php elseif ( is_author() ) : ?>
				<?php printf( __( 'Author Archives: %s', 'elegant-grunge' ), "<span class='vcard'><a class='url fn n' href='" . get_author_posts_url( get_the_author_meta( 'ID' ) ) . "' title='" . esc_attr( get_the_author() ) . "' rel='me'>" . get_the_author() . "</a></span>" ); ?>
			<?php else : ?>
				<?php _e( 'Blog Archives', 'elegant-grunge' ); ?>
			<?php endif; ?>
			</h1>
			<?php
				//show author bio on author archives case has bio/description
				if ( is_author() && get_the_author_meta( 'description' ) ) : ?>
					<div id="entry-author-info" class="clearfix">
						<h2><?php echo sprintf( __( 'About %s', 'elegant-grunge' ), get_the_author() ); ?></h2>
						<div id="author-avatar">
							<?php echo get_avatar ( get_the_author_meta( 'user_email' ), 60 ); ?>
						</div>
					<div id="author-description">
						<?php the_author_meta( 'description' ); ?>
					</div>
				</div>
			<?php
				//endif for author's bio
				endif;
			?>
			<?php rewind_posts(); ?>
			<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ): the_post(); ?>
			<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<div class="post-date">
					<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'elegant-grunge' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">
						<?php the_time( get_option( 'date_format' ) ); ?>
					</a>
				</div>
				<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'elegant-grunge' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				<div class="post-author">
					<?php
						printf(	__( '<span class="author vcard">By <a class="url fn n" href="%1$s" title="%2$s">%3$s</a></span>', 'elegant-grunge' ),
							get_author_posts_url( get_the_author_meta( 'ID' ) ),
							esc_attr( sprintf( __( 'View all posts by %s', 'elegant-grunge' ), get_the_author() ) ), get_the_author() );
					?>
				</div>
				<div class="entry">
					<?php the_content( __( 'Continue reading', 'elegant-grunge' ) ); ?>
				</div>
				<div class="clear"></div>
				<p class="metadata">
					<?php comments_popup_link( __( 'Leave a comment', 'elegant-grunge' ), __( '1 comment', 'elegant-grunge' ), __( '% comments', 'elegant-grunge' ) ); ?>
					<?php the_tags( '&nbsp;&nbsp;|&nbsp;&nbsp;'.__( 'tags:', 'elegant-grunge' ) . ' ', ', ', '' ); ?>
					<?php if ( count( get_the_category() ) ) : ?>
					| <?php _e( 'posted in ', 'elegant-grunge' ); ?><?php the_category( ', ' ); ?>
					<?php endif; ?>
					<?php edit_post_link( __( 'Edit', 'elegant-grunge' ), '&nbsp;&nbsp;|&nbsp;&nbsp;', '' ); ?>
				</p>
				<div class="hr"><hr /></div>
			</div>
			<?php endwhile; ?>
			<div class="navigation">
				<div class="next">
					<?php next_posts_link( __( '&laquo; Older Entries', 'elegant-grunge' ) ); ?>
				</div>
				<div class="previous">
					<?php previous_posts_link( __( 'Newer Entries &raquo;', 'elegant-grunge' ) ); ?>
				</div>
			</div>
			<?php else : ?>
			<h2 class="center"><?php _e( 'Not Found', 'elegant-grunge' ); ?></h2>
			<p class="center">
				<?php _e( 'Sorry, but you are looking for something that isn&rsquo;t here.', 'elegant-grunge' ); ?>
			</p>
			<?php get_search_form(); ?>
			<?php endif; ?>
		</div>
		<?php get_sidebar(); ?>
	</div>
	<div class="clear"></div>
</div>
<?php get_footer(); ?>