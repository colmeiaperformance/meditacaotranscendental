<section class="mt-unica-slide">
  <div id="mt-unica-slide" class="swiper unicaSwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img loading="lazy"  src=<?php echo get_template_directory_uri() . '/images/mt-unica/slide1.png' ?> alt="Vídeo" width="100%" height="100%" class="img-1 bd-placeholder-img">
        <div class="container">
          <div class="row">
            <div class="col-6 carousel-caption text-start">
              <h3>Totalmente sem esforço e agradável de praticar</h3>
              <p>Mesmo os mais ansiosos e com a mente muito ativa, podem meditar. A MT é uma técnica natural, que não envolve concentração ou controle da mente.</p>
              <a class="btn" href="<?php echo home_url( '/agendamento/' ); ?>">Participe da palestra gratuita</a>
            </div>
          </div>
        </div>
      </div>
     
      <div class="swiper-slide">
        <img loading="lazy"  src=<?php echo get_template_directory_uri() . '/images/mt-unica/slide2.png' ?> alt="Vídeo" width="100%" height="100%" class=" img-2 bd-placeholder-img">
        <div class="container">
          <div class="row">
            <div class="col-6 carousel-caption text-start">
              <h3>Você pode meditar em qualquer lugar</h3>
              <p>Em casa, no trabalho, na escola, no transporte. Basta sentar confortavelmente com os olhos fechados.</p>
              <a class="btn" href="<?php echo home_url( '/agendamento/' ); ?>">Participe da palestra gratuita</a>
            </div>
          </div>
        </div>
      </div>

      <div class="swiper-slide">
        <img loading="lazy"  src=<?php echo get_template_directory_uri() . '/images/mt-unica/slide3.png' ?> alt="Vídeo" width="100%" height="100%" class="img-3 bd-placeholder-img">
        <div class="container">
          <div class="row">
            <div class="col-6 carousel-caption text-start">
              <h3>Instrução individual e personalizada</h3>
              <p>Você recebe a técnica de forma individualizada por instrutores certificados.</p>
              <a class="btn" href="<?php echo home_url( '/agendamento/' ); ?>">Participe da palestra gratuita</a>
            </div>
          </div>
        </div>
      </div>

      <div class="swiper-slide">
        <img loading="lazy"  src=<?php echo get_template_directory_uri() . '/images/mt-unica/slide4.png' ?> alt="Vídeo" width="100%" height="100%" class="img-4 bd-placeholder-img">
        <div class="container">
          <div class="row">
            <div class="col-6 carousel-caption text-start">
              <h3>Resultados comprovados por evidências científicas</h3>
              <p>Mais de 600 estudos científicos atestam os benefícios da MT para o corpo e a mente.</p>
              <a class="btn" href="<?php echo home_url( '/agendamento/' ); ?>">Participe da palestra gratuita</a>
            </div>
          </div>
        </div>
      </div>

       <div class="swiper-slide">
        <img loading="lazy"  src=<?php echo get_template_directory_uri() . '/images/mt-unica/slide5.png' ?> alt="Vídeo" width="100%" height="100%" class="img-5 bd-placeholder-img">
        <div class="container">
          <div class="row">
            <div class="col-6 carousel-caption text-start">
              <h3>Técnica milenar, com origem na tradição Védica</h3>
              <p>Maharishi Mahesh Yogi, físico indiano e grande cientista da Consciência, reavivou esse conhecimento e o tornou acessível a todas as pessoas</p>
              <a class="btn" href="<?php echo home_url( '/agendamento/' ); ?>">Participe da palestra gratuita</a>
            </div>
          </div>
        </div>
      </div>

      <div class="swiper-slide">
        <img loading="lazy"  src=<?php echo get_template_directory_uri() . '/images/mt-unica/slide6.png' ?> alt="Vídeo" width="100%" height="100%" class="img-6 bd-placeholder-img">
        <div class="container">
          <div class="row">
            <div class="col-6 carousel-caption text-start">
              <h3>Mais de 10 milhões de pessoas praticam a MT em todo mundo</h3>
              <p>A MT não é religião e não envolve crenças nem mudanças no estilo de vida. É para todos!</p>
              <a class="btn" href="<?php echo home_url( '/agendamento/' ); ?>">Participe da palestra gratuita</a>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
  <a class="btn btn-mobile" href="<?php echo home_url( '/agendamento/' ); ?>">Participe da palestra gratuita</a>
</section>

<script>
  jQuery(document).ready(function() {
    var swiper = new Swiper(".unicaSwiper", {
      slidesPerView: 1,
      slidesPerGroup: 1,
      loop: true,
      spaceBetween: 0,
      autoplay: {
        delay: 3000,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
     },
    });
  });
</script>