<div class="wpsl_salesletter">
	<div id='wpsl_orderarea' style="border:1px solid #ccc;padding:10px;border-radius:2px; margin-bottom: 20px;">
			<?php $mb->the_field('orderheadline'); ?>
			<label>Order Headline</label><div class='description'>Enter your order area headline. Keep it brief. i.e.) Priority Order Form</div>
			<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
			
			<label>Order Confirmation</label><div class='description'>Describe the order order connfirmation. Let people know what they are buying. Get an agreement with them as to why they want your product.</div>
			<div class="customEditor2">
			<?php
			$mb->the_field('confirmation');
			$mb_content = html_entity_decode($mb->get_the_value(), ENT_QUOTES, 'UTF-8');
			$mb_editor_id = sanitize_key($mb->get_the_name());
			$mb_settings = array('textarea_name'=>$mb->get_the_name(),'textarea_rows' => '10',);
			wp_editor( $mb_content, $mb_editor_id, $mb_settings );
			?>
			</div>
			
			<?php $mb->the_field('orderbuttontext'); ?>
			<label>Order Button Text</label><div class='description'>Enter the text for your order button. i.e.) Click Here To Order Now</div>
			<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
			
			<?php $mb->the_field('orderlink'); ?>
			<label>Order URL</label><div class='description'>Enter the URL to your order page. This is the link someone would go to enter their credit card details.</div>
			<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
	</div>
<div id='wpsl_creditcards' style="border:1px solid #ccc;padding:10px;border-radius:2px; margin-bottom: 20px;">
<div style="margin-bottom: 35px;">
	<label>Select the credit cards which you accept.</label></br>
	<?php $mb->the_field('visa'); ?>
	<div id='cbstuff'><input type="checkbox" id='visa' name="<?php $mb->the_name(); ?>" value="visa"<?php $mb->the_checkbox_state('visa'); ?> " /> <img  src="<?php echo WP_PLUGIN_URL. '/wp-sales-letter/images/visa.png';?>"/></div>
	
	<?php $mb->the_field('mastercard'); ?>
	<div id='cbstuff'><input type="checkbox" id='mastercard' name="<?php $mb->the_name(); ?>" value="mastercard"<?php $mb->the_checkbox_state('mastercard'); ?> " /> <img  src="<?php echo WP_PLUGIN_URL. '/wp-sales-letter/images/mastercard.png';?>"/></div>
	
	<?php $mb->the_field('americanexpress'); ?>
	<div id='cbstuff'><input type="checkbox" id='americanexpress' name="<?php $mb->the_name(); ?>" value="americanexpress"<?php $mb->the_checkbox_state('americanexpress'); ?> " /> <img  src="<?php echo WP_PLUGIN_URL. '/wp-sales-letter/images/americanexpress.png';?>"/></div>
	
	<?php $mb->the_field('discover'); ?>
	<div id='cbstuff'><input type="checkbox" id='discover' name="<?php $mb->the_name(); ?>" value="discover"<?php $mb->the_checkbox_state('discover'); ?> " /> <img  src="<?php echo WP_PLUGIN_URL. '/wp-sales-letter/images/discover.png';?>"/></div>
	
	<?php $mb->the_field('paypal'); ?>
	<div id='cbstuff'><input type="checkbox" id='paypal' name="<?php $mb->the_name(); ?>" value="paypal"<?php $mb->the_checkbox_state('paypal'); ?> " /> <img  src="<?php echo WP_PLUGIN_URL. '/wp-sales-letter/images/paypal.png';?>"/></div>
	
</div>
</div>
<p>
	<input type="submit" class="button-primary" name="save"value=" Save Changes "/>
</p> 
</div>
