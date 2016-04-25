<?php
/**
 * The Template for displaying all a single Case Study
 *
 * @package WordPress
 * @subpackage Accelerate Theme
 * @since Twenty Fourteen 1.0
 */
get_header(); ?>

<!-- BLOG PAGE -->
<section class="portfolio-page">
	<div class="container wrap">

			<div class="main-content">

			<?php while ( have_posts() ) : the_post(); 

			$services = get_field('services');
			$client = get_field('client');
			$link = get_field('link');
			$testimony = get_field('testimony');
			$image1 = get_field('image1');
			$image2 = get_field('image2');
			$image3 = get_field('image3');
			$size = "large";

			?>

			<article class="contact-study-left font-test vap">			
				<h1><?php the_title(); ?></h1>
				<p> <span id="service-color"><?php echo $services; ?></span></br>
				<strong>Client: </strong><?php echo $client; ?><p>
				<?php the_content(); ?>

				<?php if ($testimony){ ?>

					<blockquote>
						<?php echo $testimony; ?>
					</blockquote>
				<?php }?>

				<?php if ($link) {?>
				<a  href="<?php echo $link ?>"><strong>Visit Live Site</strong></a>
				<?php }?>

			</article>

			<aside class="contact-study-right ">
				<ul class="case-study-list">
					<li>
						<figure>
							<?php echo wp_get_attachment_image($image1,$size); ?>
						</figure>
					</li>
					<li>
						<figure>
							<?php echo wp_get_attachment_image($image2,$size); ?>
						</figure>
					</li>
					<li>
						<figure>
							<?php echo wp_get_attachment_image($image3,$size); ?>
						</figure>
					</li>

				</ul>
			</aside>




		
<!-- END blog page -->

	<footer class="navigation main-cs-content ">
		 
		<div class="left">&larr;<a href="<?php echo home_url()?>/#theportfolio">back to work</a></div>
	</footer>
	
				<?php endwhile; ?>
	</div>
	</div>
</section>



<?php
get_footer();

    