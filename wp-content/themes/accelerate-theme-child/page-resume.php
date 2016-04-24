<?php
/**
 * The template for displaying Resume pages
 *
 *  *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<div id="primary" class="site-content content-page">
	<div id="content" role="main">

		<?php while ( have_posts() ) : the_post(); 
			$skills = get_field("skils");
		?>
		<div class="resume-wrapper">
		<article>
		<h2><?php the_title(); ?></h2>
		</article>

		<aside>
			<div class="resume-left">
				<div class="exp-wrapper">
				
					<?php the_content(); ?>
				</div>
				</div>
			<div class="resume-right">

		
			
				<?php echo $skills; ?>
			</div>
			<aside>
		</div>
			
		<?php endwhile; // end of the loop. ?>

	</div><!-- #content -->
</div><!-- #primary -->

<div class="clearfix"></div>

<?php get_footer(); ?>