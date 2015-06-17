<?php
function wpsl_dynamic_stylesheet() {
{
global $fontchoice_metabox;
?>
<style type="text/css">
	#wpsl h1 {font-size:<?php echo $fontchoice_metabox->get_the_value('h1font_size'); ?>; font-family:<?php echo $fontchoice_metabox->get_the_value('h1font_family'); ?>; font-weight: <?php echo $fontchoice_metabox->get_the_value('h1font_weight'); ?>;}
	#wpsl div, 
	#wpsl p, 
	#wpsl .feature, 
	#wpsl .testimonialblue p,
	#wpsl .testimonialgreen p,
	#wpsl .testimonialyellow p,
	#wpsl .testimonialgray p
	{font-size:<?php echo $fontchoice_metabox->get_the_value('font_size'); ?>; font-family:<?php echo $fontchoice_metabox->get_the_value('font_family'); ?>; font-weight: <?php echo $fontchoice_metabox->get_the_value('font_weight'); ?>;}
	#wpsl {padding-top:<?php echo $fontchoice_metabox->get_the_value('wpsl_topmargin'); ?>; width: <?php echo $fontchoice_metabox->get_the_value('wpsl_letterwidth'); ?>;}
</style>
<?php } }
add_action('wp_head','wpsl_dynamic_stylesheet');