<?php 

add_action( 'wp_enqueue_scripts', 'style_theme' );
add_action( 'wp_footer', 'scripts');
add_action( 'after_setup_theme', 'myMenu');
add_action( 'widgets_init', 'register_my_widgets' );


function register_my_widgets(){
	register_sidebar( array(
		'name'          => 'right-sidebar',
		'id'            => "right_sidebar",
		'description'   => 'Описание нашего сайдбара',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => "</div>\n",
		'before_title'  => '<h5 class="widgettitle">',
		'after_title'   => "</h5>\n"
	) );
}

function myMenu() {
	register_nav_menu( 'top', 'Menu on header' );
	add_theme_support( 'post-thumbnails', array( 'post'));
}


function style_theme() {
	   wp_enqueue_style('style', get_stylesheet_uri());
	   wp_enqueue_style('default', get_template_directory_uri() . '/assets/css/default.css');
	   wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/css/fonts.css');
	   wp_enqueue_style('layout', get_template_directory_uri() . '/assets/css/layout.css');
	   wp_enqueue_style('media-queries', get_template_directory_uri() . '/assets/css/media-queries.css');
	}

function scripts() {
	wp_enqueue_scripts('init', get_template_directory_uri() . 'assets/js/init.js');
	wp_enqueue_scripts('init', get_template_directory_uri() . 'assets/js/init.js');
	wp_enqueue_script( 'jquery' );
}
		
?>