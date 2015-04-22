<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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
					<h1 class="entry-title">Showing All Projects In <?php echo single_term_title( '', true ); ?></h1>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php the_content(); ?>

			<?php if(have_posts()) : ?> 

				<section id="projectsPage">

				<?php while(have_posts()) : the_post(); ?>

					<div class="project-entry">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('thumbnail'); ?>
							<!-- <h4 class="project-title"><?php the_field('project_city'); ?>, <?php the_field('project_state'); ?></h4> -->
						</a>
						<?php //the_excerpt(); ?>
						<!-- <a class="button dark" href="<?php the_permalink(); ?>">Read More</a> -->
					</div>

				<?php endwhile; ?>

				</section>
			
				<div id="postNav">
					<div class="alignleft"><?php previous_posts_link('<< Newer Projects'); ?></div>
					<div class="alignright"><?php next_posts_link('Older Projects >>'); ?></div>
				</div>

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
