<?php get_header(); ?>
<?php get_template_part('template-parts/sections/navbar'); ?>
<?php get_template_part('template-parts/pages/single/breadcrumb'); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('template-parts/headers/header-single'); ?>
<main class="page-blog">
  <section class="container">
    <div class="row">
      <div class="col-lg-8 pe-lg-4">
      <?php get_template_part('template-parts/pages/single/article'); ?>
        <?php // get_template_part('template-parts/pages/single/author'); ?>
          
          <?php endwhile; wp_reset_postdata(); ?>   
            <?php else : ?>
              <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
            <?php endif; ?>
      </div>
      <div class="col-lg-4 ps-lg-4">
        <?php get_template_part( '/template-parts/sidebar/aside-single' ) ?>
      </div>
    </div>
  </section>
</main>
<script>
jQuery(document).ready(function() {
  loadMore();
});
</script>
<?php get_footer() ?>