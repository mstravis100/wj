			<div class="back-bar">
				<a rel="relm_PageScroll2id" href="#scroll-to-top">back to the top</a>
			</div>

			

			<footer class="footer" role="contentinfo">
				<div id="footer-wrapper">
					<div id="row">
						<div id="first">
							<hr>
							<h4>
								LOCATION
							</h4>
							<span class="cream">
								<a href="https://www.google.com/maps/place/208+W+Houston+St,+Sherman,+TX+75090/@33.6361683,-96.6110535,17z/data=!4m7!1m4!3m3!1s0x864c8830b1ad1bf1:0x352ee611acd3de28!2s208+W+Houston+St,+Sherman,+TX+75090!3b1!3m1!1s0x864c8830b1ad1bf1:0x352ee611acd3de28" target="_blank" alt="Map It!">
									<?php the_field('street_address'); ?><br><?php the_field('city_state_zip'); ?><br>–<br>
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
								</a>
							</span>
							</a>
							<object data="<?php echo get_template_directory_uri(); ?>/library/img/pie-icon.min.svg" type="image/svg+xml" id="pie-icon" alt="Pie Icon" >
								 <img src="<?php echo get_template_directory_uri(); ?>/library/img/pie-icon.png" id="pie-icon" alt="Pie Icon" />
							</object>
						</div>
						<div id="second">
							<hr>
							<h4>
								Pre-order pies
							</h4>
							<h3>
								<a href="tel:+19038935000">
									<?php 
										if( have_rows('phone_number') ):

										 	// loop through the rows of data
										    while ( have_rows('phone_number') ) : the_row();

												$area_code=get_sub_field('area_code');
												$first_three = get_sub_field('first_three_digits');
												$last_four = get_sub_field('last_four_digits');

										?>
									<?php echo $area_code; ?>.<br>
									<?php echo $first_three; ?>.<br>
									<?php echo $last_four; ?>
								    <?php endwhile;

										else :

										    // no rows found

										endif;

									?> 
								</a>
							</h3>
						</div>
						<div id="third">
							<hr>
							<h4>
								follow us
							</h4>
							<ul>
								<li>
									<a href="https://www.facebook.com/pages/Willie-Jims-Pie-Co/957259607623227" alt="Like us on Facebook">
										<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 30 30" enable-background="new 0 0 30 30" xml:space="preserve">
											<path id="fb-2" fill="#000" d="M14.7,0.8C7,0.8,0.8,7,0.8,14.7c0,7.7,6.2,13.9,13.9,13.9s13.9-6.2,13.9-13.9C28.6,7,22.4,0.8,14.7,0.8z  M18.4,14.6H16c0,3.9,0,8.6,0,8.6h-3.6c0,0,0-4.7,0-8.6h-1.7v-3h1.7v-2C12.4,8.2,13.1,6,16,6l2.6,0V9c0,0-1.6,0-1.9,0
											C16.4,9,16,9.1,16,9.8v1.8h2.7L18.4,14.6z"></path>
										</svg>
									</a>
									<!-- <object data="<?php echo get_template_directory_uri(); ?>/library/img/fb-icon.min.svg" type="image/svg+xml">
									 	<img src="<?php echo get_template_directory_uri(); ?>/library/img/fb-icon.png" />
									</object> -->
								</li>
							<!-- 	<li>
									<a href="https://www.twitter.com" alt="Follow us on Twitter">
										<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 39.4 39.4" enable-background="new 0 0 39.4 39.4" xml:space="preserve">
											<path id="tw-2" fill="#000" d="M19.7,0.4C9,0.4,0.4,9,0.4,19.7C0.4,30.3,9,39,19.7,39C30.3,39,39,30.3,39,19.7C39,9,30.3,0.4,19.7,0.4z M29.4,15.8c0,0.2,0,0.4,0,0.6c0,6.4-4.9,13.8-13.8,13.8c-2.7,0-5.3-0.8-7.5-2.2c0.4,0,0.8,0.1,1.2,0.1c2.3,0,4.4-0.8,6-2.1 c-2.1,0-3.9-1.4-4.5-3.4c0.3,0.1,0.6,0.1,0.9,0.1c0.4,0,0.9-0.1,1.3-0.2c-2.2-0.4-3.9-2.4-3.9-4.8c0,0,0,0,0-0.1 c0.7,0.4,1.4,0.6,2.2,0.6c-1.3-0.9-2.2-2.4-2.2-4c0-0.9,0.2-1.7,0.7-2.4c2.4,2.9,6,4.9,10,5.1c-0.1-0.4-0.1-0.7-0.1-1.1 c0-2.7,2.2-4.9,4.9-4.9c1.4,0,2.7,0.6,3.5,1.5c1.1-0.2,2.1-0.6,3.1-1.2C30.8,12.5,30,13.4,29,14c1-0.1,1.9-0.4,2.8-0.8	C31.2,14.2,30.3,15.1,29.4,15.8z">
											</path>
										</svg>
									</a>
									<!-- <object data="<?php echo get_template_directory_uri(); ?>/library/img/tw-icon.min.svg" type="image/svg+xml">
									 	<img src="<?php echo get_template_directory_uri(); ?>/library/img/tw-icon.png" />
									</object>
								</li> -->
								<li>
									<a href="http://instagram.com/williejimpieco" alt="Follow our Instagram">
										<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 39.9 39.9" enable-background="new 0 0 39.9 39.9" xml:space="preserve">
											<g>
												<path id="ig-2" fill="#000" d="M20,0.7C9.3,0.7,0.7,9.3,0.7,20c0,10.7,8.6,19.3,19.3,19.3c10.7,0,19.3-8.6,19.3-19.3 C39.2,9.3,30.6,0.7,20,0.7z M30.7,26.7c0,1.8-1.1,3.1-2.9,3.1H13.5c-1.8,0-2.9-1.3-2.9-3.1v-7.9h3.8c-0.1,0-0.1,0.6-0.1,1 c0,3.5,2.8,6.2,6.3,6.2c3.5,0,6.3-2.7,6.3-6.1c0-0.4,0-1.1-0.1-1.1h3.9V26.7z M16.8,19.6c0-2.1,1.7-3.9,3.9-3.9 c2.1,0,3.9,1.7,3.9,3.9s-1.7,3.9-3.9,3.9C18.5,23.4,16.8,21.7,16.8,19.6z M30.7,15.8h-4.9c-1.1-1-3-2.7-5.1-2.7 c-2.1,0-4,1.7-5.1,2.7h-4.9v-3.3c0-1.8,1.1-3.7,2.9-3.7h14.2c1.8,0,2.9,1.9,2.9,3.7V15.8z"></path>
												<path id="ig-2" fill="#000" d="M29.7,11.4c0-0.3-0.3-0.6-0.6-0.6h-1.8c-0.3,0-0.6,0.3-0.6,0.6v1.8c0,0.3,0.3,0.6,0.6,0.6h1.8 c0.3,0,0.6-0.3,0.6-0.6V11.4z">
												</path>
											</g>
										</svg>
									</a>
									<!-- <object data="<?php echo get_template_directory_uri(); ?>/library/img/ig-icon.min.svg" type="image/svg+xml">
									 	<img src="<?php echo get_template_directory_uri(); ?>/library/img/ig-icon.png" />
									</object> -->
								</li>
							</ul>
							<hr class="top-space">
							<h4>
								email sign up
							</h4>
							<span class="cream">Sign up to receive emails for special events and exclusive discounts.</span>
							<div id="mc_embed_signup">
								<form action="//williejimpieco.us9.list-manage.com/subscribe/post?u=373340b3f3cf78458c4e4aa14&amp;id=e3467f3d8d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
									<div>
										<div class="form-float"><input type="email" name="EMAIL" id="mce-EMAIL" placeholder="E-MAIL"></div>
										<div class="form-float"><input type="submit" id="mc-embedded-subscribe" value=""></div>
										<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
										<div style="position: absolute; left: -5000px;"><input type="text" name="b_373340b3f3cf78458c4e4aa14_e3467f3d8d" tabindex="-1" value=""></div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>

					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?> All Rights Reserved</p>
					<!-- <div id="inner-footer" class="full-width horizontal-center">

						<nav role="navigation">
								<?php bones_footer_links(); ?>
						</nav>

						

					</div> -->
				<?php // end #inner-footer ?>

			</footer><?php // end .footer ?>

		</div><?php // oc-wrap ?>
		</div><?php // end #container ?>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

		</div>

	</body>

</html>

