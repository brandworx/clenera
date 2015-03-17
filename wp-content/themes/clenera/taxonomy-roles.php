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

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="entry-title"><?php echo single_term_title( '', true ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>

			<div class="entry-content">

				<section id="projectsPage">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php if(is_tax( 'roles', 'management' )) { ?>
						<div class="management-entry">
							<?php the_post_thumbnail('thumbnail', array('class'=>'alignleft')); ?>
							<h3><?php the_title(); ?>, <?php the_field('title'); ?></h3>
							<?php the_excerpt(); ?>
							<a class="button dark" href="<?php the_permalink(); ?>">Read More</a>
						</div>
					<?php } else { ?>
						<div class="project-entry">
							<?php the_post_thumbnail('thumbnail'); ?>
							<h4><?php the_title(); ?></h4>
							<h6><?php the_field('title'); ?></h6>
							<?php the_excerpt(); ?>
						</div>
					<?php } ?>

				<?php endwhile; ?>
				</section>

			<?php the_posts_navigation(); ?>

			</div>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
