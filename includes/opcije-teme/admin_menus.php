<?php

function oglasi_admin_menus(){
    add_menu_page(
        'Opcije Teme Auto Oglasi',
        'Opcije Teme',
        'edit_theme_options',
        'opcije_teme',
        'opcije_teme_front_end'
    );
}