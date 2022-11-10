<?php
  /* Template Name: Blog*/
  ?>
<?php get_header(); ?>
<?php get_template_part('template-parts/sections/navbar'); ?>
<?php get_template_part('template-parts/headers/header-blog'); ?>
<main class="page-blog">
  <section class="container">
    <div class="row">
      <div class="col-lg-8 pe-lg-4">
        <?php get_template_part('template-parts/pages/blog/destaque'); ?>
        <?php get_template_part('template-parts/pages/blog/posts'); ?>
      </div>
      <div class="col-lg-4 ps-lg-4">
        <?php get_template_part( '/template-parts/sidebar/aside-blog' ) ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer() ?>
<script defer>
jQuery(document).ready(function() {
  const swiper = new Swiper('.swiperFeaturedBlog', {
    // Optional parameters
    loop: true,
    loopedSlides: 0,
    slidesPerView: 1,

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      spaceBetween: 10
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    }

  });

});
</script>