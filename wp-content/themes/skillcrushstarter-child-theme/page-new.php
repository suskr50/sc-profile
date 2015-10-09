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



<section class="new-page container">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); 
		
		?>
		<div class="myheader">
			<a href="<?php echo site_url(); ?>" >
				<h1 class="mylogo"class="title"><?php bloginfo('name'); ?><h1>
				<h2 class="sub-title"><?php bloginfo('description'); ?><h2>
				<?php the_content(); ?>
			</a>
	</div>



	<?php endwhile; // end of the loop. ?>
</div><!-- .container -->
</section><!-- .home-page -->


<!-- PORTFOLIO  -->

<section class="new-page2">

	<div id="#mission-going">

		<h2 > Portfolio of Work </h2>

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
<!-- SERVICES -->

<section class="new-pagec">
	<div class="new-contact">
		<h2 > Contact Me </h2>
		<div class="ninjaform">
			<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); }?>
		</div>
	</div>
	<div class="new-services">
		<h2 > MY SERVICES </h2>
		<?php query_posts('pagename=services')?>
			<?php while ( have_posts() ) : the_post();?>
				<div class="list-services"><?php the_content()?></div>
			<?php endwhile; // end of the loop. ?>
		<?php wp_reset_query(); // resets the altered query back to the original ?>
	</div>
</section>	

<!-- ABOUT ME -->

<section class="new-page3">
	
		<h2 > A Little about me. </h2>

				<?php query_posts('pagename=about')?>

				<?php while ( have_posts() ) : the_post();?>
							
				
<article class="about-content">
				<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
				<img class="picleft" src="<?php echo $url ?>" />
				<p><?php the_content(); ?></p>
			</article>
	<?php endwhile; // end of the loop. ?>
				<?php wp_reset_query(); // resets the altered query back to the original ?>

</section>	



<section class="new-pagef">

	<h3> copyright 2015 Susan Schrum </h3>	
				<ul>
					<li><img src="<?php echo home_url()."/wp-content/uploads/2015/08/linkedin-icon.png"?>"></li>
					<li><img src="<?php echo home_url()."/wp-content/uploads/2015/08/facebook-icon.png"?>"></li>
					<li><img src="<?php echo home_url()."/wp-content/uploads/2015/08/twitter-icon.png"?>"></li>
					
				</ul>


<section id="call-to-action">	
	<p > Interested in working with us? &nbsp&nbsp&nbsp&nbsp&nbsp  <span > <a  href="<?php home_url().'/contact-us'; ?>">Contact Us</a> </p>
</section>


<?php get_footer(); ?>