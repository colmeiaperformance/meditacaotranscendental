<?php
$titulo_oqd = get_sub_field('titulo_oqd');
$depoimentos_oqd = get_sub_field('depoimentos_oqd');
$texto_do_botao_oqd = get_sub_field('texto_do_botao_oqd');
$link_do_botao_oqd = get_sub_field('link_do_botao_oqd');
$cor_de_fundo_oqd = get_sub_field('cor_de_fundo_oqd');
?>
<section class="o-que-dizem py-5" style="background-color: <?php if ( $cor_de_fundo_oqd ) { echo $cor_de_fundo_oqd; } else { echo ''; } ?>;">
  <div class="container">
    <div class="col-12 d-flex align-items-center justify-content-center title">
      <h2><?php if ( $titulo_oqd ) { echo $titulo_oqd; } else { echo ''; } ?></h2>
    </div>
    <div class="row">
      <div class="col-12">
        <!-- inicio carousel -->
        <div id="oquedizem" class="swiper swiperOQueDizem" data-bs-ride="carousel">
          <div class="swiper-wrapper">

          <?php foreach ($depoimentos_oqd as $d_oqd) { ?>

            <div class="swiper-slide">
              <div class="container">
                <div class="carousel-caption">
                  <div class="carousel-content d-flex align-items-center text-center justify-content-around">
                    <div class="card-lateral col-10 col-lg-12">
                      <iframe class="yt-video" width="280" height="200" src="<?php if ( $d_oqd['video_oqd'] ) { echo $d_oqd['video_oqd']; } else { echo ''; } ?>"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                      </iframe>
                      <div
                        class="video-text d-flex justify-content-center text-center align-items-center px-2">
                        <p>
                          <?php if ( $d_oqd['descricao_oqd'] ) { echo $d_oqd['descricao_oqd']; } else { echo ''; } ?>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          <?php } ?>


          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <!-- final carousel -->

      </div>

    </div>
    <div class="row mt-4 mt-lg-5">
      <div class="col-12 text-center">
        <a class="btn px-4" href="<?php if ( $link_do_botao_oqd ) { echo $link_do_botao_oqd; } else { echo ''; } ?>" role="button"><?php if ( $texto_do_botao_oqd ) { echo $texto_do_botao_oqd; } else { echo ''; } ?></a>
      </div>
    </div>

  </div>
  <script>
  // jQuery(function() {
  //   jQuery('#oquedizem.slide').carousel({
  //     interval: 8000,
  //     pause: "hover"
  //   });

  //   jQuery('input').focus(function() {
  //     jQuery("#oquedizem").carousel('pause');
  //   }).blur(function() {
  //     jQuery("#oquedizem").carousel('cycle');
  //   });
  // });
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
</section>