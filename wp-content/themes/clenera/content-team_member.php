<?php
/**
 * @package clenera
 */
?>

<?php
$imageOption_1 = get_field('image_option_1');
$imageOption_2 = get_field('image_option_2');
$size = 'team';
$image1 = $imageOption_1['sizes'][$size];
$image2 = $imageOption_2['sizes'][$size];
$select2 = get_field('use_image_2');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<h4><?php the_field('title'); ?></h4>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php if($select2 && $imageOption_2) { 
			echo '<img class="alignleft" src="' . $image2 . '" />'; 
		} else {
			echo '<img class="alignleft" src="' . $image1 . '" />';
		} ?>
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
