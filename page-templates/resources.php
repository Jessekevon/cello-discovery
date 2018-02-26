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
                <div class="resource-slider">
                    <?php
						if( have_rows('resources_instant_downloads') ):
                            while ( have_rows('resources_instant_downloads') ) : the_row(); ?>
                            <div class="resource-box">
                                    <div class="download-box">
                                        <div class="icon">
                                            <img src="<?php the_sub_field('resource_icon'); ?>">
                                        </div>
                                        <div class="resource-btn">
                                            <?php the_sub_field('resource_url'); ?>
                                        </div>
                                    </div>
                                <!-- <div class="dl-title"><p><//?php the_sub_field('resource_title'); ?></p></div> -->
                        </div>
					  <?php endwhile;
                        endif; ?>
                </div>

                <div class="row">
                    <p class="large">Sheet Music</p>
                </div>
                <div class="resource-slider2">
                    <?php
						if( have_rows('resources_sheet_music') ):
                            while ( have_rows('resources_sheet_music') ) : the_row(); ?>
                            <div class="resource-box">
                                    <div class="download-box">
                                        <div class="icon">
                                            <img src="<?php the_sub_field('resource_icon'); ?>">
                                        </div>
                                        <div class="resource-btn">
                                            <?php the_sub_field('resource_url'); ?>
                                        </div>
                                    </div>
                                <!-- <div class="dl-title"><p><//?php the_sub_field('resource_title'); ?></p></div> -->
                        </div>
					  <?php endwhile;
                        endif; ?>
                </div>

				<div class="row">
                    <p class="large">Music Library</p>
                </div>
                <div class="resource-slider3">
                    <?php
						if( have_rows('resources_music_library') ):
                            while ( have_rows('resources_music_library') ) : the_row(); ?>
                            <div class="resource-box">
                                    <div class="download-box">
                                        <div class="icon">
                                            <img src="<?php the_sub_field('resource_icon'); ?>">
                                        </div>
                                        <div class="resource-btn">
                                            <?php the_sub_field('resource_url'); ?>
                                        </div>
                                    </div>
                                <!-- <div class="dl-title"><p><//?php the_sub_field('resource_title'); ?></p></div> -->
                        </div>
					  <?php endwhile;
                        endif; ?>
                </div>



                <!-- <div class="resource-slider">
                    <//?php echo do_shortcode('[downloads]');?>
                </div> -->
			</div>
		</section>		
	</main>
<?php
get_footer();
