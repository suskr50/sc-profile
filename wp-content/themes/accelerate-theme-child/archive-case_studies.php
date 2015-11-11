<?php
/**
 * The template for displaying archieve of all case studies
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Acclerate Theme
 * @since Acclerate Theme 1.0
 */

get_header(); ?>

	

<div id="primary" class="site-content content-page">
	<div id="content" role="main">

		<?php while ( have_posts() ) : the_post(); 
			$services = get_field('services');
			$link = get_field('link');
			$image1 = get_field('image1');
			$size = "medium";
		?>

		<div class="clearfix">
		
		<h2><?php the_title(); ?></h2>
		
		<div class="case-left">
			<div class="caseexp-wrapper">
				
				<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
				<h5><?php echo $services; ?></h5>
				<?php the_excerpt() ?>
				<a href="<?php $link ?>"><strong>Visit Project ></strong></a>
			</div>
		</div>
		<div class="case-right">

			<ul class="case-study-list">
				<li> <?php if ($image1)  { 
					echo wp_get_attachment_image($image1,$size);
				} ?></li>
			</ul>
		</div>
	</div>
			
		<?php endwhile; // end of the loop. ?>

	</div><!-- #content -->
</div><!-- #primary -->






<?php get_footer(); ?>