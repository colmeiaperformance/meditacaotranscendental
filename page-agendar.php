<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>
<main class="page-agendamento">
  <section class="agendamento-header d-none">
    <div class="container">
      <h2>Inscreva-se na <br /><strong>palestra online e gratuita</strong></h2>
      <p>Selecione abaixo seu Estado e Cidade e veja as datas de sua preferência!<br> 
      A palestra inicial é online e gratuita, assim você pode esclarecer suas dúvidas e entender porque a MT é única. O curso será presencial.</p>
    </div>
  </section>
  <section class="py-5">
    <div class="container">
    <?php
      if ( have_posts() ) {
        while ( have_posts() ) {
          the_post(); 
            the_content();
        } // endwhile
      } // endif
    ?>
    </div>
  </section>
  <section class="agendamento-footer d-none">
    <div class="container">
      <div>
        <img loading="lazy" class="img-fluid" src=<?php echo get_template_directory_uri() . '/images/instrutores/mt.png' ?>
            alt="mt."><h2>Aprenda a meditar de forma <Strong>simples e fácil</Strong>.</h2>
      </div>
    </div>
  </section>
</main>
<?php get_footer();