<?php
/**
 * Template Name: Team
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package clenera
 */

get_header(); ?>

<?php //get_template_part('content','head'); ?>

<div id="contentWrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php 
					if(have_posts()) : while(have_posts()) : the_post();
						echo '<div class="intro">';
						the_content();
						echo '</div>';
					endwhile; endif;
					wp_reset_query();
					?>


			<!-- START THE LEADERSHIP SECTION -->
			<?php

			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

			query_posts( array( 'post_type' => 'team_member', 'roles' => 'leadership', 'orderby' => 'date', 'order' => 'ASC', 'posts_per_page' => -1, 'paged' => $paged ) );

			if(have_posts()) : ?> 

				<section id="leadership" class="team-section">
					<h2 class="team-title">Leadership</h2>

				<?php while(have_posts()) : the_post(); ?>

				<?php 
				$imageOption_1 = get_field('image_option_1');
				$imageOption_2 = get_field('image_option_2');
				$size = 'team';
				$select2 = get_field('use_image_2');
				?>

					<div class="team-entry">
						<a href="<?php the_permalink(); ?>">
						<?php if($select2 && $imageOption_2) { 
							$image2 = $imageOption_2['sizes'][$size];
							echo '<img class="alignleft" src="' . $image2 . '" />'; 
						} else {
							$image1 = $imageOption_1['sizes'][$size];
							echo '<img class="alignleft" src="' . $image1 . '" />';
						} ?>
						</a>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<h6><?php the_field('title'); ?></h6>
						<?php the_excerpt(); ?>
					</div>

				<?php endwhile; ?>

				</section>
			
				<!-- <div id="posts-nav">
					<span class="alignright"><?php next_posts_link(); ?></span>
					<span class="alignleft"><?php previous_posts_link(); ?></span>
				</div> -->
				<?php //the_posts_navigation(); ?>

				<div class="clearfix"></div>

			<?php endif; ?>

			<?php wp_reset_query(); ?>
			<!-- END THE LEADERSHIP SECTION -->

			<!-- START THE MANAGEMENT SECTION -->
			<?php

			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

			query_posts( array( 'post_type' => 'team_member', 'roles' => 'management', 'orderby' => 'title', 'order' => 'ASC', 'posts_per_page' => -1, 'paged' => $paged ) );

			if(have_posts()) : ?> 

				<section id="management" class="team-section">
					<h2 class="team-title">Management</h2>

				<?php while(have_posts()) : the_post(); ?>

				<?php 
				$imageOption_1 = get_field('image_option_1');
				$imageOption_2 = get_field('image_option_2');
				$size = 'team';
				$select2 = get_field('use_image_2');
				?>


					<div class="team-entry">
						<?php if($select2 && $imageOption_2) { 
							$image2 = $imageOption_2['sizes'][$size];
							echo '<img class="alignleft" src="' . $image2 . '" />'; 
						} else {
							$image1 = $imageOption_1['sizes'][$size];
							echo '<img class="alignleft" src="' . $image1 . '" />';
						} ?>
						<h3><?php the_title(); ?></h3>
						<h6><?php the_field('title'); ?></h6>
					</div>

				<?php endwhile; ?>

				</section>
			
				<!-- <div id="posts-nav">
					<span class="alignright"><?php next_posts_link(); ?></span>
					<span class="alignleft"><?php previous_posts_link(); ?></span>
				</div> -->
				<?php //the_posts_navigation(); ?>

				<div class="clearfix"></div>

			<?php endif; ?>

			<?php wp_reset_query(); ?>
			<!-- END THE MANAGEMENT SECTION -->

			<!-- START THE TEAM SECTION -->
			<?php

			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

			query_posts( array( 'post_type' => 'team_member', 'roles' => 'team', 'orderby' => 'title', 'order' => 'ASC', 'posts_per_page' => -1, 'paged' => $paged ) );

			if(have_posts()) : ?> 

				<section id="team" class="team-section">
					<h2 class="team-title">Team</h2>

				<?php while(have_posts()) : the_post(); ?>

				<?php 
				$imageOption_1 = get_field('image_option_1');
				$imageOption_2 = get_field('image_option_2');
				$size = 'team';
				$select2 = get_field('use_image_2');
				?>

					<div class="team-entry">
						<?php if($select2 && $imageOption_2) { 
							$image2 = $imageOption_2['sizes'][$size];
							echo '<img class="alignleft" src="' . $image2 . '" />'; 
						} else {
							$image1 = $imageOption_1['sizes'][$size];
							echo '<img class="alignleft" src="' . $image1 . '" />';
						} ?>
						<h3><?php the_title(); ?></h3>
						<h6><?php the_field('title'); ?></h6>
					</div>

				<?php endwhile; ?>

				</section>
			
				<!-- <div id="posts-nav">
					<span class="alignright"><?php next_posts_link(); ?></span>
					<span class="alignleft"><?php previous_posts_link(); ?></span>
				</div> -->
				<?php //the_posts_navigation(); ?>

				<div class="clearfix"></div>

			<?php endif; ?>

			<?php wp_reset_query(); ?>
			<!-- END THE TEAM SECTION -->

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