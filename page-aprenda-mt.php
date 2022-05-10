<?php
  /*
  Template Name: Aprenda MT
  */
  ?>
<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>
<?php get_template_part('template-parts/headers/header-aprenda-mt'); ?>
<main class="page-aprenda-mt">
  <section class="aprenda-mt-investir position-relative">
    <div class="aprenda-mt-investir-topo">
      <img src="<?php echo get_template_directory_uri() . '/images/aprenda-mt/investir-mobile.png' ?>" alt="Investir">
    </div>
    <div class="container">
      <div class="aprenda-mt-investir-bg position-absolute"></div>
      <div class="row align-items-center justify-content-end">
        <div class="col-12 col-lg-7">
          <div class="text-center text-lg-start">
            <h2>Ao investir no seu bem-estar, você ajuda outras pessoas.</h2>
          </div>
          <p>Somos uma organização sem fins lucrativos comprometida em tornar a Meditação Transcendental ® e seus benefícios acessíveis ao maior número possível de pessoas. Por isso, parte do valor pago no curso é direcionado a projetos que ensinam a MT gratuitamente a milhares de crianças e adultos em todo o mundo.</p>
          <p><strong>Converse com um instrutor para conhecer as condições especiais de pagamento.</strong></p>
        </div>
      </div>
    </div>
  </section>
    <section class="aprenda-mt-footer">
    <div class="container text-center">
      <h2>Dúvidas?</h2>
      <p>Veja as respostas para as <a href="#">perguntas mais frequentes.</a></p>
      <a href="#" class="btn" role="btn">Encontre um instrutor certificado</a>
    </div>
  </section>
</main>
<?php get_footer();