<?php

function overseas_files() {
    wp_enqueue_script('slider', get_theme_file_uri('/src/dist/app.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css');
    wp_enqueue_style('montserrat-fonts', '//fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@100;200;300;400;500;600;700&family=Montserrat:wght@100;200;300;400;500;600;700&display=swap');
    wp_enqueue_style('app.css', get_template_directory_uri() . '/dist/dist/app.css', [], 1, 'all');
}

add_action('wp_enqueue_scripts', 'overseas_files');

// add_filter('ai1wm_exclude_content_from_export', 'ignoreCertainFiler');

// function ignoreCertainFiler($exclude_filters) {
//     $exclude_filters[] = 'themes/Overseas/node_modules';
//     return $exclude_filters;
// }