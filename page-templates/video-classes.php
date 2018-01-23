<?php
/**
 * Template Name: Video Classes
 *
 * @package WordPress
 * @subpackage cello-discovery
 * @since cello-discovery 1.0
 */

get_header(); ?>
	<main class="video-classes">        
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

		<section class="class-levels with-icons green-bg three-col">
			<div class="container">
				<div class="row center-xs">
					<h2 class="underline">Class Levels</h2>
				</div>
				<div class="row middle-xs">
				  <div class="col-xs-2">
						<div class="icon">
							<img src="<?php echo get_template_directory_uri(); ?>/images/beginner-01.svg">								
						</div>
				  </div>
				  <div class="col-xs-10">
					  <p class="lg"><a href="/video-classes/beginning">BEGINNER</a></p>
					  <p>The beginner cirriculum is designed for the student with no prior experience playing the cello. Very detailed lessons are presented to teach the student everything from how to unpack the cello as well as where  to find a good cello.  There are dozens of lessons to watch BEFORE the first sounds are ever made on the cello. All the material is presented in a very detailed and logical order so that the new student will be successful in their quest to become a cellist.</p>
				  </div>
				</div>
				<div class="row middle-xs">
				  <div class="col-xs-2">
						<div class="icon">
							<img src="<?php echo get_template_directory_uri(); ?>/images/intermediate-01.svg">								
						</div>
				  </div>
				  <div class="col-xs-10">
					  <p class="lg"><a href="/video-classes/intermediate">INTERMEDIATE</a></p>
					  <p>The intermediate student may have played the cello in middle school or perhaps even high school, yet never fully learned the instrument to the extent they had hoped to. Cello Discovery intermediate level videos gives the learner a good place to jump back in. With this class level, the student can follow a sequential curriculum or search particular key words in order to fill-in the knowledge deficiencies.</p>
				  </div>
				</div>
				<div class="row middle-xs">
				  <div class="col-xs-2">
						<div class="icon">
							<img src="<?php echo get_template_directory_uri(); ?>/images/Advanced-01.svg">								
						</div>
				  </div>
				  <div class="col-xs-10">
					  <p class="lg"><a href="/video-classes/advanced">ADVANCED</a></p>
					  <p>The advanced cello student is a well established cellist will a solid proficiency of both right and left hand techniques. However, this student might want to perfect the vibrato or learn how to play more fluidly in the upper positions. Cello Discovery has an ever expanding library to help the advanced learner reach their goals.</p>
				  </div>
				</div>
			</div>
        </section>

	</main>
<?php
get_footer();
