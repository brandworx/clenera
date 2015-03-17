<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package clenera
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>

		<?php if( have_rows('faq') ): ?>
			<div id="accordion">
			    <?php while ( have_rows('faq') ) : the_row(); ?>
			        <?php
			        $question = get_sub_field('question');
			        $answer = get_sub_field('short_answer');
			        $full = get_sub_field('full_answer');
			        ?>
					<?php if($question) { ?><h4 class="question">Q: <?php echo $question; ?></h4><?php } ?>
					<div class="answer">
						<h5 class="answer-title">Answer: <?php if($answer) { echo $answer; } ?></h5>
						<?php if($full) { echo $full; } ?>
					</div>

			    <?php endwhile; ?>
		    </div>
		<?php endif; ?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'clenera' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'clenera' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
