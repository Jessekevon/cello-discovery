<?php
/**
 * Template Name: Resources
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
                        <h2 class="underline">Resources</h2>
                    </div>
                </div>
            </div>
        </section>

		<section class="resources yellow-bg three-col">
			<div class="container">
                <div class="row center-xs text-center">
                    <h2 class="underline">Purchasing Policies</h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                </div>
			</div>
		</section>

		<section class="resource-list with-icons three-col">
			<div class="container">
				<div class="row center-xs">
					<h2 class="underline">Instant Downloads</h2>
				</div>
				<div class="row center-xs text-center">
                    <?php foreach ($cfs->get('resources') AS $resource): ?> <!-- open external loop -->
                        <div class="col-xs-12 col-sm-3">
                                <div class="download-box">
                                    <div class="icon">
                                        <img src="<?php echo $resource['resource_icon']?>">
                                    </div>
                                    <div class="resource-btn">
                                        <?php echo $resource['resource_url']?>
                                    </div>
                                </div>
                                <div class="dl-title"><p><?php echo $resource['resource_title']?></p></div>
                        </div>
                    <?php endforeach ?>
			</div>
		</section>		
	</main>
<?php
get_footer();
