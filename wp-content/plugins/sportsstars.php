<?php
/*
Plugin Name: Sports Stars
Description: Creates custom post type 'Sports Stars' with taxonomy 'Sports'.
Author: Thomas Olsson
Version: 1.0
*/

// Custom post type - Sports stars
function tholsson_custom_post_type()
{
    $args = array(
        'labels' => array(
            'name' => 'Sports Stars',
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'hierarchical' => true,
    );

    register_post_type('stars', $args);
}

add_action('init', 'tholsson_custom_post_type');

// Taxonomy 'Sports' for custom post type 'Sports Stars'
function tholsson_taxonomy()
{
    $args = array(
        'labels' => array(
            'name' => 'Sports',
            'singular_name' => 'Sport',
        ),
        'public' => true,
        'hierarchical' => false
    );

    register_taxonomy('sports', array('stars'), $args);
}

add_action('init', 'tholsson_taxonomy');
