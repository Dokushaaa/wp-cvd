<?php

function cvd_support(){
    register_nav_menus(array(
        'header_menu' => __('Header Menu', 'text_domain')
    ));
    
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','cvd_support');