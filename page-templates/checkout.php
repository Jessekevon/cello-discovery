<?php
/**
 * Template Name: Checkout
 *
 * @package WordPress
 * @subpackage cello-discovery
 * @since cello-discovery 1.0
 */

get_header(); ?>
	<main class="resources">
        <section class="intro">
            <div class="container">
                <div class="row center-xs">
                    <div class="col-xs-12 text-center">
                        <h2 class="underline">Checkout</h2>
                    </div>
                </div>
            </div>
        </section>

        <section class="checkout">
            <div class="container">
                <div class="col-xs-12 text-center">
                    <?php echo do_shortcode('[download_checkout]');?>
                </div>
            </div>
        </section>

	</main>
<?php
get_footer();
