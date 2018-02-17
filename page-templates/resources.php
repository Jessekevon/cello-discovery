<?php
/**
 * Template Name: Resources
 *
 * @package WordPress
 * @subpackage cello-discovery
 * @since cello-discovery 1.0
 */

get_header(); ?>
	<main class="resources-section">
        <section class="intro no-padding-top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="underline">Resources</h1>
                    </div>
                </div>
            </div>
        </section>

		<section class="resources three-col">
			<div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <p class="large">Purchasing Policies</p>
                        <p><?php the_field('resource_intro_text');?></p>
                    </div>
                </div>
			</div>
		</section>

		<section class="resource-list with-icons three-col">
			<div class="container">
				<div class="row">
                    <p class="large">Instant Downloads</p>
				</div>
                <?php echo do_shortcode('[downloads]');?>
			</div>
		</section>		
	</main>
<?php
get_footer();
