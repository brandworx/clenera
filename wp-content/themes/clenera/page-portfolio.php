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

<?php get_template_part('content','states'); ?>

<div id="contentWrap">
	<?php
		$fac = get_field('facilities','option');
		$cap = get_field('capacity','option');
		$mwh = get_field('total_mwh','option');
		$houses = get_field('households_supplied','option');
		$co2 = get_field('co2_avoided','option');
		// $fac = number_format($facN);
		// $cap = number_format($capN);
		// $mwh = number_format($mwhN);
		// $houses = number_format($housesN);
		// $co2 = number_format($co2N);

	if ($fac || $cap || $mwh || $houses || $co2) {
	?>
	<div id="data">
		<?php if($fac) { ?>
		<div class="data-item">
			<span>Facilities</span>
			<div class="count"><?php echo $fac; ?></div>
		</div>
		<?php 
		}
		if($cap) {
		?>
		<div class="data-item">
			<span>MWDC</span>
			<div class="count"><?php echo $cap; ?></div>
		</div>
		<?php 
		}
		if($mwh) {
		?>
		<div class="data-item">
			<span>Total MWh</span>
			<div class="count"><?php echo $mwh; ?></div>
		</div>
		<?php 
		}
		if($houses) {
		?>
		<div class="data-item">
			<span>Households Supplied</span>
			<div class="count"><?php echo $houses; ?></div>
		</div>
		<?php 
		}
		if($co2) {
		?>
		<div class="data-item">
			<span>CO2 Avoided</span>
			<div class="count"><?php echo $co2; ?></div>
		</div>
		<?php } ?>
	</div>
	<?php } ?>
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

			query_posts( array( 'post_type' => 'project', 'meta_key' => 'order', 'orderby' => 'meta_value_num', 'order' => 'ASC', 'posts_per_page' => -1, 'paged' => $paged ) );

			if(have_posts()) : ?> 

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