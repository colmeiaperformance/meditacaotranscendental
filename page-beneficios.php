<?php
  /*
  Template Name: Benefícios
  */
  ?>
<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>
<?php get_template_part('template-parts/headers/header-beneficios-mt'); ?>
<main class="page-beneficios-mt">
  <section class="hero">
      <div class="container">
        <p>Estamos sempre correndo e preocupados, a ponto de acreditar que a ansiedade e o estresse são uma condição normal da vida. E não são.</p>
        <p>Grande parte das doenças crônicas físicas e mentais tem origem no acúmulo de estresse, causado pelo aumento desequilibrado de hormônios, como adrenalina e cortisol. </p>
        <p>O principal benefício da MT é a promoção de um descanso muito profundo, que <strong>alivia o estresse e a ansiedade</strong> e nos proporciona <strong>paz interior e bem-estar</strong>.</p>
      </div>
  </section>
  <section class="mudou-vida">
    <div class="container">
      <h2>O que dizem os praticantes da <strong>MT</strong></h2>
        <!-- inicio carousel -->
        <div id="mudouvida" class="swiper swiperMudouVida" data-bs-ride="carousel">
          <div class="swiper-wrapper">
            
            <div class="swiper-slide">
                <div class="swiper-mobile">
                    <iframe class="yt-video" width="280" height="200" src="https://www.youtube.com/embed/0g0MFzECtb4"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                  </iframe>
                  <p>
                    David Lynch explica como a MT pode potencializar sua inteligência e sua capacidade criativa.
                  </p>
                </div>
            </div>

              <div class="swiper-slide">
                 <div class="swiper-mobile">
                    <iframe class="yt-video" width="280" height="200" src="https://www.youtube.com/embed/0g0MFzECtb4"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                  </iframe>
                  <p>
                    David Lynch explica como a MT pode potencializar sua inteligência e sua capacidade criativa.
                  </p>
                </div>
            </div>

              <div class="swiper-slide">
                 <div class="swiper-mobile">
                    <iframe class="yt-video" width="280" height="200" src="https://www.youtube.com/embed/0g0MFzECtb4"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                  </iframe>
                  <p>
                    David Lynch explica como a MT pode potencializar sua inteligência e sua capacidade criativa.
                  </p>
                </div>
            </div>

              <div class="swiper-slide">
                 <div class="swiper-mobile">
                    <iframe class="yt-video" width="280" height="200" src="https://www.youtube.com/embed/0g0MFzECtb4"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                  </iframe>
                  <p>
                    David Lynch explica como a MT pode potencializar sua inteligência e sua capacidade criativa.
                  </p>
                </div>
            </div>

          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <!-- final carousel -->
    </div>
  </section>
  <section class="beneficios-pesquisas">
    <div class="container">
      <h2>Pesquisas <strong>científicas</strong></h2>

      <div class="row d-flex align-items-center justify-content-center">

        <div class="col-12 col-lg-6 px-5 pe-lg-2 mb-4 mb-lg-0">
          <div class="row d-flex align-items-center justify-content-center">
            <div class="col-6 d-flex align-items-center justify-content-center ps-2 pe-2">
              <img loading="lazy" class="img-fluid" src=<?php echo get_template_directory_uri() . '/images/o-que-e-mt/universidade.png' ?> alt="Instrutores">
            </div>
            <div class="col-6 d-flex align-items-center justify-content-center ps-2 pe-2">
              <img loading="lazy" class="img-fluid" src=<?php echo get_template_directory_uri() . '/images/o-que-e-mt/universidade.png' ?> alt="Instrutores">
            </div>
            <div class="col-6 d-flex align-items-center justify-content-center ps-2 pe-2">
              <img loading="lazy" class="img-fluid" src=<?php echo get_template_directory_uri() . '/images/o-que-e-mt/universidade.png' ?> alt="Instrutores">
            </div>
            <div class="col-6 d-flex align-items-center justify-content-center ps-2 pe-2">
              <img loading="lazy" class="img-fluid" src=<?php echo get_template_directory_uri() . '/images/o-que-e-mt/universidade.png' ?> alt="Instrutores">
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 ps-2">
          <p>Mais de <strong>600 estudos científicos</strong> foram conduzidos em mais de 200 universidades e escolas de medicina e por renomados institutos de pesquisa. Os resultados foram publicados em mais de 160 periódicos e revistas científicas, com revisão por pares.</p>
        </div>

      </div>

      <div class="text-center">
        <a href="#" class="btn" role="btn">Conheça as principais publicações</a>
      </div>
    </div>
  </section>
  <section class="beneficios-info">
    <div class="container">
      <div class="info d-flex align-items-center">
      <img loading="lazy" class="img-fluid" src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/info.png' ?> alt="Info">
      <p>A Meditação Transcendental não pretende ser um substituto para o tratamento médico especializado. Busque sempre um profissional qualificado para receber seu diagnóstico e orientações sobre qualquer condição de saúde.</p>
    </div>
    </div>
  </section>

</main>
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
<?php get_footer();