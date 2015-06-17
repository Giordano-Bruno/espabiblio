<?php
/**
 * Sample implementation of the Custom Header feature
 * http://codex.wordpress.org/Custom_Headers
 *
 * You can add an optional custom header image to header.php like so ...

	<?php $header_image = get_header_image();
	if ( ! empty( $header_image ) ) { ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" />
		</a>
	<?php } // if ( ! empty( $header_image ) ) ?>

 *
 * @package Elegant Grunge
 */

/**
 * Setup the WordPress core custom header feature.
 *
 * @uses elegant_grunge_header_style()
 * @uses elegant_grunge_admin_header_style()
 * @uses elegant_grunge_admin_header_image()
 *
 * @package Elegant Grunge
 */
function elegant_grunge_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'elegant_grunge_custom_header_args', array(
		'default-text-color'     => 'd3d3d3',
		'default-image'			 => '',
		'width'                  => 956,
		'height'                 => 160,
		'wp-head-callback'       => 'elegant_grunge_header_style',
		'admin-head-callback'    => 'elegant_grunge_admin_header_style',
		'admin-preview-callback' => '',
	) ) );
}
add_action( 'after_setup_theme', 'elegant_grunge_custom_header_setup' );


if ( ! function_exists( 'elegant_grunge_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see elegant_grunge_custom_header_setup().
 *
 */
function elegant_grunge_header_style() { ?>

	<style type="text/css">
	<?php if ( 'blank' != get_header_textcolor() ) { ?>
		#header div a,
		#header h1,
		#header h2,
		#blog-description {
			color: #<?php header_textcolor(); ?>;
		}
	<?php } else { ?>
		#header h1,
		#header h2,
		#blog-description {
			display: none;
		}
	<?php } ?>
	</style>
<?php
}
endif; // elegant_grunge_header_style

if ( ! function_exists( 'elegant_grunge_admin_header_style' ) ) :
/**
 * Styles the header image displayed on the Appearance > Header admin panel.
 *
 * @see elegant_grunge_custom_header_setup().
 *
 */
function elegant_grunge_admin_header_style() {
?>
	<style type="text/css">
		#headimg h1 {
			float: left;
			font: 35px/169px "Georgia", "Baskerville", serif !important;
			margin: 0 0 0 0.5em !important;
		}
		#headimg h1 a {
			float: left;
			font-style: normal;
			font-weight: normal;
			text-decoration: none;
			text-shadow: #000 0 1px 2px;
		}
		#desc {
			font-family: Palatino, Georgia, Baskerville, serif;
			font-size: 16px;
			position: relative;
			top: 60px;
			left: 1.3em;
			text-shadow: #000 0 1px 1px;
		}
	</style>
<?php
}
endif; // elegant_grunge_admin_header_style
