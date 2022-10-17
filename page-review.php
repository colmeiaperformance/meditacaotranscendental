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

  <!-- Test plugin rating -->
  <section>
  <div class="container rating w-25">
    <?php echo do_shortcode( get_field('shortcode_review') ); ?>
    <?php //echo do_shortcode('[letsreviewuserrating postid="7" id="7411" title="Já participou da palestra gratuita?" content_title="Dê seu feedback!" format="3" design="2" score_box="on" skin="1"]Agradecemos sua opinião.[/letsreviewuserrating]' );
    ?>
  </div>
  </section>

  <?php get_template_part('template-parts/pages/agendar/footer'); ?>

</main>
<?php get_footer();