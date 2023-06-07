<?php 


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


//BANNER
function create_post_type(){
  register_post_type('banners',
    array(
      'labels' => array(
      'name' => __('Banners'),
      'singular_name'=> __('Banners')
      ),
      'supports' => array(
        'title', 'editor','thumbnail'
      ),
      'public' => true,
      'has_archive' => true,
      'menu_icon' => 'dashicons-images-alt2',
      'rewrite' => array('slug'=>'banners'),
    ));
}

add_action('init','create_post_type');



// DEFINIR AS MINIATURAS DOS POSTS
add_theme_support( 'post-thumbnails' );
add_image_size('banner',1140,600,true);
add_image_size('produtos',340,240,true);
add_image_size('produtos-recentes',200,140,true);

set_post_thumbnail_size(1280,720,'true');//ajusta a imagem para post em rede sociais |true recorta a imagem

// REGISTRA O CUSTOM NAVIGATION WALKER
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

// REGISTRAR OS MENUS
register_nav_menus( array(
  'principal'=>__('Menu Principal','diverbrink')
));



//GERA TITULO DA HEADER
add_theme_support( 'title-tag');


//BUSCA
register_sidebar(
  array(
    'name' => 'Busca',
    'id' => 'busca',
    'before_widget' => '<div class="blog-search ">',
    'after_widget' => '</div>',
    'before_title' => '<h5>',
    'after_title' => '</h5>',
  ));
ADD_FILTER('excerpt_length',function($lenght){
  return 30;
})
 ?>