<?php

/* Remove the Admin Toolbar */
add_filter('show_admin_bar', '__return_false');


include( get_template_directory() . '/functions/enqueue-files.php' );
include( get_template_directory() . '/functions/menu-functions.php' );
include( get_template_directory() . '/functions/post-format-type.php' );
include( get_template_directory() . '/functions/pagination-code.php' );
include( get_template_directory() . '/functions/sidebar-widget.php' );
include( get_template_directory() . '/functions/excerpt-example.php' );
include( get_template_directory() . '/functions/custom-header-logo.php' );
include( get_template_directory() . '/functions/limit-access-dashboard.php' );
/* CUSTOMIZER API */
include( get_template_directory() . '/customizer/customize-header.php' );
include( get_template_directory() . '/customizer/customize-footer.php' );
include( get_template_directory() . '/customizer/customize-page-pocetna.php' );

// BREADCRUMBS
include( get_template_directory() . '/includes/breadcrumbs/breadcrumbs.php' );
	
require_once(ABSPATH . "wp-admin" . '/includes/image.php');
require_once(ABSPATH . "wp-admin" . '/includes/file.php');
require_once(ABSPATH . "wp-admin" . '/includes/media.php');



/* ADD BOOTSTRAP NAV WALKER CLASS FOR MENU */
if ( ! file_exists( get_template_directory() . '/wp-bootstrap-navwalker.php' ) ) {
	// file does not exist... return an error.
	return new WP_Error( 'wp-bootstrap-navwalker-missing', __( 'It appears the wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
	// file exists... require it.
    require_once get_template_directory() . '/wp-bootstrap-navwalker.php';
}


/* Includes OPCIJE TEME 
include( get_template_directory() . '/includes/activate.php' );
include( get_template_directory() . '/includes/admin_menus.php' );
include( get_template_directory() . '/includes/options_page.php' );
include( get_template_directory() . '/includes/init.php' );
include( get_template_directory() . '/includes/save-options.php' );
//  Action and Filter Hooks OPCIJE TEME
add_action( 'after_switch_theme', 'oglasi_activate' );
add_action( 'admin_menu', 'oglasi_admin_menus' );
add_action( 'admin_init', 'cu_admin_init' );
*/

/* VIZIT KARTA PLUGIN */
require_once( get_template_directory() . '/includes/vizit-karta/vizit-karta.php');

/* RINGISPIL PLUGIN */
include( get_template_directory() . '/includes/ringispil/ringispil-activate.php' );
add_action( 'after_switch_theme', 'ringispil_activate_fn' );
include( get_template_directory() . '/includes/ringispil/ringispil-admin-menu.php' );
add_action( 'admin_menu', 'ringispil_admin_menu' );
include( get_template_directory() . '/includes/ringispil/ringispil-front-end.php' );
include( get_template_directory() . '/includes/ringispil/ringispil-init.php' );
include( get_template_directory() . '/includes/ringispil/ringispil-options.php' ); 
add_action( 'admin_init', 'ringispil_init_fn' );

/* Add Custom Styles to the WordPress Visual Editor */

function add_style_select_buttons( $buttons ) {
    array_unshift( $buttons, 'styleselect' );
    return $buttons;
}
// Register our callback to the appropriate filter
add_filter( 'mce_buttons_2', 'add_style_select_buttons' );


/* Add custom styles to the WordPress editor */

function my_custom_styles( $init_array ) {  
 
    $style_formats = array(  
        // These are the custom styles

        array(  
            'title' => 'Highlighter',  
            'inline' => 'span',  
            'classes' => 'highlighter',

        ),
    );  
    // Insert the array, JSON ENCODED, into 'style_formats'
    $init_array['style_formats'] = json_encode( $style_formats );  
    
    return $init_array;  
  
} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'my_custom_styles' );


/* see your styles in the editor when they are being applied */


//add_editor_style( get_template_directory_uri() .'custom_editor_styles.css');
add_theme_support( 'editor-styles' );
add_editor_style('my-editor-style.css');
//add_editor_style( get_template_directory_uri() . 'my-editor-style.css' );


