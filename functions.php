<?php

add_theme_support(
    'post-formats',
    array(
        'link',
        'aside',
        'gallery',
        'image',
        'quote',
        'status',
        'video',
        'audio',
        'chat',
    )
);


add_theme_support('post-thumbnails');
set_post_thumbnail_size(1568, 9999);

add_action('init', 'add_get_val');
function add_get_val()
{ 
    global $wp; 
    $wp->add_query_var('category'); 
    $wp->add_query_var('search'); 
}