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
						<!-- <div class="videoContainer">
							<iframe src="https://player.vimeo.com/video/200768478" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
						</div> -->

						<div class="video-lg">
							<div class="videobg">
									<iframe src="https://player.vimeo.com/video/<?php echo the_field('video_url'); ?>" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<section class="class-levels three-col resources-wrapper">
			<div class="container">
				<div class="row additional-resources">
				  <div class="col-xs-12 col-sm-2">
						<h3 class="underline">Additional Resources</h3>
						<ul>
							<?php
							if( have_rows('additional_resources') ):
								while ( have_rows('additional_resources') ) : the_row(); ?>
									<li><?php the_sub_field('url'); ?></li>
							  <?php	endwhile;
							endif; ?>
						</ul>
				  </div>
				  <div class="col-xs-12 col-sm-9 col-sm-offset-1">
					<?php if( get_field('partner_name') ): ?>
					<h2 class="underline"><?php the_field('video_description_title'); ?></h2>
					<?php else: ?>
					<h2 class="underline"><?php the_title(); ?></h2>
					<?php endif; ?>
					  <p><?php the_field('video_description_text'); ?></p>
				  </div>
				</div>
			</div>

			<div class="drawer-arrow">
				<img src="<?php echo get_template_directory_uri(); ?>/images/dropdpwn.svg">								
			</div>
		</section>

		<section class="related-posts green-bg three-col">
			<div class="container">
				<div class="row center-xs">
					<h2 class="underline">Other Videos in This Category</h2>
				</div>
					
					<div class="slider">
						<?php	// get the custom post type's taxonomy terms
							
							$custom_taxterms = wp_get_object_terms( $post->ID, 'intermediate-videos', array('fields' => 'ids') );
							// arguments
							$args = array(
							'post_type' => 'intermediate-video',
							'post_status' => 'publish',
							'orderby' => 'rand',
							'tax_query' => array(
								array(
									'taxonomy' => 'intermediate-videos',
									'field' => 'id',
									'terms' => $custom_taxterms
								)
							),
							'post__not_in' => array ($post->ID),
							);
							$related_items = new WP_Query( $args );
							// loop over query
							if ($related_items->have_posts()) : 
							while ( $related_items->have_posts() ) : $related_items->the_post(); ?>
								<div>
									<a href="<?php the_permalink(); ?>">
										<div class="video-wrapper" style="background-image: url('<?php echo get_field('video_thumbnail');?>')">
											
										</div>
									</a>
									<?php the_title(); ?>
								</div>
							<?php 
								endwhile;
								endif;
								wp_reset_postdata(); 
							?>
				</div>
			</div>
 			 
		</section>

	</main>


<?php get_footer();
