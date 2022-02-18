<?php
/**
 * Enqueue child theme CSS/JS
 */
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('osi-style', get_template_directory_uri() . '/assets/css/style.css');
});