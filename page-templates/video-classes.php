<?php
/**
 * Template Name: Video Classes
 *
 * @package WordPress
 * @subpackage cello-discovery
 * @since cello-discovery 1.0
 */

get_header(); ?>

<?php do_shortcode('[pms-restrict subscription_plans="20,21,22,23"]');?>
	<main class="video-classes">        
		<section class="class-levels with-icons green-bg three-col">
			<div class="container">
				<div class="row center-xs">
					<h2 class="underline"><?php echo the_field('page_title'); ?></h2>
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

        <section class="how-it-works glossary three-col">
			<div class="container">
				<div class="row center-xs">
					<h2 class="underline">Video Glossary</h2>
				</div>
				
                <div class="row center-xs text-center">
                    <div class="col-xs-12 col-sm-3">
						<h3><a href="/video-classes/beginning">Beginner</a></h3>
						<?php
							$args = array(
							'post_type' => 'beginning-video',
							'posts_per_page' => -1,
							'orderby' => 'title',
							'order' => 'asc',
							'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
							);

							query_posts($args);
						while(have_posts()): the_post(); ?>
							<p><a href="<?php the_permalink();?>"><?php the_title(); ?></a></p>

						<?php endwhile; ?>
                    </div>
                    <div class="col-xs-12 col-sm-3">
						<h3><a href="/video-classes/intermediate">Intermediate</a></h3>
						<?php
							$args = array(
							'post_type' => 'intermediate-video',
							'posts_per_page' => -1,
							'orderby' => 'title',
							'order' => 'asc',
							'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
							);

							query_posts($args);
						while(have_posts()): the_post(); ?>
							<p><a href="<?php the_permalink();?>"><?php the_title(); ?></a></p>

						<?php endwhile; ?>
                    </div>
                    <div class="col-xs-12 col-sm-3">
						<h3><a href="/video-classes/advanced">Advanced</a></h3>
						<?php
							$args = array(
							'post_type' => 'advanced-video',
							'posts_per_page' => -1,
							'orderby' => 'title',
							'order' => 'asc',
							'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
							);

							query_posts($args);
						while(have_posts()): the_post(); ?>
							<p><a href="<?php the_permalink();?>"><?php the_title(); ?></a></p>

						<?php endwhile; ?>

                    </div>
                </div>
			</div>
		</section>

	</main>
<?php do_shortcode('[/pms-restrict]');?>

<?php
get_footer();
