<?php
/**
 * Template Name: Beginning Classes
 *
 * @package WordPress
 * @subpackage cello-discovery
 * @since cello-discovery 1.0
 */

get_header(); ?>
	<main class="video-classes">        
        <div class="container">
            <div class="row">
                <div class="col-xs-3">
                    <div class="side-bar">
                        <div class="filter-results">
                            <div class="search-box">
                                <form action="" method="get">
                                    <!-- <label class="offscreen" for="term">Enter Search term</label> -->
                                    <input class="search" type="text" name="term" id="term" placeholder="Search Videos">
                                    <!-- <button type="sumbit" class="submit">Search</button> -->
                                </form>
                            </div>
                            

                            <div class="filter-drawer">
                                <div class="filter-inner">
                                    <!-- <ul class="advanced-filter-menu check-select" data-type="checkbox" data-parameter="taxonomy-terms"> 
                                        <div>
                                            <li>
                                                <div class="checkbox-wrap">
                                                    <input id="advanced" value="advanced" type="checkbox">
                                                    <label for="advanced">Advanced</label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="checkbox-wrap">
                                                    <input id="intermediate" value="intermediate" type="checkbox">
                                                    <label for="intermediate">Intermediate</label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="checkbox-wrap">
                                                    <input id="beginner" value="beginner" type="checkbox">
                                                    <label for="beginner">Beginner</label>
                                                </div>
                                            </li>
                                        </div> 
                                    </ul> -->

                                    <ul class="advanced-filter-menu check-select" data-type="checkbox" data-parameter="taxonomy-terms"> 
                                        <div>
                                            <li>
                                                <div class="checkbox-wrap">
                                                    <input id="cello-introduction" value="cello-introduction" type="checkbox">
                                                    <label for="cello-introduction">Intro To Cello</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox-wrap">
                                                    <input id="cello-basics" value="cello-basics" type="checkbox">
                                                    <label for="cello-basics">Cello Basics</label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="checkbox-wrap">
                                                    <input id="cello-set-up" value="cello-set-up" type="checkbox">
                                                    <label for="cello-set-up">Cello Set Up</label>
                                                </div>
                                            </li>
                                        </div> 
                                    </ul>

                                        
                                    <!-- If we decide we want a button for filtering -->
                                    <!-- <button type="button" class="submit" id="apply-filters">Apply Filters</button> -->

                                </div>
                            </div>
                    </div>

                    </div>
                </div>

                <div class="col-xs-9">
                    <section class="intro">
                        <div class="container">
                            <div class="row center-xs">
                                <div class="col-xs-12 text-center">
                                    <h2 class="underline">Video Classes: Beginning</h2>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="video-list">
                        <div class="row">
                            <?php echo do_shortcode('[ajax_load_more id="videos" container_type="div" post_type="beginning-video" posts_per_page="30" taxonomy="beginning-videos" search="'. $term .'" taxonomy_terms="" taxonomy_operator="IN" scroll="false" transition="fade"]'); ?>
                        </div>
                    </section>
                </div>
            </div>
        </div>


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
