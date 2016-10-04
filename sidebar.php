<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MelChoyce.Design
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
	<aside id="secondary" class="widget-area" role="complementary">

		<?php choycedesign_2017_social_menu(); ?>
	
		<?php dynamic_sidebar( 'sidebar-1' ); ?>

	</aside>
