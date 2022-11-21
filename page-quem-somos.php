<?php
  /*
  Template Name: Quem Somos
  */
  ?>
<?php get_header(); ?>
<?php get_template_part('template-parts/sections/navbar'); ?>
<?php get_template_part('template-parts/headers/header-quem-somos'); ?>
<main class="page-quem-somos">
  <?php get_template_part('template-parts/pages/quem-somos/hero'); ?>
  <?php get_template_part('template-parts/pages/quem-somos/sobre'); ?>
  <?php get_template_part('template-parts/pages/quem-somos/projetos'); ?>
  <?php get_template_part('template-parts/pages/quem-somos/origem'); ?>
  <?php get_template_part('template-parts/pages/quem-somos/organizacoes'); ?>
  <?php get_template_part('template-parts/pages/quem-somos/legado'); ?>
  <?php get_template_part('template-parts/pages/quem-somos/footer'); ?>
</main>
<script defer>
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
<script defer>
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