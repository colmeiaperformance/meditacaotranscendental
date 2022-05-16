<?php
  /*
  Template Name: Aprenda MT
  */
  ?>
<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>
<?php get_template_part('template-parts/headers/header-aprenda-mt'); ?>
<main class="page-aprenda-mt">
  <section class="agende-mt">
    <div class="container text-center d-none d-lg-block">
      <div class="text d-none d-lg-block">
        <p>A MT é uma técnica <strong>simples, natural e sem esforço</strong> que pode ser praticada por qualquer pessoa, <span>a partir dos 5 anos de idade</span>.</p>
        <p>O <Strong>primeiro passo</Strong> é participar de uma <span>palestra online gratuita</span>.</p>
      </div>
      <a href="#" class="btn">Agende sua participação</a>
    </div>
    <div class="container text-center d-block d-lg-none">
      <div class="text d-block d-lg-none">
      <h2>O <Strong>primeiro passo</Strong> é participar de uma <span>palestra online gratuita</span>.</h2>
      <p><strong>Selecione abaixo e agende sua participação</strong>. <br/> Você pode escolher por localidade ou pelo nome de um instrutor.</p>
      <form>
        <select class="form-select" aria-label="Cidade">
            <option selected>Cidade</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
          <select class="form-select" aria-label="Estado">
            <option selected>Estado</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
          <select class="form-select" aria-label="Selecione um instrutor">
            <option selected>Selecione um instrutor</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
          <button class="btn">
            Ver Datas
          </button>
      </form>
    </div>
    </div>

  </section>
  <section class="aprenda-mt-investir position-relative">
    <div class="aprenda-mt-investir-topo">
      <img src="<?php echo get_template_directory_uri() . '/images/aprenda-mt/investir-mobile.png' ?>" alt="Investir">
    </div>
    <div class="container">
      <div class="aprenda-mt-investir-bg position-absolute"></div>
      <div class="row align-items-center justify-content-end">
        <div class="col-12 col-lg-7">
          <div class="text-center text-lg-start">
            <h2>Ao investir no seu bem-estar, você ajuda outras pessoas.</h2>
          </div>
          <p>Somos uma organização sem fins lucrativos comprometida em tornar a Meditação Transcendental ® e seus benefícios acessíveis ao maior número possível de pessoas. Por isso, parte do valor pago no curso é direcionado a projetos que ensinam a MT gratuitamente a milhares de crianças e adultos em todo o mundo.</p>
          <p><strong>Converse com um instrutor para conhecer as condições especiais de pagamento.</strong></p>
        </div>
      </div>
    </div>
  </section>
  <section class="o-que-dizem py-5">
    <div class="container">
      <div class="col-12 d-flex align-items-center justify-content-center title">
        <h2>O que dizem sobre a <strong>MT</strong> ?</h2>
      </div>
      <div class="row">
        <div class="col-12">
          <!-- inicio carousel -->
          <div id="oquedizem" class="swiper swiperVisiteBlog" data-bs-ride="carousel">
            <div class="swiper-wrapper">

              <div class="swiper-slide">
                <div class="container">
                  <div class="carousel-caption">
                    <div class="carousel-content d-flex align-items-center text-center justify-content-around">
                      <div class="card-lateral lateral-right col-10 col-lg-12">
                        <iframe class="yt-video" width="280" height="200" src="https://www.youtube.com/embed/0g0MFzECtb4"
                          title="YouTube video player" frameborder="0"
                          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                          allowfullscreen>
                        </iframe>
                        <div
                          class="video-text d-flex justify-content-center text-center align-items-center px-2">
                          <p>
                            David Lynch explica como
                            a MT pode potencializar sua
                            inteligência e sua capacidade criativa.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="container">
                  <div class="carousel-caption">
                    <div class="carousel-content d-flex align-items-center text-center justify-content-around">
                      <div class="card-centro col-10 col-lg-12">
                        <iframe class="yt-video" width="490" height="300" src="https://www.youtube.com/embed/QLcXzcWtPHY"
                          title="YouTube video player" frameborder="0"
                          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                          allowfullscreen>
                        </iframe>
                        <div
                          class="video-text d-flex justify-content-center text-center align-items-center">
                          <p>
                            Flávio Canto fala como conseguiu
                            alcançar o sonho olímpico
                            com a ajuda da MT.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="container">
                  <div class="carousel-caption">
                    <div class="carousel-content d-flex align-items-center text-center justify-content-around">
                      <div class="card-lateral lateral-left col-10 col-lg-12">
                        <iframe class="yt-video" width="280" height="200" src="https://www.youtube.com/embed/Co2_AIWW9YI"
                          title="YouTube video player" frameborder="0"
                          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                          allowfullscreen>
                        </iframe>
                        <div
                          class="video-text d-flex justify-content-center text-center align-items-center px-2">
                          <p>
                            Fernanda Souza conta como
                            a prática diária da
                            MT mudou sua vida.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="container">
                  <div class="carousel-caption">
                    <div class="carousel-content d-flex align-items-center text-center justify-content-around">
                      <div class="card-lateral lateral-right col-10 col-lg-12">
                        <iframe class="yt-video" width="280" height="200" src="https://www.youtube.com/embed/0Wf441fXCeI"
                          title="YouTube video player" frameborder="0"
                          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                          allowfullscreen>
                        </iframe>
                        <div
                          class="video-text d-flex justify-content-center text-center align-items-center px-2">
                          <p>
                          Foco, energia, plenitude e saúde: o que mudou na vida de 5 pessoas após a MT.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="container">
                  <div class="carousel-caption">
                    <div class="carousel-content d-flex align-items-center text-center justify-content-around">
                      <div class="card-centro col-10 col-lg-12">
                        <iframe class="yt-video" width="490" height="300" src="https://www.youtube.com/embed/xz_So-nYeGw"
                          title="YouTube video player" frameborder="0"
                          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                          allowfullscreen>
                        </iframe>
                        <div
                          class="video-text d-flex justify-content-center text-center align-items-center">
                          <p>
                          Gisele Bundchen declara como a MT a ajudou a se conectar com sua verdadeira essência.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="container">
                  <div class="carousel-caption">
                    <div class="carousel-content d-flex align-items-center text-center justify-content-around">
                      <div class="card-lateral lateral-left col-10 col-lg-12">
                        <iframe class="yt-video" width="280" height="200" src="https://www.youtube.com/embed/1MdDr566fGs"
                          title="YouTube video player" frameborder="0"
                          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                          allowfullscreen>
                        </iframe>
                        <div
                          class="video-text d-flex justify-content-center text-center align-items-center px-2">
                          <p>
                          Dr. Roberto Botelho, cardiologista, afirma: “Como médico, tenho que prescrever a MT para meus pacientes”.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
          <!-- final carousel -->

        </div>

      </div>
      <div class="row mt-4 mt-lg-5">
        <div class="col-12 text-center">
          <a class="btn px-4" href="#" role="button"><strong>Encontre um instrutor credenciado</strong></a>
        </div>
      </div>

    </div>
  <script>
  jQuery(document).ready(function() {
    var swiper = new Swiper(".swiperVisiteBlog", {
      slidesPerView: 1,
      slidesPerGroup: 1,
      loop: true,
      spaceBetween: 10,
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
          spaceBetween: 10,
        },
        768: {
          slidesPerView: 2,
          slidesPerGroup: 2,
          spaceBetween: 10,
        },
        1024: {
          slidesPerView: 3,
          slidesPerGroup: 3,
          spaceBetween: 10,
        },
      },
    });
  });
  </script>
</section>
  <section class="aprenda-mt-footer">
    <div class="container text-center">
      <h2>Dúvidas?</h2>
      <p>Veja as respostas para as <a href="#">perguntas mais frequentes.</a></p>
      <a href="#" class="btn" role="btn">Encontre um instrutor certificado</a>
    </div>
  </section>
</main>
<?php get_footer();