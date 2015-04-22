<?php
/**
 * The template for displaying all single posts.
 *
 * @package clenera
 */

get_header(); ?>

<?php get_template_part('content','head'); ?>

<div id="contentWrap">
	<div id="primary" class="content-area full">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'project' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		<div id="postNav">
			<div class="alignleft"><?php previous_post_link('%link', '<< Prev Project'); ?></div>
			<div class="alignright"><?php next_post_link('%link', 'Next Project >>'); ?></div>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

</div>

<?php get_footer(); ?>
