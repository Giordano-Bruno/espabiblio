<?php
/** WP Sales Letter Template **/
?>
<?php 
 if ( ! function_exists( 'is_ssl' ) ) {
  function is_ssl() {
   if ( isset($_SERVER['HTTPS']) ) {
    if ( 'on' == strtolower($_SERVER['HTTPS']) )
     return true;
    if ( '1' == $_SERVER['HTTPS'] )
     return true;
   } elseif ( isset($_SERVER['SERVER_PORT']) && ( '443' == $_SERVER['SERVER_PORT'] ) ) {
    return true;
   }
   return false;
  }
 }
 if ( version_compare( get_bloginfo( 'version' ) , '3.0' , '<' ) && is_ssl() ) {
  $wp_content_url = str_replace( 'http://' , 'https://' , get_option( 'siteurl' ) );
 } else {
  $wp_content_url = get_option( 'siteurl' );
 }
 $wp_content_url .= '/wp-content';
 $wp_content_dir = ABSPATH . 'wp-content';
 $wp_plugin_url = $wp_content_url . '/plugins';
 $wp_plugin_dir = $wp_content_dir . '/plugins';
 $wpmu_plugin_url = $wp_content_url . '/mu-plugins';
 $wpmu_plugin_dir = $wp_content_dir . '/mu-plugins';
?>
<?php require_once (dirname(__FILE__) .'/wpsl-dynamic-stylesheet.php'); ?>
<?php get_header(); ?>
<?php function audiocolor() {
	global $testimonial_metabox;
		$testimonial_bg = $testimonial_metabox->get_the_value( 'background' ); 
		
		if ($testimonial_bg == 'testimonialyellow') { echo 'C2B14E'; }
		if ($testimonial_bg == 'testimonialblue') { echo 'C0CADA'; }
		if ($testimonial_bg == 'testimonialgreen') { echo '7B9F4A'; }
		if ($testimonial_bg == 'testimonialgray') { echo 'CCCCCC'; }
}
?>
<script type="text/javascript" src="<?php echo $wp_plugin_url; echo "/wp-sales-letter/player/audio-player/audio-player.js"; ?>"></script>
<script type="text/javascript">  
	AudioPlayer.setup("<?php echo $wp_plugin_url; echo "/wp-sales-letter/player/audio-player/player.swf"; ?>", {  
		transparentpagebg: "yes", 
		voltrack:"ffffff",
		lefticon:"ffffff",
		righticon:"ffffff",
		bg:"ffffff",
		track:"ffffff",
		border:"ffffff",
		tracker:"ffffff",
		rightbg:"<?php echo audiocolor(); ?>",
		rightbghover:"<?php echo audiocolor(); ?>",
		leftbg:"<?php echo audiocolor(); ?>",
		width: 300  
	});  
</script>
<!-- ****************************************************************** -->
<!-- START WP SALES LETTER DIV -->
<!-- ****************************************************************** -->
<div id="wpsl">
<!-- ****************************************************************** -->
<!-- OPTIONAL VIDEO AND AUDIO -->
<!-- ****************************************************************** -->
<?php 
global $media_metabox;
$showvideo = $media_metabox->get_the_value('media_selection');
$showaudio = $media_metabox->get_the_value('media_selection');
$showmedia = $media_metabox->get_the_value('media_selection');
	if ($media_metabox->get_the_value('media_selection') == 'video') {
		if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPod') || strstr($_SERVER['HTTP_USER_AGENT'],'iPad') ) {
			echo "<video width='"; 
			echo $media_metabox->get_the_value('sales_video_width');
			echo "' height='";
			echo $media_metabox->get_the_value('sales_video_height');
			echo "' controls='controls' autoplay='autoplay'><source src='";
			echo $media_metabox->get_the_value('sales_video_url');
			echo "'/>";
		}
		else {
			echo "<script type='text/javascript' src='";
			echo $wp_plugin_url; 
			echo "/wp-sales-letter/player/swfobject.js'></script><div id='mediaspace' style='width:";
			echo $media_metabox->get_the_value('sales_video_width');
			echo "px;height:";
			echo $media_metabox->get_the_value('sales_video_height');
			echo "px;border:1px solid #ccc;'>This text will be replaced</div><script type='text/javascript'>var so = new SWFObject('";
			echo $wp_plugin_url; 
			echo "/wp-sales-letter/player/player.swf','ply','";
			echo $media_metabox->get_the_value('sales_video_width');
			echo "','";
			echo $media_metabox->get_the_value('sales_video_height'); 
			echo "','9','#000000'); so.addParam('allowfullscreen','true'); so.addParam('allowscriptaccess','always');	so.addParam('wmode','opaque'); so.addVariable('file','";
			echo $media_metabox->get_the_value('sales_video_url');
			echo "');so.addVariable('volume','100');	so.addVariable('autostart','true');	so.addVariable('controlbar','over'); so.addVariable('skin', '";
			echo $wp_plugin_url; 
			echo "/wp-sales-letter/player/stylish_slim.swf'); so.write('mediaspace');</script>"; 
		}
	}
	if ($media_metabox->get_the_value('media_selection') == 'audio') {	
		if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPod') || strstr($_SERVER['HTTP_USER_AGENT'],'iPad') ) {
			echo "<audio width='100' height='30' controls='controls' autoplay='autoplay'><source src='";
			echo $media_metabox->get_the_value('sales_audio_url');
			echo "'/>";
		}
		else {
			echo "<script type='text/javascript' src='";
			echo $wp_plugin_url; 
			echo "/wp-sales-letter/player/swfobject.js'></script><div id='mediaspace' style='width:200px;height:32px;border:1px solid #ccc;'>This text will be replaced</div><script type='text/javascript'>var so = new SWFObject('";
			echo $wp_plugin_url; 
			echo "/wp-sales-letter/player/player.swf','ply','200','32','9','#000000'); so.addParam('allowfullscreen','true'); so.addParam('allowscriptaccess','always');	so.addParam('wmode','opaque'); so.addVariable('file','";
			echo $media_metabox->get_the_value('sales_audio_url');
			echo "');so.addVariable('volume','100');	so.addVariable('autostart','true');	so.addVariable('skin', '";
			echo $wp_plugin_url; 
			echo "/wp-sales-letter/player/stylish_slim.swf'); so.write('mediaspace');</script>"; 
		}
	}
	if ($media_metabox->get_the_value('media_selection') == 'media') {
		echo '<div style="text-align:center; margin-bottom: 25px;">';
		echo $media_metabox->get_the_value('media_embed');
		echo '</div>';
	}
?>
<!-- ****************************************************************** -->
<!-- HEADLINE -->
<!-- ****************************************************************** -->
<?php
global $headline_metabox;
	echo wpautop($headline_metabox->get_the_value('mainheadline'));
?>
<!-- ****************************************************************** -->
<!-- NAME AND DATE -->
<!-- ****************************************************************** -->
<p>
<?php 
$headlinename = $headline_metabox->get_the_value('yourname'); 
    if (empty($headlinename)) { echo ''; }
    else {
        echo "<strong>Date: </strong>";
        echo "<script type='text/javascript' src='";
		echo $wp_plugin_url; 
		echo "/wp-sales-letter/js/date.js'></script><br/>"; }
		
if ($headlinename !='' || $headlinename !='') {
	echo "<strong>Name: </strong>"; echo $headline_metabox->get_the_value('yourname'); }
	else {echo "";}
?></br>
<?php 
$headlinereason = $headline_metabox->get_the_value('reason'); 
if ($headlinereason !='' || $headlinereason !='') {
	echo "<strong>Re: </strong>"; echo $headline_metabox->get_the_value('reason'); }
else {echo "";}
?>
</p>
<!-- ****************************************************************** -->
<!-- INTRO, PROBLEM AND SOLUTION -->
<!-- ****************************************************************** -->
<?php
global $intro_metabox;
	echo wpautop($intro_metabox->get_the_value('introduction'));
	echo wpautop($intro_metabox->get_the_value('problem'));
	echo wpautop($intro_metabox->get_the_value('solution'));
?>
<!-- ****************************************************************** -->
<!-- FEATURES -->
<!-- ****************************************************************** -->
<?php
global $features_metabox;
echo wpautop($features_metabox->get_the_value('featureintro'));
$featurebullet = $features_metabox->get_the_value( 'bullet' );
$features = $features_metabox->get_the_value( 'features' );
if ($features !='' || $features !='') {
	foreach ($features as $feature) { ?>
		<div class="<?php echo $featurebullet; ?>">
			<div class="feature"><?php echo $feature['thefeature']; ?></div>
			<?php echo wpautop( $feature['benefit']); ?>
		</div>
<?php } 
} else {echo "";}
?>
<?php
	echo wpautop($features_metabox->get_the_value('featuresummary'));
?>
<!-- ****************************************************************** -->
<!-- TESTIMONIALS -->
<!-- ****************************************************************** -->
<?php
global $testimonial_metabox;
$testimonial_bg = $testimonial_metabox->get_the_value( 'background' );
$testimonials = $testimonial_metabox->get_the_value( 'testimonials' );
if ($testimonials !='' || $testimonials !='') {
	foreach ($testimonials as $testimonial) { ?>
		<div class="<?php echo $testimonial_bg; ?>">
			<?php echo wpautop( $testimonial['content'] ); ?>
			<strong><?php echo $testimonial['name']; ?></strong><br/>
			<?php echo $testimonial['url']; ?><br/>
			<?php 
			if ($testimonial['audio'] !='') {
				if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPod') || strstr($_SERVER['HTTP_USER_AGENT'],'iPad') ) {
					echo "<audio width='100' height='30' controls='controls' autoplay='autoplay'><source src='";
					echo $testimonial['audio'];
					echo "'/>";
				}
				else { 
					echo '<div class="audiobox"><p id="';
					echo $testimonial['name'];
					echo '">Alternative content</p>  ';
					echo '<script type="text/javascript"> AudioPlayer.embed("';
					echo $testimonial['name'];
					echo '", {soundFile: "';
					echo $testimonial['audio'];
					echo '", titles: "Testimonial", artists: "';
					echo $testimonial['name'];
					echo '"});</script></div>';
				}
			}
			else { echo ""; }
			?>
		</div>
<?php } 
}
else { echo ""; }
?>
<!-- ****************************************************************** -->
<!-- WHY TODAY -->
<!-- ****************************************************************** -->
<?php
global $why_metabox;
	echo wpautop($why_metabox->get_the_value('whytoday'));
?>
<!-- ****************************************************************** -->
<!-- GUARANTEE -->
<!-- ****************************************************************** -->
<?php
global $guarantee_metabox;
$guarantee = $guarantee_metabox->get_the_value('guaranteeheadline');
$guaranteeback = $guarantee_metabox->get_the_value('guaranteeback');
if (empty($guarantee)) { echo ''; }
	else {
		echo '<div id="guaranteebox';
		if ($guaranteeback == 'blue') {echo 'blue'; }
		else { echo ''; }
		echo'"><div id="guarantee';
		if ($guaranteeback == 'blue') {echo 'blue'; }
		else { echo ''; }
		echo '">';
		echo '<h1>';
		echo $guarantee_metabox->get_the_value('guaranteeheadline');
		echo '</h1>';
		echo wpautop($guarantee_metabox->get_the_value('guarantee'));
		echo '</div></div>';
	}
?>
<!-- ****************************************************************** -->
<!-- Closing Statement -->
<!-- ****************************************************************** -->
<?php
global $closing_metabox;
	echo wpautop($closing_metabox->get_the_value('closingstatement'));
?>
<!-- ****************************************************************** -->
<!-- ORDER AREA -->
<!-- ****************************************************************** -->
<?php
global $order_metabox;
$orderheadline = $order_metabox->get_the_value('orderheadline');
$visa = $order_metabox->get_the_value('visa');
$mastercard = $order_metabox->get_the_value('mastercard');
$americanexpress = $order_metabox->get_the_value('americanexpress');
$discover = $order_metabox->get_the_value('discover');
$paypal = $order_metabox->get_the_value('paypal');
$orderbuttontext = $order_metabox->get_the_value('orderlink');
if (empty($orderheadline)) { echo ''; }
else {
echo '<div id="orderarea">';
	echo '<h1>';
	echo $order_metabox->get_the_value('orderheadline');
	echo '</h1>';
	echo wpautop($order_metabox->get_the_value('confirmation'));
	
	if (empty($orderbuttontext)) { echo ''; }
	else {
		echo '<div class="redborder">';
		echo '<input onclick="';
		echo "document.location='";
		echo $order_metabox->get_the_value('orderlink');
		echo "'" ;
		echo '"' ;
		echo ' type="button" class="btn" value="';
		echo $order_metabox->get_the_value('orderbuttontext');
		echo '"></input></div>'; 
	}
	if ($visa !='' || $mastercard !='' || $americanexpress !='' || $discover !='' || $paypal !='') { echo "<div align='center'>";}
	else { echo "";}
	if ($visa == 'visa') {
		echo '<img  class="cc" src="';
		echo $wp_plugin_url; 
		echo '/wp-sales-letter/images/visa.png';
		echo '"/>';
		}
	if ($mastercard == 'mastercard') {
		echo '<img  class="cc" src="';
		echo $wp_plugin_url; 
		echo '/wp-sales-letter/images/mastercard.png';
		echo '"/>';
		}
	if ($americanexpress == 'americanexpress') {
		echo '<img  class="cc" src="';
		echo $wp_plugin_url; 
		echo '/wp-sales-letter/images/americanexpress.png';
		echo '"/>';
		}
	if ($discover == 'discover') {
		echo '<img  class="cc" src="';
		echo $wp_plugin_url; 
		echo '/wp-sales-letter/images/discover.png';
		echo '"/>';
		}
	if ($paypal == 'paypal') {
		echo '<img  class="cc" src="';
		echo $wp_plugin_url; 
		echo '/wp-sales-letter/images/paypal.png';
		echo '"/>';
		}
    if ($visa !='' || $mc !='' || $amex !='' || $discover !='' || $paypal !='') { echo "</div>";}
        else { echo "";}
	
	echo '</div>';
	}
	
?>
<!-- ****************************************************************** -->
<!-- THE PS -->
<!-- ****************************************************************** -->
<?php
global $ps_metabox;
	echo wpautop($ps_metabox->get_the_value('ps'));
?>
</div> <!-- END WP SALES LETTER -->
	
<?php get_footer(); ?>