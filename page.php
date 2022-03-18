<?php get_header(); ?>
<?php get_template_part('template-parts/header-home'); ?>
<main>
<section class="px-5">
  <div class="d-flex justify-content-center">
    <div>

      <?php 
  if ( have_posts() ) {
    while ( have_posts() ) {
      the_post(); 
      //
      // Post Content here
      the_content();
      //
    } // end while
  } // end if
  ?>

</div>
</div>
</section>
</main>
<?php get_footer() ?>