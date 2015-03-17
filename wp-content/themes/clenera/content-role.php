<div class="project-entry">
	<?php the_post_thumbnail('thumbnail'); ?>
	<h4><?php the_title(); ?></h4>
	<h6><?php the_field('title'); ?></h6>
	<?php the_excerpt(); ?>
	<a class="button dark" href="<?php the_permalink(); ?>">Read More</a>
</div>