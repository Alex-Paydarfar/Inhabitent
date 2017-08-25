<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info site-container">
				<div class="contact">
						<h3>Contact Info</h3>
						<p><i class="fa fa-envelope"></i><a href="mailto:info@inhabitent.com">info@inhabitent.com</a></p>
						<p><i class="fa fa-phone"></i><a href="tel:5553434567891">778-456-7891</a></p>
						<p>
							<span><i class="fa fa-facebook-square"></i></span>
							<span><i class="fa fa-twitter-square"></i></span>
							<span><i class="fa fa-google-plus-square"></i></span>
						</p>
					</div>
				</div>

				<div class="footer-block-item">
					<div class="business-hours">
						<h3>Business Hours</h3>
						<p><span class="day-of-week">Monday-Friday:</span> 9am to 5pm</p>
						<p><span class="day-of-week">Saturday:</span> 10am to 2pm</p>
						<p><span class="day-of-week">Sunday:</span> Closed</p>
					</div>
					<div id="footer-sidebar" class="secondary">
						<div id="footer-sidebar1" class="footer-sidebar1">
							<?php
							if(is_active_sidebar('footer-sidebar-1')){
								dynamic_sidebar('footer-sidebar-1');
							}
							?>
							<p class="footer-social-media">
								<span><i class="fa fa-facebook-square" aria-hidden="true"></i></span>
								<span><i class="fa fa-twitter-square" aria-hidden="true"></i></span>
								<span><i class="fa fa-google-plus-square" aria-hidden="true"></i></span>
							</p>
						</div>
						<div id="footer-sidebar2" class="footer-sidebar2">
							<?php
							if(is_active_sidebar('footer-sidebar-2')){
								dynamic_sidebar('footer-sidebar-2');
							}
							?>
						</div>
					</div>
					<div class="footer-logo">
					<a href="<?php echo home_url() ?>" class="footer-inhabitent-logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/inhabitent-logo-text.svg" /> </a>
					</div>
				</div><!-- .site-info -->
				<div class="copyright-div">
				<p class="credit"> Copyright &copy; 2017 Inhabitent</p>
				</div>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
