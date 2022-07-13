<?php
$depoimentos_mtud = get_sub_field('depoimentos_mtud');
$depo_i = 0;
?>

<section class="mt-unica-depoimentos">
  <div class="container">
    <div class="swiper depoimentosSwiper">
      <div class="swiper-wrapper">

        <?php 
          foreach ($depoimentos_mtud as $depo) { ?>

        <div class="swiper-slide text-center">
          <div class="container">
            <div class="depoimento d-block depoimento text-center">
              <div class="quote"></div>
              <p>
                <?php if ( $depo['citacao_mtud'] ) { echo $depo['citacao_mtud']; } else { echo ''; } ?>
              </p>
              <img src=<?php if ( $depo['logo_mtud']['url'] ) { echo $depo['logo_mtud']['url']; } else { echo ''; } ?> alt="<?php echo $depo['logo_mtud']['alt']; ?>"
                class="">
            </div>
          </div>
        </div>

        <?php 
          $depo_i++;
          }
          ?>

      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>
<script>
jQuery(document).ready(function() {
  var swiper = new Swiper(".depoimentosSwiper", {
    slidesPerView: 1,
    slidesPerGroup: 1,
    loop: true,
    loopedSlides: 0,
    spaceBetween: 0,
    autoplay: {
      delay: 3000,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
});
</script>