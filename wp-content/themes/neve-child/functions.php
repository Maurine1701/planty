<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'nevechildcss');
function nevechildcss(){
    // Chargement du style.css du thème parent Twenty Twenty
    wp_enqueue_style('neve-child-style', get_template_directory_uri() . '/style.css');
}

// END ENQUEUE PARENT ACTION