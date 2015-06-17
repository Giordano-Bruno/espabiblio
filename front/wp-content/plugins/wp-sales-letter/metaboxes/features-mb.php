<div class="wpsl_salesletter">
	<div id='wpsl_featureintro' style="border:1px solid #ccc;padding:10px;border-radius:2px; margin-bottom: 20px;"> 
		<label>Feature Headline and Intro</label><div class='description'>It's suggested that you introduce your features before listing them. Enter a headline and then a brief description of why these features are the ones the prospect wants.</div>
		<?php
		$mb->the_field('featureintro');
		$mb_content = html_entity_decode($mb->get_the_value(), ENT_QUOTES, 'UTF-8');
		$mb_editor_id = sanitize_key($mb->get_the_name());
		$mb_settings = array('textarea_name'=>$mb->get_the_name(),'textarea_rows' => '10',);
		wp_editor( $mb_content, $mb_editor_id, $mb_settings );
		?>
	 </div>
	<div id='wpsl_featurebullets' style="border:1px solid #ccc;padding:10px;border-radius:2px; margin-bottom: 20px;">
			<label>Choose The Feature Bullet Style</label><br/>
			<?php $mb->the_field('bullet'); ?>
			<span id='radio'><input type="radio" name="<?php $mb->the_name(); ?>" value="bullet2"<?php $mb->the_radio_state('bullet2'); ?>/>   <img  src="<?php echo WP_PLUGIN_URL. '/wp-sales-letter/images/bullet2.png';?>"/></span>
			<span id='radio'><input type="radio" name="<?php $mb->the_name(); ?>" value="bullet3"<?php $mb->the_radio_state('bullet3'); ?>/>   <img  src="<?php echo WP_PLUGIN_URL. '/wp-sales-letter/images/bullet3.png';?>"/></span>
			<span id='radio'><input type="radio" name="<?php $mb->the_name(); ?>" value="bullet4"<?php $mb->the_radio_state('bullet4'); ?>/>   <img  src="<?php echo WP_PLUGIN_URL. '/wp-sales-letter/images/bullet4.png';?>"/></span>
			<span id='radio'><input type="radio" name="<?php $mb->the_name(); ?>" value="bullet5"<?php $mb->the_radio_state('bullet5'); ?>/>   <img  src="<?php echo WP_PLUGIN_URL. '/wp-sales-letter/images/bullet5.png';?>"/></span>
	 </div>
<?php while( $mb->have_fields_and_multi( 'features' ) ): ?>
<?php $mb->the_group_open(); ?>
	<div id='wpsl_features' style="border:1px solid #ccc;padding:10px;border-radius:2px; margin-bottom: 20px;">
		<?php $mb->the_field( 'thefeature' ); ?>
		<label>Feature</label><div class='description'>Enter the name of the feature you want to talk about.</div>
		<p><input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" /></p>
		<?php $mb->the_field( 'benefit' ); ?>
		<?php do_action( 'media_buttons' ); ?>
		<div class="customEditor"><textarea name="<?php $mb->the_name(); ?>"><?php echo $mb->get_the_value(); ?></textarea></div>
		<a style="margin-bottom: 20px;" href="#" class="dodelete button">Delete Feature</a>
	 </div>
<?php $mb->the_group_close(); ?>
<?php endwhile; ?>
<p>
	<a href="#" class="docopy-features button">Add a New Feature</a> 
	<input type="submit" class="button-primary" name="save"value=" Save Features "/>
</p> 	
	</br>
	<div id='wpsl_featuresummary' style="border:1px solid #ccc;padding:10px;border-radius:2px; margin-bottom: 20px;">
		<label>Feature and Benefit Summary</label><div class='description'>Summarize the list of features and benefits to the consumer. Go into detail as to why these specific features are important to them.</div>
		<div class="customEditor2">
		<?php
		$mb->the_field('featuresummary');
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
