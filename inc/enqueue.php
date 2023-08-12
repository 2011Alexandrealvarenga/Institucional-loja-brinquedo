<?php 
function dvbrink_css_enqueue() {

  if(is_home() || is_front_page() || is_page('inicio')){    
    wp_enqueue_style( 'home', get_template_directory_uri() . '/assets/css/home.css', array(), '1.1', 'all');
  }
} 
add_action( 'wp_enqueue_scripts', 'dvbrink_css_enqueue');
function load_scripts(){
  wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array( 'jquery' ), '4.0.0', true );
  
  wp_enqueue_style( 'baguetteBox', 'https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css', array(), 
  '1.0', 'all' );
  wp_enqueue_style( 'font-awe', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', array(), 
  '1.0', 'all' );
  wp_enqueue_style( 'font-titulo', 'https://fonts.googleapis.com/css2?family=Baloo+Tamma+2&display=swap', array(), 
  '1.0', 'all' );
  wp_enqueue_style( 'font-p', 'https://fonts.googleapis.com/css2?family=Baloo+Tamma+2&display=swap', array(), 
  '1.0', 'all' );
  
  wp_enqueue_style( 'favicon', get_template_directory_uri() . '/assets/img/favicon.png', array(), 
  '1.0', 'all' );
  wp_enqueue_style( 'fontello', get_template_directory_uri() . '/assets/css/fontello.css', array(), 
  '1.0', 'all' );
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), 
  '1.0', 'all' );
  wp_enqueue_style( 'css-style', get_template_directory_uri() . '/assets/css/style.css', array(), 
  '1.0', 'all' );
  wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/style.css', array(), 
  '1.0', 'all' );
  
  }
  //chama a função load_scripts
  add_action( 'wp_enqueue_scripts', 'load_scripts' );

