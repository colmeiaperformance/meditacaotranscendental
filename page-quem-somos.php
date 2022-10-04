<?php
  /*
  Template Name: Quem Somos
  */
  ?>
<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>
<?php get_template_part('template-parts/headers/header-quem-somos'); ?>
<main class="page-quem-somos">
  <?php get_template_part('template-parts/pages/oquee-mt/hero'); ?>
  <?php get_template_part('template-parts/pages/oquee-mt/sobre'); ?>
  <?php get_template_part('template-parts/pages/oquee-mt/projetos'); ?>
  <?php get_template_part('template-parts/pages/oquee-mt/origem'); ?>
  <?php get_template_part('template-parts/pages/oquee-mt/organizacoes'); ?>
  <?php get_template_part('template-parts/pages/oquee-mt/legado'); ?>
  <?php get_template_part('template-parts/pages/oquee-mt/footer'); ?>
</main>
<script>
  jQuery(document).ready(function() {
    var swiper = new Swiper(".swiperOQueDizem", {
      slidesPerView: 1,
      autoplay: {
        delay: 6000,
      },
      slidesPerGroup: 1,
      loop: true,
      spaceBetween: 0,
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
          spaceBetween: 10,
        },
        768: {
          slidesPerView: 2,
          slidesPerGroup: 1,
          spaceBetween: 10,
        },
        1024: {
          slidesPerView: 3,
          slidesPerGroup: 1,
          spaceBetween: 10,
        },
      },
    });
  });
</script>
<script>
  jQuery(document).ready(function() {
    var swiper = new Swiper(".swiperOrganizacoes", {
      slidesPerView: 1,
      autoplay: {
        delay: 6000,
      },
      slidesPerGroup: 1,
      loop: true,
      spaceBetween: 0,
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
          slidesPerView: 1,
          slidesPerGroup: 1,
          spaceBetween: 0,
        },
        768: {
          slidesPerView: 1,
          slidesPerGroup: 1,
          spaceBetween: 0,
        },
        1024: {
          slidesPerView: 1,
          slidesPerGroup: 1,
          spaceBetween: 0,
        },
      },
    });
  });
</script>
<?php get_footer();