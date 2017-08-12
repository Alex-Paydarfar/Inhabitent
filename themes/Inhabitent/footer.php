<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->


			<footer id="colophon" class="site-footer" role="contentinfo">
			<h3>contact information</h3>
			<p><a href="info@inhabitent.com">info@inhabitent.com</a></p>
			<p>778-456-7891</p>
				<div class="site-info">
					<h3>Business Hours</h3>
					<p>Monday-Friday: 9am to 5pm</p>
					<p>Saturday: 10am to 2pm</p>
					<p>Sunday: Closed</p>
					<div class="copyright">
						<p>copyright &copy; 2017 Inhabitent</p>
					</div>
					<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>
		
	</body>
</html>
