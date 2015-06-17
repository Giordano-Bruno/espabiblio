<div class="wpsl_salesletter">
<div id='wpsl_closingstatement' style="border:1px solid #ccc;padding:10px;border-radius:2px; margin-bottom: 20px;">

		<label>Your Closing Statement</label><div class='description'>This is your chance to give your give your closing statement as to why they should buy your product today.</div>
		<div class="customEditor2">
		<?php
		$mb->the_field('closingstatement');
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

