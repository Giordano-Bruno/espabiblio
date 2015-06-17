<?php 
/*
Plugin Name: WP Sales Letter
Plugin URI: http://WPSalesLetter.com/
Description: WP Sales Letter Plugin allows you to create wordpress sales letters with any wordpress theme. It's quick and easy to use.
Version: 1.3
Author: Armand Morin
Author URI: http://ArmandMorin.com/
*/
// *********************************************************************************** //
//			ADDS CUSTOM POST TYPE
// *********************************************************************************** //
add_action('init', 'wpsl_page_init');
function wpsl_page_init() 
{
  $labels = array(
    'name' => _x('WP Sales Letters', 'post type general name'),
    'singular_name' => _x('WP Sales Letter', 'post type singular name'),
    'add_new' => _x('Add New', 'salesletter'),
    'add_new_item' => __('Add Sales Letter'),
    'edit_item' => __('Edit Sales Letter'),
    'new_item' => __('New Sales Letter'),
    'view_item' => __('View Sales Letters'),
    'search_items' => __('Search Sales letters'),
    'not_found' =>  __('No sales letters found'),
    'not_found_in_trash' => __('No sales letters found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'WPSalesLetter'
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
	'rewrite' => array( 'slug' => 'letter' ),
	'_builtin' => false,
    'capability_type' => 'post',
    'has_archive' => false, 
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array('editor','title')
  ); 
  register_post_type('salesletters',$args);
  flush_rewrite_rules();
}
// *********************************************************************************** //
//			ADDS POST TYPE TO READING SETTINGS AND CORRECTS FRONT PAGE VIEW
// *********************************************************************************** //
add_filter( 'get_pages',  'add_my_salesletters' );
function add_my_salesletters( $pages ) {
     $my_salesletters_pages = new WP_Query( array( 'post_type' => 'salesletters' ) );
     if ( $my_salesletters_pages->post_count > 0 ) {
         $pages = array_merge( $pages, $my_salesletters_pages->posts );
     }
     return $pages;
}
add_action( 'pre_get_posts', 'enable_front_page_salesletters' );
function enable_front_page_salesletters( $query ){
    if('' == $query->query_vars['post_type'] && 0 != $query->query_vars['page_id'])
        $query->query_vars['post_type'] = array( 'page','salesletters' );
}
add_action("template_redirect", 'template_redirect_frontpage_salesletters');
function template_redirect_frontpage_salesletters() {
	if (is_front_page() && is_singular('salesletters'))
	{
	   include(plugin_dir_path(__FILE__) . "/single-salesletter.php");
	   die();
	}
}
add_action("template_redirect", 'salesletters_template_redirect');
function salesletters_template_redirect() {
	global $wp_query;
	if ($wp_query->query_vars["post_type"] == "salesletters") {
		include(plugin_dir_path(__FILE__) . "/single-salesletter.php");
	die(); }
}
// *********************************************************************************** //
//			UPDATE CHECKS
// *********************************************************************************** //
require 'plugin-updates/plugin-update-checker.php';
$ExampleUpdateChecker = new PluginUpdateChecker(
	'http://wp-salesletter.s3.amazonaws.com/wpsl-updates.json', 
	__FILE__,
    'wp-sales-letter'
);
// *********************************************************************************** //
//			ADDS PLUGIN MENU AND PAGE ICON
// *********************************************************************************** //
 
add_action('admin_head', 'pluginimg_header');
function pluginimg_header() {
	global $post;
	global $post_type;
	?>
	<style>
	<?php if($post && $post->post_type && $post->post_type == 'salesletters') : ?>
	#icon-edit { background:transparent url('<?php echo WP_PLUGIN_URL .'/wp-sales-letter/images/wpsl32.png';?>') no-repeat; }		
	<?php endif; ?>
	#adminmenu #menu-posts-salesletters div.wp-menu-image{background:transparent url("<?php echo WP_PLUGIN_URL .'/wp-sales-letter/images/wpsl16.png';?>") no-repeat center center;}
	#adminmenu #menu-posts-salesletters:hover div.wp-menu-image,#adminmenu #menu-posts-salesletters.wp-has-current-submenu div.wp-menu-image{background:transparent url("<?php echo WP_PLUGIN_URL .'/wp-sales-letter/images/wpsl16.png';?>") no-repeat center center;}	
</style>
<?php
}
// *********************************************************************************** //
//			ADDS TINYMCEPOP FOR SALES LETTER CONTENT
// *********************************************************************************** //
include ( WP_PLUGIN_DIR . '/wp-sales-letter/tinymcepop/tinyMCE_category.php');
function show_tinyMCE_html(){
	add_meta_box('tinySample-meta', 'tinySample', 'tinyMCE_sample_html', 'salesletters', 'normal', 'low');
	add_filter('mce_external_plugins', "tinyplugin_register");
	add_filter('mce_buttons', 'tinyplugin_add_button');
}
function tinyMCE_sample_html(){
	show_tinyMCE_dialog();
}
add_action('admin_init', 'show_tinyMCE_html');
// *********************************************************************************** //
//			METABOX ARRAYS
// *********************************************************************************** //
include_once 'metaboxes/MetaBox.php';
$fontchoice_metabox = new WPAlchemy_MetaBox( array( 
	'id' => '_wpsl_fontchoice', 
	'title' => 'Page Settings', 
	'types' => array( 'salesletters' ), 
	'template' => WP_PLUGIN_DIR . '/wp-sales-letter/metaboxes/design-mb.php' 
	 )
 );
$media_metabox = new WPAlchemy_MetaBox( array( 
	'id' => '_wpsl_media', 
	'title' => 'Media Options', 
	'types' => array( 'salesletters' ), 
	'template' => WP_PLUGIN_DIR . '/wp-sales-letter/metaboxes/media-mb.php' 
	 )
 );
 
$headline_metabox = new WPAlchemy_MetaBox( array( 
	'id' => '_wpsl_headline_info', 
	'title' => 'Main Headline and Basic Info', 
	'types' => array( 'salesletters' ), 
	'template' => WP_PLUGIN_DIR . '/wp-sales-letter/metaboxes/headlinesettings-mb.php' 
	 )
 );
 
$intro_metabox = new WPAlchemy_MetaBox( array( 
	'id' => '_wpsl_intro_problem_solution', 
	'title' => 'Introduction, Problem and Solution', 
	'types' => array( 'salesletters' ), 
	'template' => WP_PLUGIN_DIR . '/wp-sales-letter/metaboxes/introproblemsolution-mb.php' 
	 )
 );
 
$features_metabox = new WPAlchemy_MetaBox( array( 
	'id' => '_wpsl_features', 
	'title' => 'Features and Benefits', 
	'types' => array( 'salesletters'), 
	'template' => WP_PLUGIN_DIR . '/wp-sales-letter/metaboxes/features-mb.php',
	'mode' => WPALCHEMY_MODE_EXTRACT,
	'init_action' => 'kia_metabox_init',
	'hide_editor'	=> false,
    'prefix' => '_my_'
	 )
 );
//$features_metabox = new WPAlchemy_MetaBox( array( 
//	'id' => '_wpsl_features', 
//	'title' => 'Features and Benefits', 
//	'types' => array('salesletters'), 
//	'template' => WP_PLUGIN_DIR . '/wp-sales-letter/metaboxes/repeating-textarea.php',
//	'init_action' => 'kia_metabox_init',
//	'hide_editor'	=> false
//	 )
// );
function kia_metabox_init(){
	// I prefer to enqueue the styles only on pages that are using the metaboxes
	wp_enqueue_style('wpalchemy-metabox', plugin_dir_url(__FILE__). 'metaboxes/css/meta.css');
	//make sure we enqueue some scripts just in case ( only needed for repeating metaboxes )
	wp_enqueue_script('jquery');
	wp_enqueue_script('jquery-ui-core');
	wp_enqueue_script('jquery-ui-widget');
	wp_enqueue_script('jquery-ui-mouse');
	wp_enqueue_script('jquery-ui-sortable');
	global $wp_version;
	if ( $wp_version >= 3.9 ) {
     // run some code
	 wp_register_script('kia-metabox', plugin_dir_url(__FILE__). 'metaboxes/js/repeat-textarea3.9.js',array('jquery','editor'), '1.0');
	}else{
	// special script for dealing with repeating textareas
	wp_register_script('kia-metabox', plugin_dir_url(__FILE__). 'metaboxes/js/repeat-textarea.js',array('jquery','editor'), '1.0');
	}
	// needs to run AFTER all the tinyMCE init scripts have printed since we're going to steal their settings
	add_action('after_wp_tiny_mce','kia_metabox_scripts',999);
}
function kia_metabox_scripts(){
	wp_print_scripts('kia-metabox');
}
 
$why_metabox = new WPAlchemy_MetaBox( array( 
	'id' => '_wpsl_whytoday', 
	'title' => 'Why Buy Today', 
	'types' => array( 'salesletters' ),
	'template' => WP_PLUGIN_DIR . '/wp-sales-letter/metaboxes/why-mb.php' 
	 )
 );
 
$guarantee_metabox = new WPAlchemy_MetaBox( array( 
	'id' => '_wpsl_guarantee', 
	'title' => 'Your Guarantee', 
	'types' => array( 'salesletters' ), 
	'template' => WP_PLUGIN_DIR . '/wp-sales-letter/metaboxes/guarantee-mb.php'
	 )
);
$closing_metabox = new WPAlchemy_MetaBox( array( 
	'id' => '_wpsl_closing', 
	'title' => 'Closing Statement', 
	'types' => array( 'salesletters' ),
	'template' => WP_PLUGIN_DIR . '/wp-sales-letter/metaboxes/closing-mb.php' 
	 )
 );
$order_metabox = new WPAlchemy_MetaBox( array( 
	'id' => '_wpsl_orderarea', 
	'title' => 'Order Area', 
	'types' => array( 'salesletters' ), 
	'template' => WP_PLUGIN_DIR . '/wp-sales-letter/metaboxes/orderarea-mb.php' 
	 )
);
$ps_metabox = new WPAlchemy_MetaBox( array( 
	'id' => '_wpsl_ps', 
	'title' => 'Your P.S.', 
	'types' => array( 'salesletters' ), 
	'template' => WP_PLUGIN_DIR . '/wp-sales-letter/metaboxes/ps-mb.php' 
	 )
);
$testimonial_metabox = new WPAlchemy_MetaBox( array( 
	'id' => '_wpsl_testimonial',
	'title' => 'Testimonials', 
	'types' => array( 'salesletters' ), 
	'template' => WP_PLUGIN_DIR . '/wp-sales-letter/metaboxes/testimonials.php' 
	 )
 );
 
 
// *********************************************************************************** //
//			SETUPS TINYMCE EDITOR FOR METABOXES
// *********************************************************************************** //
 
//add_action('admin_print_footer_scripts','my_admin_print_footer_scripts',99);
function my_admin_print_footer_scripts()
{
	?><script type="text/javascript">/* <![CDATA[ */
		jQuery(function($)
		{
			var i=1;
			$('.customEditor textarea').each(function(e)
			{
				var id = $(this).attr('id');
 
				if (!id)
				{
					id = 'customEditor-' + i++;
					$(this).attr('id',id);
				}
 
				tinyMCE.execCommand('mceAddControl', false, id);
 
			});
		});
	/* ]]> */</script>
	<script type="text/javascript">
//<![CDATA[
jQuery('body').bind('afterPreWpautop', function(e, o){
	o.data = o.unfiltered
		.replace(/caption\]\[caption/g, 'caption] [caption')
		.replace(/<object[\s\S]+?<\/object>/g, function(a) {
			return a.replace(/[\r\n]+/g, ' ');
        });
}).bind('afterWpautop', function(e, o){
	o.data = o.unfiltered;
});
//]]>
</script><?php
}
// *********************************************************************************** //
//			ADDS TINYMCE STYLESHEET
// *********************************************************************************** //
add_filter('mce_css', 'my_editor_style');
function my_editor_style($url) {
  if ( !empty($url) )
    $url .= ',';
  // Change the path here if using sub-directory
  $url .= WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__)) . 'wpsl-editor-style.css';
  return $url;
}
// *********************************************************************************** //
//			ADD STYLESHEET TO THEME PAGE
// *********************************************************************************** //
function wpsl_enqueue_styles() {
	global $wp_query;
//	if ($wp_query->query_vars['post_type'] == 'salesletters') 
        wp_register_style( 'mywpslstylesheet', WP_PLUGIN_URL . '/wp-sales-letter/wpsl-style.css' );
		wp_enqueue_style( 'mywpslstylesheet', plugins_url( '/wp-sales-letter/wpsl-style.css', __FILE__ ), false, '1.1', 'all' );
}
add_action( 'wp_print_styles', 'wpsl_enqueue_styles' );
function wpsl_unregister_styles() {
	global $wp_query;
	if ($wp_query->query_vars["post_type"] != "salesletters") 
		wp_deregister_style( 'mywpslstylesheet' );
}
add_action( 'wp_print_styles', 'wpsl_unregister_styles' );
// *********************************************************************************** //
//			ADS METABOX STYLES AND EDITOR BUTTONS
// *********************************************************************************** //
function wpsl_add_custom_box() {
	add_action('load-post-new.php','wpsl_content_page_editor'); 
	add_action('load-post.php','wpsl_content_page_editor');    
}
add_action('admin_init', 'wpsl_add_custom_box', 1);
function wpsl_content_page_editor_styles() {
	global $post;
	global $post_type;
	if($post && $post->post_type && $post->post_type == 'salesletters') {
		echo "<style type='text/css' media='screen'>.postarea{ display:none !important;} </style>";
		echo '
		<style type="text/css" media="screen">
			/* textarea { color: #444; font-family: Arial; line-height: 1.5;} */
			 #content_code, #content_add_image, #content_add_video, #content_add_media, #content_add_audio { display: none !important; } 
			 .wpsl_salesletter .description {font-style: normal; font-size: 12px; margin: 0px 0px 15px 0px;}
			 .wpsl_salesletter #postcustomstuff table {border: none; background-color: #fff; padding: 4px; margin-bottom: 25px!important;}
			 .wpsl_salesletter input[type="text"] {height: 35px; width: 100% !important; margin-bottom: 15px;}
			 .wpsl_salesletter textarea {width: 100% !important; margin-bottom: 15px; background-color:#fff;}
			 .wpsl_salesletter input[type="checkbox"] {margin-bottom: 0px;}
			 .wpsl_salesletter label {font-weight: bold; font-size: 13px; margin-bottom: 8px; display: block;}
			 .wpsl_salesletter #divid {width: 100%; margin: 0px auto 15px auto; border-bottom: 1px solid #ccc;}
			 .wpsl_salesletter {padding: 10px;}
			 .wpsl_salesletter #editorcontainer {background-color: #fff; font-family: Arial;}
			 .wpsl_salesletter .customEditor {background-color: #fff; margin-bottom: 25px; margin-top: 5px; border: 1px solid #ddd;}
			 .wpsl_salesletter .customEditor2 {background-color: #fff; margin-bottom: 25px; margin-top: 5px; }
			 .wpsl_salesletter .cbalign {width: 15px; height:15px; float: left;}
			 .wpsl_salesletter .cblabel {padding-left: 3px; float: left; margin: 0px 15px 8px 0px; font-weight: normal; font-size: 12px;}
			 .wpsl_salesletter #cbstuff {width: 160px; margin-right: 25px; float: left;}
			 .wpsl_salesletter #wpsl_creditcards #cbstuff {width: 120px; margin-right: 25px; float: left;}
			 .wpsl_salesletter #radio {width: 100px; margin-right: 25px; }
			 .wpsl_testimonial .mceResize {top: 0px !important; margin: 0px !important;}
			 .mceContentBody .features { margin-left: 40px; padding-left: 0; list-style: none; font-size: 20px;}
			 #preview_tinyMCE #wp-sample_text_editor-editor-tools { background-color: #fff;}
			  select { border: 1px solid #ccc;  font-family:"Lucida Grande', 'Lucida Sans Unicode", Arial, Verdana, sans-serif;}
		</style>';
	}
}
function wpsl_content_page_editor() {		
	if (get_user_option('rich_editing') == 'true') {
		add_action('admin_head','wpsl_content_page_editor_styles');
	}
}
// *********************************************************************************** //
//			ADDS TINYMCE STYLE DROPDOWN
// *********************************************************************************** //
function wpsl_mce_buttons_2( $buttons ) {
  array_unshift( $buttons, 'styleselect' );
  return $buttons;
}
add_filter( 'mce_buttons_2', 'wpsl_mce_buttons_2' );
function wpsl_tiny_mce_before_init( $settings ) {
  $settings['theme_advanced_blockformats'] = 'p,div,h1,h2,h3,h4,h5,h6';
  $style_formats = array(
	  array( 'title' => 'Buttons' ),
	  array( 'title' => 'Green Button',		'selector' => 'a',  'classes' => 'buttongreen' ),
	  array( 'title' => 'Orange Button',	'selector' => 'a',  'classes' => 'buttonorange' ),
	  
	  array( 'title' => 'Testimonial Boxes' ),
	  array( 'title' => 'Blue Box',		'block' => 'div',  'classes' => 'testimonialblue', 'wrapper' => true),
	  array( 'title' => 'Gray Box',		'block' => 'div',  'classes' => 'testimonialgray', 'wrapper' => true),
	  array( 'title' => 'Green Box',	'block' => 'div',  'classes' => 'testimonialgreen', 'wrapper' => true),
	  array( 'title' => 'Yellow Box',		'block' => 'div',  'classes' => 'testimonialyellow', 'wrapper' => true)
  );
  $settings['style_formats'] = json_encode( $style_formats );
  return $settings;
}
add_filter( 'tiny_mce_before_init', 'wpsl_tiny_mce_before_init' );
?>