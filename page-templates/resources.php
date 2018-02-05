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
				<div class="row">
                    <?php
						if( have_rows('resources') ):
                            while ( have_rows('resources') ) : the_row(); ?>
                            <div class="col-xs-12 col-sm-3 resource-box">
                                    <div class="download-box">
                                        <div class="icon">
                                            <img src="<?php the_sub_field('resource_icon'); ?>">
                                        </div>
                                        <div class="resource-btn">
                                            <?php the_sub_field('resource_url'); ?>
                                        </div>
                                    </div>
                                <div class="dl-title"><p><?php the_sub_field('resource_title'); ?></p></div>
                            </div>
					  <?php endwhile;
                        endif; ?>
                </div>
			</div>
		</section>		
	</main>
<?php
get_footer();
