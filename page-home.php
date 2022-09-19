<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>
<?php get_template_part('template-parts/headers/header-home'); ?>
<main class="page-home">
  <?php get_template_part('template-parts/flexible-content'); ?>

  <!-- Test plugin rating -->
  <section>
    <div class="container rating w-25">
      <?php echo do_shortcode( get_field('shortcode_review') ); ?>
      <?php //echo do_shortcode('[letsreviewuserrating postid="7" id="7411" title="Já participou da palestra gratuita?" content_title="Dê seu feedback!" format="3" design="2" score_box="on" skin="1"]Agradecemos sua opinião.[/letsreviewuserrating]' );
      ?>
    </div>
  </section>

</main>
<?php get_footer();