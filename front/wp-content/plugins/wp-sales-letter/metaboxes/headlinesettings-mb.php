<div class="wpsl_salesletter">
<div id='wpsl_headlinesettings' style="border:1px solid #ccc;padding:10px;border-radius:2px; margin-bottom: 20px;">
		<label>Main Headline</label><div class='description'>Enter the main headline for your sales letter. You can use the pre-written headlines we've written for you. Click the button above to start.</div>
		<div class="customEditor2">
		<?php
		$mb->the_field('mainheadline');
		$mb_content = html_entity_decode($mb->get_the_value(), ENT_QUOTES, 'UTF-8');
		$mb_editor_id = sanitize_key($mb->get_the_name());
		$mb_settings = array('textarea_name'=>$mb->get_the_name(),'textarea_rows' => '10',);
		wp_editor( $mb_content, $mb_editor_id, $mb_settings );
		?>
		</div>
		<?php $mb->the_field( 'yourname' ); ?>
		<label>Your Name</label><div class='description'>Enter your name into the field below.</div>
		<p><input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" /></p>
		
		<?php $mb->the_field( 'reason' ); ?>
		<label>Your Reason</label><div class='description'>Enter the reason you are writing this sales letter.</div>
		<p><input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" /></p>
</div>
<p>
	<input type="submit" class="button-primary" name="save"value=" Save Changes "/>
</p> 
</div>
