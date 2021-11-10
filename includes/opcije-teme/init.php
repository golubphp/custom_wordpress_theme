<?php
function cu_admin_init() {
    include( 'enqueue.php' );
    add_action( 'admin_enqueue_scripts', 'cu_admin_enqueue' );
	add_action( 'admin_post_spremanje_podataka', 'spremanje_podataka' ); 
}