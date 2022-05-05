<?php
/*
Template Name: O que é MT
*/
?>
<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>
<?php get_template_part('template-parts/headers/header-oqueemt'); ?>
<main class="page-oqueemt">
  <section class="oqueemt-hero">
    <div class="container">
      <div class="row d-flex align-items-end justify-content-center">
        <div class="col-12 col-lg-5 text-center pe-lg-4">
         <img class="img-fluid" src=<?php echo get_template_directory_uri() . '/images/oqueemt/mt.png' ?> alt="mt.">
        </div>
        <div class="col-12 col-lg-7">
          <p>A <strong>Meditação Transcendental®</strong> atua na redução do estresse e da ansiedade, pois leva a mente para níveis mais aquietados. Nenhuma crença ou expectativa é necessária para que a prática seja eficaz à promoção da saúde mental e física.</p>
        </div>
      </div>
    </div>
  </section>
  
  <section class="oqueemt-footer">
    <div class="container text-center">
      <h2>Dúvidas?</h2>
      <p>Veja as respostas para as <strong>perguntas mais frequentes.</p>
      <a href="#" class="btn" role="btn">Encontre um instrutor certificado</a>
    </div>
  </section>
</main>
<?php get_footer();