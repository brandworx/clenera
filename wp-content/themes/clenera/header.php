<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package clenera
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<script src="//use.typekit.net/kcn3wyu.js"></script>
<script>try{Typekit.load();}catch(e){}</script>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'clenera' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php 
				$logo = get_field('logo','option');
				$phone = get_field('phone','option');
			?>
			<a id="logo" href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo $logo['url']; ?>" /></a>

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #site-navigation -->
			<nav id="mobileNav">
				<div id="burger"></div>
				<?php wp_nav_menu( array( 'theme_location' => 'mobile' ) ); ?>
			</nav>
			<a id="phone" href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
		</div><!-- .site-branding -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">