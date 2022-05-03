<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>
<main class="page-agendamento">
  <section class="agendamento-header">
    <div class="container">
      <h2>Inscreva-se na <br /><strong>palestra introdutória</strong></h2>
      <p>Antes de iniciar o curso, oferecemos uma palestra gratuita para você esclarecer todas suas dúvidas e entender melhor <strong>porque a MT é única</strong>.</p>
    </div>
  </section>
  <section class="agendamento-footer">
    <div class="container">
      <div>
        <img class="img-fluid" src=<?php echo get_template_directory_uri() . '/images/instrutores/mt.png' ?>
            alt="mt."><h2>Aprenda a meditar de forma <Strong>simples e fácil</Strong>.</h2>
      </div>
    </div>
  </section>
</main>
<?php get_footer();