<?php

function custom_scripts_enqueue() {
    /**
     * wp_enqueue_style
     * @param {String} $handle
     * @param {String} $src
     * @param {Array} $deps
     * @param {String} $version
     * @param {String} $media
     */
    wp_enqueue_style( 'custom_styles', get_template_directory_uri() . '/public/style.css', array(), '1.0.0', 'all' );
    wp_enqueue_script( 'custom_bundled_scripts', get_template_directory_uri() . '/public/bundle.js', array(), '1.0.0', true );
}

add_action('wp_enqueue_scripts', 'custom_scripts_enqueue');

// remove wp-emoji boilerplate
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
