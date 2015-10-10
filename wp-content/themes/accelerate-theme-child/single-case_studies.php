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

			$services = get_field('services');
			$client = get_field('client');
			$link = get_field('link');
			$image1 = get_field('image1');
			$image2 = get_field('image2');
			$image3 = get_field('image3');
			$size = "medium";

			?>



			<aside class="contact-study-right ">
				<ul class="case-study-list">
					<li><?php echo wp_get_attachment_image($image1,$size); ?></li>
					<li><?php echo wp_get_attachment_image($image2,$size); ?></li>
					<li><?php echo wp_get_attachment_image($image3,$size); ?></li>
				</ul>
			</aside>


			<div class="contact-study-left font-test vap">			
					<h2><?php the_title(); ?></h2>
					<h5><?php echo $services; ?></h5>
					<h6>Client: <?php echo $client; ?></h6>
					<?php the_content(); ?>
					<?php if ($link) {?>
					<a  href="<?php echo $link ?>"><strong>Visit Live Site</strong></a>
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

    