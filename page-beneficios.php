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
        <div class="col-12 col-lg-6 d-flex align-items-start justify-content-start mb-4 mb-lg-0">
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
      <div class="row d-flex align-items-center justify-content-center  nav nav-pills" id="pills-tab" role="tablist">
        <ul class="nav nav-pills nav-justified mb-3 px-0 px-lg-5 mx-lg-5" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <div class="col-12 col-lg-3 d-flex align-items-center justify-content-center p-0 nav-link active show"
              id="pills-tab-1" data-bs-toggle="pill" data-bs-target="#pills-1" type="button" role="tab"
              aria-controls="pills-1" aria-selected="true">
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
              aria-selected="true">
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
              aria-selected="true">
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
              aria-selected="true">
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
            <div class="legend  px-0 px-lg-5 mx-lg-3">
              <p>O Brasil é o país mais ansioso do mundo, segundo a OMS. Também somos o segundo com o maior nível de estresse: 70% da população ativa já apresentou algum sintoma do problema, de acordo com a Associação Internacional  do Controle do Estresse (ISMA).</p>
              <p>Com a prática da MT, conseguimos reduzir, de forma natural, os quadros de estresse e ansiedade e,  consequentemente, diminuir riscos de transtornos mentais, como depressão, síndrome de burnout e do pânico, transtornos de déficit de atenção e estresse pós-traumático, dentre outros.</p>
            </div>
            <h2>Saúde mental - O que diz a <strong>ciência</strong>?</h2>
            <!-- inicio carousel -->
            <div class="swiper swiperCiencia">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="swiper-mobile">
                    <div class="container px-1 px-lg-5">
                      <div class="row d-flex align-items-center justify-content-center px-3 px-lg-5">
                        <div class="col-12 col-lg-4 order-2 order-lg-1">
                          <h3>Burnout, insônia e depressão</h3>
                          <div class="text-center d-block d-lg-none">
                            <img loading="lazy" class="border-0"
                              src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/line.png' ?>
                              alt="Linha">
                          </div>
                          <p>Durante a pandemia da covid-19, uma pesquisa mostrou redução do burnout, da depressão e da insônia em médicos que praticavam, regularmente, a MT.
                          </p>
                        </div>
                        <div class="col-11 col-lg-8 d-flex align-items-center justify-content-center justify-content-lg-end p-0 mb-4 mb-lg-0 order-1 order-lg-2">
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
                    <div class="container px-1 px-lg-5">
                      <div class="row d-flex align-items-center justify-content-center px-3 px-lg-5">
                        <div class="col-12 col-lg-4 order-2 order-lg-1">
                          <h3>Estresse</h3>
                          <div class="text-center d-block d-lg-none">
                            <img loading="lazy" class="border-0"
                              src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/line.png' ?>
                              alt="Linha">
                          </div>
                          <p>Um outro estudo realizado durante a pandemia mostrou a redução de sintomas de estresse pós-traumático entre médicos da emergência do Hospital Presibiteriano de Nova Iorque.
                          </p>
                        </div>
                        <div class="col-11 col-lg-8 d-flex align-items-center justify-content-center justify-content-lg-end p-0 mb-4 mb-lg-0 order-1 order-lg-2">
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
                    <div class="container px-1 px-lg-5">
                      <div class="row d-flex align-items-center justify-content-center px-3 px-lg-5">
                        <div class="col-12 col-lg-4 order-2 order-lg-1">
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
                        <div class="col-11 col-lg-8 d-flex align-items-center justify-content-center justify-content-lg-end p-0 mb-4 mb-lg-0 order-1 order-lg-2">
                          <img loading="lazy" class="img-fluid"
                            src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/3.png' ?>
                            alt="Gráfico">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <div class="swiper-slide">
                  <div class="swiper-mobile">
                    <div class="container px-1 px-lg-5">
                      <div class="row d-flex align-items-center justify-content-center px-3 px-lg-5">
                        <div class="col-12 col-lg-4 order-2 order-lg-1">
                          <h3>Depressão</h3>
                          <div class="text-center d-block d-lg-none">
                            <img loading="lazy" class="border-0"
                              src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/line.png' ?>
                              alt="Linha">
                          </div>
                          <p>Pesquisas científicas mostraram que a MT aumenta naturalmente a serotonina, o neurotransmissor que reduz os sintomas da depressão e regula o sono e o humor.
                          </p>
                        </div>
                        <div class="col-11 col-lg-8 d-flex align-items-center justify-content-center justify-content-lg-end p-0 mb-4 mb-lg-0 order-1 order-lg-2">
                          <img loading="lazy" class="img-fluid"
                            src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/4.png' ?>
                            alt="Gráfico">
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
                <!-- <div class="swiper-slide">
                  <div class="swiper-mobile">
                    <div class="container px-1 px-lg-5">
                      <div class="row d-flex align-items-center justify-content-center px-3 px-lg-5">
                        <div class="col-12 col-lg-4 order-2 order-lg-1">
                          <h3>Vícios e compulsões</h3>
                          <div class="text-center d-block d-lg-none">
                            <img loading="lazy" class="border-0"
                              src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/line.png' ?>
                              alt="Linha">
                          </div>
                          <p>A MT ganha destaque no tratamento de dependência de álcool, do cigarro e de outras drogas. Vários estudos científicos com foco em dependência química confirmaram que, quanto mais se pratica a técnica da MT, menos o usuário sente necessidade de recorrer aos vícios.
                          </p>
                        </div>
                        <div class="col-11 col-lg-8 d-flex align-items-center justify-content-center justify-content-lg-end p-0 mb-4 mb-lg-0 order-1 order-lg-2">
                          <img loading="lazy" class="img-fluid"
                            src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/chart.png' ?>
                            alt="Gráfico">
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
                <div class="swiper-slide">
                  <div class="swiper-mobile">
                    <div class="container px-1 px-lg-5">
                      <div class="row d-flex align-items-center justify-content-center px-3 px-lg-5">
                        <div class="col-12 col-lg-4 order-2 order-lg-1">
                          <h3>Insônia</h3>
                          <div class="text-center d-block d-lg-none">
                            <img loading="lazy" class="border-0"
                              src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/line.png' ?>
                              alt="Linha">
                          </div>
                          <p>Depois de 90 dias de prática regular de MT, pacientes que foram observados diariamente diminuíram o tempo para caírem no sono de cerca de 1h15 para apenas 15 minutos.
                          </p>
                        </div>
                        <div class="col-11 col-lg-8 d-flex align-items-center justify-content-center justify-content-lg-end p-0 mb-4 mb-lg-0 order-1 order-lg-2">
                          <img loading="lazy" class="img-fluid"
                            src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/5.png' ?>
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
            <div class="legend  px-0 px-lg-5 mx-lg-3">
              <p>Devido ao alto nível de estresse acumulado, muitas vezes, o descanso que temos à noite é insuficiente para o restabelecimento natural do organismo. Essa condição provoca um desequilíbrio hormonal nocivo, que pode causar doenças cardiovasculares, diabetes, envelhecimento precoce, dentre outros problemas.</p>
              <p>A prática regular da MT atua diretamente na dissolução do estresse impregnado no sistema nervoso. Isso gera um poderoso efeito regenerativo, que contribui para a prevenção de diversas doenças, para a diminuição do uso de medicamentos e para a redução dos custos com atenção à saúde.</p>
            </div>
            <h2>Saúde Física - O que diz a <strong>ciência</strong>?</h2>
            <!-- inicio carousel -->
            <div class="swiper swiperCiencia-2">
              <div class="swiper-wrapper">
                <!-- <div class="swiper-slide">
                  <div class="swiper-mobile">
                    <div class="container px-1 px-lg-5">
                      <div class="row d-flex align-items-center justify-content-center px-3 px-lg-5">
                        <div class="col-12 col-lg-4 order-2 order-lg-1">
                          <h3>Pressão arterial</h3>
                          <div class="text-center d-block d-lg-none">
                            <img loading="lazy" class="border-0"
                              src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/line.png' ?>
                              alt="Linha">
                          </div>
                          <p>Uma metanálise, com 107 estudos, mostra que a prática da MT tem efeitos significativos na redução da pressão arterial sanguínea, em comparação à aplicação de outras técnicas não farmacológicas.
                          </p>
                        </div>
                        <div class="col-11 col-lg-8 d-flex align-items-center justify-content-center justify-content-lg-end p-0 mb-4 mb-lg-0 order-1 order-lg-2">
                          <img loading="lazy" class="img-fluid"
                            src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/chart.png' ?>
                            alt="Gráfico">
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
                <div class="swiper-slide">
                  <div class="swiper-mobile">
                    <div class="container px-1 px-lg-5">
                      <div class="row d-flex align-items-center justify-content-center px-3 px-lg-5">
                        <div class="col-12 col-lg-4 order-2 order-lg-1">
                          <h3>Pressão arterial</h3>
                          <div class="text-center d-block d-lg-none">
                            <img loading="lazy" class="border-0"
                              src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/line.png' ?>
                              alt="Linha">
                          </div>
                          <p>Um estudo mediu o lactato plasmático (hormônio relacionado à hipertensão) de pessoas durante a prática da MT e mostrou uma redução significativa da substância no sangue. Depois de 3 a 4 meses de prática, a pressão arterial das pessoas estudadas manteve-se em níveis saudáveis.
                          </p>
                        </div>
                        <div class="col-11 col-lg-8 d-flex align-items-center justify-content-center justify-content-lg-end p-0 mb-4 mb-lg-0 order-1 order-lg-2">
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
                    <div class="container px-1 px-lg-5">
                      <div class="row d-flex align-items-center justify-content-center px-3 px-lg-5">
                        <div class="col-12 col-lg-4 order-2 order-lg-1">
                          <h3>Diabetes</h3>
                          <div class="text-center d-block d-lg-none">
                            <img loading="lazy" class="border-0"
                              src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/line.png' ?>
                              alt="Linha">
                          </div>
                          <p>Uma  pesquisa realizada em colaboração com o National Institute of Health (NIH) e o governo norte-americano comprovou a eficácia da  MT na diminuição da resistência insulínica.
                          </p>
                        </div>
                        <div class="col-11 col-lg-8 d-flex align-items-center justify-content-center justify-content-lg-end p-0 mb-4 mb-lg-0 order-1 order-lg-2">
                          <img loading="lazy" class="img-fluid"
                            src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/7.png' ?>
                            alt="Gráfico">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="swiper-mobile">
                    <div class="container px-1 px-lg-5">
                      <div class="row d-flex align-items-center justify-content-center px-3 px-lg-5">
                        <div class="col-12 col-lg-4 order-2 order-lg-1">
                          <h3>Colesterol alto</h3>
                          <div class="text-center d-block d-lg-none">
                            <img loading="lazy" class="border-0"
                              src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/line.png' ?>
                              alt="Linha">
                          </div>
                          <p>Um estudo da Kaiser Permanent Medical Center verificou que a taxa de colesterol total dos pacientes estudados diminuiu 30 mg/dl após 1 ano de prática da MT por 20 minutos, duas vezes ao dia.
                          </p>
                        </div>
                        <div class="col-11 col-lg-8 d-flex align-items-center justify-content-center justify-content-lg-end p-0 mb-4 mb-lg-0 order-1 order-lg-2">
                          <img loading="lazy" class="img-fluid"
                            src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/8.png' ?>
                            alt="Gráfico">
                        </div>
                      </div>
                    </div>
                  </div>  
                </div>
                <div class="swiper-slide">
                  <div class="swiper-mobile">
                    <div class="container px-1 px-lg-5">
                      <div class="row d-flex align-items-center justify-content-center px-3 px-lg-5">
                        <div class="col-12 col-lg-4 order-2 order-lg-1">
                          <h3>Fortalecimento do sistema imunológico</h3>
                          <div class="text-center d-block d-lg-none">
                            <img loading="lazy" class="border-0"
                              src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/line.png' ?>
                              alt="Linha">
                          </div>
                          <p>A MT também é eficaz para o fortalecimento do sistema imunológico, de acordo com a ciência. Uma pesquisa mostrou o aumento de glóbulos brancos em pacientes, o que ajuda a proteger o organismo de câncer e de infecções.
                          </p>
                        </div>
                        <div class="col-11 col-lg-8 d-flex align-items-center justify-content-center justify-content-lg-end p-0 mb-4 mb-lg-0 order-1 order-lg-2">
                          <img loading="lazy" class="img-fluid"
                            src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/9.png' ?>
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
            <div class="legend  px-0 px-lg-5 mx-lg-3">
              <p>O autoconhecimento é o caminho para encontrar mais satisfação e autorrealização em todas as áreas. A técnica da MT permite que você se conecte com sua verdadeira essência para viver de forma mais harmônica com os desafios do dia a dia, encontrando mais felicidade e significado em sua vida.</p>
              <p>Esse estado autorreferente com a prática regular da MT nos torna mais conscientes de nós mesmos. Como resultados, melhoramos a qualidade dos relacionamentos e do nosso comportamento social, assim como desenvolvemos, espontaneamente, as chamadas soft skills e a inteligência emocional.</p>
            </div>
            <h2>Inteligência Emocional - O que diz a <strong>ciência</strong>?</h2>
            <!-- inicio carousel -->
            <div class="swiper swiperCiencia-3">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="swiper-mobile">
                    <div class="container px-1 px-lg-5">
                      <div class="row d-flex align-items-center justify-content-center px-3 px-lg-5">
                        <div class="col-12 col-lg-4 order-2 order-lg-1">
                          <h3>Relacionamentos profissionais</h3>
                          <div class="text-center d-block d-lg-none">
                            <img loading="lazy" class="border-0"
                              src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/line.png' ?>
                              alt="Linha">
                          </div>
                          <p>Um estudo realizado em uma indústria automobilística concluiu que, após três meses de prática regular da MT, funcionários apresentaram melhores relações no trabalho em comparação a outras pessoas da mesma empresa. 
                          </p>
                        </div>
                        <div class="col-11 col-lg-8 d-flex align-items-center justify-content-center justify-content-lg-end p-0 mb-4 mb-lg-0 order-1 order-lg-2">
                          <img loading="lazy" class="img-fluid"
                            src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/10.png' ?>
                            alt="Gráfico">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="swiper-mobile">
                    <div class="container px-1 px-lg-5">
                      <div class="row d-flex align-items-center justify-content-center px-3 px-lg-5">
                        <div class="col-12 col-lg-4 order-2 order-lg-1">
                          <h3>Relacionamentos afetivos</h3>
                          <div class="text-center d-block d-lg-none">
                            <img loading="lazy" class="border-0"
                              src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/line.png' ?>
                              alt="Linha">
                          </div>
                          <p>Estudantes universitários que praticaram o Programa de Meditação Transcendental® classificaram mais positivamente as pessoas importantes de suas vidas (pais, cônjuge) em comparação aos estudantes do grupo de controle.
                          </p>
                        </div>
                        <div class="col-11 col-lg-8 d-flex align-items-center justify-content-center justify-content-lg-end p-0 mb-4 mb-lg-0 order-1 order-lg-2">
                          <img loading="lazy" class="img-fluid"
                            src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/11.png' ?>
                            alt="Gráfico">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="swiper-mobile">
                    <div class="container px-1 px-lg-5">
                      <div class="row d-flex align-items-center justify-content-center px-3 px-lg-5">
                        <div class="col-12 col-lg-4 order-2 order-lg-1">
                          <h3>Autorrealização</h3>
                          <div class="text-center d-block d-lg-none">
                            <img loading="lazy" class="border-0"
                              src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/line.png' ?>
                              alt="Linha">
                          </div>
                          <p>Uma metanálise de todos os estudos científicos já realizados sobre os efeitos de diferentes técnicas de meditação na realização pessoal mostrou que a MT apresenta eficácia de 3 a 4 vezes maior que outras técnicas de meditação e de relaxamento. 
                          </p>
                        </div>
                        <div class="col-11 col-lg-8 d-flex align-items-center justify-content-center justify-content-lg-end p-0 mb-4 mb-lg-0 order-1 order-lg-2">
                          <img loading="lazy" class="img-fluid"
                            src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/12.png' ?>
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
            <div class="legend  px-0 px-lg-5 mx-lg-3">
              <p>O excesso de informações e de estímulos que recebemos no dia a dia prejudica a atenção, a memória, o potencial criativo e a nossa capacidade de pensar e agir.<br>
                  A MT aumenta a atividade do córtex pré-frontal, região do cérebro responsável  pelas funções cognitivas, pelo processamento de informações, pelo raciocínio, etc.</p>
              <p>Praticar regularmente a MT promove o pleno potencial da mente, gerando total integração e coerência cerebral, o que aumenta nossa criatividade, foco, inteligência e capacidade de concentração e de resolução de problemas. Assim, a gente se torna mais eficiente e com mais energia.</p>
            </div>
            <h2>Potencial Mental - O que diz a <strong>ciência</strong>?</h2>
            <!-- inicio carousel -->
            <div class="swiper swiperCiencia-4">
              <div class="swiper-wrapper">
                <!-- <div class="swiper-slide">
                  <div class="swiper-mobile">
                    <div class="container px-1 px-lg-5">
                      <div class="row d-flex align-items-center justify-content-center px-3 px-lg-5">
                      <div class="col-12 col-lg-4 order-2 order-lg-1">
                          <h3>Coerência cerebral</h3>
                          <div class="text-center d-block d-lg-none">
                            <img loading="lazy" class="border-0"
                              src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/line.png' ?>
                              alt="Linha">
                          </div>
                          <p>Estudo com teste em eletroencefalograma demonstra aumento da sincronia e da coerência da atividade cerebral das ondas Alpha, durante prática da MT, comparado com grupo em repouso de olhos abertos e com os olhos fechados. 
                          </p>
                        </div>
                        <div class="col-11 col-lg-8 d-flex align-items-center justify-content-center justify-content-lg-end p-0 mb-4 mb-lg-0 order-1 order-lg-2">
                          <img loading="lazy" class="img-fluid"
                            src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/chart.png' ?>
                            alt="Gráfico">
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
                <!-- <div class="swiper-slide">
                  <div class="swiper-mobile">
                    <div class="container px-1 px-lg-5">
                      <div class="row d-flex align-items-center justify-content-center px-3 px-lg-5">
                      <div class="col-12 col-lg-4 order-2 order-lg-1">
                          <h3>Coerência cerebral</h3>
                          <div class="text-center d-block d-lg-none">
                            <img loading="lazy" class="border-0"
                              src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/line.png' ?>
                              alt="Linha">
                          </div>
                          <p>Este estudo concluiu que, durante o programa de Meditação Transcendental®, alguns dos componentes mais básicos da resposta do cérebro à estimulação somático-sensorial (0–100 msec) são distribuídos de uma forma mais ampla em todo o córtex pré-frontal.
                          </p>
                          
                          <p>O estudo indica um aumento da atividade das áreas do córtex que participam na percepção de informação específica e um aumento na relação funcional entre os dois hemisférios. 
                          </p>
                        </div>
                        <div class="col-11 col-lg-8 d-flex align-items-center justify-content-center justify-content-lg-end p-0 mb-4 mb-lg-0 order-1 order-lg-2">
                          <img loading="lazy" class="img-fluid"
                            src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/chart.png' ?>
                            alt="Gráfico">
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
                <div class="swiper-slide">
                  <div class="swiper-mobile">
                    <div class="container px-1 px-lg-5">
                      <div class="row d-flex align-items-center justify-content-center px-3 px-lg-5">
                      <div class="col-12 col-lg-4 order-2 order-lg-1">
                          <h3>Criatividade e outras habilidades</h3>
                          <div class="text-center d-block d-lg-none">
                            <img loading="lazy" class="border-0"
                              src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/line.png' ?>
                              alt="Linha">
                          </div>
                          <p>Depois de um período de 6 a 12 meses de prática regular de MT, um grupo de estudantes de Taiwan apresentou melhora significativa em cinco escalas diferentes de capacidade intelectual, incluindo uma escala de “toda a criatividade cerebral”. 
                          </p>
                        </div>
                        <div class="col-11 col-lg-8 d-flex align-items-center justify-content-center justify-content-lg-end p-0 mb-4 mb-lg-0 order-1 order-lg-2">
                          <img loading="lazy" class="img-fluid"
                            src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/13.png' ?>
                            alt="Gráfico">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="swiper-mobile">
                    <div class="container px-1 px-lg-5">
                      <div class="row d-flex align-items-center justify-content-center px-3 px-lg-5">
                        <div class="col-12 col-lg-4 order-2 order-lg-1">
                          <h3>Desenvolvimento da inteligência</h3>
                          <div class="text-center d-block d-lg-none">
                            <img loading="lazy" class="border-0"
                              src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/line.png' ?>
                              alt="Linha">
                          </div>
                          <p>Um estudo feito com estudantes universitários praticantes de MT mostrou  que eles obtiveram um aumento significativo do QI, enquanto o grupo de controle não apresentou avanços.
                          </p>
                          
                          <p>A pesquisa comprovou que adultos podem elevar a inteligência com a ajuda da técnica, ao contrário do que se acreditava.
                          </p>
                        </div>
                        <div class="col-11 col-lg-8 d-flex align-items-center justify-content-center justify-content-lg-end p-0 mb-4 mb-lg-0 order-1 order-lg-2">
                          <img loading="lazy" class="img-fluid"
                            src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/14.png' ?>
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
          <div class="text-center">
            <a href="#" class="btn">Agenda a palestra gratuita</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part('template-parts/sections/pages/o-que-dizem-temp'); ?>
  <?php get_template_part('template-parts/sections/pages/pesquisas-cientificas'); ?>
  <section class="beneficios-info">
    <div class="container">
      <div class="info d-lg-flex align-items-center">
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
  jQuery(document).ready(function() {
    var swiper = new Swiper(".swiperCiencia-2", {
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
  jQuery(document).ready(function() {
    var swiper = new Swiper(".swiperCiencia-3", {
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
  jQuery(document).ready(function() {
    var swiper = new Swiper(".swiperCiencia-4", {
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