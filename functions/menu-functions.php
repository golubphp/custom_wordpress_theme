<?php

/* Add menu support */
if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}

/* Register Nav Menu */
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'Marjan_Blog' ),
));



/*LOGIN AND LOGOUT MENU*/
function my_wp_nav_menu_args( $args = '' ) {
 
if( is_user_logged_in() ) { 
    $args['menu'] = 'Glavni_Meni_Logged_In';
} else { 
    $args['menu'] = 'Glavni_Meni_Logged_Out';
} 
    return $args;
}
add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );

/* ADD PLACEHOLDER TO DISPLAY LOGGED NAME IN NAV MENU */
function give_profile_name2(){
    $user=wp_get_current_user();
	if(!$user->exists()){
        $name = " ";
	} else {
         $name = $user->user_firstname; 
	}
    return $name;
}

add_shortcode('user_name', 'give_profile_name2');


function my_dynamic_menu_items2( $menu_items ) {
    
    foreach ( $menu_items as $menu_item ) {
        if ( '#user_name#' == $menu_item->title ) {
            global $shortcode_tags;
            if ( isset( $shortcode_tags['user_name'] ) ) {
				global $current_user; 
				wp_get_current_user();
				$menu_item->title =  $current_user->display_name;
            }
        }
		
    }

    return $menu_items;
}
add_filter( 'wp_nav_menu_objects', 'my_dynamic_menu_items2', 99 );


?>