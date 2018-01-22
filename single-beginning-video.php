<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>


	<main class="single-view">
		<div class="hero">
			<div class="container">
				<!-- If we want two col layout -->
				<!-- <div class="row middle-xs">
					<div class="col-xs-12 col-sm-6">
						<div class="video-sm">

						</div>
					</div>

					<div class="col-xs-12 col-sm-6">
						<div class="video-info">
							<p class="heading">Video Heading</p>
							<p class="bio">Begin your journey by exploring the vast collection of video tutorials. Learn at your home on your schedule.</p>
						</div>
					</div>
				</div> -->
				<!-- Otherwise tradtional full width design -->
				<div class="row">
					<div class="col-xs-12">
						<div class="video-lg">
							<div class="videobg">
								<div class="videobg-width">
									<div class="videobg-aspect">
										<div class="videobg-make-height">
											<div class="videobg-hide-controls">
												<iframe src="https://player.vimeo.com/video/200768478" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

		<section class="class-levels three-col">
			<div class="container">
				<div class="row additional-resources">
				  <div class="col-xs-2">
						<h3 class="underline">Additional Resources</h3>
						<ul>
							<?php foreach ($cfs->get('additional_resources') AS $additional_resources): ?> <!-- open external loop -->
								<li><?php echo $additional_resources['resource_url']?></li>
							<?php endforeach ?>
						</ul>
				  </div>
				  <div class="col-xs-9 col-xs-offset-1">
					<h2 class="underline">Tuning Your Cello</h2>
					  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				  </div>
				</div>
			</div>
		</section>

		<section class="releated-posts green-bg three-col">
			<div class="container">
				<!-- <//?php echo do_shortcode('[custom-related-posts title="Related Posts" order_by="title" order="ASC" none_text="None found"]');?> -->

				<div class="row center-xs">
					<h2 class="underline">Other Videos in This Category</h2>
				</div>
				<div class="row center-xs">
					<div class="col-xs-12 col-sm-3">
						<div class="related-video">
						
						</div>
					</div>
					<div class="col-xs-12 col-sm-3">
						<div class="related-video">
						
						</div>
					</div>
					<div class="col-xs-12 col-sm-3">
						<div class="related-video">
						
						</div>
					</div>
				</div>
			</div>
		</section>

	</main>


<?php get_footer();
