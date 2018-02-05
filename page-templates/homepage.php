<?php
/**
 * Template Name: Home
 *
 * @package WordPress
 * @subpackage cello-discovery
 * @since cello-discovery 1.0
 */

get_header(); ?>
	<main class="home">
		<div class="hero pull">
			<div class="videobg">
				<div class="videobg-width">
					<div class="videobg-aspect">
						<div class="videobg-make-height">
							<div class="videobg-hide-controls">
								<iframe src="https://player.vimeo.com/video/<?php echo the_field('homepage_video'); ?>" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<section class="intro">
			<div class="container">
				<p><?php the_field('intro_text'); ?></p>
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
						<p><?php the_field('step_1');?></p>
					</div>
					<div class="col-xs-12 col-sm-3">
						<div class="icon">
							<img src="<?php echo get_template_directory_uri(); ?>/images/Step2-01.svg">								
						</div>
						<p><?php the_field('step_2');?></p>
					</div>
					<div class="col-xs-12 col-sm-3">
						<div class="icon">
							<img src="<?php echo get_template_directory_uri(); ?>/images/Step3-01.svg">								
						</div>
						<p><?php the_field('step_3');?></p>
					</div>
					<div class="col-xs-12 col-sm-3">
						<div class="icon">
							<img src="<?php echo get_template_directory_uri(); ?>/images/Step4-01.svg">								
						</div>
						<p><?php the_field('step_4');?></p>
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
						<h3><?php the_field('plan_1_heading', 'option');?></h3>  
						<p><?php the_field('plan_1_text', 'option');?></p> 
					</div>
					<div class="col-xs-12 col-sm-3">
						<h3><?php the_field('plan_2_heading', 'option');?></h3>  
						<p><?php the_field('plan_2_text', 'option');?></p> 
					</div>
					<div class="col-xs-12 col-sm-3">
						<h3><?php the_field('plan_3_heading', 'option');?></h3>  
						<p><?php the_field('plan_3_text', 'option');?></p> 
					</div>
					<div class="col-xs-12 col-sm-3">
						<h3><?php the_field('plan_4_heading', 'option');?></h3>  
						<p><?php the_field('plan_4_text', 'option');?></p> 
					</div>
				</div>
				
				<div class="row center-xs">
					<div class="col-xs-12 col-sm-6">
						<div class="button-wrap">
							<a class="btn member-btn">Become a Member</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
<?php
get_footer();
