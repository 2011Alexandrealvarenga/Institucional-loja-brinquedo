<?php /* Template name: pag brinquedao */ ?>
<?php get_header(); ?>
<div class="container brinquedao pt-5 pb-5"><!--brinquedao -->
  <div class="row pt-4">
    <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 d-flex justify-content-center">
      <div class="dizeres">
        <h1 class="h1_titulo">Brinquedão</h1> 
          <p> Nós Diverbrink fabricante de brinquedos somos especializados em Brinquedão. O brinquedão é um playground infantil para áreas internas, especialmente pensadas para buffet,salão de festas, brinquedotecas, escolas, condomínios e muito mais.<p> 
			 <h2 class="h2_titulo">Importância do Brinquedão no seu espaço:</h2>
			 <p> Os Brinquedo Infatil são a maior atração para seu espaço de entretenimento, eles são os responsáveis pela atração principal de todas as festa, bricadeiras e reuniões, oferencendo muita alegria e diversão para as crianças e adultos. Por isso é mais do que necessário ter um brinquedão no seu buffet, escola, condomínio, por ser um brinquedo de grande porte e de alta interatividade o brinquedão se torna o cargo chefe de todos os brinquedos sendo assim um fator decisivo para vendas, locações e entre outros de seu espaço. <p>
		  <h2 class="h2_titulo">Fabricação dos brinquedos Infantil:</h2>
		<p>  Como fabricante de Brinquedos atendemos diversos processos necessários para garantir um brinquedo seguro, bonito, resistente e com um custo acessível para qualquer empreendimento. A 15 anos desempenhamos um trabalho com muito profissionalismo, responsábilidade e cuidado, oferecendo assim produtos de ótima qualidade e um atendimento especial antes e depois da venda. Por isso você pode contar conosco para construção desse brinquedo infantil e muitos outros para seu ambiente.Entre em contato e solicite seu projeto e orçamento grátis
        </p>
      
      </div>
    </div>
    <div class="pt-4 pb-4 col-sm-12 col-md-12 col-xs-12 col-lg-6 ">
      <?php echo do_shortcode( '[smartslider3 slider="5"]' ); ?>
    </div>
  </div>
</div><!--brinquedao -->
<div class="container conteudo-categoria-brinquedao pb-5">
  <?php 
    $paged = (get_query_var('paged')) ? absint(get_query_var('paged')):1;
    // args
    $my_args = array(
      'post_type' => 'post',
      'category_name' => 'brinquedao',          
      'paged' => $paged,
    );  
   
    // query
    $the_query = new WP_Query ( $my_args );
  ?> 
  <div class="card-group mt-4 ">
    <?php if($the_query->have_posts()): ?>
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>  
        <?php get_template_part('template-parts/content'); ?>
          
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    <?php else : ?>
    <?php endif; ?>
  </div>
  <div class="paginacao">
    <?php           
          $big = 999999;
          echo paginate_links(array(
            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big)) ),
            'format' => '?paged=%#%',
            'current' => max(1, get_query_var('paged')),
            'total' => $the_query->max_num_pages,
          ));
  ?>
  </div>
</div>
<?php get_footer(); ?>