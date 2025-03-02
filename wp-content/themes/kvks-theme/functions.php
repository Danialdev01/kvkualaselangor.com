<?php

// Load tailwind
function sv_theme_scripts() {
	wp_enqueue_style( 'output', get_template_directory_uri() . '/src/output.css', array() );
}
add_action( 'wp_enqueue_scripts', 'sv_theme_scripts' );

function sv_theme_scripts_css() {
	wp_enqueue_style( 'output', get_template_directory_uri() . '/src/main.css', array() );
}
add_action( 'wp_enqueue_scripts', 'sv_theme_scripts_css' );


//Theme Options 
add_theme_support('menus');


// Menus
register_nav_menus(
	array(
		'top-menu' => 'Top Menu Location',
		'mobile-menu' => 'Mobile Menu Location',
	)
);

?>