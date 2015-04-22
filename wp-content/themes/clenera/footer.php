<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package clenera
 */
?>

	</div><!-- #content -->

	<!-- <section id="footerCTA">
		<h2><?php //the_field('footer_cta_text','option'); ?></h2>
		<a class="button farm" href="<?php //the_field('footer_cta_link','option'); ?>"><?php //the_field('footer_cta','option'); ?></a>
		<a id="mobileFootCTA" class="button farm" href="<?php //the_field('footer_cta_link','option'); ?>"><?php //the_field('footer_cta_mobile','option'); ?></a>
	</section> -->

</div><!-- #page -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="contain">
		<div class="site-info">
			<span>&#169; 2015 Clēnera</span>
		</div><!-- .site-info -->
		<div id="footerMenu">
			<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
		</div>
	</div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
