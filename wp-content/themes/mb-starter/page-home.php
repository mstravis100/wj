<?php
/*
Template Name: Homepage
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div id="scroll-to-top"></div>
	<section class="main px-drawer">
		<div class="no-arrows slider multiple-items px-element">
			<?php 
			if( have_rows('featured_slider') ):

			 	// loop through the rows of data
			    while ( have_rows('featured_slider') ) : the_row();

					$image_id=get_sub_field('background_image');
					$feat_size = "large-size";
					$image = wp_get_attachment_image_src($image_id, $feat_size);

					$image_id2=get_sub_field('type_image');
					$image2 = wp_get_attachment_image_src($image_id2, $feat_size);

			?>

			       <div class="fullscreen-img" style="background-image:url(<?php echo $image[0]; ?>)">
						<img class="rotator-callout offcenter" src="<?php echo $image2[0]; ?>" />
					</div>

					<?php

					// $image=get_sub_field('background_image');
					// $small = 'small';
					// $medium = 'medium-size';
					// $large = 'large-size';

					// echo '<div class="fullscreen-img">';

					// 	echo '<span data-picture data-alt="'. $image['alt'] .'">';

					// 		echo '<span data-src="'. $image['sizes'][$small] .'"></span>';
					// 		echo '<span data-src="'. $image['sizes'][$medium] .'" data-media="(min-width: 469px)"></span>';
					// 		echo '<span data-src="'. $image['sizes'][$large] .'" data-media="(min-width: 768px)"></span>';
					// 		echo '<span data-src="'. $image['url'] .'" data-media="(min-width: 1136px)"></span>';
						                    
					// 		echo '<noscript>';
					// 	    	echo '<img class="" src="'. $image['sizes'][$large] .'" alt="'. $image['alt'] .'">';
					// 	    echo '</noscript>';
							
					// 	echo '</span>';

					// echo '</div>';

					?>
		    <?php endwhile;

				else :

				    // no rows found

				endif;

			?> 
		</div>
	</section> 
	<div class="hero-spacer"></div>
	<!-- <div class="scroll-arrow animated bounce horizontal-center">
		<svg class="scroll-down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 35" enable-background="new 0 0 80 35"><path d="M39.9 34.9c-5 0-9-4.1-9-9s4.1-9 9-9 9 4.1 9 9-4.1 9-9 9zm0-16.5c-4.1 0-7.4 3.3-7.4 7.4s3.3 7.4 7.4 7.4 7.4-3.3 7.4-7.4-3.4-7.4-7.4-7.4zM39.5 29.9L34 24.4l1.1-1.1 4.4 4.3 4.3-4.3 1.2 1.1z"/><g opacity=".9"><path d="M7 5.9c0 .2.1.4.2.6.2.5.3.8.4 1.3.5.1 1 .3 1.6.4l.2.7c-.6-.3-.8-.4-1.8-.7 0 .5-.1.7-.2.9-.2 1.1-1 1.7-1.4 1.9-.5.3-1.3.7-2.7.7-.2 0-1 0-1.7-.2-.2-.1-1.4-.5-1.4-1.8 0-.2 0-.7.4-1.1.4-.5 1-1 2.3-1.2.2 0 .5-.1 1.1-.1.4 0 1 0 1.8.1l-.7-1.1c-.3-.5-.5-1-.8-1.4-.2-.5-.4-1-.4-1.6 0-.4.1-1.2.9-1.8.3-.3 1-.7 2.1-.7 1.3 0 1.7.8 1.7 1.3 0 .6-.5 1.1-.6 1.2-.4.4-1.1.7-1.3.7.1-.1.2-.2.3-.4.1-.2.6-1 .6-1.8 0-.6-.4-.8-.7-.8-.2 0-.4 0-.6.2-.7.4-.7 1.3-.7 1.5 0 .2.1.5.1.7.2.5.5 1.1.7 1.5l.6 1zM4.7 7.6c-.9 0-2 .4-2.6 1.2-.1.2-.4.6-.4 1.1 0 .1 0 .3.1.5.2.7.8 1 1.5 1 .3 0 .6 0 .8-.2C5.2 10.9 6 9.8 6 8.7c0-.5-.1-.8-.2-1-.1 0-.7-.1-1.1-.1zM15 10.6c-.4.3-1.7 1.1-3.4 1.1-.7 0-1.8-.2-2.3-.8-.1-.2-.3-.4-.3-.9 0-.4.1-1 .6-1.9.2-.4 1-1.6 2.3-2.4.1-.1.8-.4 1.5-.4.1 0 .3 0 .5.1s.6.3.6.9c0 .7-.4 1.5-.9 2-.2.3-.6.8-1.1.7-.4 0-.5-.3-.5-.5s0-.3.2-.5c.2-.3.5-.5 1.1-.9.5-.3.7-.4.8-.7 0 0 .1-.2.1-.3 0-.2-.1-.5-.5-.5-.6 0-1.2.7-1.6 1.2-.3.4-.8 1.3-1.1 2.7 0 .1-.1.5-.1.9 0 .9.7 1 1 1 .4 0 1.2-.2 2.2-.6.3-.1.5-.3.8-.4l.1.2zM20.7 9.7s-.4.1-.6.1c-.3 0-1.1-.1-1.7-.9-.2-.2-.2-.3-.3-.6-.3.4-.7 1.1-1.2 2.1-.3.5-.5 1-.6 1.1-.1.1-.3.1-.5.1s-.7 0-.9-.5c0-.1-.1-.3-.1-.5s0-.5.2-.9L16.3 6l1.9-.5-2.1 5.7v.2h.1c.1 0 .1-.1.2-.2.2-.3.3-.7.4-1 .2-.6.5-1.2.8-1.7.1-.3.3-.5.4-.7 0-.4.1-1.2.9-1.9.4-.4.7-.4.9-.4.4 0 .6.3.6.5s-.1.3-.2.3c-.3.2-.5.5-.8.7l-.9.9c0 .6 0 1.1.5 1.5.1.1.4.2.7.2.3 0 .5-.1.8-.2l.2.3zM27.7 9.4c-.4.1-.7.2-1 .2-.5 0-.8-.1-1-.2-.4.7-.9 1.3-1.6 1.8-.3.2-.5.3-.8.4-.2.1-.5.2-1 .2-.1 0-.8 0-1.2-.3-.3-.2-.6-.6-.6-1.3 0-.5.2-1.8 1-2.9.3-.4.5-.6.7-.7.2-.2.5-.4 1-.7.3-.2.7-.3.8-.3v-.1s0 .1-.1.2c0 .1-.1.2-.2.3-.2.3-.3.6-.5.8-.6 1.1-.9 2.1-1 2.5 0 .1-.2.6-.2 1.1 0 .1 0 .6.3.9.1 0 .2.1.4.1s.5-.1.8-.4c.7-.6 1-1.3 1.3-2.1-.3-.4-.9-1-.9-2.3.1-.3.1-.6.1-.6s.2-1.2 1-1.2c.3 0 .6.2.7.3.3.3.7.7.7 1.6 0 .5-.1 1.4-.6 2.4.1 0 .5.2.9.2.5 0 .9-.2 1-.3v.4zm-2.4-2.6c0-.8-.2-1.6-.5-1.6-.4 0-.4 1-.4 1.2 0 .9.3 1.4.7 2.1.1-.8.2-1.2.2-1.7zM29.3 9.6c-.1.2-.3.8-.3 1.1 0 .4.3.6.6.6.2 0 .4-.1.6-.1.7-.2 1.2-.6 1.4-.7l.1.3c-1.1.7-1.5.9-2.2 1-.1 0-.3.1-.7.1-.1 0-.7 0-1.1-.3-.3-.3-.5-.5-.5-.9s.1-.7.2-1.1l2.8-8 1.9-.5-2.8 8.5zM33.4 9.6c-.1.2-.3.8-.3 1.1 0 .4.3.6.6.6.2 0 .4-.1.6-.1.7-.2 1.2-.6 1.4-.7l.1.3c-1.1.7-1.5.9-2.2 1-.1 0-.3.1-.7.1-.1 0-.7 0-1.1-.3-.3-.3-.5-.5-.5-.9s.1-.7.2-1.1l2.8-8 1.9-.5-2.8 8.5zM43.2 11.3c.2-.1.5-.1.7-.6.2-.3.4-.9.7-1.7l1.2-3.6c.2-.5.3-.8.6-1.2.3-.5.5-.8.9-1.2l.6-.6c.4-.3.8-.7 1.3-1l.2.2c-.2.2-.3.4-.4.6-.5 1-.8 1.9-1 2.3l-1.2 3.7c-.2.4-.4 1-1 1.7-.7.9-1.4 1.2-1.8 1.4h1.3c1.3 0 3.1-.2 4.8-2.6.2-.3.4-.7.6-1 .1-.3 1-1.9 1-3.4 0-.3 0-1.3-.6-2.1-.5-.6-1.5-1.2-3.2-1.2-2.9 0-4.6 1.5-5.4 2.2-.7.6-1.3 1.4-1.7 2.2-.5.9-.7 1.4-.7 1.9 0 .8.4 1.1.6 1.4l-.2.2c-.3-.3-.8-.8-.8-1.9 0-.2 0-.7.1-1.2.2-.9.8-1.8 1.3-2.4.3-.4 1.2-1.2 2.5-1.8.7-.3 2.2-.8 4.2-.8.6 0 2.7 0 4.2 1.4.7.6 1 1.2 1.1 1.5.2.7.3 1.3.3 1.5 0 1.5-.6 2.6-.9 3-.8 1.2-1.9 2.1-2.3 2.3-.9.6-2.1 1.2-4.4 1.2-.8 0-1.6-.1-2.5-.2v-.2zM61 9.4c-.4.1-.7.2-1 .2-.5 0-.8-.1-1-.2-.4.7-.9 1.3-1.6 1.8-.3.2-.5.3-.8.4-.2.1-.5.2-1 .2-.1 0-.8 0-1.2-.3-.3-.2-.6-.6-.6-1.3 0-.5.2-1.8 1-2.9.3-.4.5-.6.7-.7.2-.2.5-.4 1-.7.3-.2.7-.3.8-.3.1 0 .1.1.1.1s0 .1-.1.2c-.2-.1-.3 0-.3.1-.2.3-.3.6-.5.8-.6 1.1-.9 2.1-1 2.5 0 .1-.2.6-.2 1.1 0 .1 0 .6.3.9.1 0 .2.1.4.1s.5-.1.8-.4c.7-.6 1-1.3 1.3-2.1-.3-.4-.9-1-.9-2.3V6s.2-1.2 1-1.2c.3 0 .6.2.7.3.3.3.7.7.7 1.6 0 .5-.1 1.4-.6 2.4.1 0 .5.2.9.2.5 0 .9-.2 1-.3l.1.4zm-2.5-2.6c0-.8-.2-1.6-.5-1.6-.4 0-.4 1-.4 1.2 0 .9.3 1.4.7 2.1.1-.8.2-1.2.2-1.7zM71.8 10.2c-.3 0-1 .1-1.6-.3-.2-.1-.3-.2-.5-.3-.2.3-.4.6-1 1.1-.3.3-1.2 1.1-2.5 1.1-.7 0-1-.1-1.3-.3-.1-.1-.3-.2-.3-.3-.2.1-1.2.6-2.1.6-.3 0-.6 0-.7-.1-.9-.2-1.1-.8-1.1-1.2 0-.3.2-.7.2-.7L62.2 6l1.9-.5-1.7 4.5s-.2.4-.2.7c0 .4.3.6.7.6.5 0 1-.3 1.4-.5 0-.1-.1-.2-.1-.3 0-.2.1-.4.2-.6L65.9 6l1.9-.5-1.7 4.7s-.2.5-.2.7c0 .3.2.5.6.5.7 0 1.3-.7 1.4-.8.4-.5.8-1.2.9-1.3.1-.1.2-.3.2-.5-.2-.3-.8-1.1-.8-2.2 0-.1 0-.3.1-.6.1-.5.5-1 1-1 .2 0 .3 0 .5.1s.6.4.8.9c.1.3.1.6.1.6 0 .2 0 .5-.1.9-.2.8-.6 1.5-.7 1.7.3.3.7.5 1.6.5h.5l-.2.5zm-2.2-3.8v-.6s0-.2-.2-.4c0-.1-.2-.2-.3-.2 0 0-.1 0-.2.1-.2.2-.3.5-.3 1.1 0 1 .3 1.7.5 2 .1 0 .5-1.1.5-2zM77.2 9.9c-.1.2-.2.5-.2.8 0 .2.1.5.5.5.6 0 1.6-.6 2.1-.9l.2.2c-.2.1-.4.2-.6.4-.7.4-1.3.7-2.1.7-.1 0-.3 0-.6-.1s-1.1-.4-1.1-1.3c0-.3.1-.6.2-.7L77 6v-.2c-.1 0-.3.2-.3.3-1 .9-1.8 2.3-2 2.6-.2.3-.5.7-.7 1.1-.2.4-.5.8-.7 1.2-.2.3-.4.7-.9.7-.3 0-1 0-1-.9 0-.3.1-.6.2-.9L73 6l1.9-.5-2.1 5.5c0 .1-.1.1-.1.2 0 0 0 .1.1.1h.1c0-.1.2-.4.3-.7.1-.3 1.1-2.2 2-3.5.3-.3.5-.6.8-.9.1-.1.8-.9 1.6-.9.2 0 .9.1.9.8 0 .2 0 .3-.2.6l-1.1 3.2z"/></g></svg>
	</div> -->
	


<?php include('main-nav.php'); ?>


<?php include('hours-location.php'); ?>


<?php include('pies.php'); ?>


<?php include('food.php'); ?>


<?php include('history.php'); ?>


<?php include('eat-pie.php'); ?>








<?php endwhile; else : ?>

		<article id="post-not-found" class="hentry clearfix">
				<header class="article-header">
					<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
			</header>
				<section class="entry-content">
					<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
			</section>
			<footer class="article-footer">
					<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
			</footer>
		</article>

<?php endif; ?>



	










<?php /*************************************************/ ?>

<div id="footer" style="height: 0;">
	<a rel="relm_PageScroll2id" href="#footer" class="_mPS2id-h scroller">&nbsp;</a>
</div>	

<?php get_footer(); ?>
