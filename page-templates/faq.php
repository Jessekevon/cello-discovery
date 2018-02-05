<?php
/**
 * Template Name: FAQ
 *
 * @package WordPress
 * @subpackage cello-discovery
 * @since cello-discovery 1.0
 */

get_header(); ?>
	<main class="resources-section">
        <section class="intro no-padding-top">
            <div class="container">
                <div class="row center-xs">
                    <div class="col-xs-12">
                        <h1 class="text-center">Frequently Asked Questions</h1>
                    </div>
                </div>
            </div>
        </section>

		<section class="faq-section">
            <div class="container">
                <div class="row center-xs">
                    <div class="col-xs-12 col-sm-8">
                        <?php if( have_rows('faq', 'option') ): ?>
                            <ul class="faq-list accordion">
                                <?php while( have_rows('faq', 'option') ): the_row(); ?>
                                    <li>
                                        <a><?php the_sub_field('question'); ?></a>
                                        <p><?php the_sub_field('answer'); ?></p>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
		</section>		
	</main>
<?php
get_footer();
