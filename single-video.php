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
				<div class="row middle-xs">
				  <div class="col-xs-2">
						<p>Additional Resources</p>
				  </div>
				  <div class="col-xs-9 col-xs-offset-1">
					<h2 class="underline">Tuning YOur Cello</h2>
					  <p>The beginner cirriculum is designed for the student with no prior experience playing the cello. Very detailed lessons are presented to teach the student everything from how to unpack the cello as well as where  to find a good cello.  There are dozens of lessons to watch BEFORE the first sounds are ever made on the cello. All the material is presented in a very detailed and logical order so that the new student will be successful in their quest to become a cellist.</p>
				  </div>
				</div>
			</div>
		</section>

		<section class="releated-posts green-bg three-col">
			<div class="container">
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
