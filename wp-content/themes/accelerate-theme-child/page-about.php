<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>


<div id="primary" class="site-content content-page about-page">
	<div id="content" role="main">

		<?php while ( have_posts() ) : the_post(); 
			$skills = get_field("skils");
		?>
		
		<h2><?php the_title(); ?></h2>
		
			
				<div class="exp-wrapper">
				<div> <?php the_post_thumbnail("thumbnail");?> </div>
					<?php the_content(); ?>
				</div>
				</div>
			
			
		<?php endwhile; // end of the loop. ?>

	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>