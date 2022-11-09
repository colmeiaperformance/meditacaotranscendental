<?php get_header(); ?>
<?php get_template_part('template-parts/sections/navbar'); ?>
<main class="page-instrutor">
  <?php echo do_shortcode( '[mt_render_employee]' ); ?>
  <?php get_template_part('template-parts/pages/instrutor/footer'); ?>
</main>
<?php get_footer();