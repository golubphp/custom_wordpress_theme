<?php

/*  CSS I JAVASCRIPT */

function theme_register_scripts() {

	wp_register_style('add_bootstrap',get_template_directory_uri().'/assets/bootstrap-4.2.1/css/bootstrap.min.css');
	wp_enqueue_style('add_bootstrap');
	
	wp_register_script('add_jQuery',get_template_directory_uri().'/assets/jQuery/jquery-3.3.1.min.js');
	wp_enqueue_script('add_jQuery');
	
	wp_register_script('add_bootstrap_js',get_template_directory_uri().'/assets/bootstrap-4.2.1/js/bootstrap.min.js');
	wp_enqueue_script('add_bootstrap_js');
	
	/* STYLING WIDGETS ITEMS */
	wp_register_script('add_widgets_items_style',get_template_directory_uri().'/assets/jQuery/widgets_items.js');
	wp_enqueue_script('add_widgets_items_style');
	
	wp_register_script('custom_js_code',get_template_directory_uri().'/assets/jQuery/custom_js.js');
	wp_enqueue_script('custom_js_code');
	
	wp_register_script('add_popper',get_template_directory_uri().'/assets/js/popper.min.js');
	wp_enqueue_script('add_popper');
			
	wp_register_style('main_css',get_template_directory_uri().'/style.css');
	wp_enqueue_style('main_css');

	wp_register_style('custom_login_css',get_template_directory_uri().'/assets/css/custom-login.css');
	wp_enqueue_style('custom_login_css');
	

/* CUSTOMERS CAROUSEL */	

	wp_register_script('carousel_modernizer',get_template_directory_uri().'/includes/carousel/js/modernizr.custom.17475.js');
	wp_enqueue_script('carousel_modernizer');

	wp_register_script('elastislide_js',get_template_directory_uri().'/includes/carousel/js/jquery.elastislide.js');
	wp_enqueue_script('elastislide_js');	
	
	wp_register_script('jq_custom',get_template_directory_uri().'/includes/carousel/js/jquerypcustom.js');
	wp_enqueue_script('jq_custom');
	
	wp_register_style('carousel_demo',get_template_directory_uri().'/includes/carousel/css/demo.css');
	wp_enqueue_style('carousel_demo');
	
	wp_register_style('carousel_elastislide',get_template_directory_uri().'/includes/carousel/css/elastislide.css');
	wp_enqueue_style('carousel_elastislide');
	
/* END CUSTOMERS CAROUSEL */

/* GALLERY SCRIPTS */

if( is_page( 'galerija' ) ) {
	wp_register_script('lightbox_Gallery',get_template_directory_uri().'/includes/galerija/lightbox/js/lightbox-2.6.min.js');
	wp_enqueue_script('lightbox_Gallery');
	
	wp_register_script('lightbox_custom_jQ',get_template_directory_uri().'/includes/galerija/lightbox/custom_lb.js');
	wp_enqueue_script('lightbox_custom_jQ');
	
	wp_register_style('lightbox_css',get_template_directory_uri().'/includes/galerija/lightbox/css/lightbox.css');
	wp_enqueue_style('lightbox_css');
}	

if( is_page( 'pocetna' ) ) {

}


/*
	wp_register_style('editor_style',get_template_directory_uri().'/editor-styles.css');
	wp_enqueue_style('editor_style');
*/

}
add_action( 'wp_enqueue_scripts', 'theme_register_scripts', 1 );

?>