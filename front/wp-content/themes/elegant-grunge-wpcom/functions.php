<?php
/**
 * @package WordPress
 * @subpackage Elegant Grunge
 */

$themecolors = array(
	'bg' => 'f9fbf9',
	'border' => 'bebcad',
	'text' => '666666',
	'link' => '5f5f5f',
	'url' => '9f9f9f',
);

$content_width = 490;
if ( 'no-sidebar' == elegant_grunge_current_layout() )
	$content_width = 760;

/**
 * Setting up the theme and custom features.
 */
function elegant_grunge_setup() {

	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'elegant-grunge' ),
	) );

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'print-style' );
}
add_action( 'after_setup_theme', 'elegant_grunge_setup' );

/**
 * Enqueue scripts and styles
 */
function elegant_grunge_scripts() {
	global $wp_styles;

	wp_enqueue_style( 'elegant-grunge', get_stylesheet_uri() );

	wp_enqueue_style( 'elegant-grunge-ie', get_template_directory_uri() . '/ie.css', array( 'elegant-grunge' ) );
	$wp_styles->add_data( 'elegant-grunge-ie', 'conditional', 'lt IE 8' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
}
add_action( 'wp_enqueue_scripts', 'elegant_grunge_scripts' );

/**
 * Set up widget areas
 */
function elegant_grunge_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Primary Widget Area', 'elegant-grunge' ),
		'id' => 'sidebar-1',
		'description' => __( 'The primary widget area', 'elegant-grunge' ),
		'before_widget ' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	) );
	register_sidebar( array(
		'name' => __( 'Secondary Widget Area', 'elegant-grunge' ),
		'id' => 'sidebar-2',
		'description' => __( 'The secondary widget area appears with 3-column layouts (two sidebars)', 'elegant-grunge' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	) );
	register_sidebar( array(
		'name' => __( 'Footer Widget Area', 'elegant-grunge' ),
		'id' => 'footer-1',
		'before_widget' => '<div class="widget-wrap"><div class="widget %2$s">',
		'after_widget' => '</div></div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'elegant_grunge_widgets_init' );

/**
 * Adding home link to page navigation
 */
function elegant_grunge_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'elegant_grunge_page_menu_args' );

/**
 * Get current theme options with defaults as fallback
 */
function elegant_grunge_get_theme_options() {
	$defaults = array(
		'theme_layout' => 'content-sidebar',
	);
	$options = get_option( 'elegant_grunge_theme_options', $defaults );
	return $options;
}

/**
 * Returns the current layout as selected in the theme options
 */
function elegant_grunge_current_layout() {
	$options = elegant_grunge_get_theme_options();
	$current_layout = $options['theme_layout'];

	if ( is_attachment() || is_page_template( 'no-sidebar-page.php') )
		return 'no-sidebar';

	$two_columns = array( 'content-sidebar', 'sidebar-content' );
	if ( in_array( $current_layout, $two_columns ) )
		return 'two-column ' . $current_layout;
	elseif ( 'content-sidebar-sidebar' == $current_layout )
		return 'three-column ' . $current_layout;

	return $current_layout;
}

/**
 * Adds elegant_grunge_current_layout() to the array of body classes
 */
function elegant_grunge_body_class($classes) {
	$classes[] = elegant_grunge_current_layout();

	return $classes;
}
add_filter( 'body_class', 'elegant_grunge_body_class' );

/**
 * Load theme options
 */
require_once( dirname( __FILE__ ) . '/inc/theme-options.php' );

/**
 * Comments template callback
 */
function elegant_grunge_comments_template( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
		<div class="comment-content">
			<div class="before-comment"></div>
			<div class="comment">
				<?php echo get_avatar ( $comment, 32 ); ?>
				<cite>
					<?php comment_author_link(); ?>
				</cite>
				<?php _x( 'Says:', 'elegant-grunge' ); ?>
				<?php if ( '0' == $comment->comment_approved ) : ?>
				<em><?php _e( 'Your comment is awaiting moderation.', 'elegant-grunge' ); ?></em>
				<?php endif; ?>
				<br />
				<small class="commentmetadata"><a href="#comment-<?php comment_ID(); ?>" title="">
					<?php printf( _x( '%1$s at %2$s', 'elegant-grunge' ), get_comment_date( __( 'F jS, Y', 'elegant-grunge' ) ), get_comment_time() ); ?></a>
					<?php edit_comment_link( __( 'edit', 'elegant-grunge' ), '|&nbsp;', '' ); ?>
				</small>
				<div class="comment-text">
					<?php comment_text(); ?>
				</div>
				<div class="reply">
					<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
				</div>
		</div>
	</div>
<?php
}

/**
 * Filters wp_title to print a neat <title> tag based on what is being viewed.
 *
 * @since Elegant Grunge 1.0.4
 */
function elegant_grunge_wp_title( $title, $sep ) {
	global $page, $paged;

	if ( is_feed() )
		return $title;

	// Add the blog name
	$title .= get_bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title .= " $sep $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		$title .= " $sep " . sprintf( __( 'Page %s', 'elegant-grunge' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'elegant_grunge_wp_title', 10, 2 );


/**
 * Implement the Custom Header feature
 */
require( get_template_directory() . '/inc/custom-header.php' );


/**
 * Infinite Scroll Theme Assets
 *
 * Register support for @Elegant Grunge and enqueue relevant styles.
 */

add_action( 'template_redirect',      'elegantgrunge_infinite_scroll_enqueue_styles', 25 );
add_action( 'infinite_scroll_render', 'elegantgrunge_infinite_scroll_render' );
add_action( 'init',                   'elegantgrunge_infinite_scroll_init' );

/**
 * Add theme support for infinity scroll
 */
function elegantgrunge_infinite_scroll_init() {
	// Theme support takes one argument: the ID of the element to append new results to.
	add_theme_support( 'infinite-scroll', 'content-body' );
}

/**
 * Set the code to be rendered on for calling posts,
 * hooked to template parts when possible.
 *
 * Note: must define a loop.
 */
function elegantgrunge_infinite_scroll_render() {
	while ( have_posts() ) : the_post();
		get_template_part( 'content', get_post_format() );
	endwhile;
}

/**
 * Enqueue CSS stylesheet with theme styles for infinity.
 */
function elegantgrunge_infinite_scroll_enqueue_styles() {
	// Add theme specific styles.
	wp_enqueue_style( 'infinity-elegant-grunge', plugins_url( 'elegant-grunge.css', __FILE__ ), array(), '2012-06-26' );
}

/**
 * Do we have footer widgets?
 */
function infinite_scroll_has_footer_widgets() {
	if ( is_active_sidebar( 'footer-1' ) )
		return true;
	return false;
}

// updater for WordPress.com themes
if ( is_admin() )
	include dirname( __FILE__ ) . '/inc/updater.php';
	
	
	//paraver ip de visitantes
	function get_the_user_ip() {
if ( ! empty( $_SERVER['HTTP_CLIENT_IP'] ) ) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif ( ! empty( $_SERVER['HTTP_X_FORWARDED_FOR'] ) ) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
    $ip = $_SERVER['REMOTE_ADDR'];
    }
return apply_filters( 'wpb_get_ip', $ip );
}
add_shortcode('direccion_ip', 'get_the_user_ip');
