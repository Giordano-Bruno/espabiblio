<div class="wpsl_salesletter">
	<div id='wpsl_guaranteeback' style="border:1px solid #ccc;padding:10px;border-radius:2px; margin-bottom: 20px;">
			<label>Choose Guarantee Border and Background Style</label><br/>
			<?php $mb->the_field('guaranteeback'); ?>
			<span id='radio'><input type="radio" name="<?php $mb->the_name(); ?>" value="green"<?php $mb->the_radio_state('green'); ?>/>   <img  src="<?php echo WP_PLUGIN_URL. '/wp-sales-letter/images/greencert.png';?>"/></span>
			<span id='radio'><input type="radio" name="<?php $mb->the_name(); ?>" value="blue"<?php $mb->the_radio_state('blue'); ?>/>   <img  src="<?php echo WP_PLUGIN_URL. '/wp-sales-letter/images/bluecert.png';?>"/></span>
	 </div>
	<div id='wpsl_guarantee' style="border:1px solid #ccc;padding:10px;border-radius:2px; margin-bottom: 20px;">
			<?php $mb->the_field( 'guaranteeheadline' ); ?>
			<label>Guarantee Headline</label><div class='description'>Type a brief headline for your guarantee. i.e.) 100% Money Back Guarantee</div>
			<p><input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" /></p>
						
			<label>Your Guarantee</label><div class='description'>State in clear terms your guarantee to your prospects. The more risk free your offer is, the more likely you'll get the sale.</div>
			<div class="customEditor2">
			<?php
			$mb->the_field('guarantee');
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
