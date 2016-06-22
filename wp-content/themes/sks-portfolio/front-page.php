<?php get_header(); ?>



<div id="content">

	



	<div id="inner-content" class="wrap cf">


		<main id="main" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


				<div class="article-header ">

					<div class="header-text"> 
						<?php the_content(); ?>
						<ul class="fpsocial-links fa-ul">
							<ul class="fpsocial-links fa-ul">
							<li><a href="https://twitter.com/susan_schrum"><i class="fa fa-twitter"></i></a></li>
                     <li><a href="https://www.linkedin.com/in/susan-schrum-200416b6"><i class="fa fa-linkedin"></i></a></li>
                     <li><a href="https://github.com/suskr50"><i class="fa fa-github"></i></a></li>
						</ul>
						</ul>

					</div>


				</div> <?php // end article header ?>




				<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">



					<section id="mobile-desc" class="entry-content brief-description cf" itemprop="articleBody">

						<p><?php the_content(); ?></p>
						<ul class="fpsocial-links fa-ul">
							<li><a href="https://twitter.com/susan_schrum"><i class="fa fa-twitter"></i></a></li>
                     <li><a href="https://www.linkedin.com/in/susan-schrum-200416b6"><i class="fa fa-linkedin"></i></a></li>
                     <li><a href="https://github.com/suskr50"><i class="fa fa-github"></i></a></li>
						</ul>
					</section>



					<section class="featured-work">
						<h1 > Featured Work </h1>

						

						<?php query_posts('posts_per_page=-1&post_type=case_studies')?>

						<div id="my-work" class="featured-list"> 


							<?php while ( have_posts() ) : the_post(); 
							$services = get_field('services');
							$client = get_field('client');
							$link = get_field('link');
							$image1 = get_field('image1');

							$size = "thumbnail";
							?>

							<div class="individual-list">
								<figure >
									<a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image($image1,$size); ?></a>
									<figcaption> 
										<?php echo $services ?>
									</figcaption>
								</figure>

								
							</div>
							
						<?php endwhile; // end of the loop. ?>
						<?php wp_reset_query(); // resets the altered query back to the original ?>
					</div>



				</section>


				<section class="services">
					<div class="service-wrapper">

						<div class="service-wrapper m-all t-2of5 d-2of5 cf">

							<div class="inside-service">
								<?php query_posts('pagename=services')?>
								<?php while ( have_posts() ) : the_post();?>
									<h2><?php the_title();?></h2>
									<?php the_content();?>
								<?php endwhile; // end of the loop. ?>
								<?php wp_reset_query(); // resets the altered query back to the original ?>
							</div>
						</div>
						<div class="contact-wrapper m-all t-3of5 d-3of5 cf">
							<div class="inside-contact">
								<h2 > Contact Me </h2>
									<div class="ninjaform">
									<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); }?>
								</div>
							</div>
						</div>

					</div>
				</section>	
				<div class="cf"></div>

				<section id="about-me" class="about cf">
					<div class="about-wrapper">

						<?php query_posts('pagename=about')?>
						<?php while ( have_posts() ) : the_post();?>
							<div class="about-picture">

								<?php echo the_post_thumbnail( 'thumbnail' ); ?>	

							</div>
							<div class="about-content">
								<?php the_content(); ?>
							</div>
						<?php endwhile; // end of the loop. ?>
						<?php wp_reset_query(); // resets the altered query back to the original ?>

					</div>
					<div class="clear"></div>
				</section>	


				<footer class="article-footer cf">

				</footer>

				<?php comments_template(); ?>

			</article>

		<?php endwhile; endif; ?>

	</main>

	<!-- 	<?php get_sidebar(); ?> -->

</div>

</div>

<?php get_footer(); ?>
