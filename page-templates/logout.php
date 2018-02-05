<?php
/**
 * Template Name: Logout
 *
 * @package WordPress
 * @subpackage cello-discovery
 * @since cello-discovery 1.0
 */

get_header(); ?>
	<main class="register">
		<section>
			<div class="container">
				<div class="row center-xs">
					<div class="col-xs-12 col-sm-6">
						<?php echo do_shortcode('[pms-logout]'); ?>
					</div>
				</div>
			</div>
		</section>
	</main>
<?php
get_footer();
