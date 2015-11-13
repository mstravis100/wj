<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="eightcol first clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
<!--
									<p class="byline vcard"><?php
										//printf( __( 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span>.', 'bonestheme' ), get_the_time( 'Y-m-j' ), get_the_time( __( 'F jS, Y', 'bonestheme' ) ), bones_get_the_author_posts_link());
									?></p>
-->

								</header><?php // end .article-header ?>

								<section class="entry-content clearfix" itemprop="articleBody">
									<?php the_content(); ?>
									
								<?php // picturefill example
								
											//<span data-picture data-alt="alt here">
												//<span data-src="/img/small.jpg"></span>
												//<span data-src="/img/medium.jpg" data-media="(min-width: 400px)"></span>
												//<span data-src="/img/large.jpg" data-media="(min-width: 800px)"></span>
												//<span data-src="/img/extralarge.jpg" data-media="(min-width: 1000px)"></span>
												
												//<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
												//<noscript><img src="/img/small.jpg" alt="alt here"></noscript>
											//</span>
								
								?>
									
								</section><?php // end .entry-content ?>

								<footer class="article-footer">
									<?php the_tags( '<span class="tags">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '' ); ?>

								</footer><?php // end .article-footer ?>

								<?php  comments_template(); ?>

							</article><?php // end article ?>

							<?php endwhile; else : ?>

								<article id="post-not-found" class="hentry clearfix">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
									</footer>
								</article>

							<?php endif; ?>

						</div><?php // end #main ?>

						<?php get_sidebar(); ?>

				</div><?php // end #inner-content ?>

			</div><?php // end #content ?>
			</div><?php // end .content-header-wrap ?>
<?php get_footer(); ?>
