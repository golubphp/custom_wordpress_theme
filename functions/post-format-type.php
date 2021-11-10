<?php

/* ADD POST FORMATS */
function themename_post_formats_setup() {
    add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
}
add_action( 'after_setup_theme', 'themename_post_formats_setup' );

/* Adding Post Type Support */
function themename_custom_post_formats_setup() {
    // add post-formats to post_type 'page'
    add_post_type_support( 'page', 'post-formats' );
 
    // add post-formats to post_type 'my_custom_post_type'
    add_post_type_support( 'review', 'post-formats' );
}
add_action( 'init', 'themename_custom_post_formats_setup' );

/* Add Post Thumbnail */
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-thumbnails', array('post', 'page') );

/* Add custom thumbnail sizes */
if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'custom-image-size', 500, 500, true );
}

/* ADD HOME (BLOG) PAGE POST TYPES SUPPORT */
function home_post_types( $query ) {

	if ( is_home() && $query->is_main_query() )
		$query->set( 'post_type', array( 'post', 'review' ) );

	return $query;
}
add_filter( 'pre_get_posts', 'home_post_types' );


/* ADD AUTHOR PAGE POST TYPES SUPPORT */
function author_post_types( $query ) {

	if ( is_author() && $query->is_main_query() )
		$query->set( 'post_type', array( 'post', 'review' ) );

	return $query;
}
add_filter( 'pre_get_posts', 'author_post_types' );

?>