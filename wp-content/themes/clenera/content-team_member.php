<?php
/**
 * @package clenera
 */
?>

<?php
$imageOption_1 = get_field('image_option_1');
$imageOption_2 = get_field('image_option_2');
$size = 'team';
$select2 = get_field('use_image_2');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<h4><?php the_field('title'); ?></h4>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php if($select2 && $imageOption_2) { 
			$image2 = $imageOption_2['sizes'][$size];
			echo '<img class="alignleft" src="' . $image2 . '" />'; 
		} else {
			$image1 = $imageOption_1['sizes'][$size];
			echo '<img class="alignleft" src="' . $image1 . '" />';
		} ?>
		<?php 
			if(have_rows('experience')) : 

				echo '<p>';
				echo '<h4>Experience</h4>';

				while(have_rows('experience')) : the_row();

					echo '<span>' . the_sub_field('experience_entry') . '</span><br>';

				endwhile; 

				echo '</p>';

			endif;

			if(have_rows('education')) : 

				echo '<p>';
				echo '<h4>Education</h4>';

				while(have_rows('education')) : the_row();
				
					echo '<span>' . the_sub_field('education_entry') . '</span><br>';

				endwhile; 

				echo '</p>';

			endif;
		?>
		<?php the_content(); ?>

		<div class="clearfix"></div>
		
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'clenera' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php clenera_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
