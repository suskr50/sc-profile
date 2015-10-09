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


		<footer id="colophon" class=" new-footer" role="contentinfo" >
			
			
				<div class="footer-list">
				
				<ul>
					<li>
					
						<p>&copy; 2015 <?php bloginfo('title'); ?> </p>
						
					
</li>
<li>
					
						<p> email: <a href="mailto:susanschrum@gmail.com"> susanschrum@gmail.com </a> <br>
						tel: 352-812-7321 </p>
					
</li>
<li>
					<div id="social-list">
						<ul>
							<li><img src="<?php echo home_url()."/wp-content/uploads/2015/08/linkedin-icon.png"?>"></li>
							<li><img src="<?php echo home_url()."/wp-content/uploads/2015/08/twitter-icon.png"?>"></li>
						</ul>
					</div>	
				</li>
			</ul>
		
</div>
			
		</footer><!-- #colophon -->
	
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>