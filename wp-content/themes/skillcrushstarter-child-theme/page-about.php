<?php
/**
 * Template Name: About 
 *
 * The template for displaying pages
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */

get_header(); ?>

<section class="container">		
	

		<?php while ( have_posts() ) : the_post(); ?>
			<h2 class="entry-title"><?php the_title(); ?></h2>
			<article class="about-content">
				<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
				<img class="picleft" src="<?php echo $url ?>" />
				<p><?php the_content(); ?></p>
			</article>
		<?php endwhile; ?>
	
		
</section>

<?php get_footer(); ?>


