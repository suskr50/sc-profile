<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<div id="primary" class="site-content content-page">
	<div id="content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
		<?php endwhile; // end of the loop. ?>



		<h1> ------ TEst CSS <h1>
			<div class="resume">

				<div class="resume-left">
					<div class="exp-wrapper">
						<h2> RELEVANT EXPERIENCE </h2>
						<h3 class="bold-color">Freelance Web Developer</h3>
						<p class="company">Susan Schrum | Ocala, FL | 2014 to Present </p>
						Develops web site for organizations and businesses. Specializes in custom WordPress development.
						<br>
						<h3 class="bold-color">Homeschool Teacher</h3>
						<p class="company">Schrum Family Academy | Ocala, FL | 2003 to Present </p>
						Administers the home education of my four children by selecting, planning, teaching and evaluating curricula through all grades K-11th grade. Provides tutoring for other home school families in Latin, English, and Excel. Provides content to an online Latin grammar website.
						<br>
						<h3 class="bold-color"> Senior Engineer</h3>
						<p class="company">IBM | Research Triangle Park, NC | 1988 to 1996 </p>
						Developed functional, manufacturing and design verification tests for Ethernet and Token Ring adapters using C, C++, and assembly languages. Managed development activities of a communications hardware project by coordinating the schedules, budgets, requirements, and testing plans between all departments.
					</div>
				</div>
				<div class="resume-right">

					<h2>EDUCATION</h2>
					<span class="bold-color">Illinois Institute of Technology</span> Bachelor of Science in Electrical Engineering
					<h3 class="accent-color">SKILLS</h3>
					<span class="bold-color extra-space">Programming </span>
					<ul>
						<li>HTML5</li>
						<li>CSS3</li>
						<li>PHP</li>
						<li>WordPress</li>
						<li>C, C++</li>
					</ul>
					<span class="bold-color extra-space">Administrative Skills</span>
					<ul>
						<li>Excel</li>
						<li>Power Point</li>
						<li>Outlook</li>
						<li>Word</li>
						<li>Project Management</li>
						<li>Internet Research</li>
					</ul>
				</div>
			</div>


</div><!-- #content -->
</div><!-- #primary -->


<?php get_footer(); ?>