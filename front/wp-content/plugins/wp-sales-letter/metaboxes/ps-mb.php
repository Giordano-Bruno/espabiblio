<div class="wpsl_salesletter">
<div id='wpsl_ps' style="border:1px solid #ccc;padding:10px;border-radius:2px; margin-bottom: 20px;">
		<label>P.S.</label><div class='description'>Enter your P.S. to your customer. This is your last chance to get the sale. Give it one more shot.</div>
		<div class="customEditor2">
		<?php
		$mb->the_field('ps');
		$mb_content = html_entity_decode($mb->get_the_value(), ENT_QUOTES, 'UTF-8');
		$mb_editor_id = sanitize_key($mb->get_the_name());
		$mb_settings = array('textarea_name'=>$mb->get_the_name(),'textarea_rows' => '10',);
		wp_editor( $mb_content, $mb_editor_id, $mb_settings );
		?>
		</div>
</div>
<p>
	<input type="submit" class="button-primary" name="save"value=" Save Changes "/>
</p> 
</div>
