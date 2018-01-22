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
							<li>M: P.O. Box 5634 Austin, TX</li>
							<li>T: (555) 555 - 5555</li>
							<li>E: Questions@cellodiscovery.com</li>
						</ul>

					</div>
					<div class="col-xs-12 col-sm-6 footer-section">
						<p class="yellow">FAQ</p>
						<ul class="row faq-list">
							<div class="col-xs-12 col-sm-6 inner">
								<li><a href="#">How do I become a member?</a></li>
								<li><a href="#">How do I become a member?</a></li>
								<li><a href="#">How do I become a member?</a></li>
							</div>

							<div class="col-xs-12 col-sm-6">
								<li><a href="#">How do I become a member?</a></li>
								<li><a href="#">How do I become a member?</a></li>
							</div>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-3 footer-section">
						<div class="buttons">
							<a href="/resources" class="btn">Resources</a>
							<a href="community-forum" class="btn">Community Forum</a>
						</div>
					</div>
				</div>
			</div>

			<div class="footer-small">
				<div class="row between-xs">
					<div class="col-xs-12 col-sm-6">
						<p>copyright</p>
					</div>
					<div class="col-xs-12 col-sm-6">
						<p>social</p>
					</div>
				</div>
			</div>
		</footer>
	<!-- #colophon -->
	</div><!-- #page -->

	<div class="modal form-modal">
		<span class="close-modal close"></span>
			<div class="container">
				<?php echo do_shortcode('[pms-login]'); ?>
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