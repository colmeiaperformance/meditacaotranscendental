<?php
  /*
  Template Name: Benefícios
  */
  ?>
<?php get_header(); ?>
<?php get_template_part('template-parts/sections/navbar'); ?>
<?php get_template_part('template-parts/headers/header-beneficios-mt'); ?>
<main class="page-beneficios-mt">
<?php get_template_part('template-parts/pages/beneficios/hero'); ?>
<?php get_template_part('template-parts/pages/beneficios/mt-faz'); ?>
<?php get_template_part('template-parts/pages/beneficios/ciencia'); ?>
<?php get_template_part('template-parts/pages/beneficios/o-que-dizem'); ?>
<!-- PS- QUANDO ADD A SECAO PESQUISAS CIENTIFICAS, REMOVER A MARGIN DO CSS INLINE DA SECAO BENEFICIOS INFO-->
<style>
  .page-beneficios-mt .beneficios-info {
  padding-top: 63px;}    
  @media (max-width: 992px) {
  .page-beneficios-mt .beneficios-info {
  padding-top: 27px; }    
  }
</style>
<?php get_template_part('template-parts/pages/beneficios/beneficios'); ?>
<?php get_template_part('template-parts/pages/beneficios/popup'); ?>
</main>
<script defer>
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
<script defer>
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
<!-- <script defer src="https://meditacaotranscedental.activehosted.com/f/embed.php?id=8" type="text/javascript" charset="utf-8"></script> -->
<?php get_footer();