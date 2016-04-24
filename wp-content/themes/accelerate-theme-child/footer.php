<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->


		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="footer-wrapper">
								
			<div id="social">
				<ul>
					<li><i class="fa fa-twitter"></i></li>
					<li><i class="fa fa-linkedin"></i></li>
					<li>&copy; 2016 <?php bloginfo('title'); ?></li>
					<li><p>email:<a href:"mailto:susanschrum@gmail.com">susanschrum@gmail.com<a><br></p></li>
				</ul>
			</div>	
		</div>

			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>