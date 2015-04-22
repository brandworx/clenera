<?php
/**
 * The template for displaying all single posts.
 *
 * @package clenera
 */

get_header(); ?>

<?php //get_template_part('content','head'); ?>

<div id="contentWrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'team_member' ); ?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
