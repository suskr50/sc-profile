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
	<section class="blog-page">
		<div class="container wrap">

			<div class="main-content2">

				HERE I AM
<?php
				// Start the Loop.
				while ( have_posts() ) : the_post(); 
				$client = get_field("client");
				$services = get_field("services");
				$link = get_field("link");
				$image1 = get_field("image1");
				$image2 = get_field("image2");
				$image3 = get_field("image3");
				$size = "full";
				 ?>

				<article class="post-entry individual-post">
					<div class="entry-wrap">
						<aside class="leftsize">
							<?php the_title(); ?>
							<h3> <?php echo $services; ?> </h3>
							<p> Client: <?php echo $client; ?> <p>
								<?php the_content(); ?>
						</aside>
						
						<section class="case-studies-images">
							<div class="cs-pictures">
								<?php if ($image1) {
									echo wp_get_attachment_image($image1, $size);
								}?>
							</div>
							<div class="cs-pictures">
								<?php if ($image2) {
									echo wp_get_attachment_image($image2, $size);
								}?>
							</div>
							<div class="cs-pictures">
								<?php if ($image3) {
									echo wp_get_attachment_image($image3, $size);
								}?>
							</div>
							
						

						
						<footer class="entry-footer">
							<div class="entry-meta">
								<span class="entry-terms author">Written by <a href="">Emily Davis</a></span>
								<span class="entry-terms category">Posted in <a href="">My Notes</a></span>
								<span class="entry-terms commets">No Comments</span>
							</div>
						</footer>
					</div>
				</article>

				

			</div>


		</div>
	</section>
	<!-- END blog page -->

	<footer class="navigation container">
		<div class="left">&larr;<a href="">back to posts</a></div>
	</footer>
	
				<?php endwhile; ?>

<?php
get_footer();
