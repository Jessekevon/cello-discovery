<?php
 
/*
*
* The template for displaying all bbPress pages
*
* This is the template that displays all bbPress pages by default.
* Please note that this is the template of all bbPress pages
* and that other 'pages' on your WordPress site will use a
* different template.
*
* @package WordPress
* @subpackage Theme
*/
 
 
/*
Self explanatory its a functions that gets your header template.
*/
 
get_header(); ?>
 
 
 <section class="forum">
    <div class="container">
        <div class="row center-xs">
            <div class="col-xs-12 col-sm-10">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <!-- <header class="entry-header">
                            <h1 class="entry-title"><//?php the_title(); ?></h1>
                        </header> -->
                        
                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>    
                    </article>
                <?php endwhile; // end of the loop. ?>
            </div>
        </div>
    </div>
 </section>
 
<?php get_footer(); ?>