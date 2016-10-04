<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package MelChoyce.Design
 */

if ( ! function_exists( 'choycedesign_2017_posted_on' ) ) :
/**
* Prints HTML with meta information for the current post-date/time and author.
*/
function choycedesign_2017_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

	printf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() )
	);
}
endif;

if ( ! function_exists( 'choycedesign_2017_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function choycedesign_2017_entry_footer() {
	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link( esc_html__( 'Leave a comment', 'choycedesign' ), esc_html__( '1 Comment', 'choycedesign' ), esc_html__( '% Comments', 'choycedesign' ) );
		echo '</span>';
	}

	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %s', 'choycedesign' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'<span class="edit-link">',
		'</span>'
	);
}
endif;
