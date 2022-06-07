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
      <p>Estamos sempre correndo e preocupados, a ponto de acreditar que a ansiedade e o estresse são uma condição
        normal da vida. E não são.</p>
      <p>Grande parte das doenças crônicas físicas e mentais tem origem no acúmulo de estresse, causado pelo aumento
        desequilibrado de hormônios, como adrenalina e cortisol. </p>
      <p>O principal benefício da MT é a promoção de um descanso muito profundo, que <strong>alivia o estresse e a
          ansiedade</strong> e nos proporciona <strong>paz interior e bem-estar</strong>.</p>
    </div>
  </section>
  <section class="mt-faz">
    <div class="container">
      <h2>O que a MT <strong>faz por você</strong>?</h2>
      <div class="row">
        <div class="col-12 col-lg-6 d-flex align-items-start justify-content-start">
          <img loading="lazy" class="" src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/up.png' ?>
            alt="Seta cima">
          <div>
            <h3>Aumenta</h3>
            <ul class="list-unstyled">
              <li>Energia e vitalidade</li>
              <li>Disposição física e mental</li>
              <li>Criatividade e cognição</li>
              <li>Foco e memória</li>
              <li>Pensamento ordenado</li>
              <li>Autoconfiança e autoestima</li>
              <li>Felicidade e paz interior</li>
            </ul>
          </div>

        </div>
        <div class="col-12 col-lg-6 d-flex align-items-start justify-content-start">
          <img loading="lazy" class="" src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/down.png' ?>
            alt="Seta baixo">
          <div>
            <h3>Reduz</h3>
            <ul class="list-unstyled">
              <li>Estresse e ansiedade</li>
              <li>Distúrbios do sono</li>
              <li>Depressão e síndrome do pânico</li>
              <li>Risco de burnout</li>
              <li>Déficit de atenção</li>
              <li>Doenças cardiovasculares</li>
              <li>Compulsões e vícios</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ciencia">
    <div class="container">
      <div class="row align-items-center justify-content-center px-5 mx-3 nav nav-pills" id="pills-tab" role="tablist">


        <ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <div class="col-12 col-lg-3 d-flex align-items-center justify-content-center p-0 nav-link active show"
              id="pills-tab-1" data-bs-toggle="pill" data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1" 
              aria-selected="true">
              <div class=" box rounded-circle text-center">
                <div class="default">
                  <img loading="lazy" class="img-fluid"
                    src=<?php echo get_template_directory_uri() . '/images/beneficios/mental.png' ?>
                    alt="Benefícios: Saúde Mental">
                  <h4>Saúde<br /> Mental</h4>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item" role="presentation">
            <div class="col-12 col-lg-3 d-flex align-items-center justify-content-center p-0 nav-link" id="pills-tab-2"
              data-bs-toggle="pill" data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2"
              aria-selected="false">
              <div class=" box rounded-circle text-center">
                <div class="default">
                  <img loading="lazy" class="img-fluid"
                    src=<?php echo get_template_directory_uri() . '/images/beneficios/fisica.png' ?>
                    alt="Benefícios: Saúde Mental">
                  <h4>Saúde<br /> Física</h4>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item" role="presentation">
            <div class="col-12 col-lg-3 d-flex align-items-center justify-content-center p-0 nav-link" id="pills-tab-3"
              data-bs-toggle="pill" data-bs-target="#pills-3" type="button" role="tab" aria-controls="pills-3"
              aria-selected="false">
              <div class=" box rounded-circle text-center">
                <div class="default">
                  <img loading="lazy" class="img-fluid"
                    src=<?php echo get_template_directory_uri() . '/images/beneficios/emocional.png' ?>
                    alt="Benefícios: Saúde Mental">
                  <h4>Inteligência<br /> emocional</h4>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item" role="presentation">
            <div class="col-12 col-lg-3 d-flex align-items-center justify-content-center p-0 nav-link" id="pills-tab-4"
              data-bs-toggle="pill" data-bs-target="#pills-4" type="button" role="tab" aria-controls="pills-4"
              aria-selected="false">
              <div class=" box rounded-circle text-center">
                <div class="default">
                  <img loading="lazy" class="img-fluid"
                    src=<?php echo get_template_directory_uri() . '/images/beneficios/potencia.png' ?>
                    alt="Benefícios: Saúde Mental">
                  <h4>Potencial<br /> Mental</h4>
                </div>
              </div>
            </div>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-tab-1">

            <div class="legend">
              <p>O Brasil é o país mais ansioso do mundo, segundo a OMS. Também somos o segundo com o maior nível de
                estresse:
                70% da população ativa já apresentou algum sintoma do problema, de acordo com a Associação Internacional
                do
                Controle do Estresse (ISMA).</p>
              <p>Com a prática da MT, conseguimos reduzir, de forma natural, os quadros de estresse e ansiedade e,
                consequentemente, diminuir riscos de transtornos mentais, como depressão, síndrome de burnout e do
                pânico,
                transtornos de déficit de atenção e estresse pós-traumático, dentre outros.</p>
            </div>

            <h2>Saúde Mental - O que diz a <strong>ciência</strong>?</h2>
            <!-- inicio carousel -->
            <div class="swiper swiperCiencia">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="swiper-mobile">
                    <div class="container px-5">
                      <div class="row d-flex align-items-center justify-content-center px-5">
                        <div class="col-12 col-lg-4">
                          <h3>Burnout, insônia e depressão</h3>
                          <p>Durante a pandemia da covid-19, uma pesquisa mostrou redução do burnout, da depressão e da
                            insônia em médicos que praticavam, regularmente, a MT.</p>
                        </div>
                        <div class="col-12 col-lg-8 d-flex align-items-center justify-content-end p-0">
                          <img loading="lazy" class="img-fluid"
                            src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/chart.png' ?>
                            alt="Gráfico">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="swiper-mobile">
                    <div class="container px-5">
                      <div class="row d-flex align-items-center justify-content-center px-5">
                        <div class="col-12 col-lg-4">
                          <h3>Burnout, insônia e depressão</h3>
                          <p>Durante a pandemia da covid-19, uma pesquisa mostrou redução do burnout, da depressão e da
                            insônia em médicos que praticavam, regularmente, a MT.</p>
                        </div>
                        <div class="col-12 col-lg-8 d-flex align-items-center justify-content-end p-0">
                          <img loading="lazy" class="img-fluid"
                            src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/chart.png' ?>
                            alt="Gráfico">
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
          <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-tab-2">

            <div class="legend">
              <p>O Brasil é o país mais ansioso do mundo, segundo a OMS. Também somos o segundo com o maior nível de
                estresse:
                70% da população ativa já apresentou algum sintoma do problema, de acordo com a Associação Internacional
                do
                Controle do Estresse (ISMA).</p>
              <p>Com a prática da MT, conseguimos reduzir, de forma natural, os quadros de estresse e ansiedade e,
                consequentemente, diminuir riscos de transtornos mentais, como depressão, síndrome de burnout e do
                pânico,
                transtornos de déficit de atenção e estresse pós-traumático, dentre outros.</p>
            </div>

            <h2>Saúde Física - O que diz a <strong>ciência</strong>?</h2>
            <!-- inicio carousel -->
            <div class="swiper swiperCiencia">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="swiper-mobile">
                    <div class="container px-5">
                      <div class="row d-flex align-items-center justify-content-center px-5">
                        <div class="col-12 col-lg-4">
                          <h3>Burnout, insônia e depressão</h3>
                          <p>Durante a pandemia da covid-19, uma pesquisa mostrou redução do burnout, da depressão e da
                            insônia em médicos que praticavam, regularmente, a MT.</p>
                        </div>
                        <div class="col-12 col-lg-8 d-flex align-items-center justify-content-end p-0">
                          <img loading="lazy" class="img-fluid"
                            src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/chart.png' ?>
                            alt="Gráfico">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="swiper-mobile">
                    <div class="container px-5">
                      <div class="row d-flex align-items-center justify-content-center px-5">
                        <div class="col-12 col-lg-4">
                          <h3>Burnout, insônia e depressão</h3>
                          <p>Durante a pandemia da covid-19, uma pesquisa mostrou redução do burnout, da depressão e da
                            insônia em médicos que praticavam, regularmente, a MT.</p>
                        </div>
                        <div class="col-12 col-lg-8 d-flex align-items-center justify-content-end p-0">
                          <img loading="lazy" class="img-fluid"
                            src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/chart.png' ?>
                            alt="Gráfico">
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
          <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-tab-3">

            <div class="legend">
              <p>O Brasil é o país mais ansioso do mundo, segundo a OMS. Também somos o segundo com o maior nível de
                estresse:
                70% da população ativa já apresentou algum sintoma do problema, de acordo com a Associação Internacional
                do
                Controle do Estresse (ISMA).</p>
              <p>Com a prática da MT, conseguimos reduzir, de forma natural, os quadros de estresse e ansiedade e,
                consequentemente, diminuir riscos de transtornos mentais, como depressão, síndrome de burnout e do
                pânico,
                transtornos de déficit de atenção e estresse pós-traumático, dentre outros.</p>
            </div>

            <h2>Inteligência Emocional - O que diz a <strong>ciência</strong>?</h2>
            <!-- inicio carousel -->
            <div class="swiper swiperCiencia">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="swiper-mobile">
                    <div class="container px-5">
                      <div class="row d-flex align-items-center justify-content-center px-5">
                        <div class="col-12 col-lg-4">
                          <h3>Burnout, insônia e depressão</h3>
                          <p>Durante a pandemia da covid-19, uma pesquisa mostrou redução do burnout, da depressão e da
                            insônia em médicos que praticavam, regularmente, a MT.</p>
                        </div>
                        <div class="col-12 col-lg-8 d-flex align-items-center justify-content-end p-0">
                          <img loading="lazy" class="img-fluid"
                            src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/chart.png' ?>
                            alt="Gráfico">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="swiper-mobile">
                    <div class="container px-5">
                      <div class="row d-flex align-items-center justify-content-center px-5">
                        <div class="col-12 col-lg-4">
                          <h3>Burnout, insônia e depressão</h3>
                          <p>Durante a pandemia da covid-19, uma pesquisa mostrou redução do burnout, da depressão e da
                            insônia em médicos que praticavam, regularmente, a MT.</p>
                        </div>
                        <div class="col-12 col-lg-8 d-flex align-items-center justify-content-end p-0">
                          <img loading="lazy" class="img-fluid"
                            src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/chart.png' ?>
                            alt="Gráfico">
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
          <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-tab-4">


            <div class="legend">
              <p>O Brasil é o país mais ansioso do mundo, segundo a OMS. Também somos o segundo com o maior nível de
                estresse:
                70% da população ativa já apresentou algum sintoma do problema, de acordo com a Associação Internacional
                do
                Controle do Estresse (ISMA).</p>
              <p>Com a prática da MT, conseguimos reduzir, de forma natural, os quadros de estresse e ansiedade e,
                consequentemente, diminuir riscos de transtornos mentais, como depressão, síndrome de burnout e do
                pânico,
                transtornos de déficit de atenção e estresse pós-traumático, dentre outros.</p>
            </div>

            <h2>Potencial Mental - O que diz a <strong>ciência</strong>?</h2>
            <!-- inicio carousel -->
            <div class="swiper swiperCiencia">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="swiper-mobile">
                    <div class="container px-5">
                      <div class="row d-flex align-items-center justify-content-center px-5">
                        <div class="col-12 col-lg-4">
                          <h3>Burnout, insônia e depressão</h3>
                          <p>Durante a pandemia da covid-19, uma pesquisa mostrou redução do burnout, da depressão e da
                            insônia em médicos que praticavam, regularmente, a MT.</p>
                        </div>
                        <div class="col-12 col-lg-8 d-flex align-items-center justify-content-end p-0">
                          <img loading="lazy" class="img-fluid"
                            src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/chart.png' ?>
                            alt="Gráfico">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="swiper-mobile">
                    <div class="container px-5">
                      <div class="row d-flex align-items-center justify-content-center px-5">
                        <div class="col-12 col-lg-4">
                          <h3>Burnout, insônia e depressão</h3>
                          <p>Durante a pandemia da covid-19, uma pesquisa mostrou redução do burnout, da depressão e da
                            insônia em médicos que praticavam, regularmente, a MT.</p>
                        </div>
                        <div class="col-12 col-lg-8 d-flex align-items-center justify-content-end p-0">
                          <img loading="lazy" class="img-fluid"
                            src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/chart.png' ?>
                            alt="Gráfico">
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


      </div>


      <div class="text-center">
        <a href="#" class="btn">Encontre um instrutor perto de você</a>
      </div>
    </div>
  </section>
  <?php get_template_part('template-parts/sections/pages/o-que-dizem-temp'); ?>

  <!-- PS- QUANDO ADD A SECAO PESQUISAS CIENTIFICAS, REMOVER A MARGIN DO CSS INLINE DA SECAO BENEFICIOS INFO-->
  <style>
    .page-beneficios-mt .beneficios-info {
      padding-top: 63px;}    
    @media (max-width: 992px) {
      .page-beneficios-mt .beneficios-info {
      padding-top: 27px; }    
    }
  </style>
  <section class="beneficios-info">
    <div class="container">
      <div class="info d-flex align-items-center">
        <img loading="lazy" class="img-fluid"
          src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/info.png' ?> alt="Info">
        <p>A Meditação Transcendental não pretende ser um substituto para o tratamento médico especializado. Busque
          sempre um profissional qualificado para receber seu diagnóstico e orientações sobre qualquer condição de
          saúde.</p>
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
<script>
jQuery(document).ready(function() {
  var swiper = new Swiper(".swiperCiencia", {
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
  });
});
</script>
<?php get_footer();