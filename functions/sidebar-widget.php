<?php

/* ADD SIDEBAR */
function auto_oglasi_sidebar() {
    register_sidebar( array(
        'name'          => __( 'Prvi_Sidebar', 'Oglasi' ),
        'id'            => 'sidebar-1',
		'class'			=> 'card',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h5 class="card-header">',
        'after_title'   => '</h5>',
    ) );
 
    register_sidebar( array(
        'name'          => __( 'Drugi_Sidebar', 'Oglasi' ),
        'id'            => 'sidebar-2',
        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'auto_oglasi_sidebar' );

?>