<?php
/**
 * Template Name: Portfolio
 *
 * The template for displaying pages
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */

get_header(); ?>

<section class="sidebar-page">		
	<div class="main-content">

		

<section id="mission-gone">
		<div class="site-content">
			<h2 class="center"> Portfolio of Work </h2>
			<?php query_posts('posts_per_page=3&post_type=case_studies')?>

			<ul class="featured-list ">

				<?php while ( have_posts() ) : the_post(); 
					$services = get_field('services');
			$client = get_field('client');
			$link = get_field('link');
			$image1 = get_field('image1');
			$image2 = get_field('image2');
			$image3 = get_field('image3');
			$testimony = get_field('testimony');
			$size = "thumbnail";
				?>
				<li class="individual-list">	
					<figure >
						<a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image($image1,$size); ?></a>
					</figure>
					<h5> <?php echo $services ?> </h5>
				</li>
				<?php endwhile; // end of the loop. ?>
				<?php wp_reset_query(); // resets the altered query back to the original ?>
			</ul>
		</div>
	</section>









	</div>
	
	
</section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
