<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

    function neve-child-css() {
        wp_enqueue_style( 'neve-child-style', get_stylesheet_uri(), array( 'neve-style' ), filemtime(get_stylesheet_directory()) . '/style.css');
    }

add_action( 'wp_enqueue_scripts', 'neve-child-css' );

// END ENQUEUE PARENT ACTION