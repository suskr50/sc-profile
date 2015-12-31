<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header(); ?>

<!-- BLOG PAGE -->
<div class="new-pagep">
	<div class="container">
		<div class="contact-wrapper">
			<?php
				// Start the Loop.
			while ( have_posts() ) : the_post(); 

			$story = get_field('story-link');
			$source = get_field('source');
			
			?>


			<div class="contact-study-left font-test vap">			
					<h2><?php the_title(); ?></h2>
					<h3 Source: <span><?php $source; ?></span></h3>

					<h5><?php echo $link; ?></h5>
					
					
					<?php }?>
				</div>
			</aside>

			
		</article>

		</div>
	</div>
</section>



	<!-- END blog page -->

	<footer class="navigation main-cs-content ">
		 
		<div class="left">&larr;<a href="<?php echo home_url()?>/#theportfolio">back to work</a></div>
	</footer>
	
				<?php endwhile; ?>

<?php
get_footer();

    