<?php

// Add alt tag to WordPress Gravatar images
function bloggerpilot_gravatar_alt($bloggerpilotGravatar) {
	if (have_comments()) {
		$alt = get_comment_author();
	}
	else {
		$alt = get_the_author_meta('display_name');
	}
	$bloggerpilotGravatar = str_replace('alt=\'\'', 'alt=\'Avatar f&uuml;r ' . $alt . '\'', $bloggerpilotGravatar);
	return $bloggerpilotGravatar;
}
add_filter('get_avatar', 'bloggerpilot_gravatar_alt');

// Includo i fogli di stile del tema padre
add_action( 'wp_enqueue_scripts',
'enqueue_parent_theme_style' );
function enqueue_parent_theme_style() 
{
wp_enqueue_style( 'wl-parent-style', get_template_directory_uri().'/style.css' );
wp_enqueue_style( 'wl-child-style', get_stylesheet_directory_uri() .'/style.css', array( 'parent-style') );
}