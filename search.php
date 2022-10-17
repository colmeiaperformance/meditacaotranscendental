<?php get_header(); ?>
<?php get_template_part('template-parts/sections/navbar'); ?>
<?php get_template_part('template-parts/headers/header-blog'); ?>
<main class="page-blog">
  <section class="container">
  <div class="row">
    <div class="col-lg-8 pe-lg-4">
      <div class="latest-posts">
        <h2><?php the_archive_title(); ?></h2>
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('template-parts/pages/search/article'); ?>

        <?php endwhile; ?>
        <?php  wp_boostrap_4_pagination();?>
        <?php
          wp_reset_postdata(); 
          else: ?>
        <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
        <?php endif; ?>
      </div>
    </div>
    <div class="col-lg-4 ps-lg-4">
      <?php get_template_part( '/template-parts/sidebar/aside-blog' ) ?>
    </div>
  </div>
  </section>
</main>
<?php get_footer() ?>