<?php

// Includo i fogli di stile
add_action( 'wp_enqueue_scripts',
'enqueue_parent_theme_style' );
function enqueue_parent_theme_style() 
{
wp_enqueue_style( 'wl-parent-style', get_template_directory_uri().'/style.css' );
wp_enqueue_style( 'wl-child-style', get_stylesheet_directory_uri() .'/style.css', array( 'parent-style') );
}