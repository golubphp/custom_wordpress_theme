<?php
/*
add_action('init','possibly_redirect');

function possibly_redirect(){
 global $pagenow;
 if( 'wp-login.php' == $pagenow ) {
  wp_redirect('https://wpmarjan.000webhostapp.com/prijavi-se/');
  exit();
 }
}
*/

/*
function custom_login() {
	echo header("Location: " . get_bloginfo( 'url' ) . "/prijavi-se");
}
add_action('login_head', 'custom_login');
*/

/* Limit Access Dashboard 

function blockusers_init() {
if ( is_admin() && ! current_user_can( 'administrator' ) &&
! ( defined( 'DOING_AJAX' ) && DOING_AJAX ) ) {
wp_redirect( home_url() );
exit;
}
}
add_action( 'init', 'blockusers_init' );
*/



?>