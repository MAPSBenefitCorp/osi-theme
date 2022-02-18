<?php
/**
 * Enqueue child theme CSS/JS
 */
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('osi-style', get_stylesheet_directory_uri() . '/assets/css/style.css');
});

/**
 * Add new image sizes
 */
// add_image_size('post-archive', 640, 480, true); // 640 pixels wide by 480 pixels tall, hard crop mode

/**
 * Control excerpt length
 */
add_filter('excerpt_length', function ($length) {
    return 15;
}, 999);

add_filter('excerpt_more', function ($more) {
    return '...';
});