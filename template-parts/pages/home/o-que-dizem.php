<section class="o-que-dizem">
  <div class="container">
    <div class="text-center">
      <h2>O que dizem sobre a <strong>MT</strong>?</h2>
    </div>
    <!-- inicio carousel -->
    <div id="mudouvida" class="swiper swiperMudouVida" data-bs-ride="carousel">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="swiper-mobile">
            <iframe class="yt-video" width="280" height="200" src="https://www.youtube.com/embed/j_sxv44iMI4"
              title="YouTube video player" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
            <p>
              Flávio Canto fala como conseguiu alcançar o sonho olímpico com a ajuda da MT.
            </p>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="swiper-mobile">
            <iframe class="yt-video" width="280" height="200" src="https://www.youtube.com/embed/kq9kiKb0hUo"
              title="YouTube video player" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
            <p>
              “Vale cada centavo”. Renato conta como a MT o ajudou em sua compulsão alimentar e a emagrecer 60 Kg.
            </p>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="swiper-mobile">
            <iframe class="yt-video" width="280" height="200" src="https://www.youtube.com/embed/0Wf441fXCeI"
              title="YouTube video player" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
            <p>
              Foco, energia, plenitude e saúde: o que mudou na vida de 5 pessoas após a MT.
            </p>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="swiper-mobile">
            <iframe class="yt-video" width="280" height="200" src="https://www.youtube.com/embed/ew4-dvXenOA"
              title="YouTube video player" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
            <p>
              André Genesini seguiu a recomendação da American Heart Association e começou praticar a MT para reduzir a pressão,
              mas os resultados foram bem mais surpreendentes.
            </p>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="swiper-mobile">
            <iframe class="yt-video" width="280" height="200" src="https://www.youtube.com/embed/1MdDr566fGsA"
              title="YouTube video player" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
            <p>
              Dr. Roberto Botelho, cardiologista, afirma: “Como médico, tenho que prescrever a MT para meus pacientes”.
            </p>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="swiper-mobile">
            <iframe class="yt-video" width="280" height="200" src="https://www.youtube.com/embed/ipjzNre_ANU"
              title="YouTube video player" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
            <p>
              Sindrome do Pânico e Depressão. Meditação Transcendental transformando vidas
            </p>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="swiper-mobile">
            <iframe class="yt-video" width="280" height="200" src="https://www.youtube.com/embed/ipjzNre_ANU"
              title="YouTube video player" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
            <p>
              Sindrome do Pânico e Depressão. Meditação Transcendental transformando vidas
            </p>
          </div>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
    <!-- final carousel -->
    <div class="text-center">
      <a class="btn px-4" href="<?php echo home_url( '/instrutores/' ); ?>" role="button">
      Encontre um instrutor
      </a>
    </div>
  </div>
</section>
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