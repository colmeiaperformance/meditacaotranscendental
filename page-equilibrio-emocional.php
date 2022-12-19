<?php
  /*
  Template Name: Benefícios - Itens
  */
  ?>
<?php get_header(); ?>
<?php get_template_part('template-parts/sections/navbar'); ?>
<?php get_template_part('template-parts/headers/header-beneficios-2'); ?>
<main class="page-beneficios-items">
  <?php get_template_part('template-parts/pages/beneficios-2/hero'); ?> 
  <?php get_template_part('template-parts/pages/beneficios-2/equilibrio'); ?> 
  <?php get_template_part('template-parts/pages/beneficios-2/quote'); ?>  
  <?php get_template_part('template-parts/pages/beneficios-2/o-que-dizem'); ?>
  <?php get_template_part('template-parts/pages/beneficios-2/ciencia'); ?>    
  <?php get_template_part('template-parts/pages/beneficios-2/footer'); ?>
  <?php get_template_part('template-parts/pages/beneficios/popup'); ?>
</main>
<script>
  jQuery(document).ready(function() {
    var swiper = new Swiper(".swiperMudouVida", {
      slidesPerView: 1,
      slidesPerGroup: 1,
      loop: true,
      spaceBetween: 0,
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
          slidesPerGroup: 2,
          spaceBetween: 40,
        },
        768: {
          slidesPerView: 2,
          slidesPerGroup: 2,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 3,
          slidesPerGroup: 3,
          spaceBetween: 40,
        },
      },
    });
  });
</script> 
<script>
  jQuery(document).ready(function() {
    var swiper = new Swiper(".swiperCiencia", {
      slidesPerView: 1,
      slidesPerGroup: 1,
      loop: false,
      spaceBetween: 0,
      grabCursor: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  });
</script>
<!-- <script src="https://meditacaotranscedental.activehosted.com/f/embed.php?id=8" type="text/javascript" charset="utf-8"></script> -->
<?php get_footer();