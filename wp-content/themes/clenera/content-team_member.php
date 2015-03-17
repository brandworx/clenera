<?php
/**
 * @package clenera
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<h4><?php the_field('title'); ?></h4>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_post_thumbnail('medium', array('class'=>'alignleft')); ?>
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
