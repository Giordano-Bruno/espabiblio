<div class="wpsl_salesletter">
	<div id='wpsl_intro' style="border:1px solid #ccc;padding:10px;border-radius:2px; margin-bottom: 20px;">
		<label>Introduction</label><div class='description'>Start your story. Typically you might want to start with why you are writing your prospects. You can also use the prewritten starters we've written for you buy clicking the blue button below.</div>
		<div class="customEditor2">
		<?php
		$mb->the_field('introduction');
		$mb_content = html_entity_decode($mb->get_the_value(), ENT_QUOTES, 'UTF-8');
		$mb_editor_id = sanitize_key($mb->get_the_name());
		$mb_settings = array('textarea_name'=>$mb->get_the_name(),'textarea_rows' => '10',);
		wp_editor( $mb_content, $mb_editor_id, $mb_settings );
		?>
		</div>
			
		<label>Problem</label><div class='description'>Let your prespects know the problems they are currently having. The idea is to allow them to relive their pain.</div>
		<div class="customEditor2">
		<?php
		$mb->the_field('problem');
		$mb_content = html_entity_decode($mb->get_the_value(), ENT_QUOTES, 'UTF-8');
		$mb_editor_id = sanitize_key($mb->get_the_name());
		$mb_settings = array('textarea_name'=>$mb->get_the_name(),'textarea_rows' => '10',);
		wp_editor( $mb_content, $mb_editor_id, $mb_settings );
		?>
		</div>
		<label>Solution</label><div class='description'>Now, introduce your product as a solution. Make it exciting. Introduce it and even include a picture if you feel it necessary.</div>
		<div class="customEditor2">
		<?php
		$mb->the_field('solution');
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
