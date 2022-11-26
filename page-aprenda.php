<?php
  /*
  Template Name: Aprenda MT
  */
  ?>
<?php get_header(); ?>
<?php get_template_part('template-parts/sections/navbar'); ?>
<?php get_template_part('template-parts/headers/header-aprenda-mt'); ?>
<main class="page-aprenda-mt">
  <?php get_template_part('template-parts/pages/aprenda/agende'); ?>

  <?php get_template_part('template-parts/flexible-content'); ?>
  
  <?php //get_template_part('template-parts/pages/aprenda/passos'); ?>
  <?php //get_template_part('template-parts/pages/aprenda/curso'); ?>
  <?php //get_template_part('template-parts/pages/aprenda/aprenda'); ?>
  <?php get_template_part('template-parts/pages/aprenda/mudou-vida'); ?>
  <?php get_template_part('template-parts/pages/aprenda/footer'); ?>
</main>
<script defer>
  jQuery(document).ready(function() {
    var swiper = new Swiper(".swiperMudouVida", {
      slidesPerView: 1,
      slidesPerGroup: 1,
      loop: true,
      spaceBetween: 10,
      grabCursor: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
          slidesPerGroup: 1,
          spaceBetween: 50,
        },
        768: {
          slidesPerView: 2,
          slidesPerGroup: 1,
          spaceBetween: 50,
        },
        1024: {
          slidesPerView: 3,
          slidesPerGroup: 1,
          spaceBetween: 50,
        },
      },
    });
  });
</script>
<?php get_footer();