<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>
<main class="page-instrutores">
  <section class="instrutores-header">
    <div class="container">
      <h2>Encontre um<br /> <strong>instrutor certificado</strong></h2>
      <p>Todos os instrutores são certificados pela <strong>Maharishi European Research University (MERU)</strong>, na Holanda, e credenciados pela <Strong>Associação Internacional de Meditação (SIM)</Strong>. </p>
    </div>
  </section>
  <section class="instrutores-selection">
    <div class="container">
      <?php 
        echo do_shortcode( '[mt_render_employees]' );
      ?>
    </div>
  </section>
  <section class="instrutores-footer">
    <div class="container">
      <div>
        <img loading="lazy" class="img-fluid" src=<?php echo get_template_directory_uri() . '/images/instrutores/mt.png' ?>
            alt="mt."><h2>Aprenda a meditar de forma <Strong>simples e fácil</Strong>.</h2>
      </div>
    </div>
  </section>
</main>
<?php get_footer();