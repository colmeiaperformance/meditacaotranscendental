<?php
  /* Template Name: Agendamento*/
?>
<?php get_header(); ?>
<?php get_template_part('template-parts/sections/navbar'); ?>
<main class="page-agendamento">
<?php get_template_part('template-parts/headers/header-agendamento'); ?>
<?php get_template_part('template-parts/pages/agendamento/hero'); ?>
  <section class="pb-5">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
  </section>
  <?php get_template_part('template-parts/pages/agendamento/infos'); ?>
  <?php get_template_part('template-parts/pages/agendamento/footer'); ?>
</main>
<?php get_footer();