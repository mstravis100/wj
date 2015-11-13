
<!-- THE FOOD SECTION ******************************************************************************************** -->

<div id="the-food" class="scroller"></div>

	<!-- The Food Header -->
	<div class="pattern diag">
		<object data="<?php echo get_template_directory_uri(); ?>/library/img/the-food.min.svg" type="image/svg+xml" class="title" alt="The Food">
			 <img src="<?php echo get_template_directory_uri(); ?>/library/img/the-food.png" class="title" alt="The Food" />
		</object>
	</div>

</div>
<div class="paper-bg">
	<!-- The Food Slider -->
	<section class="px-drawer">
		<div class="slider no-play px-element">

			<?php 
			if( have_rows('food_slider') ):

		 	// loop through the rows of data
		    while ( have_rows('food_slider') ) : the_row();


			        $image=get_sub_field('food_image');
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
							
						echo '</span>';

					echo '</div>';

		    endwhile;

				else :

				    // no rows found

				endif;

			?> 
		</div>
	</section>

	<!-- FOOD MENU ******************************************************************************************** -->


	<!-- Breakfast Title -->

	<div class="h1-center">
		<h1><?php the_field('breakfast_title'); ?></h1>
	</div>

	<!-- Swirly Divider -->

	<div class="divider divider-bottom">
		<!-- <object data="<?php echo get_template_directory_uri(); ?>/library/img/border.min.svg" type="image/svg+xml" class="title" alt="Section Divider">
			 <img src="<?php echo get_template_directory_uri(); ?>/library/img/border.png" class="title" alt="Section Divider" />
		</object> -->
		<div class="horizontal-center">
			<?php the_field("breakfast_cat_1_subtitle"); ?>
		</div>
	</div>

	<!-- Breakfast Category 1 -->

	<div class="food-menu">
		<?php if( have_rows('breakfast_cat_1') ) :
		 // loop through the rows of data
		    while ( have_rows('breakfast_cat_1') ) : the_row();

			$name = get_sub_field( 'food_name' );
			$description = get_sub_field( 'food_description' );
			$price = get_sub_field( 'food_price' );
		?>

		<div class="food-listing">

			<div class="item-name">
				<?php echo "$name"; ?>
			</div>
			<div class="slash">
				&nbsp;/&nbsp;
			</div>
			<div class="item-price">
				<?php echo "$price"; ?>
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

	<!-- Swirly Divider -->

	<div class="divider divider-bottom">
		<!-- <object data="<?php echo get_template_directory_uri(); ?>/library/img/border.min.svg" type="image/svg+xml" class="title" alt="Section Divider">
			 <img src="<?php echo get_template_directory_uri(); ?>/library/img/border.png" class="title" alt="Section Divider" />
		</object> -->
		<div class="horizontal-center">
			<?php the_field("breakfast_cat_2_subtitle"); ?>
		</div>
	</div>

	<!-- Breakfast Category 2 -->

	<div class="food-menu">
		<?php if( have_rows('breakfast_cat_2') ) :
		 // loop through the rows of data
		    while ( have_rows('breakfast_cat_2') ) : the_row();

			$name = get_sub_field( 'food_name' );
			$description = get_sub_field( 'food_description' );
			$price = get_sub_field( 'food_price' );
		?>

		<div class="food-listing">

			<div class="item-name">
				<?php echo "$name"; ?>
			</div>
			<div class="slash">
				&nbsp;/&nbsp;
			</div>
			<div class="item-price">
				<?php echo "$price"; ?>
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

<!-- Lunch Title -->

	<div class="h1-center">
		<h1><?php the_field('lunch_title'); ?></h1>
	</div>

	<!-- Swirly Divider -->

	<div class="divider divider-bottom">
		<!-- <object data="<?php echo get_template_directory_uri(); ?>/library/img/border.min.svg" type="image/svg+xml" class="title" alt="Section Divider">
			 <img src="<?php echo get_template_directory_uri(); ?>/library/img/border.png" class="title" alt="Section Divider" />
		</object> -->
		<div class="horizontal-center">
			<?php the_field("lunch_cat_1_subtitle"); ?>
		</div>
	</div>

	<!-- Lunch Category 1 -->

	<div class="food-menu">
		<?php if( have_rows('lunch_cat_1') ) :
		 // loop through the rows of data
		    while ( have_rows('lunch_cat_1') ) : the_row();

			$name = get_sub_field( 'food_name' );
			$description = get_sub_field( 'food_description' );
			$price = get_sub_field( 'food_price' );
		?>

			<div class="food-listing">

				<div class="item-name">
					<?php echo "$name"; ?>
				</div>
				<div class="slash">
					&nbsp;/&nbsp;
				</div>
				<div class="item-price">
					<?php echo "$price"; ?>
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

	<!-- Swirly Divider -->

	<div class="divider divider-bottom">
		<!-- <object data="<?php echo get_template_directory_uri(); ?>/library/img/border.min.svg" type="image/svg+xml" class="title" alt="Section Divider">
			 <img src="<?php echo get_template_directory_uri(); ?>/library/img/border.png" class="title" alt="Section Divider" />
		</object> -->
		<div class="horizontal-center">
			<?php the_field("lunch_cat_2_subtitle"); ?>
		</div>
	</div>

	<!-- Lunch Category 2 -->

	<div class="food-menu">
		<?php if( have_rows('lunch_cat_2') ) :
		 // loop through the rows of data
		    while ( have_rows('lunch_cat_2') ) : the_row();

			$name = get_sub_field( 'food_name' );
			$description = get_sub_field( 'food_description' );
			$price = get_sub_field( 'food_price' );
		?>

		<div class="food-listing">

			<div class="item-name">
				<?php echo "$name"; ?>
			</div>
			<div class="slash">
				&nbsp;/&nbsp;
			</div>
			<div class="item-price">
				<?php echo "$price"; ?>
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

	<!-- Swirly Divider -->

	<div class="divider divider-bottom">
		<!-- <object data="<?php echo get_template_directory_uri(); ?>/library/img/border.min.svg" type="image/svg+xml" class="title" alt="Section Divider">
			 <img src="<?php echo get_template_directory_uri(); ?>/library/img/border.png" class="title" alt="Section Divider" />
		</object> -->
		<div class="horizontal-center">
			<?php the_field("lunch_cat_3_subtitle"); ?>
		</div>
	</div>

	<!-- Lunch Category 3 -->

	<div class="food-menu">
		<?php if( have_rows('lunch_cat_3') ) :
		 // loop through the rows of data
		    while ( have_rows('lunch_cat_3') ) : the_row();

			$name = get_sub_field( 'food_name' );
			$description = get_sub_field( 'food_description' );
			$price = get_sub_field( 'food_price' );
		?>

		<div class="food-listing">

			<div class="item-name">
				<?php echo "$name"; ?>
			</div>
			<div class="slash">
				&nbsp;/&nbsp;
			</div>
			<div class="item-price">
				<?php echo "$price"; ?>
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

	<!-- Daily Specials -->

	<!-- <div class="yellow-border"> -->
		<!-- <object data="<?php echo get_template_directory_uri(); ?>/library/img/yellow-border-top.min.svg" type="image/svg+xml" class="full-width bottom-align" alt="border"> -->
<!-- 		<img src="<?php echo get_template_directory_uri(); ?>/library/img/yellow-border-top.png" class="full-width bottom-align" alt="border" />
 -->		<!-- </object> -->
	<!-- </div>  -->

	<!-- <div class="specials-container"> -->

		<!-- Specials Title -->

		<!-- <div class="h1-center">
			<h1><?php the_field('specials_title'); ?></h1>
		</div> -->
		<!-- Swirly Divider -->

		<!-- <div class="divider divider-bottom"> -->
			
		<!-- </div> -->

		<!-- Special Listing -->
		<!-- <div class="food-menu">
			<?php if( have_rows('specials_listing') ) :
			 // loop through the rows of data
			    while ( have_rows('specials_listing') ) : the_row();

			    $day = get_sub_field( 'day' );
				$name = get_sub_field( 'food_name' );
				$description = get_sub_field( 'food_description' );
				$price = get_sub_field( 'food_price' );
			?>

			<div class="food-listing">

				<div class="day">
					<?php echo "$day"; ?>
				</div>
				<div class="item-name">
					&nbsp;/&nbsp;<?php echo "$name"; ?>&nbsp;/&nbsp;
				</div>
				<div class="item-price">
					<?php echo "$price"; ?>
				</div>
				<div class="specials-description">
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

<!--Food Container Close -->
<!-- </div> -->

