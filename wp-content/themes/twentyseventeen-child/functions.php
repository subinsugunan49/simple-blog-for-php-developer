<?php

function twentysixteen_scripts() {
	
	// enqueue style
	wp_enqueue_style('font-awesome', get_stylesheet_directory_uri().'/assets/css/fontawesome.css', true, '1.0', 'all' );
	wp_enqueue_style('owl-carousel', get_stylesheet_directory_uri().'/assets/css/owl.carousel.css', true, '1.0', 'all' );
	wp_enqueue_style('fancybox-css', get_stylesheet_directory_uri().'/assets/css/jquery.fancybox.css', true, '1.0', 'all' );
	wp_enqueue_style('animate-css', get_stylesheet_directory_uri().'/assets/css/animate.css', true, '1.0', 'all' );
	
}
add_action('wp_enqueue_scripts', 'twentysixteen_scripts');

/* and of course you need to add the following hook */
add_filter('get_archives_link', 'theme_get_archives_link');

/*******************CUSTOM**************************************/



	register_nav_menus( array(

		'footer'    => __( 'Footer Menu', 'test' ),
   		'header'    => __( 'Header Menu', 'test' ),
		

	) );



// AJAX

/*option/ Custom Fields /*/


function custom_excerpt_length( $length ) {
        return 30;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


