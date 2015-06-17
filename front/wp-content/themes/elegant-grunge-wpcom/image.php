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
			<div <?php post_class( 'post' ); ?> id="post-<?php the_ID(); ?>">
				<div class="post-date">
					<span><?php the_time( get_option( 'date_format' ) ); ?></span>
				</div>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<div class="entry">
					<div class="entry-content">
						<div class="entry-attachment">
							<div class="the_attachment">
								<?php
								$attachments = array_values( get_children( array(
									'post_parent' => $post->post_parent,
									'post_status' => 'inherit',
									'post_type' => 'attachment',
									'post_mime_type' => 'image',
									'order' => 'ASC',
									'orderby' => 'menu_order ID'
								) ) );
								foreach ( $attachments as $k => $attachment ) {
									if ( $attachment->ID == $post->ID ) {
										break;
									}
								}
								$k++;
								if ( count( $attachments ) > 1 ) {
									if ( isset ( $attachments[$k] ) ) {
										$next_attachment_url = get_attachment_link( $attachments[$k]->ID );
									} else {
										$next_attachment_url = get_attachment_link( $attachments[0]->ID );
									}
								} else {
									$next_attachment_url = wp_get_attachment_url();
								}
								?>
								<a href="<?php echo $next_attachment_url; ?>" title="<?php echo esc_attr( get_the_title() ); ?>" rel="attachment">

									<?php
									$attachment_size = apply_filters( 'theme_attachment_size', 760 );
									echo wp_get_attachment_image ( $post->ID, array($attachment_size, $attachment_size) ); // filterable image width with, essentially, no limit for image height.
									?>

								</a>
							</div>
							<?php if ( ! empty( $post->post_excerpt ) ) : ?>
							<div class="entry-caption">
								<?php the_excerpt(); ?>
							</div>
							<?php endif; ?>
						</div>

					<div class="post-meta post-nav thumbs-nav">
						<p class="prev-post">
							<?php previous_image_link(); ?>
						</p>
						<p class="next-post">
							<?php next_image_link(); ?>
						</p>
					</div>

					<?php the_content(); ?>
					<?php wp_link_pages( array( 'before' => '<p><strong>'.__( 'Pages', 'elegant-grunge' ) . ':</strong> ', 'after' => '</p>' ) ); ?>
					</div>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>

				<div class="metadata">
					<?php
					printf( __( 'This entry was posted on %1$s at %2$s', 'elegant-grunge' ), get_the_time( __( 'l, F jS, Y', 'elegant-grunge' ) ), get_the_time() );
					_e( '. ', 'elegant-grunge' );
					printf( __( 'You can follow any responses to this entry through the <a href="%s">RSS 2.0</a> feed.', 'elegant-grunge' ), get_post_comments_feed_link() );
					?>
					<?php edit_post_link( __( 'Edit', 'elegant-grunge' ), '', '.' ); ?>
				</div>
				<div class="hr"><hr /></div>
			</div>
			<?php comments_template( '', true ); ?>
			<?php endwhile; else : ?>
			<p>
				<?php _e( 'Sorry, no posts matched your criteria.', 'elegant-grunge' ); ?>
			</p>
			<?php endif; ?>
		</div>
	</div>
	<div class="clear"></div>
</div>
<?php get_footer(); ?>