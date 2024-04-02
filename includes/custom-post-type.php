<?php

function cvd_custom_post(){
    $servicePost_label = array(
        'name'          => __('Service Post','textdomain'),
        'singular_name' => __('Service Post','textdomain'),
        'add_new'       => __('Add Service Post', 'textdomain'),
        'add_new_item'  => __('Add new Service Post', 'textdomain'),
        'edit_item'     => __('Edit Service Post', 'textdomain'),
        'all_items'     => __('Service Post', 'textdomain'),
    );

    $servicePost_args = array(
        'labels'            => $servicePost_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'taxonomies'        => array('post_tag','category'),
        'supports'          => array('title', 'editor', 'thumbnail', 'excerpt'),
    );

    register_post_type('servicePost', $servicePost_args);
}

add_action('init', 'cvd_custom_post');


function cvd_custom_trends_post(){
    $trendsPost_label = array(
        'name'          => __('Trends Post','textdomain'),
        'singular_name' => __('Trends Post','textdomain'),
        'add_new'       => __('Add Trends Post', 'textdomain'),
        'add_new_item'  => __('Add new Trends Post', 'textdomain'),
        'edit_item'     => __('Edit Trends Post', 'textdomain'),
        'all_items'     => __('Trends Post', 'textdomain'),
    );

    $trendsPost_args = array(
        'labels'            => $trendsPost_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'taxonomies'        => array('post_tag','category'),
        'supports'          => array('title', 'editor', 'excerpt'),
    );

    register_post_type('trendsPost', $trendsPost_args);
}

add_action('init', 'cvd_custom_trends_post');
?>