<?php
function rngs_enqueue_scripts() {
    if(!isset($_GET['page']) || $_GET['page'] != "rngs_opts"){
        return;
    }
	wp_register_style('add_bootstrap',get_template_directory_uri().'/assets/bootstrap-4.2.1/css/bootstrap.min.css');
	wp_enqueue_style('add_bootstrap');
	
	wp_register_script('add_jQuery',get_template_directory_uri().'/assets/jQuery/jquery-3.3.1.min.js');
	wp_enqueue_script('add_jQuery');
	
	wp_register_script('add_bootstrap_js',get_template_directory_uri().'/assets/bootstrap-4.2.1/js/bootstrap.min.js');
	wp_enqueue_script('add_bootstrap_js');
	

	
	wp_register_script('options_js_script',get_template_directory_uri().'/includes/ringispil/ringispil_js.js');
	wp_enqueue_media();
	wp_enqueue_script('options_js_script');
	

}