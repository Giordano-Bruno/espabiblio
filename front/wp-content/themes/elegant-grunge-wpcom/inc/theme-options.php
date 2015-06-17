<?php
/**
 * Add theme options page styles
 */
function elegant_grunge_admin_enqueue_scripts( $hook_suffix ) {
	 wp_enqueue_style( 'elegant-grunge', get_template_directory_uri() . '/inc/theme-options.css', '', '20101025' );
}
add_action( 'admin_print_styles-appearance_page_theme_options', 'elegant_grunge_admin_enqueue_scripts' );

/**
 * Administration - Adding theme options page and its UI.
 */

function theme_options_init() {
	register_setting( 'elegant-grunge_options', 'elegant_grunge_theme_options', 'theme_options_validate' );
}

add_action( 'admin_init', 'theme_options_init' );

function elegant_grunge_add_page() {
	add_theme_page( __( 'Theme Options' ), __( 'Theme Options' ), 'edit_theme_options', 'theme_options', 'elegant_grunge_theme_options_do_page' );
}

add_action( 'admin_menu', 'elegant_grunge_add_page' );


/**
 * Return array for our layouts
 */
function elegant_grunge_layouts() {
	$theme_layouts = array(
		'content-sidebar' => array(
			'value' => 'content-sidebar',
			'label' => __( 'Content-Sidebar' ),
		),
		'sidebar-content' => array(
			'value' => 'sidebar-content',
			'label' => __( 'Sidebar-Content' ),
		),
		'content-sidebar-sidebar' => array(
			'value' => 'content-sidebar-sidebar',
			'label' => __( 'Content-Sidebar-Sidebar' )
		),
		'no-sidebar' => array(
			'value' => 'no-sidebar',
			'label' => __( 'Full Width (No Sidebar)' )
		)
	);
	return $theme_layouts;
}

/**
 * Adding the theme-options page
 */
function elegant_grunge_theme_options_do_page() {
	global $select_options;
	if ( !isset ( $_REQUEST['settings-updated'] ) ) {
		$_REQUEST['settings-updated'] = false;
	}
?>
<div class="wrap">
	<?php screen_icon(); echo "<h2>" . sprintf( __( '%1$s Theme Options', 'elegant-grunge' ), wp_get_theme() ) . "</h2>"; ?>
	<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
	<div class="updated fade">
		<p>
			<strong><?php _e( 'Options saved' ); ?></strong>
		</p>
	</div>
	<?php endif; ?>
	<form method="post" action="options.php">
		<?php
			settings_fields( 'elegant-grunge_options' );
			$options = elegant_grunge_get_theme_options();
		?>
		<table class="form-table">
				<?php
				/**
				 * Elegant Grunge Layout
				 */
				?>
				<tr valign="top" id="eg-layouts"><th scope="row"><?php _e( 'Default Layout' ); ?></th>
					<td>
						<fieldset><legend class="screen-reader-text"><span><?php _e( 'Default Layout' ); ?></span></legend>
						<?php
							if ( ! isset( $checked ) )
								$checked = '';
							foreach ( elegant_grunge_layouts() as $option ) {
								$radio_setting = $options['theme_layout'];
								if ( '' != $radio_setting ) {
									if ( $options['theme_layout'] == $option['value'] ) {
										$checked = "checked=\"checked\"";
									} else {
										$checked = '';
									}
								}
								?>
								<div class="layout">
								<label class="description">
									<input type="radio" name="elegant_grunge_theme_options[theme_layout]" value="<?php echo esc_attr( $option['value'] ); ?>" <?php echo $checked; ?> />
									<span>
										<img src="<?php echo get_template_directory_uri(); ?>/inc/images/<?php echo $option['value']; ?>.png"/>
										<?php echo $option['label']; ?>
									</span>
								</label>
								</div>
								<?php
									}
								?>
						</fieldset>
					</td>
				</tr>
		</table>
		<p class="submit">
			<input type="submit" name="Submit" class="button-primary" value="<?php esc_attr_e( 'Save Changes', 'elegant-grunge' ); ?>" />
		</p>
	</form>
</div>
<?php
}


/**
 * This function validates the input on theme-options page.
 * @param array input
 * @return array sanitized input values
 */
function theme_options_validate( $input ) {
	global $select_options;

	// Our radio option must actually be in our array of radio options
	if ( ! isset( $input['theme_layout'] ) )
		$input['theme_layout'] = 'content-sidebar';
	if ( ! array_key_exists( $input['theme_layout'], elegant_grunge_layouts() ) )
		$input['theme_layout'] = 'content-sidebar';

	return $input;
}