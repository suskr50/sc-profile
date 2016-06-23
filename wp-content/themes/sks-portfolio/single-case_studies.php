<?php
/*
 * CUSTOM POST TYPE TEMPLATE
 *
 * This is the custom post type post template. If you edit the post type name, you've got
 * to change the name of this template to reflect that name change.
 *
 * For Example, if your custom post type is "register_post_type( 'bookmarks')",
 * then your single template should be single-bookmarks.php
 *
 * Be aware that you should rename 'custom_cat' and 'custom_tag' to the appropiate custom
 * category and taxonomy slugs, or this template will not finish to load properly.
 *
 * For more info: http://codex.wordpress.org/Post_Type_Templates
*/
?>

<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="wrap cf">

		<main id="main" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article">



					<section class="entry-content cf">


						<?php								
						$services = get_field('services');
						$client = get_field('client');
						$link = get_field('link');
						$testimony = get_field('testimony');
						$image1 = get_field('image1');
						$image2 = get_field('image2');
						$image3 = get_field('image3');
						$size = "full";

						?>

						<div  class="contact-study-left font-test vap">			
							<h1><?php the_title(); ?></h1>
							<p> <span id="service-color"><?php echo $services; ?></span></br>
								<strong>Client: </strong><?php echo $client; ?><p>
								<?php the_content(); ?>

								<?php if ($testimony){ ?>

									<blockquote>
										<?php echo $testimony; ?>
									</blockquote>
									<?php }?>

									<?php if ($link) {?>
										<a  href="<?php echo $link ?>"><strong>Visit Live Site</strong></a>
										<?php }?>

									</div>

									<div class="contact-study-right ">
										<ul class="case-study-list">
											<li>
												<figure>
													<?php echo wp_get_attachment_image($image1,$size); ?>
													
												</figure>
											</li>
											<li>
												<figure>
													<?php echo wp_get_attachment_image($image2,$size); ?>
												</figure>
											</li>
											<li>
												<figure>
													<?php echo wp_get_attachment_image($image3,$size); ?>
												</figure>
											</li>

										</ul>
									</div>


								</section> <!-- end article section -->

								<footer class="article-footer">
									<p class="tags"><?php echo get_the_term_list( get_the_ID(), 'custom_tag', '<span class="tags-title">' . __( 'Custom Tags:', 'bonestheme' ) . '</span> ', ', ' ) ?></p>

								</footer>

								<?php comments_template(); ?>

							</article>

						<?php endwhile; ?>

					<?php else : ?>

						<article id="post-not-found" class="hentry cf">
							<header class="article-header">
								<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
							</header>
							<section class="entry-content">
								<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
							</section>
							<footer class="article-footer">
								<p><?php _e( 'This is the error message in the single-custom_type.php template.', 'bonestheme' ); ?></p>
							</footer>
						</article>

					<?php endif; ?>

				</main>

				

			</div>

		</div>

		<?php get_footer(); ?>
