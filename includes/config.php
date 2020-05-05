<?php 

// Prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

// Ajouter une taille d'image
add_image_size( 'gallery-thumb', 1200, 800, true );

// Menus
register_nav_menus( array(
  'main' => __( 'Main menu', 'capitaine' ),
) );


// Script et styles
function capitaine_assets() {

  wp_enqueue_style( 'capitaine', get_stylesheet_uri(), array(), '1.0' );

  wp_deregister_script( 'jquery' );
  wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, '3.3.1', true );

  // Charger notre script
  wp_enqueue_script( 'capitaine', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0', true );

  // Flexlider (pour le cours sur la galerie)
  wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/lib/flexslider/jquery.flexslider-min.js', array( 'jquery' ), '2.7.2', true );
  wp_enqueue_style( 'flexslider', get_template_directory_uri() . '/lib/flexslider/flexslider.css', array(), '2.7.2' );

}
add_action( 'wp_enqueue_scripts', 'capitaine_assets' );