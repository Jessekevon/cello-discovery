<?php
/**
 * Template Name: About
 *
 * @package WordPress
 * @subpackage cello-discovery
 * @since cello-discovery 1.0
 */

get_header(); ?>
	<main class="about">
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
									<iframe src="https://player.vimeo.com/video/<?php echo the_field('intro_video_url'); ?>" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<section class="class-levels with-icons green-bg three-col">
			<div class="container">
				<div class="row center-xs">
					<h2 class="underline">Class Levels</h2>
				</div>
				<div class="row middle-xs">
				  <div class="col-xs-12 col-sm-2">
						<div class="icon">
							<img src="<?php echo get_template_directory_uri(); ?>/images/beginner-01.svg">								
						</div>
				  </div>
				  <div class="col-xs-12 col-sm-10">
					  <p class="lg"><?php the_field('beginner_level_title', 'option'); ?></p>
					  <p><?php the_field('beginner_level_description', 'option'); ?></p>
				  </div>
				</div>
				<div class="row middle-xs">
				  <div class="col-xs-12 col-sm-2">
						<div class="icon">
							<img src="<?php echo get_template_directory_uri(); ?>/images/intermediate-01.svg">								
						</div>
				  </div>
				  <div class="col-xs-12 col-sm-10">
					  <p class="lg"><?php the_field('intermediate_level_title', 'option'); ?></p>
					  <p><?php the_field('intermediate_level_description', 'option'); ?></p>
				  </div>
				</div>
				<div class="row middle-xs">
				  <div class="col-xs-12 col-sm-2">
						<div class="icon">
							<img src="<?php echo get_template_directory_uri(); ?>/images/Advanced-01.svg">								
						</div>
				  </div>
				  <div class="col-xs-12 col-sm-10">
					  <p class="lg"><?php the_field('advanced_level_title', 'option'); ?></p>
					  <p><?php the_field('advanced_level_description', 'option'); ?></p>
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

		<section class="testimonials yellow-bg three-col">
			<div class="container">
				<div class="row center-xs">
					<h2 class="underline">Testimonials</h2>
				</div>
				<div class="row">
					<?php
						if( have_rows('testimonials') ):
							while ( have_rows('testimonials') ) : the_row(); ?>
								<div class="col-xs-8 col-xs-offset-2">
									<div class="testimonial">
										<p><?php the_sub_field('quote'); ?></p>
										<br>
										<p class="source"><?php the_sub_field('source'); ?></p>
									</div>
								</div>
					  <?php endwhile;
						endif; 
					  ?>
				</div>
			</div>
		</section>
	</main>
<?php
get_footer();
