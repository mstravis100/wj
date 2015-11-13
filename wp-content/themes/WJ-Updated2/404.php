<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

					<div id="main" class="eightcol first clearfix" role="main">

						<article id="post-not-found" class="hentry clearfix">

							<header class="article-header">

								<h1><?php _e( '404 - Article Not Found', 'bonestheme' ); ?></h1>

							</header><?php // end .article-header ?>

							<section class="entry-content">

								<p><?php _e( 'Sorry, the article you were looking for was not found.', 'bonestheme' ); ?></p>

							</section><?php // end .entry-content ?>

							<section class="search">

									<p><?php get_search_form(); ?></p>

							</section><?php // end search section ?>

							<footer class="article-footer">

							</footer><?php // end footer ?>

						</article><?php // end article ?>

					</div><?php // end #main ?>

				</div><?php // end #inner-content ?>

			</div><?php // end #content ?>
			</div><?php // end .content-header-wrap ?>

<?php get_footer(); ?>
