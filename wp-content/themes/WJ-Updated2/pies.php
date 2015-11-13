<!-- THE PIES SECTION ******************************************************************************************** -->
<div id="pies" class="scroller"></div>

	<!-- The Pies Header -->

	<div class="pattern pie">
		<object data="<?php echo get_template_directory_uri(); ?>/library/img/the-pies.min.svg" type="image/svg+xml" class="title" alt="The Pies">
			 <img src="<?php echo get_template_directory_uri(); ?>/library/img/the-pies.png" class="title" alt="The Pies" />
		</object>
	</div>
	</div>
	<!-- The Pies Slider -->
	<section class="px-drawer">
		<div class="slider no-play px-element">

			<?php 
			if( have_rows('pie_slider') ):

		 	// loop through the rows of data
		    while ( have_rows('pie_slider') ) : the_row();

				// $image_id=get_sub_field('pie_image');
				// $feat_size = "full";
				// $image = wp_get_attachment_image_src($image_id, $feat_size);

				// $content = get_sub_field('pie_name');

				?>

				<?php /*

	        <div class="fullscreen-img" style="background-image: url(<?php echo $image[0]; ?>)">
				<div class="fullscreen-box">
					<h2><?php the_sub_field('pie_name'); ?></h2>
					<p>
						<?php the_sub_field('pie_description'); ?>
					</p>
					<hr>
					<p>
						<strong>PRE-ORDER PIES</strong>
						<br>
						
						<?php 
							if( have_rows('phone_number') ):

							 	// loop through the rows of data
							    while ( have_rows('phone_number') ) : the_row();

									$area_code=get_sub_field('area_code');
									$first_three = get_sub_field('first_three_digits');
									$last_four = get_sub_field('last_four_digits');

						?>
						<?php echo $area_code; ?>.<?php echo $first_three; ?>.<?php echo $last_four; ?>
					    <?php endwhile;

							else :

							    // no rows found

							endif;

						?>
						
						<!-- <br>-
						<br>pies@williejimpieco.com -->
					</p>
				</div>
			</div>
			*/
			?>

			<?php

					$image=get_sub_field('pie_image');
					$small = 'small';
					$medium = 'medium-size';
					$large = 'large-size';

					echo '<div>';

						echo '<span data-picture data-alt="'. $image['alt'] .'">';

							echo '<span data-src="'. $image['sizes'][$small] .'"></span>';
							echo '<span data-src="'. $image['sizes'][$medium] .'" data-media="(min-width: 469px)"></span>';
							echo '<span data-src="'. $image['sizes'][$large] .'" data-media="(min-width: 768px)"></span>';
							echo '<span data-src="'. $image['url'] .'" data-media="(min-width: 1136px)"></span>';
						                    
							echo '<noscript>';
						    	echo '<img class="" src="'. $image['sizes'][$large] .'" alt="'. $image['alt'] .'">';
						    echo '</noscript>';
							
						echo '</span>'; ?>


					<div class="fullscreen-box">
					<h2><?php the_sub_field('pie_name'); ?></h2>
					<p>
						<?php the_sub_field('pie_description'); ?>
					</p>
					<hr>
					<p>
						<strong>PRE-ORDER PIES</strong>
						<br>
						
						<?php 
							if( have_rows('phone_number') ):

							 	// loop through the rows of data
							    while ( have_rows('phone_number') ) : the_row();

									$area_code=get_sub_field('area_code');
									$first_three = get_sub_field('first_three_digits');
									$last_four = get_sub_field('last_four_digits');

						?>
						<?php echo $area_code; ?>.<?php echo $first_three; ?>.<?php echo $last_four; ?>
					    <?php endwhile;

							else :

							    // no rows found

							endif;

						?>
						
						<!-- <br>-
						<br>pies@williejimpieco.com -->
					</p>
				</div>

			</div>

		    <?php endwhile;

				else :

				    // no rows found

				endif;

			?> 
		</div>
	</section>

	<!-- HOUSE PIES MENU ******************************************************************************************** -->

	<!-- House Pies Title -->

	<div class="paper-bg">

	<div class="h1-center">
		<h1><?php the_field('house_pies_title'); ?></h1>
	</div>

	<!-- Swirly Divider -->

	<div class="divider divider-bottom">
		<!-- <object data="<?php echo get_template_directory_uri(); ?>/library/img/border.min.svg" type="image/svg+xml" alt="Section Divider">
			 <img src="<?php echo get_template_directory_uri(); ?>/library/img/border.png" alt="Section Divider" />
		</object> -->
	</div>

	<!-- House Pies Listing -->

	<div class="food-menu">
		<?php if( have_rows('house_pies') ) :
		 // loop through the rows of data
		    while ( have_rows('house_pies') ) : the_row();

			$name = get_sub_field( 'pie_name' );
			$description = get_sub_field( 'pie_description' );
			$whole = get_sub_field( 'whole_price' );
			$slice = get_sub_field( 'slice_price' );
		?>

		<div class="food-listing">

			<div class="item-name">
				<?php echo "$name"; ?>
			</div>
			<div class="slash">
				&nbsp;/&nbsp;
			</div>
			<div class="item-price">
				<span class="whole-slice">Whole </span><?php echo "$whole"; ?>&nbsp;<span class="no-show">/&nbsp;</span><span class="whole-slice">Slice </span><?php echo "$slice"; ?>
			</div>
			<div class="item-description">
				<?php echo "$description"; ?>
			</div>
		</div>
		
		<?php
		 endwhile;

			else :

			    echo "no rows found";// no rows found

			endif;
		?>
	</div>

	<!-- SEASONAL PIES MENU ******************************************************************************************** -->

	<!-- Seasonal Pies Title -->

	<div class="h1-center">
		<h1><?php the_field('seasonal_pies_title'); ?></h1>
	</div>

	<!-- Swirly Divider -->

	<div class="divider divider-bottom">
		<!-- <svg class="top-space" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 700 6" enable-background="new 0 0 700 6"><path fill="#231F20" d="M681.6 6c-4.8 0-7.3-1.1-9.6-2.1S667.6 2 663.2 2s-6.5.9-8.8 1.9c-2.4 1-4.8 2.1-9.6 2.1s-7.3-1.1-9.6-2.1-4.4-1.9-8.8-1.9-6.5.9-8.8 1.9c-2.4 1-4.8 2.1-9.6 2.1s-7.3-1.1-9.6-2.1S594 2 589.6 2s-6.5.9-8.8 1.9c-2.4 1-4.8 2.1-9.6 2.1s-7.3-1.1-9.6-2.1-4.4-1.9-8.8-1.9-6.5.9-8.8 1.9c-2.4 1-4.8 2.1-9.6 2.1s-7.3-1.1-9.6-2.1S520.4 2 516 2s-6.5.9-8.8 1.9c-2.4 1-4.8 2.1-9.6 2.1s-7.3-1.1-9.6-2.1-4.4-1.9-8.8-1.9-6.5.9-8.8 1.9c-2.4 1-4.8 2.1-9.6 2.1s-7.3-1.1-9.6-2.1-4.4-1.9-8.8-1.9-6.5.9-8.8 1.9c-2.4 1-4.8 2.1-9.6 2.1s-7.3-1.1-9.6-2.1S410 2 405.6 2s-6.5.9-8.8 1.9c-2.4 1-4.8 2.1-9.6 2.1s-7.3-1.1-9.6-2.1-4.4-1.9-8.8-1.9-6.5.9-8.8 1.9c-2.4 1-4.8 2.1-9.6 2.1s-7.3-1.1-9.6-2.1S336.4 2 332 2s-6.5.9-8.8 1.9c-2.4 1-4.8 2.1-9.6 2.1s-7.3-1.1-9.6-2.1-4.4-1.9-8.8-1.9-6.5.9-8.8 1.9c-2.4 1-4.8 2.1-9.6 2.1s-7.3-1.1-9.6-2.1-4.4-1.9-8.8-1.9-6.5.9-8.8 1.9c-2.4 1-4.8 2.1-9.6 2.1s-7.3-1.1-9.6-2.1S226 2 221.6 2s-6.5.9-8.8 1.9c-2.4 1-4.8 2.1-9.6 2.1s-7.3-1.1-9.6-2.1-4.4-1.9-8.8-1.9-6.5.9-8.8 1.9c-2.4 1-4.8 2.1-9.6 2.1s-7.3-1.1-9.6-2.1S152.4 2 148 2s-6.5.9-8.8 1.9c-2.4 1-4.8 2.1-9.6 2.1s-7.3-1.1-9.6-2.1-4.4-1.9-8.8-1.9-6.5.9-8.8 1.9C100 4.9 97.6 6 92.8 6s-7.3-1.1-9.6-2.1S78.8 2 74.4 2s-6.5.9-8.8 1.9C63.2 4.9 60.8 6 56 6s-7.2-1.1-9.6-2.1C44.1 2.9 42 2 37.6 2s-6.5.9-8.8 1.9C26.4 4.9 24 6 19.2 6s-7.3-1.1-9.6-2.1C6.5 2.9 4.4 2 0 2V0c4.8 0 7.2 1.1 9.6 2.1C11.9 3.1 14 4 18.4 4s6.5-.9 8.8-1.9C29.6 1.1 32 0 36.8 0s7.2 1.1 9.6 2.1c2.3 1 4.4 1.9 8.8 1.9s6.5-.9 8.8-1.9c2.4-1 4.8-2.1 9.6-2.1s7.3 1.1 9.6 2.1S87.6 4 92 4s6.5-.9 8.8-1.9c2.4-1 4.8-2.1 9.6-2.1s7.3 1.1 9.6 2.1 4.4 1.9 8.8 1.9 6.5-.9 8.8-1.9c2.4-1 4.8-2.1 9.6-2.1s7.3 1.1 9.6 2.1 4.4 1.9 8.8 1.9 6.5-.9 8.8-1.9c2.4-1 4.8-2.1 9.6-2.1s7.3 1.1 9.6 2.1S198 4 202.4 4s6.5-.9 8.8-1.9c2.4-1 4.8-2.1 9.6-2.1s7.3 1.1 9.6 2.1 4.4 1.9 8.8 1.9 6.5-.9 8.8-1.9c2.4-1 4.8-2.1 9.6-2.1s7.3 1.1 9.6 2.1S271.6 4 276 4s6.5-.9 8.8-1.9c2.4-1 4.8-2.1 9.6-2.1s7.3 1.1 9.6 2.1 4.4 1.9 8.8 1.9 6.5-.9 8.8-1.9c2.4-1 4.8-2.1 9.6-2.1s7.3 1.1 9.6 2.1 4.4 1.9 8.8 1.9 6.5-.9 8.8-1.9c2.4-1 4.8-2.1 9.6-2.1s7.3 1.1 9.6 2.1S382 4 386.4 4s6.5-.9 8.8-1.9c2.4-1 4.8-2.1 9.6-2.1s7.3 1.1 9.6 2.1 4.4 1.9 8.8 1.9 6.5-.9 8.8-1.9c2.4-1 4.8-2.1 9.6-2.1s7.3 1.1 9.6 2.1S455.6 4 460 4s6.5-.9 8.8-1.9c2.4-1 4.8-2.1 9.6-2.1s7.3 1.1 9.6 2.1 4.4 1.9 8.8 1.9 6.5-.9 8.8-1.9c2.4-1 4.8-2.1 9.6-2.1s7.3 1.1 9.6 2.1 4.4 1.9 8.8 1.9 6.5-.9 8.8-1.9c2.4-1 4.8-2.1 9.6-2.1s7.3 1.1 9.6 2.1S566 4 570.4 4s6.5-.9 8.8-1.9c2.4-1 4.8-2.1 9.6-2.1s7.3 1.1 9.6 2.1 4.4 1.9 8.8 1.9 6.5-.9 8.8-1.9c2.4-1 4.8-2.1 9.6-2.1s7.3 1.1 9.6 2.1S639.6 4 644 4s6.5-.9 8.8-1.9c2.4-1 4.8-2.1 9.6-2.1s7.3 1.1 9.6 2.1 4.4 1.9 8.8 1.9 6.5-.9 8.8-1.9c2.4-1 4.8-2.1 9.6-2.1v2c-4.4 0-6.5.9-8.8 1.9-1.6 1-4 2.1-8.8 2.1z"/></svg> -->
		<!-- <object data="<?php echo get_template_directory_uri(); ?>/library/img/border.min.svg" type="image/svg+xml" class="title" alt="Section Divider">
			 <img src="<?php echo get_template_directory_uri(); ?>/library/img/border.png" class="title" alt="Section Divider" />
		</object> -->
		<div class="horizontal-center">
			<?php the_field('season'); ?>
		</div>
	</div>

	<!-- Seasonal Pies Listing -->

	<div class="food-menu">
		<?php if( have_rows('seasonal_pies') ) :
		 // loop through the rows of data
		    while ( have_rows('seasonal_pies') ) : the_row();

			$name = get_sub_field( 'pie_name' );
			$description = get_sub_field( 'pie_description' );
			$whole = get_sub_field( 'whole_price' );
			$slice = get_sub_field( 'slice_price' );
		?>

			<div class="food-listing">

				<div class="item-name">
					<?php echo "$name"; ?>
				</div>
				<div class="slash">
					&nbsp;/&nbsp;
				</div>
				<div class="item-price">
					<span class="whole-slice">Whole </span><?php echo "$whole"; ?>&nbsp;<span class="no-show">/&nbsp;</span><span class="whole-slice">Slice </span><?php echo "$slice"; ?>
				</div>
				<div class="item-description">
					<?php echo "$description"; ?>
				</div>
			</div>
		<?php
		 endwhile;

			else :

			    echo "no rows found";// no rows found

			endif;
		?>
	</div>


	<!-- TINY PIES MENU ******************************************************************************************** -->

	<!-- Tiny Pies Title -->

	<div class="h1-center">
		<h1><?php the_field('tiny_pies_title'); ?></h1>
	</div>

	<!-- Swirly Divider -->

	<!-- <div class="divider divider-bottom">
		<div class="horizontal-center">
			<?php the_field('pie_bites_subtitle'); ?>
		</div>
	</div>

	<!-- Pie Bites Listing -->

	<!-- <div class="food-menu">
		<?php if( have_rows('pie_bites') ) :
		 // loop through the rows of data
		    while ( have_rows('pie_bites') ) : the_row();

			$name = get_sub_field( 'pie_name' );
			$description = get_sub_field( 'pie_description' );
			$dozen = get_sub_field( 'dozen_price' );
			$single = get_sub_field('single_price');
		?>

		<div class="food-listing">

			<div class="item-name">
				<?php echo "$name"; ?>
			</div>
			<div class="slash">
				&nbsp;/&nbsp;
			</div>
			<div class="item-price">
				<span class="whole-slice">Dozen </span><?php echo "$dozen"; ?>&nbsp;<span class="no-show">/&nbsp;</span><span class="whole-slice">Single </span><?php echo "$single"; ?>
			</div>
			<div class="item-description">
				<?php echo "$description"; ?>
			</div>
			
		</div>
		<?php
		 endwhile;

			else :

			    echo "no rows found";// no rows found

			endif;
		?>
	</div> -->

	<!-- Swirly Divider -->

	<div class="divider divider-bottom">
		<!-- <object data="<?php echo get_template_directory_uri(); ?>/library/img/border.min.svg" type="image/svg+xml" class="title" alt="Section Divider">
			 <img src="<?php echo get_template_directory_uri(); ?>/library/img/border.png" class="title" alt="Section Divider" />
		</object> -->
		<div class="horizontal-center">
			<?php the_field("pocket_pies_subtitle"); ?>
		</div>
	</div>

	<!-- Pocket Pies Listing -->

	<div class="food-menu">
		<?php if( have_rows('pocket_pies') ) :
		 // loop through the rows of data
		    while ( have_rows('pocket_pies') ) : the_row();

			$name = get_sub_field( 'pie_name' );
			$description = get_sub_field( 'pie_description' );
			$dozen = get_sub_field( 'dozen_price' );
			$single = get_sub_field('single_price');
		?>

			<div class="food-listing">

				<div class="item-name">
					<?php echo "$name"; ?>
				</div>
				<div class="slash">
					&nbsp;/&nbsp;
				</div>
				<div class="item-price">
					<span class="whole-slice">Dozen </span><?php echo "$dozen"; ?>&nbsp;<span class="no-show">/&nbsp;</span><span class="whole-slice">Single </span><?php echo "$single"; ?>
				</div>
				<div class="item-description">
					<?php echo "$description"; ?>
				</div>
			</div>
		<?php
		 endwhile;

			else :

			    echo "no rows found";// no rows found

			endif;
		?>
	</div>
	<div class="bottom-space"></div>
