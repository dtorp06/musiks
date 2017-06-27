<?php

// [widget type="music_post_widget" title="Music" count="12" display="list" pagination="on"]

add_shortcode( 'widget', 'widget_shortcode' );
function widget_shortcode( $atts ) {
	// Configure defaults and extract the attributes into variables
	extract( shortcode_atts( 
		array( 
			'type'  => '',
			'title' => '',
		), 
		$atts 
	));

	$args = array(
		'before_widget' => '<div class="box widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-title">',
		'after_title'   => '</div>',
	);

	ob_start();
	the_widget( $type, $atts, $args ); 
	$output = ob_get_clean();

	return $output;
}
?>
