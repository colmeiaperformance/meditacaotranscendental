<section class="mt-unica-depoimentos">
  <div class="container">
    <div class="swiper depoimentosSwiper">
      <div class="swiper-wrapper">

          <div class="swiper-slide text-center">
            <div class="container">
              <div class="depoimento d-block depoimento text-center">
                <div class="quote"></div>
                <p>
                  Talvez o maior benefício seja o fato de que a MT é relativamente rápida de se aprender e fácil de se dominar. Não é necessário meses de prática para perceber os resultados.
                </p>
                <img src=<?php echo get_template_directory_uri() . '/images/mt-unica/forbes.png' ?> alt="Forbes" class="forbes">
              </div>
            </div>
          </div>

          <div class="swiper-slide text-center">
            <div class="container">
              <div class="depoimento d-block depoimento text-center">
                <div class="quote"></div>
                <p>
                  A MT não se concentra na respiração, como outras formas de meditação. Em vez disso, incentiva um estado de espírito repousante, que vai além do pensamento.            
                </p>
                <img src=<?php echo get_template_directory_uri() . '/images/mt-unica/clevelandclinic.png' ?> alt="Cleveland Clinic" class="forbes">
              </div>
            </div>
          </div>

          <div class="swiper-slide text-center">
            <div class="container">
              <div class="depoimento d-block depoimento text-center">
                <div class="quote"></div>
                <p>
                  A MT é uma técnica simples e natural. Essa forma de meditação permite que seu corpo se estabeleça em estado profundo de repouso e de relaxamento.
                </p>
                <img src=<?php echo get_template_directory_uri() . '/images/mt-unica/mayoclinic.png' ?> alt="Mayo Clinic" class="forbes">
              </div>
            </div>
          </div>

          <div class="swiper-slide text-center">
            <div class="container">
              <div class="depoimento d-block depoimento text-center">
                <div class="quote"></div>
                <p>
                  Um estudo científico mostra que a MT pode ter ajudado a aliviar sintomas de estresse pós-traumático e a melhorar a qualidade de vida de veteranos de guerras.
                </p>
                <img src=<?php echo get_template_directory_uri() . '/images/mt-unica/time.png' ?> alt="Time " class="forbes">
              </div>
            </div>
          </div>
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