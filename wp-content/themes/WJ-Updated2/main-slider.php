<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section class="px-drawer">
		<div id="scroll-to-top" class="slider-main slider multiple-items px-element scrollSlow">
			<?php 
			if( have_rows('featured_slider') ):

			 	// loop through the rows of data
			    while ( have_rows('featured_slider') ) : the_row();

					$image_id=get_sub_field('background_image');
					$feat_size = "full";
					$image = wp_get_attachment_image_src($image_id, $feat_size);

					$image_id2=get_sub_field('type_image');
					$image2 = wp_get_attachment_image_src($image_id2, $feat_size);

			?>

			        <div class="fullscreen-img" style="background-image:url(<?php echo $image[0]; ?>)">
						<img class="rotator-callout offcenter" src="<?php echo $image2[0]; ?>" />
					</div>
		    <?php endwhile;

				else :

				    // no rows found

				endif;

			?> 
		</div>
	</section>