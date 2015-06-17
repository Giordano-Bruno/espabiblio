<div class="wpsl_salesletter">
	<div class="wpsl_testimonial" style="border:1px solid #ccc;padding:10px;border-radius:2px; margin-bottom: 20px;">
			<label>Choose The Testimonial Box Background Color</label><br/>
			<?php $mb->the_field('background'); ?>
			<input type="radio" name="<?php $mb->the_name(); ?>" value="testimonialblue"<?php $mb->the_radio_state('testimonialblue'); ?>/><img  src="<?php echo WP_PLUGIN_URL. '/wp-sales-letter/images/testimonialblue.png';?>"/>
			<input type="radio" name="<?php $mb->the_name(); ?>" value="testimonialgreen"<?php $mb->the_radio_state('testimonialgreen'); ?>/><img  src="<?php echo WP_PLUGIN_URL. '/wp-sales-letter/images/testimonialgreen.png';?>"/>
			<input type="radio" name="<?php $mb->the_name(); ?>" value="testimonialgray"<?php $mb->the_radio_state('testimonialgray'); ?>/><img  src="<?php echo WP_PLUGIN_URL. '/wp-sales-letter/images/testimonialgray.png';?>"/>
			<input type="radio" name="<?php $mb->the_name(); ?>" value="testimonialyellow"<?php $mb->the_radio_state('testimonialyellow'); ?>/><img  src="<?php echo WP_PLUGIN_URL. '/wp-sales-letter/images/testimonialyellow.png';?>"/>
	</div>
	<?php while( $mb->have_fields_and_multi( 'testimonials' ) ): ?>
	<?php $mb->the_group_open(); ?>
	
	<div class="wpsl_testimonial" style="border:1px solid #ccc;padding:10px;border-radius:2px; margin-bottom: 20px;">
			<?php $mb->the_field( 'name' ); ?>
			<label>Testimonial Name</label><div class='description'>Enter the name of your testimonial.</div>
			<p><input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" /></p>
		 
			<?php $mb->the_field( 'content' ); ?>
			<label>The Testimonial</label><div class='description'>Enter the testimonial which your prospect gave you. You may include images such as a picture of the testimonial.</div>
			<?php do_action( 'media_buttons' ); ?>
			<div class="customEditor"><textarea name="<?php $mb->the_name(); ?>"><?php echo $mb->get_the_value(); ?></textarea></div>
			
			<?php $mb->the_field( 'url' ); ?>
			<label>OPTIONIAL: Testimonials URL</label><div class='description'>Enter the URL of your testimonial's website. This is optional. If you don't want to display the URL, just leave blank.</div>
			<p><input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" /></p>
		 
			<?php $mb->the_field( 'audio' ); ?>
			<label>OPTIONIAL: Testimonial Audio Button</label><div class='description'>Enter the URL to the mp3 of your testimonial. Our system will automatically create an audio player in the testimonial area for you.</div>
			<p><input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" /></p>
			<a style="margin-bottom: 20px;" href="#" class="dodelete button">Delete Testimonial</a>
	</div> 
		 
	<?php $mb->the_group_close(); ?>
	<?php endwhile; ?>
	 
	<p>
		<a href="#" class="docopy-testimonials button">Add a New Testimonial</a> 
		<input type="submit" class="button-primary" name="save"value="Save Testimonial"/>
	</p> 
	
</div>
