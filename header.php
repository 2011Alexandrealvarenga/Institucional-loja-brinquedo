<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta <?php bloginfo('charset'); ?>>
  <title>DiverBrink | Brinquedos por encomenda.</title>
  <meta property="og:title" content="DiverBrink | Brinquedos por encomenda." />
  <meta name="description" content="DiverBrink | Brinquedos, Eletrônicos, obstaculos feitos por encomenda." />
  <meta property="og:description" content="DiverBrink | Brinquedos, Eletrônicos, obstaculos feitos por encomenda." />
  <link href="<?php bloginfo('template_url'); ?>/assets/img/favicon.png" rel="shortcut icon">
  <?php wp_head(); ?>
</head>
<body>
<header id="header">
  <div class="container logo" >
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5">
        <div class="logo-img">
          <a href="<?php bloginfo('home'); ?> " alt="" title="">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/logo/proj2.png" alt="ir para logo diverbrink" title="logo diverbrink">          
          </a>
        </div>
      </div>
      <div class="col-md-12 col-lg-4 col-xl-4 form">
        <div class="row">
          <div class="col-12 ">            
              <?php //FORMULARIO DE BUSCA
              dynamic_sidebar('Busca'); ?>            
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3  pb-2 coluna-busca">        
        <div class="row telefone justify-content-end">
          <div class="conteudo-phone">
            <div class="phone">
              <span>SAC: (11) 3983-1936</span>
              <i class="icon-phone-outline"></i> 
            </div>
            <div class="cel">
              <span>(11) 3384-3939</span> 
              <i class="icon-phone-outline"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar menu navbar-expand-lg navbar-light" role="navigation">
    <div class="container">
    <a class="navbar-brand" href="#" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation"  alt="ir para menu" title="menu">Menu</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
    </button>
    </button>
      <?php
      wp_nav_menu( array(
        'theme_location'    => 'principal',
        'depth'             => 2,
        'container'         => 'div',
        'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'bs-example-navbar-collapse-1',
        'menu_class'        => 'nav navbar-nav collapse navbar-collapse d-flex flex-wrap justify-content-between  ',
        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        'walker'            => new WP_Bootstrap_Navwalker(),
      ) );
      ?>
    </div>
  </nav>
</header>