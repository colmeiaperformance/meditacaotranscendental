<?php
  /* Template Name: Eventos*/
  ?>
<?php get_header(); ?>
<?php get_template_part('template-parts/sections/navbar'); ?>

<main class="page-eventos">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
<!-- <section class="eventos-footer">
    <div class="container">
      <div>
        <img loading="lazy" class="img-fluid" src=<?php echo get_template_directory_uri() . '/images/instrutores/mt.png' ?>
            alt="mt."><h2>Aprenda a meditar de forma <Strong>simples e fácil</Strong>.</h2>
      </div>
    </div>
</section>     -->
</main>
<?php get_footer();