<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="wrap cf">

		<main id="main" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">



					<section class="entry-content resume-experience m-all t-all d-all cf" itemprop="articleBody">
						<div class="resume-experience m-all t-2of3 d-2of3 cf">
							<?php the_content();?>
						</div>
						<div class="resume-skills m-all t-1of3 d-1of3 cf">
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
