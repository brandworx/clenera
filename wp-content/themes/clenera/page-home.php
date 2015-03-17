<?php
/**
 * Template Name: Home
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package clenera
 */

get_header(); ?>

<?php get_template_part('content','head'); ?>

<div id="contentWrap">
	<div id="primary" class="content-area full">
		<main id="main" class="site-main" role="main">

				<section id="featured">
					<h1><?php the_field('featured_title','option'); ?></h1>
					<div class="text">
						<?php the_field('featured_text','option'); ?>
					</div>
					<a class="button" href="<?php the_field('featured_link','option'); ?>"><?php the_field('featured_cta','option'); ?></a>
				</section>

				<section id="projects">
					<?php
					$projects = get_field('projects','option');
					foreach($projects as $post) :
					?>
					<?php setup_postdata($post); ?>

						<div class="project-entry">
							<?php the_post_thumbnail('thumbnail'); ?>
							<h4 class="project-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						</div>
					<?php endforeach; ?>
					<?php wp_reset_postdata($post); ?>
					<a id="mobileProjectsMore" class="button dark" href="<?php the_field('projects_link','option'); ?>"><?php the_field('projects_cta','option'); ?></a>
				</section>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>

<?php get_footer(); ?>