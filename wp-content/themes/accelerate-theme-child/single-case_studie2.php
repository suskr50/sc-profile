<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage skillcrusher-theme
 * @since Wen business 1.0
 */
get_header(); ?>

<!-- BLOG PAGE -->

<section class="blog-page">
	<div class="container ">
		<div class="row  ">

			<?php

			while ( have_posts() ) : the_post(); 

			$services = get_field('services');
			$client = get_field('client');
			$link = get_field('link');
			$image1 = get_field('image1');
			$image2 = get_field('image2');
			$image3 = get_field('image3');
			$testimony = get_field('testimony');
			$size = "medium";

			?>


			<div class="col-xs-4">
				<div class="entry-wrap">			
					<h2><?php the_title(); ?></h2>
					<h5><?php echo $services; ?></h5>
					<h6>Client: <?php echo $client; ?></h6>
					<p><?php the_content(); ?></p>
					<?php if ($testimony) {?>
					<a href="<?php echo $link ?>"><strong>Visit Live Site</strong></a>
					<?php } ?>
				</div>
			</div>
			<div class="col-xs-7 ">
				<ul class="case-study-list ">
					<div class="port-list">
						<?php if ($image1)  {?>
						<li><?php echo wp_get_attachment_image($image1,$size); ?></li>
						<?php }?>
						<li><?php echo wp_get_attachment_image($image2,$size); ?></li>
						<li><?php echo wp_get_attachment_image($image3,$size); ?></li>
					</div>
				</ul>
			</div>

		</div>


		<div class="row">
			<div class="col-md-9 col-md-offset-1">
			<?php if ($testimony) {?>
			<blockquote><?php echo $testimony ?></blockquote>
			<?php } ?>
			</div>
		</div>



	</div>

</section>



	<!-- END blog page -->

	<footer class="navigation main-cs-content">
		<div class="left">&larr;<a href="<?php echo site_url('/portfolio/'); ?>" class="btn">back to work</a>
	</footer>
	
				<?php endwhile; ?>

<?php
get_footer();

    