<?php
$def = get_field('def_header_image','option');
$image = get_field('header_image');
$gallery = get_field('slider_images','option');
$size = 'head';

if($image) {
	$headImg = $image['sizes'][$size];
	echo '<img id="headerImage" src="' . $headImg . '" />';
} else {
	$headImg = $def['sizes'][$size];
	echo '<img id="headerImage" src="' . $headImg . '" />';
}

?>