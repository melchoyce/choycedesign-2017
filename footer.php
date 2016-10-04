<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MelChoyce.Design
 */

?>

	</div>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<nav class="social" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'footer-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</footer>
</div>
<?php wp_footer(); ?>

</body>
</html>
