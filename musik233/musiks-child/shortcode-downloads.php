<?php
/*
 * remove the default [downloads] shortcode from Easy Digital Downloads
 * and then rebuild it with full control
 */

// remove default EDD [downloads] shortcode
remove_shortcode( 'downloads' );

// rebuild [downloads] shortcode
function my_custom_edd_downloads_query() {
	$size = get_theme_mod( 'track-pagesize' ) ? get_theme_mod( 'track-pagesize' ) : '12';
	the_widget( 'music_post_widget', 'pagination=on&count='.$size );
}
add_shortcode( 'downloads', 'my_custom_edd_downloads_query' );
