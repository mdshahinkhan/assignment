<?php

if ( site_url() == "http://shahin.com" ) {
	define( "VERSION", time() );
} else {
	define( "VERSION", wp_get_theme()->get( "Version" ) );
}

function assignment_theme_setup() {
	load_theme_textdomain( "assignment" );
	add_theme_support( "title-tag" );
	add_theme_support( "post-thumbnails" );
}

add_action( "after_setup_theme", "assignment_theme_setup" );

function assignment_assets() {
	wp_enqueue_style( "bootstrap", "//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css", null, "4.0", "all" );
	wp_enqueue_style( "main", get_stylesheet_uri(), null, VERSION, "all" );
}

add_action( "wp_enqueue_scripts", "assignment_assets" );

function assignment_sidebar() {
	register_sidebar(array(
		'name'          => __( 'Footer Widget', 'assignment' ),
		'id'            => "footersidebar",
		'description'   => __( 'Footer text', 'assignment' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => "</section>\n",
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => "</h2>\n",
	));
}

add_action( "widgets_init", "assignment_sidebar" );