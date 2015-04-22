<?php
/**
 * @package clenera
 */
?>

<?php
	$MWp = get_field('mwp');
	$city = get_field('project_city');
	$state = get_field('project_state');
	$cod = get_field('cod');
	$ppa = get_field('ppa');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php echo $city . ', ' . $state; ?></h1>
		<?php if($cod) { ?><h6>Operational on <?php echo $cod; ?></h6><?php } ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php if($MWp || $cod || $ppa) { ?>
		<ul id="projectMeta">
			<?php if($MWp) { ?><li>MWDC<h2 class="count"><?php echo $MWp; ?></h2></li><?php } ?>
			<?php if($MWp) { ?><li>Households Supplied<h2 class="count"><?php echo $MWp * 164; ?></span></li><?php } ?>
			<?php if($ppa) { ?><li>PPA Term (Years)<h2 class="count"><?php echo $ppa; ?></h2></li><?php } ?>
		</ul>
		<?php } ?>

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
