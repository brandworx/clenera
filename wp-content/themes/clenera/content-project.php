<?php
/**
 * @package clenera
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php clenera_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>

		<?php 
		$images = get_field('gallery');

		if($images) : ?>
			<ul id="gallery">
			<?php foreach($images as $image) : ?>
				<a class="fancybox" rel="gallery1" href="<?php echo $image['url']; ?>">
					<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
				</a>
			<?php endforeach; ?>
			</ul>
		<?php endif; ?>

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
