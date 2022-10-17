<?php get_header(); ?>
<?php get_template_part('template-parts/sections/navbar'); ?>
<main class="page-agendamento">
<?php get_template_part('template-parts/pages/agendar/header'); ?>
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
  <?php get_template_part('template-parts/pages/agendar/footer'); ?>

</main>
<?php get_footer();