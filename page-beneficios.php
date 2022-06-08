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
        normal da vida. E não são.
      </p>
      <p>Grande parte das doenças crônicas físicas e mentais tem origem no acúmulo de estresse, causado pelo aumento
        desequilibrado de hormônios, como adrenalina e cortisol. 
      </p>
      <p>O principal benefício da MT é a promoção de um descanso muito profundo, que <strong>alivia o estresse e a
        ansiedade</strong> e nos proporciona <strong>paz interior e bem-estar</strong>.
      </p>
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
      <div class="row align-items-center justify-content-center px-5 bloco-1">
        <div class="col-12 col-lg-3 d-flex align-items-center justify-content-center p-0 nav-link active show"
          id="pills-tab-1" data-bs-toggle="pill" data-bs-target="#pills-1" type="button" role="tab"
          aria-controls="pills-1" aria-selected="true">
          <div class=" box rounded-circle text-center">
            <div class="default">
              <img loading="lazy" class="img-fluid"
                src=<?php echo get_template_directory_uri() . '/images/beneficios/mental.png' ?>
                alt="Benefícios: Saúde Mental">
              <h4>Saúde<br /> Mental</h4>
              <img loading="lazy" class="img-fluid"
                src=<?php echo get_template_directory_uri() . '/images/beneficios/seta.png' ?>
                alt="Seta">
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-3 d-flex align-items-center justify-content-center p-0 nav-link" id="pills-tab-2"
          data-bs-toggle="pill" data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2"
          aria-selected="true">
          <div class="box rounded-circle text-center">
            <div class="default">
              <img loading="lazy" class="img-fluid"
                src=<?php echo get_template_directory_uri() . '/images/beneficios/fisica.png' ?>
                alt="Benefícios: Saúde Física">
              <h4>Saúde<br /> Física</h4>
              <img loading="lazy" class="img-fluid"
                src=<?php echo get_template_directory_uri() . '/images/beneficios/seta.png' ?>
                alt="Seta">
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-3 d-flex align-items-center justify-content-center p-0 nav-link" id="pills-tab-3"
          data-bs-toggle="pill" data-bs-target="#pills-3" type="button" role="tab" aria-controls="pills-3"
          aria-selected="true">
          <div class=" box rounded-circle text-center">
            <div class="default">
              <img loading="lazy" class="img-fluid"
                src=<?php echo get_template_directory_uri() . '/images/beneficios/emocional.png' ?>
                alt="Benefícios: Inteligência emocional">
              <h4>Inteligência<br /> emocional</h4>
              <img loading="lazy" class="img-fluid"
                src=<?php echo get_template_directory_uri() . '/images/beneficios/seta.png' ?>
                alt="Seta">
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-3 d-flex align-items-center justify-content-center p-0 nav-link" id="pills-tab-4"
          data-bs-toggle="pill" data-bs-target="#pills-4" type="button" role="tab" aria-controls="pills-4"
          aria-selected="true">
          <div class=" box rounded-circle text-center">
            <div class="default">
              <img loading="lazy" class="img-fluid"
                src=<?php echo get_template_directory_uri() . '/images/beneficios/potencia.png' ?>
                alt="Benefícios: Potencial Mental">
              <h4>Potencial<br /> Mental</h4>
              <img loading="lazy" class="img-fluid"
                src=<?php echo get_template_directory_uri() . '/images/beneficios/seta.png' ?>
                alt="Seta">
            </div>
          </div>
        </div>
        <div class="legend  px-0 px-lg-5 mx-lg-3">
          <p>O Brasil é o país mais ansioso do mundo, segundo a OMS. Também somos o segundo com o maior nível de estresse: 70% da população ativa já apresentou algum sintoma do problema, de acordo com a Associação Internacional  do Controle do Estresse (ISMA).</p>
          <p>Com a prática da MT, conseguimos reduzir, de forma natural, os quadros de estresse e ansiedade e,  consequentemente, diminuir riscos de transtornos mentais, como depressão, síndrome de burnout e do pânico, transtornos de déficit de atenção e estresse pós-traumático, dentre outros.</p>
        </div>
        <!-- <div class="legend  px-0 px-lg-5 mx-lg-3">
          <p>Devido ao alto nível de estresse acumulado, muitas vezes, o descanso que temos à noite é insuficiente para o restabelecimento natural do organismo. Essa condição provoca um desequilíbrio hormonal nocivo, que pode causar doenças cardiovasculares, diabetes, envelhecimento precoce, dentre outros problemas.</p>
          <p>A prática regular da MT atua diretamente na dissolução do estresse impregnado no sistema nervoso. Isso gera um poderoso efeito regenerativo, que contribui para a prevenção de diversas doenças, para a diminuição do uso de medicamentos e para a redução dos custos com atenção à saúde.</p>
          <p>O Brasil é o país mais ansioso do mundo, segundo a OMS. Também somos o segundo com o maior nível de  estresse: 70% da população ativa já apresentou algum sintoma do problema, de acordo com a Associação Internacional do  Controle do Estresse (ISMA).</p>
          <p>Com a prática da MT, conseguimos reduzir, de forma natural, os quadros de estresse e ansiedade e, consequentemente, diminuir riscos de transtornos mentais, como depressão, síndrome de burnout e do  pânico,  transtornos de déficit de atenção e estresse pós-traumático, dentre outros.</p>
        </div>
        <div class="legend  px-0 px-lg-5 mx-lg-3">
          <p>O autoconhecimento é o caminho para encontrar mais satisfação e autorrealização em todas as áreas. A técnica da MT permite que você se conecte com sua verdadeira essência para viver de forma mais harmônica com os desafios do dia a dia, encontrando mais felicidade e significado em sua vida.</p>
          <p>Esse estado autorreferente com a prática regular da MT nos torna mais conscientes de nós mesmos. Como resultados, melhoramos a qualidade dos relacionamentos e do nosso comportamento social, assim como desenvolvemos, espontaneamente, as chamadas soft skills e a inteligência emocional.</p>
          <p>O Brasil é o país mais ansioso do mundo, segundo a OMS. Também somos o segundo com o maior nível de estresse:  70% da população ativa já apresentou algum sintoma do problema, de acordo com a Associação Internacional do Controle do Estresse (ISMA).</p>
          <p>Com a prática da MT, conseguimos reduzir, de forma natural, os quadros de estresse e ansiedade e, consequentemente, diminuir riscos de transtornos mentais, como depressão, síndrome de burnout e do  pânico, transtornos de déficit de atenção e estresse pós-traumático, dentre outros.</p>
        </div>
        <div class="legend  px-0 px-lg-5 mx-lg-3">
          <p>O excesso de informações e de estímulos que recebemos no dia a dia prejudica a atenção, a memória, o potencial criativo e a nossa capacidade de pensar e agir.<br>
            A MT aumenta a atividade do córtex pré-frontal, região do cérebro responsável  pelas funções cognitivas, pelo processamento de informações, pelo raciocínio, etc.
          </p>
          <p>Praticar regularmente a MT promove o pleno potencial da mente, gerando total integração e coerência cerebral, o que aumenta nossa criatividade, foco, inteligência e capacidade de concentração e de resolução de problemas. Assim, a gente se torna mais eficiente e com mais energia.</p>
          <p>O Brasil é o país mais ansioso do mundo, segundo a OMS. Também somos o segundo com o maior nível de estresse:  70% da população ativa já apresentou algum sintoma do problema, de acordo com a Associação Internacional do  Controle do Estresse (ISMA).</p>
          <p>Com a prática da MT, conseguimos reduzir, de forma natural, os quadros de estresse e ansiedade e,  consequentemente, diminuir riscos de transtornos mentais, como depressão, síndrome de burnout e do pânico, transtornos de déficit de atenção e estresse pós-traumático, dentre outros.</p>
        </div> -->
      </div>
      <!-- <div class="tabs">
        <div id="tab3" class="tab">
          <ul class="nav nav-tabs">
            <li><a href="#tab1">Description</a></li>
            <li><a href="#tab2">How it works</a></li>
            <li class="active"><a href="#tab3">Drawbacks</a></li>
          </ul>
          <ul>
            <li>Tab bar should be duplicated on each tab.</li>
            <li>Initially shown tab has to be the last.</li>
            <li>In IE &lt; 9 all tabs are shown.</li>
          </ul>
        </div>
        <div id="tab2" class="tab">
          <ul class="nav nav-tabs">
            <li><a href="#tab1">Description</a></li>
            <li class="active"><a href="#tab2">How it works</a></li>
            <li><a href="#tab3">Drawbacks</a></li>
          </ul>
          <ol>
            <li>Show only the last tab.</li>
            <li>If <code>:target</code> matches a tab, show it and hide all following siblings.</li>
          </ol>
        </div>
        <div id="tab1" class="tab">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#tab1">Description</a></li>
            <li><a href="#tab2">How it works</a></li>
            <li><a href="#tab3">Drawbacks</a></li>
          </ul>
          <p>The idea is to use <code>:target</code> pseudoclass to show tabs, use anchors with fragment identifiers to switch between them.</p>
        </div>
      </div> -->
      <div class="row">
        <h2>O que diz a <strong>ciência</strong>?</h2>
        <div class="swiper swiperCiencia">
          <div class="swiper-wrapper">
            <div class="swiper-slide active">
              <div class="swiper-mobile">
                <div class="container px-5">
                  <div class="row d-flex align-items-center justify-content-center px-5">
                    <div class="col-12 col-lg-5 order-2 order-lg-1">
                      <h3>Burnout, insônia e depressão</h3>
                      <div class="text-center d-block d-lg-none">
                        <img loading="lazy" class="border-0"
                          src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/line.png' ?>
                          alt="Linha">
                      </div>
                      <p>Durante a pandemia da covid-19, uma pesquisa mostrou redução do burnout, da depressão e da
                        insônia em médicos que praticavam, regularmente, a MT.
                      </p>
                    </div>
                    <div class="col-12 col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-end p-0 mb-4 mb-lg-0 order-1 order-lg-2">
                      <img loading="lazy" class="img-fluid"
                        src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/1.png' ?>
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
                    <div class="col-12 col-lg-5 order-2 order-lg-1">
                      <h3>Estresse</h3>
                      <div class="text-center d-block d-lg-none">
                        <img loading="lazy" class="border-0"
                          src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/line.png' ?>
                          alt="Linha">
                      </div>
                      <p>Um outro estudo realizado durante a pandemia mostrou a redução de sintomas de estresse pós-traumático entre médicos da emergência do Hospital Presibiteriano de Nova Iorque.
                      </p>
                    </div>
                    <div class="col-12 col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-end p-0 mb-4 mb-lg-0 order-1 order-lg-2">
                      <img loading="lazy" class="img-fluid"
                        src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/2.png' ?>
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
                    <div class="col-12 col-lg-5 order-2 order-lg-1">
                      <h3>Ansiedade</h3>
                      <div class="text-center d-block d-lg-none">
                        <img loading="lazy" class="border-0"
                          src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/line.png' ?>
                          alt="Linha">
                      </div>
                      <p>Uma metanálise da Universidade de Stanford revisou 146 estudos científicos sobre os efeitos de diferentes técnicas para redução da ansiedade.
                      </p>
                      <p>Foi constatado que a MT é duas vezes mais eficaz do que qualquer outro tipo de meditação ou prática de relaxamento.
                      </p>
                    </div>
                    <div class="col-12 col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-end p-0 mb-4 mb-lg-0 order-1 order-lg-2">
                      <img loading="lazy" class="img-fluid"
                        src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/3.png' ?>
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
                    <div class="col-12 col-lg-5 order-2 order-lg-1">
                      <h3>Insônia</h3>
                      <div class="text-center d-block d-lg-none">
                        <img loading="lazy" class="border-0"
                          src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/line.png' ?>
                          alt="Linha">
                      </div>
                      <p>Depois de 90 dias de prática regular de MT, pacientes que foram observados diariamente diminuíram o tempo para caírem no sono de cerca de 1h15 para apenas 15 minutos.
                      </p>
                    </div>
                    <div class="col-12 col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-end p-0 mb-4 mb-lg-0 order-1 order-lg-2">
                      <img loading="lazy" class="img-fluid"
                        src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/5.png' ?>
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
                    <div class="col-12 col-lg-5 order-2 order-lg-1">
                      <h3>Pressão arterial</h3>
                      <div class="text-center d-block d-lg-none">
                        <img loading="lazy" class="border-0"
                          src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/line.png' ?>
                          alt="Linha">
                      </div>
                      <p>Um estudo mediu o lactato plasmático (hormônio relacionado à hipertensão) de pessoas durante a prática da MT e mostrou uma redução significativa da substância no sangue. Depois de 3 a 4 meses de prática, a pressão arterial das pessoas estudadas manteve-se em níveis saudáveis.
                      <p>Durante a pandemia da covid-19, uma pesquisa mostrou redução do burnout, da depressão e da insônia em médicos que praticavam, regularmente, a MT.
                      </p>
                    </div>
                    <div class="col-12 col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-end p-0 mb-4 mb-lg-0 order-1 order-lg-2">
                      <img loading="lazy" class="img-fluid"
                        src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/6.png' ?>
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
                    <div class="col-12 col-lg-5 order-2 order-lg-1">
                      <h3>Diabetes</h3>
                      <div class="text-center d-block d-lg-none">
                        <img loading="lazy" class="border-0"
                          src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/line.png' ?>
                          alt="Linha">
                      </div>
                      <p>Uma  pesquisa realizada em colaboração com o National Institute of Health (NIH) e o governo norte-americano comprovou a eficácia da  MT na diminuição da resistência insulínica.
                    </div>
                    <div class="col-12 col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-end p-0 mb-4 mb-lg-0 order-1 order-lg-2">
                      <img loading="lazy" class="img-fluid"
                        src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/7.png' ?>
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
        <div class="text-center">
          <a href="<?php echo home_url( '/instrutores/' ); ?>" class="btn">Encontre um instrutor perto de você</a>
        </div>
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
          saúde.
        </p>
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