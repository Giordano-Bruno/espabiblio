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
				<?php if ( is_front_page() ) { ?>
				<h2 class="page-title"><?php the_title(); ?></h2>
				<?php } else { ?>
				<h1 class="page-title"><?php the_title(); ?></h1>
				<?php } ?>
				<div class="entry">
					<?php the_content( __( '<p class="serif">Read the rest of this page &raquo;</p>', 'elegant-grunge' ) ); ?>
					<?php wp_link_pages( array( 'before' => '<p><strong>' . __( 'Pages:', 'elegant-grunge' ) . '</strong> ', 'after' => '</p>') ); ?>
					<?php edit_post_link( __( 'Edit', 'elegant-grunge' ), '', '.' ); ?>
				</div>
				<div class="hr"><hr /></div>
			</div>
			<?php comments_template(); ?>
			<?php endwhile; endif; ?>
		</div>
		<?php get_sidebar(); ?>
	</div>
	<div class="clear"></div>
</div>
<?php get_footer(); ?>