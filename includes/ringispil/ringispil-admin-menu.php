<?php

function ringispil_admin_menu(){
    add_menu_page(
        'Ringišpil Opcije',
        'Ringišpil',
        'edit_theme_options',
        'rngs_opts',
        'ringispil_front_end_fn',
		get_template_directory_uri() . '/includes/ringispil/images/icon.png'
    );
}