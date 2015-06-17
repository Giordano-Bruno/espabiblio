<?php
/**
 * @package WordPress
 * @subpackage Elegant Grunge
 */
?>
<?php if ( post_password_required() ) : ?>
	<p class="nocomments">
		<?php _e( 'This post is password protected. Enter the password to view comments.', 'elegant-grunge' ); ?>
	</p>
<?php
		return;
	endif;
?>

<?php if ( $comments ) : ?>

	<h4 id="comments">
		<?php comments_number( __( 'No Responses', 'elegant-grunge' ), __( 'One Response', 'elegant-grunge' ), __( '% Responses', 'elegant-grunge' ) ); ?>
		<?php printf( __( ' to &#8220;%s&#8221;', 'elegant-grunge' ), get_the_title() ); ?>
	</h4>

	<ul id="commentlist">
		<?php wp_list_comments( 'callback=elegant_grunge_comments_template' ); ?>
	</ul>

	<div class="navigation">
		<div class="alignleft">
			<?php previous_comments_link(); ?>
		</div>
		<div class="alignright">
			<?php next_comments_link(); ?>
		</div>
	</div>

	<div class="clear"></div>

<?php else : // this is displayed if there are no comments so far ?>
	<?php if ( 'open' == $post->comment_status ) : ?>
	<!-- If comments are open, but there are no comments. -->
	<?php else : // comments are closed ?>
	<!-- If comments are closed.-->
	<?php if ( ! is_page() ) : ?>
		<p class="nocomments">
			<?php _e( 'Comments are disabled.', 'elegant-grunge' ); ?>
		</p>
	<?php endif; ?>
	<?php endif; ?>
<?php endif; ?>

<?php if ( 'open' == $post->comment_status ) : ?>

	<?php if ( get_option( 'comment_registration' ) && ! $user_ID ) : ?>
	<p>
		<?php printf( __( 'You must be %1$slogged in%2$s to post a comment.', 'elegant-grunge' ), '<a href="'.site_url() . '/wp-login.php?redirect_to='.urlencode( get_permalink() ) . '">', '</a>' ); ?>
	</p>
		<?php
			else :
			comment_form();
		?>
	<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>