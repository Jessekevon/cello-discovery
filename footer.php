<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage cello-discovery
 * @since cello-discovery 1.0
 */
?>

		</div><!-- #main -->
		
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="pre-footer">
				<div class="row">
					<div class="col-xs-12 col-sm-3 footer-section">
						<p class="yellow">Contact Information</p>
						<ul class="contact-info">
							<li>M: <?php the_field('mailing_address', 'options');?></li>
							<li>T: <?php the_field('telephone_number', 'options');?></li>
							<li>E: <?php the_field('email', 'options');?></li>
						</ul>

					</div>
					<div class="col-xs-12 col-sm-6 footer-section">
						<p class="yellow"><a href="/faq">FAQ</a></p>
						<?php if( have_rows('faq', 'option') ): ?>
							<ul class="faq-list">
								<?php while( have_rows('faq', 'option') ): the_row(); ?>
									<li><a href="/faq"><?php the_sub_field('question'); ?></a></li>
								<?php endwhile; ?>
							</ul>
						<?php endif; ?>
					</div>
					<div class="col-xs-12 col-sm-3 footer-section">
						<div class="buttons">
							<a href="/resources" class="btn">Resources</a>
							<a href="/forums" class="btn">Community Forum</a>
						</div>
					</div>
				</div>
			</div>

			<div class="footer-small">
				<div class="copyright">
					<p>© Cello Discovery</p>
				</div>
				<div class="social">
					<?php
						if( have_rows('social_media', 'options') ):
							while ( have_rows('social_media', 'options') ) : the_row(); ?>
								<a target="_blank"href="<?php the_sub_field('social_media_url', 'options'); ?>"><img src="<?php the_sub_field('social_media_icon', 'options'); ?>"></a>

					  <?php endwhile;
						endif; 
					  ?>
				</div>
			</div>
		</footer>
	<!-- #colophon -->
	</div><!-- #page -->

	<div class="modal form-modal">
		<span class="close-modal close"></span>
			<div class="container">
				<h1>Login</h1>
				<?php echo do_shortcode('[pms-login]'); ?>
			</div>
	</div>

	<div class="modal member-form-modal">
		<span class="close-modal close"></span>
			<div class="container">
				<h1>Register</h1>
				<?php echo do_shortcode('[pms-register]'); ?>
			</div>
	</div>


	<?php wp_footer(); ?>
</body>

	<script>
		// $('.play').click(function() {
		// 	video = '<iframe frameborder="0" src="' + $('img').attr('data-video') + '"></iframe>';
		// 	$('.video').replaceWith(video);
		// });

		// $('.trigger-registration-modal').on('click', function(){
		// 	$('#registration-modal').addClass('active');
		// });

		// $('.close-modal').on('click', function(){
		// 	$('.modal').removeClass('active');
		// });
	</script>

</html>