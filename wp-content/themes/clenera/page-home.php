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

<?php //get_template_part('content','head'); ?>


<?php //putRevSlider("home_video") ?>


<video id="homeVid" width="400" autoplay>
  <source src="<?php the_field('video','option'); ?>" type="video/mp4">
</video>
<h1 id="homeTitle" class="home-title cd-headline push">
	<span>Welcome the Era of </span> 
	<span class="cd-words-wrapper">
		<b class="is-visible">Clean Energy</b>
		<b>Safe Energy</b>
		<b>Renewable Energy</b>
	</span>
</h1>
<!-- <h1 id="homeTitle" class="home-title"><span class="one">Welcome the Era of Clean,</span><br><span class="two">Safe,</span><span class="three"> Renewable Energy</span></h1> -->
<h2 id="homeSubTitle" class="home-title">Clēnera</h2>

<!-- <div id="homeBG">
	<h1><?php //the_field('featured_title','option'); ?></h1>
</div> -->

<div id="contentWrap">
	<div id="primary" class="content-area full">
		<main id="main" class="site-main" role="main">

				<section id="featured">
					<h1><?php the_field('featured_title','option'); ?></h1>
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
							<h2 class="count"><?php echo $fac; ?></h2>
						</div>
						<?php 
						}
						if($cap) {
						?>
						<div class="data-item">
							<span>MWDC</span>
							<h2 class="count"><?php echo $cap; ?></h2>
						</div>
						<?php 
						}
						if($mwh) {
						?>
						<div class="data-item">
							<span>Total MWh</span>
							<h2 class="count"><?php echo $mwh; ?></h2>
						</div>
						<?php 
						}
						if($houses) {
						?>
						<div class="data-item">
							<span>Households Supplied</span>
							<h2 class="count"><?php echo $houses; ?></h2>
						</div>
						<?php 
						}
						if($co2) {
						?>
						<div class="data-item">
							<span>CO2 Avoided</span>
							<h2 class="count"><?php echo $co2; ?></h2>
						</div>
						<?php } ?>
					</div>
					<?php } ?>

					<div class="text">
						<?php the_field('featured_text','option'); ?>
					</div>
					<a class="button" href="<?php the_field('featured_link','option'); ?>"><?php the_field('featured_cta','option'); ?></a>
				</section>

				<!-- <section id="projects">
					<?php
					$projects = get_field('projects','option');
					foreach($projects as $post) :
					?>
					<?php setup_postdata($post); ?>

						<div class="project-entry">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('thumbnail'); ?>
								<h4 class="project-title"><?php the_field('project_city'); ?>, <?php the_field('project_state'); ?></h4>
							</a>
						</div>
					<?php endforeach; ?>
					<?php wp_reset_postdata($post); ?>
					<a id="mobileProjectsMore" class="button dark" href="<?php the_field('projects_link','option'); ?>"><?php the_field('projects_cta','option'); ?></a>
				</section> -->

		</main><!-- #main -->
	</div><!-- #primary -->
</div>

<?php get_footer(); ?>