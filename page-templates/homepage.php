<?php
/**
 * Template Name: Homepage
 *
 * @package WordPress
 * @subpackage cello-discovery
 * @since cello-discovery 1.0
 */

get_header(); ?>
	<main class="home">
		<div class="hero pull">
			<!-- <div class="videobg">
				<div class="videobg-width">
					<div class="videobg-aspect">
						<div class="videobg-make-height">
							<div class="videobg-hide-controls">
								<iframe src="https://player.vimeo.com/video/200768478" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
			</div> -->
		</div>

		<section class="intro">
			<div class="container">
				<p>The Home for Cello Learners at Every Level.</p>
				<p>Teaching, nurturing and creating cellists at every stage of development through detailed online cello tutorials, a community of support along with feedback from the experts.</p>
			</div>
		</section>

		<section class="how-it-works yellow-bg three-col">
			<div class="container">
				<div class="row center-xs">
					<h2 class="underline">How it Works</h2>
				</div>
				<div class="row center-xs text-center">
					<div class="col-xs-12 col-sm-3">
						<div class="icon">
							<img src="<?php echo get_template_directory_uri(); ?>/images/Step1-01.svg">								
						</div>
						<p>Commit to learning the cello. Today is the very best day to begin.</p>
					</div>
					<div class="col-xs-12 col-sm-3">
						<div class="icon">
							<img src="<?php echo get_template_directory_uri(); ?>/images/Step2-01.svg">								
						</div>
						<p>Chose a membership level from one month to one year. There are no automatic renewals!</p>
					</div>
					<div class="col-xs-12 col-sm-3">
						<div class="icon">
							<img src="<?php echo get_template_directory_uri(); ?>/images/Step3-01.svg">								
						</div>
						<p>Begin your journey by exploring the vast collection of video tutorials. Learn at your home on your schedule.</p>
					</div>
					<div class="col-xs-12 col-sm-3">
						<div class="icon">
							<img src="<?php echo get_template_directory_uri(); ?>/images/Step4-01.svg">								
						</div>
						<p>Meet others who are discovering the cello in our community forum. Share your ideas and challenges with like minded individuals.</p>
					</div>
				</div>
			</div>
		</section>

		<section class="membership three-col">
			<div class="container">
				<div class="row center-xs">
					<h2 class="underline">Membership</h2>
				</div>
				<div class="row center-xs text-center">
					<div class="col-xs-12 col-sm-3">
						<h3>1 year for $120</h3>  
						<p>equivalent to $10/mo.</p> 
						<p>NO AUTOMATIC RENEWALS!</p>
					</div>
					<div class="col-xs-12 col-sm-3">
						<h3>6 months for $90</h3>  
						<p>equivalent to $15/mo.</p> 
						<p>NO AUTOMATIC RENEWALS!</p>
					</div>
					<div class="col-xs-12 col-sm-3">
						<h3>3 months for $75</h3>  
						<p>equivalent to $25/mo</p> 
						<p>NO AUTOMATIC RENEWALS!</p>
					</div>
					<div class="col-xs-12 col-sm-3">
						<h3>1 months for $40</h3>  
						<p>single month</p> 
						<p>NO AUTOMATIC RENEWALS!</p>
					</div>
				</div>
				
				<div class="row center-xs">
					<div class="col-xs-12 col-sm-6">
						<div class="button-wrap">
							<a href="/register" class="btn">Become a Member</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
<?php
get_footer();
