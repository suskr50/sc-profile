<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">
								sdfgsdg

									<h1 class="page-title" itemprop="headline"><?php the_title(); ?><br></h1>

									
								</header> <?php // end article header ?>

								<section class="entry-content resume-experience m-all t-2of3 d-5of7 cf" itemprop="articleBody">
								<div class="resume-experience">
									<?php the_content();?>
									 </div>
									 <div class="resume-skills">
									 	<?php  echo get_field("skils"); ?>
									 </div>
								</section>
							
						


								<footer class="article-footer cf">

								</footer>

								<?php comments_template(); ?>

							</article>

							

							<?php endwhile; endif; ?>

						</main>

						
				</div>

			</div>

<?php get_footer(); ?>
