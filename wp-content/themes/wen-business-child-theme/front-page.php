<?php
/**
 * Front Page.
 *
 * @package WEN Business
 *
 */

get_header(); ?>

<div id="primary" class="content-area col-sm-12" >
    <main id="main" class="site-main" role="main">
		<div class="content">
			Hey there
			<?php while ( have_posts() ): the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<a href="<?php echo site_url('/blog/'); ?>" class="btn">View My Porfolio</a>
			<?php endwhile; ?>
		</div>
	</div>

	Hello
</section>

<section class="feature-works">
	<div class="container ">
		<div class="main-acs-content  ">

			<?php while ( have_posts() ) : the_post(); 
			$services = get_field('services');
			$link = get_field('link');
			$image1 = get_field('image1');
			$size = "full";
			?>

<article class="case-study">	
			<aside class="case-study-left">
				<div class="entry-wrap">			
					<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
					<h5><?php echo $services; ?></h5>
					<?php the_excerpt() ?>
					<a href="<?php $link ?>"><strong>Visit Project ></strong></a>
				</div>
			</aside>

			<section class="case-study-right">
				<ul class="case-study-list">
					<li> <?php if ($image1)  { 
						echo wp_get_attachment_image($image1,$size);
					} ?></li>
					</ul>
			</section>
		</article>






			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->
	<section>







<?php get_footer(); ?>