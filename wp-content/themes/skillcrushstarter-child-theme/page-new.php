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

<section class="new-page4">
	<h1> Susan Kreidler </h1>

</section>	

<section class="new-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); 
		$content_1 = get_field("content_1");
		$picture_1 = get_field("picture_1");
		$title_1 = get_field("title_1");
		$service = get_field("services");
		$content_2 = get_field("content_2");
		$picture_2 = get_field("picture_2");
		$title_2 = get_field("title_2");
		$content_3 = get_field("content_3");
		$picture_3 = get_field("picture_3");
		$title_3 = get_field("title_3");
		$content_4 = get_field("content_4");
		$picture_4 = get_field("picture_4");
		$title_4 = get_field("title_4");
		?>
		<h1> Web developer </h1>
		<div class="about-top">
			<?php the_content(); ?>
		</div>

<ul>
		<li>
	<div class="short1">
		<h2 > A Little about me. </h2>

				<?php query_posts('pagename=about')?>

				<?php while ( have_posts() ) : the_post();?>
				<?php the_excerpt()?>
				
				<?php endwhile; // end of the loop. ?>
				<?php wp_reset_query(); // resets the altered query back to the original ?>


	</div> </li>
	<li><div class="short1">
		<h2 > My Serrvices  </h2>


	</div> </li>
	<li><div class="short3">
		<h2 > Contact Me </h2>
		<div class="ninjaform">

			<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 5 ); }?>
		</div>

	</div></li>
	
</ul>






	<?php endwhile; // end of the loop. ?>
</div><!-- .container -->
</section><!-- .home-page -->

<section class="new-page2">
	
</section>

<section class="new-page3">
	<div id="#mission-going">

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

<section class="new-page4">

	<h3> copyright 2015 Susan Schrum </h3>

	<div id="social">
				<ul>
					<li><img src="<?php echo home_url()."/wp-content/uploads/2015/08/linkedin-icon.png"?>"></li>
					<li><img src="<?php echo home_url()."/wp-content/uploads/2015/08/facebook-icon.png"?>"></li>
					<li><img src="<?php echo home_url()."/wp-content/uploads/2015/08/twitter-icon.png"?>"></li>
					
				</ul>
	</div>	






<section id="call-to-action">	
	<p > Interested in working with us? &nbsp&nbsp&nbsp&nbsp&nbsp  <span > <a  href="<?php home_url().'/contact-us'; ?>">Contact Us</a> </p>
</section>


<?php get_footer(); ?>