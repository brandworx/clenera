<?php
	$def = get_field('header_image', 'option');
	$image = get_field('header_image');
	$size = 'head';
	if($image) {
		$headImg = $image['sizes'][$size];
	} else {
		$headImg = $def['sizes'][$size];		
	}
?>
	<img id="headerImage" src="<?php echo $headImg; ?>" />
	<img id="overlay" src="<?php echo bloginfo('template_url'); ?>/images/header-overlay.png" />
	<img id="headerBottom" src="<?php echo bloginfo('template_url'); ?>/images/head-bottom.png" />