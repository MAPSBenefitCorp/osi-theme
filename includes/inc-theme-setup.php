<?php
/**
 * Remove twentytwentytwo hooks
 */
remove_action('wp_head', 'twentytwentytwo_preload_webfonts');
remove_action('admin_init', 'twentytwentytwo_editor_styles');

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

/**
 * Author Link Shortcode
 */
add_shortcode('post_author', function () {
    // get the global post
    global $post;

    // post id
    $post_id = $post->ID;

    // post author id
    $author_id = $post->post_author;

    // author name
    $author_name = get_the_author_meta('display_name', $author_id);

    // author link
    $author_link = get_author_posts_url($author_id);

    // return link
    return '<a href="' . $author_link . '">' . $author_name . '</a>';

});
