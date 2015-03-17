<?php
/**
 * Template Name: Portfolio
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
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php the_content(); ?>

			<?php 
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

			query_posts( array( 'post_type' => 'project', 'posts_per_page' => 8, 'paged' => $paged ) );

			if(have_posts()) : ?> 

				<section id="projectsPage">

				<?php while(have_posts()) : the_post(); ?>

					<div class="project-entry">
						<?php the_post_thumbnail('thumbnail'); ?>
						<h4 class="project-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						<?php //the_excerpt(); ?>
						<!-- <a class="button dark" href="<?php the_permalink(); ?>">Read More</a> -->
					</div>

				<?php endwhile; ?>

				</section>
			
				<!-- <div id="posts-nav">
					<span class="alignright"><?php next_posts_link(); ?></span>
					<span class="alignleft"><?php previous_posts_link(); ?></span>
				</div> -->
				<?php the_posts_navigation(); ?>

				<div class="clearfix"></div>

			<?php endif; ?>

			<?php wp_reset_query(); ?>

				</div><!-- .entry-content -->
				
				<footer class="entry-footer">
					<?php edit_post_link( __( 'Edit', 'clenera' ), '<span class="edit-link">', '</span>' ); ?>
				</footer><!-- .entry-footer -->
			</article>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>