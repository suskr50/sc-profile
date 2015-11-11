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

<section class="home-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
		<div class="mylogo2">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php the_content(); ?>
		</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .home-page -->


<section class="new-page2" id="theportfolio">
	<div class="site-content">
		<div class="portfolio-wrapper" >

		<h2 > Featured Work </h2>

			<?php query_posts('posts_per_page=4&post_type=case_studies')?>

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
				<div class="picframe">	
					<figure >
						<a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image($image1,$size); ?></a>
					</figure>
				</div>
					<h5> <?php echo $services ?> </h5>

				</li>
				<?php endwhile; // end of the loop. ?>
				<?php wp_reset_query(); // resets the altered query back to the original ?>
			</ul>

</div>
</section>



<div class="new-pagec">
	<div class="site-content">
		<div class="pcontact-wrapper">
			<aside class="contact-study-right">
				<h2 > Contact Me </h2>
				<div class="ninjaform">
					<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); }?>
				</div>
			</aside>
			<div class="contact-study-left">
				<h2 > MY SERVICES </h2>
				<?php query_posts('pagename=services')?>
				<?php while ( have_posts() ) : the_post();?>
				<div class="list-services"><?php the_content()?></div>
			<?php endwhile; // end of the loop. ?>
			<?php wp_reset_query(); // resets the altered query back to the original ?>
			</div>
		</div>
	</div>
</div>	


<section class="new-page3" id="theabout">
	<div class="site-content">
		<div class="about-content">
			<?php query_posts('pagename=about')?>
			<?php while ( have_posts() ) : the_post();?>
			<article >
				<h2 > A little about me. </h2>
				<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
				<img class="picleft" src="<?php echo $url ?>" />

				<p><?php the_content(); ?></p>
			</article>
		<?php endwhile; // end of the loop. ?>
		<?php wp_reset_query(); // resets the altered query back to the original ?>
	</div>
</div>
</section>	



<?php get_footer(); ?>