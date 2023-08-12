<?php 
// load JS e CSS
require get_template_directory().'/inc/enqueue.php';




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