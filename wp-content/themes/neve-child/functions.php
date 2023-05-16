<?php

// Action qui permet de charger des scripts dans notre thème

add_action( 'wp_enqueue_scripts', 'neve_enqueue_styles' ); 
function neve_enqueue_styles(){ 
    wp_enqueue_style( 'neve-child-style', get_stylesheet_uri(), array( 'neve-style' ), filemtime(get_stylesheet_directory()) . '/style.css'); }

/* La fonction wpb_admin_menu prend deux arguments : $items (les éléments du menu de navigation )et $args (tableau associatif contenant les options/paramètre du menu: theme_location; l'id du menu; etc)*/
add_filter( 'wp_nav_menu_items', 'wpb_admin_menu', 10, 2 );
function wpb_admin_menu( $items, $args ) {

    // Vérifie si l'utilisateur est connecté, a la capacité de gérer les options et que le menu est situé dans l'emplacement "primary"
    if ( is_user_logged_in() && current_user_can( 'manage_options' ) && $args->theme_location == 'primary' ) {

        // Si toutes les conditions sont remplies, on ajoute un lien vers l'interface d'administration de WordPress à la fin de la liste de menu
        $items .= '<li><a href="' . admin_url() . '">Admin</a></li>';
    }

    // La fonction doit retourner le contenu des éléments du menu, donc on retourne la variable $items
    return $items;
}