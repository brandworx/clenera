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

<section id="homeVidWrap">
	<video id="homeVid" width="400" autoplay>
	  <source src="<?php the_field('video','option'); ?>" type="video/mp4">
	</video>
	<h1 id="homeTitle" class="home-title cd-headline push">
		<span>Welcome the Era of </span> 
		<span class="cd-words-wrapper">
			<b class="is-visible">Clean</b>
			<b>Safe</b>
			<b>Renewable</b>
		</span>
		Energy
	</h1>
	<h1 id="homeSubTitle" class="home-title">Clēnera</h1>
	<a class="more-arrow" href="#solarData"></a>
</section>

<section id="solarData">
	<?php
	$dataTitleOne = get_field('data_section_1_title','option');
	$dataTextOne = get_field('data_section_1_text','option');
	$dataCTAOne = get_field('data_section_1_cta','option');
	$dataLinkOne = get_field('data_section_1_link','option');

	if($dataTitleOne) {
		echo '<h2>' . $dataTitleOne . '</h2>';
	}
	if($dataTextOne) {
		echo '<p>' . $dataTextOne . '</p>';
	}
	if($dataCTAOne && $dataLinkOne) {
		echo '<a class="button dark" href="' . $dataLinkOne . '">' . $dataCTAOne . '</a>';
	}
	?>
</section>

<section id="cleneraDataWrap">
	<?php
	$dataTitleTwo = get_field('data_section_2_title','option');
	$dataTextTwo = get_field('data_section_2_text','option');
	$dataCTATwo = get_field('data_section_2_cta','option');
	$dataLinkTwo = get_field('data_section_2_link','option');
	$dataBGTwo = get_field('data_section_2_bg','option');

	if($dataBGTwo) { ?>
		<div class="parallax" data-image="<?php echo bloginfo('template_url'); ?>/images/homeBG.jpg"></div>
	<?php } ?>

	<div id="cleneraData">
		<div id="innerData">
			<?php if($dataTitleTwo) {
				echo '<h2>' . $dataTitleTwo . '</h2>';
			}
			if($dataTextTwo) {
				echo '<p>' . $dataTextTwo . '</p>';
			}
			if($dataCTATwo && $dataLinkTwo) {
				echo '<a class="button dark" href="' . $dataLinkTwo . '">' . $dataCTATwo . '</a>';
			}
			?>
		</div>
	</div>
</section>

<section id="columns">
	<?php
	$column1_img = get_field('column_1_image','option');
	$column2_img = get_field('column_2_image','option');
	$column3_img = get_field('column_3_image','option');
	$columnSize = 'column';
	$thumb1 = $column1_img['sizes'][ $columnSize ];
	$thumb2 = $column2_img['sizes'][ $columnSize ];
	$thumb3 = $column3_img['sizes'][ $columnSize ];
	?>
	<a id="column1" class="column" href="<?php the_field('column_1_link','option'); ?>">
		<img src="<?php echo $thumb1; ?>" />
		<h2><?php the_field('column_1_title','option'); ?></h2>
	</a>
	<a id="column2" class="column" href="<?php the_field('column_2_link','option'); ?>">
		<img src="<?php echo $thumb2; ?>" />
		<h2><?php the_field('column_2_title','option'); ?></h2>
	</a>
	<a id="column3" class="column" href="<?php the_field('column_3_link','option'); ?>">
		<img src="<?php echo $thumb3; ?>" />
		<h2><?php the_field('column_3_title','option'); ?></h2>
	</a>

</section>	

<section id="contact">
	<?php
	$contactTitle = get_field('contact_title','option');
	$contactForm = get_field('form_shortcode','option');
	?>

	<h2><?php if($contactTitle){ echo $contactTitle; } ?></h2>
	<div id="contactForm">
		<?php if($contactForm){ echo do_shortcode($contactForm); } ?>
	</div>

</section>	

<?php get_footer(); ?>