<?php /* Template name: baby */ ?>
<?php get_header(); ?>
<div class="container kids-play pt-5"><!--brinquedao -->
  <div class="row pt-4 pb-4">
    <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 d-flex justify-content-center">
      <div class="dizeres">
        <h3 class="h3_titulo">Àrea Baby e Cenografia</h3>
        <p>Cenários e Áreas Baby fabricado especialmente para os pequeninos, espaço de muita interatividade e aprendizado para as crianças com a diversão, segurança e conforto.</p>
      </div>
    </div>
    <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 carousel">
      <?php echo do_shortcode( '[smartslider3 slider="7"]' ); ?>
    </div>    
  </div>
  <div class="row">
    <div class="col">      
    </div>
  </div>
</div><!--brinquedao -->
<div class="container conteudo-categoria-kids pb-5">
  <?php 
    $paged = (get_query_var('paged')) ? absint(get_query_var('paged')):1;
    // args
    $my_args = array(
      'post_type' => 'post',
      'category_name' => 'kids-play',          
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