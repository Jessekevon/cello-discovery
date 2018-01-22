<?php
/**
 * Template Name: Account
 *
 * @package WordPress
 * @subpackage cello-discovery
 * @since cello-discovery 1.0
 */

get_header(); ?>
	<main class="register">
		<section>
			<div class="container">
                <?php echo do_shortcode('[pms-account]'); ?>
			</div>
		</section>
				
	</main>
<?php
get_footer();
