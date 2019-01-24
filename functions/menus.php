<?php

add_action('init', 'actiRegisterMenus');

function actiRegisterMenus()
{
    $menus = array(
        'main-menu' => 'Menu Principal',
        'footer-menu' => 'Menu Footer'
    );

    register_nav_menus($menus);
}
