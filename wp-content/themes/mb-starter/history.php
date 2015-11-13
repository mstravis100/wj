
<!-- HISTORY SECTION ******************************************************************************************** -->

<!-- History Container Open -->
<div id="history" class="scroller"></div>
	<!-- History Header -->

	<div class="pattern diamond">
		<object data="<?php echo get_template_directory_uri(); ?>/library/img/history.min.svg" type="image/svg+xml" class="title" alt="History">
			 <img src="<?php echo get_template_directory_uri(); ?>/library/img/history.png" class="title" alt="History" />
		</object>
	</div>
</div>
	<!-- History Slider -->
	<section class="px-drawer">
		<div class="slider no-play px-element">

			<?php 
			if( have_rows('history_slider') ):

		 	// loop through the rows of data
		    while ( have_rows('history_slider') ) : the_row();

				$content=get_sub_field('image_title');
				$content_2=get_sub_field('image_description');

	       		$image=get_sub_field('history_image');
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
					<h2><?php echo $content; ?></h2>
					<p>
						<?php echo $content_2; ?>
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

<!-- Mobile History Store -->

<div class="history-box">
	<?php if( have_rows('history_story') ) :
	 // loop through the rows of data
	    while ( have_rows('history_story') ) : the_row();

	    $title = get_sub_field( 'story_title' );
		$story = get_sub_field( 'story' );
	?>
	<h2><?php echo $title; ?></h2>
	<p>
		<?php echo $story; ?>
	</p>
	<?php endwhile;

			else :

			    // no rows found

			endif;

	?> 
</div>
