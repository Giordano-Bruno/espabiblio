<div class="wpsl_salesletter">
<div style="margin-bottom: 35px;">
	<label>(OPTIONAL) Video or Audio - Choose One or None.</label>
	<?php $mb->the_field('media_selection'); ?>
	<div id='cbstuff'><input type="checkbox" id='show_video' name="<?php $mb->the_name(); ?>" value="video"<?php $mb->the_checkbox_state('video'); ?> onclick="wpslshow_div('video_box','show_video');uncheck_checkbox('show_audio');uncheck_checkbox('show_media')" />  <label class='cblabel'>Built In Video Player</label></div>
	<div id='cbstuff'><input type="checkbox" id='show_audio' name="<?php $mb->the_name(); ?>" value="audio"<?php $mb->the_checkbox_state('audio'); ?> onclick="wpslshow_div('audio_box','show_audio');uncheck_checkbox('show_video');uncheck_checkbox('show_media')" />  <label class='cblabel'>Built In Audio Player</label></div>
	<div id='cbstuff'><input type="checkbox" id='show_media' name="<?php $mb->the_name(); ?>" value="media"<?php $mb->the_checkbox_state('media'); ?> onclick="wpslshow_div('media_box','show_media');uncheck_checkbox('show_video');uncheck_checkbox('show_audio')" />  <label class='cblabel'>Video Embed</label></div>
</div>
<div id='video_box' style="display:none;border:1px solid #ccc;margin:10px 0px;padding:10px;border-radius:2px;">
		<?php $mb->the_field( 'sales_video_url' ); ?>
		<label>Sales Video URL</label><div class='description'>Enter the URL of your video.</div>
		<p><input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" /></p>
		
		<?php $mb->the_field( 'sales_video_width' ); ?>
		<label>Sales Video Width</label><div class='description'>Enter the width in pixels of your video.</div>
		<p><input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" /></p>
		<?php $mb->the_field( 'sales_video_height' ); ?>
		<label>Sales Video Height</label><div class='description'>Enter the height in pixels of your video.</div>
		<p><input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" /></p>
</div><!--end div video box-->
   
<div id='audio_box' style="display:none;border:1px solid #ccc;margin:10px 0px;padding:10px;border-radius:2px;">
		<?php $mb->the_field( 'sales_audio_url' ); ?>
		<label>Sales Audio URL</label><div class='description'>Enter the URL of your mp3 file.</div>
		<p><input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" /></p>
</div><!--end div audio box -->
<div id='media_box' style="display:none;border:1px solid #ccc;margin:10px 0px;padding:10px;border-radius:2px;">
		<?php $mb->the_field( 'media_embed' ); ?>
		<label>Embed Media</label><div class='description'>In the box below, past in your media embed code.</div>
		<p><textarea rows="6" name="<?php $mb->the_name(); ?>"><?php $mb->the_value(); ?></textarea></p>
</div><!--end div audio box -->
   
<script type='text/javascript'>
function uncheck_checkbox(fieldname){
	//function uncheck checkbox.
	var div = document.forms.post.elements[fieldname];
	div.checked=false;
}
function wpslhide_div(){
	//function to hide all div, just add new id to array!
	var div = new Array('video_box','audio_box','media_box');
		for(var i in div){
			document.getElementById(div[i]).style.display='none';	
			}
}
function wpslshow_div(div,checkdiv){
	//function to show all div
	wpslhide_div();//hide all div first then show assigned div.
	var checkbox = document.forms.post.elements[checkdiv];
	var div = div;
		  if(checkbox.checked==true){
				document.getElementById(div).style.display='block';
				}else{
				document.getElementById(div).style.display='none';
			}
}
</script>
<?php
global $media_metabox;
	if ($media_metabox->get_the_value('media_selection') == 'video') {
		echo "<script type='text/javascript'>document.getElementById('video_box').style.display='block';</script>"; }
	elseif($media_metabox->get_the_value('media_selection') =='audio'){
		echo "<script type='text/javascript'>document.getElementById('audio_box').style.display='block';</script>"; }
	elseif($media_metabox->get_the_value('media_selection') =='media'){
		echo "<script type='text/javascript'>document.getElementById('media_box').style.display='block';</script>"; }
?>
</div>
