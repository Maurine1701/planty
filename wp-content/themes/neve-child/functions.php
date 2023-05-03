<?php

// Action qui permet de charger des scripts dans notre thème

add_action( 'wp_enqueue_scripts', 'neve_enqueue_styles' ); 
function neve_enqueue_styles(){ 
    wp_enqueue_style( 'neve-child-style', get_stylesheet_uri(), array( 'neve-style' ), filemtime(get_stylesheet_directory()) . '/style.css'); }

// END ENQUEUE PARENT ACTION