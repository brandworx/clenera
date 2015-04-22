<?php

if(!is_post_type('project') && !is_page('projects')){
	$def = get_field('header_image', 'option');
	$image = get_field('header_image');
	$gallery = get_field('slider_images','option');
	$size = 'head';
	if($gallery && is_front_page()) { ?>
		    <!-- <div id="slider" class="flexslider">
		        <ul class="slides">
		            <?php //foreach( $gallery as $slide ): ?>
		                <li>
		                    <img src="<?php //echo $slide['sizes'][$size]; ?>" alt="<?php //echo $slide['alt']; ?>" />
		                </li>
		            <?php //endforeach; ?>
		        </ul>
		    </div> -->
	<?php } elseif ($image) {
		$headImg = $image['sizes'][$size];
	} else {
		$headImg = $def['sizes'][$size];		
	?>
		<img id="headerImage" src="<?php echo $headImg; ?>" />
	<?php 
	}
} else {
	get_template_part('content','states');
}
?>