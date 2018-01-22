<?php
/**
 * Template Name: Forum
 *
 * @package WordPress
 * @subpackage cello-discovery
 * @since cello-discovery 1.0
 */

get_header(); ?>
	<main class="home">
        <section>
            <div class="container">
                <?php echo do_shortcode('[bbp-forum-index]');?>
            </div>
        </section>

		<!-- <section class="intro">
			<div class="container">
                <//?php
                $args = array(
                    'post_type' => 'video',
                    'orderby' => 'date',
                    'order' => 'asc',
                    'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
                    );
                query_posts($args);
                while(have_posts()): the_post(); ?>

                <a href="<//?php echo the_permalink();?>"><//?php the_title(); ?></a>

            <//?php endwhile;?>

			</div>
		</section> -->
				
	</main>
<?php
get_footer();
