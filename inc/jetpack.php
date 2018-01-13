<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package MelChoyce.Design
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.me/support/infinite-scroll/
 * See: https://jetpack.me/support/responsive-videos/
 */
function choycedesign_2017_jetpack_setup() {
	// Add theme support for Infinite Scroll.
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'choycedesign_2017_infinite_scroll_render',
		'type'      => 'click'
	) );

	// Add theme support for Responsive Videos.
	add_theme_support( 'jetpack-responsive-videos' );

	// Add theme support for Social Menus
	add_theme_support( 'jetpack-social-menu' );

}
add_action( 'after_setup_theme', 'choycedesign_2017_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function choycedesign_2017_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		if ( is_search() ) :
			get_template_part( 'components/content', 'search' );
		else :
			get_template_part( 'components/content', 'list' );
		endif;
	}
}

function choycedesign_2017_social_menu() {
	if ( ! function_exists( 'jetpack_social_menu' ) ) {
		return;
	} else {
		jetpack_social_menu();
	}
}

/**
 * Change width here, rather than `$content_width`, so that this doesn't affect embeds
 */
function choycedesign_2017_photon_args( $args, $image ) {
	$args['w'] = '1000';
	return $args;
}
add_action( 'jetpack_photon_post_image_args', 'choycedesign_2017_photon_args', 10, 2 );
