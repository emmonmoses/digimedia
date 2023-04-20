<?php
// Enqueue scripts and styles
function my_scripts() {
  // Enqueue Bootstrap CSS
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css' );
  
  // Enqueue Font Awesome CSS
  wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/css/fontawesome.css' );
  
  // Enqueue TemplateMo DigiMedia CSS
  wp_enqueue_style( 'templatemo-digimedia', get_template_directory_uri() . '/assets/css/templatemo-digimedia-v2.css' );
  
  // Enqueue Owl CSS
  wp_enqueue_style( 'owl', get_template_directory_uri() . '/assets/css/owl.css' );
  
  // Enqueue Animated CSS
  wp_enqueue_style( 'animated', get_template_directory_uri() . '/assets/css/animated.css' );
  
  // Enqueue Custom CSS - style.css
  wp_enqueue_style( 'custom', get_stylesheet_uri() );
  
  // Enqueue jQuery
  wp_enqueue_script( 'jquery' );
  
  // Enqueue Bootstrap JS
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js', array( 'jquery' ), false, true );
  
  // Enqueue Owl JS
  wp_enqueue_script( 'owl', get_template_directory_uri() . '/assets/js/owl-carousel.js', array( 'jquery' ), false, true );
  
  // Enqueue ImagesLoaded JS
  wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/assets/js/imagesloaded.js', array( 'jquery' ), false, true );
  
  // Enqueue Custom JS
  wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', array( 'jquery' ), false, true );
}

add_action( 'wp_enqueue_scripts', 'my_scripts' );
