<?php
function ringispil_init_fn() {
    include( 'ringispil-enqueue.php' );
    add_action( 'admin_enqueue_scripts', 'rngs_enqueue_scripts' );
	add_action( 'admin_post_ringispil_slanje', 'ringispil_slanje' ); 
}