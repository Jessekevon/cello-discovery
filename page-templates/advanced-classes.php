<?php
/**
 * Template Name: Advanced Classes
 *
 * @package WordPress
 * @subpackage cello-discovery
 * @since cello-discovery 1.0
 */

get_header(); ?>
	<main class="video-classes">        
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-3">
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
                                    <ul class="advanced-filter-menu check-select" data-type="checkbox" data-parameter="taxonomy-terms"> 
                                    
                                        <div>
                                        <?php
                                            $taxonomy_t = 'advanced-videos';
                                            $terms_t = get_terms($taxonomy_t); // Get all terms of a taxonomy

                                            if ( $terms_t && !is_wp_error( $terms_t ) ) :
                                                ?>
                                                    <?php foreach ( $terms_t as $term_t ) { ?>
                                                        <li>
                                                            <div class="checkbox-wrap">
                                                                <input id="<?php echo $term_t->slug; ?>" value="<?php echo $term_t->slug; ?>" type="checkbox">
                                                                <label for="<?php echo $term_t->slug; ?>"><?php echo $term_t->name; ?></label>
                                                            </div>
                                                        </li>
                                                    <?php } ?>
                                            <?php endif; ?>
                                        </div> 
                                    </ul>

                                        
                                    <!-- If we decide we want a button for filtering -->
                                    <!-- <button type="button" class="submit" id="apply-filters">Apply Filters</button> -->

                                </div>
                            </div>
                    </div>

                    </div>
                </div>

                <div class="col-xs-12 col-sm-9">
                    <section class="no-padding">
                        <div class="container">
                            <div class="row center-xs">
                                <div class="col-xs-12">
                                    <h2 class="underline">Video Classes: Advanced</h2>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="video-list">
                        <div class="row">
                            <?php $imageid = get_post_meta(get_the_ID(), 'video_thumbnail', true); ?>
                            <?php echo do_shortcode('[ajax_load_more id="videos" container_type="div" post_type="advanced-video" posts_per_page="30" taxonomy="advanced-videos" search="'. $term .'" taxonomy_terms="" taxonomy_operator="IN" scroll="false" order="ASC" orderby="title" transition="fade"]'); ?>
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
