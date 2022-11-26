<?php
$titulo_mv = get_sub_field('titulo_mv');
$videos_mv = get_sub_field('videos_mv');
$cor_de_fundo_mv = get_sub_field('cor_de_fundo_mv');
?>
<section class="mudou-vida" style="background-color:<?php if ( $cor_de_fundo_mv ) { echo $cor_de_fundo_mv; } else { echo ''; } ?>;">
  <div class="container">
    <?php if ( $titulo_mv ) { echo '<h2>' . $titulo_mv . '</h2>'; } else { echo ''; } ?>
    <!-- inicio carousel -->
    <div id="mudouvida" class="swiper swiperMudouVida" data-bs-ride="carousel">
      <div class="swiper-wrapper">

      <?php foreach ($videos_mv as $v_mv) { ?>
      
        <div class="swiper-slide">
          <div class="swiper-mobile">
            <iframe class="yt-video" width="280" height="200" src="<?php if ( $v_mv['link_do_video_mv'] ) { echo $v_mv['link_do_video_mv']; } else { echo ''; } ?>"
              title="YouTube video player" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen>
            </iframe>
            <p>
            <?php if ( $v_mv['descricao_video_mv'] ) { echo $v_mv['descricao_video_mv']; } else { echo ''; } ?>
            </p>
          </div>
        </div>        

      <?php } ?>  
        
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
    <!-- final carousel -->
  </div>
</section>
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