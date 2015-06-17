<?php
/**
 * @package WordPress
 * @subpackage Elegant Grunge
 */
?><!DOCTYPE html>
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title( '|', true, 'right' ); ?></title>

<!--
<link rel="profile" href="http://gmpg.org/xfn/11" />
-->

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page">
	<?php do_action( 'before' ); ?>
		<div id="header-wrap">
			<?php if ( '' != get_header_image() ) : ?>
			<div id="header-image">
				<img src="<?php header_image(); ?>" alt="" /></a>
			</div>
			<?php endif; ?>
			<div id="header">
				<div>
					<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php if ( is_front_page() || is_archive() || is_category() || is_tag() ) { ?>
						<h1><?php bloginfo( 'name' ); ?></h1>
					<?php } else { ?>
						<h2><?php bloginfo( 'name' ); ?></h2>
					<?php } ?>
						<p id="blog-description"><?php bloginfo( 'description' ); ?></p>
					</a>
				</div>
			</div>
		</div><!-- #header-wrap -->

				<div id="menu">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '', 'menu_class' => 'menu-header' ) ); ?>
			<div class="clear"></div>
		</div><!-- #menu -->
