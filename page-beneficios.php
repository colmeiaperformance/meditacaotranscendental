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
      <div class="row align-items-center justify-content-center pt-5">
        <div class="col text-center">
          <a class="btn mt-0" href="<?php echo home_url( '/agendamento/' ); ?>" role="button">Agende a palestra gratuita</a>
        </div>
      </div>
    </div>
  </section>
  <section class="ciencia">
    <div class="container">
      <div class="row align-items-center px-5 bloco-1">
        <input type="radio" name="tabs" id="input-1" checked>
        <label for="input-1" class="col-6 col-lg-3 d-flex align-items-center justify-content-center p-0 box rounded-circle text-center">
          <div class="default">
            <img loading="lazy" class="img-fluid"
              src=<?php echo get_template_directory_uri() . '/images/beneficios/mental.png' ?>
              alt="Benefícios: Saúde Mental">
            <h4>Saúde<br /> Mental</h4>
            <img loading="lazy" class="seta img-fluid"
              src=<?php echo get_template_directory_uri() . '/images/beneficios/seta.png' ?>
              alt="Seta">
          </div>
        </label>
        <input type="radio" name="tabs" id="input-2">
        <label for="input-2" class="col-6 col-lg-3 d-flex align-items-center justify-content-center p-0 box rounded-circle text-center">
          <div class="default">
            <img loading="lazy" class="img-fluid"
              src=<?php echo get_template_directory_uri() . '/images/beneficios/fisica.png' ?>
              alt="Benefícios: Saúde Física">
            <h4>Saúde<br /> Física</h4>
            <img loading="lazy" class="seta img-fluid"
              src=<?php echo get_template_directory_uri() . '/images/beneficios/seta.png' ?>
              alt="Seta">
          </div>
        </label>
        <input type="radio" name="tabs" id="input-3">
        <label for="input-3" class="col-6 col-lg-3 d-flex align-items-center justify-content-center p-0 box rounded-circle text-center">
          <div class="default">
            <img loading="lazy" class="img-fluid"
              src=<?php echo get_template_directory_uri() . '/images/beneficios/emocional.png' ?>
              alt="Benefícios: Saúde Física">
            <h4>Inteligência<br /> emocional</h4>
            <img loading="lazy" class="seta img-fluid"
              src=<?php echo get_template_directory_uri() . '/images/beneficios/seta.png' ?>
              alt="Seta">
          </div>
        </label>
        <input type="radio" name="tabs" id="input-4">
        <label for="input-4" class="col-6 col-lg-3 d-flex align-items-center justify-content-center p-0 box rounded-circle text-center">
          <div class="default">
            <img loading="lazy" class="img-fluid"
              src=<?php echo get_template_directory_uri() . '/images/beneficios/potencia.png' ?>
              alt="Benefícios: Saúde Física">
            <h4>Potencial<br /> Mental</h4>
            <img loading="lazy" class="seta img-fluid"
              src=<?php echo get_template_directory_uri() . '/images/beneficios/seta.png' ?>
              alt="Seta">
          </div>
        </label>
        <div class="pages">
          <div class="page legend px-0 px-lg-5 mx-lg-3" id="page-1">
            <p>O Brasil é o país mais ansioso do mundo, segundo a OMS. Também somos o segundo com o maior nível de estresse: 70% da população ativa já apresentou algum sintoma do problema, de acordo com a Associação Internacional  do Controle do Estresse (ISMA).</p>
            <p>Com a prática da MT, conseguimos reduzir, de forma natural, os quadros de estresse e ansiedade e,  consequentemente, diminuir riscos de transtornos mentais, como depressão, síndrome de burnout e do pânico, transtornos de déficit de atenção e estresse pós-traumático, dentre outros.</p>
          </div>
          <div class="page legend px-0 px-lg-5 mx-lg-3" id="page-2">
            <p>Devido ao alto nível de estresse acumulado, muitas vezes, o descanso que temos à noite é insuficiente para o restabelecimento natural do organismo. Essa condição provoca um desequilíbrio hormonal nocivo, que pode causar doenças cardiovasculares, diabetes, envelhecimento precoce, dentre outros problemas.</p>
            <p>A prática regular da MT atua diretamente na dissolução do estresse impregnado no sistema nervoso. Isso gera um poderoso efeito regenerativo, que contribui para a prevenção de diversas doenças, para a diminuição do uso de medicamentos e para a redução dos custos com atenção à saúde.</p>
          </div>
          <div class="page legend px-0 px-lg-5 mx-lg-3" id="page-3">
            <p>O autoconhecimento é o caminho para encontrar mais satisfação e autorrealização em todas as áreas. A técnica da MT permite que você se conecte com sua verdadeira essência para viver de forma mais harmônica com os desafios do dia a dia, encontrando mais felicidade e significado em sua vida.</p>
            <p>Esse estado autorreferente com a prática regular da MT nos torna mais conscientes de nós mesmos. Como resultados, melhoramos a qualidade dos relacionamentos e do nosso comportamento social, assim como desenvolvemos, espontaneamente, as chamadas soft skills e a inteligência emocional.</p>
          </div>
          <div class="page legend px-0 px-lg-5 mx-lg-3" id="page-4">
            <p>O excesso de informações e de estímulos que recebemos no dia a dia prejudica a atenção, a memória, o potencial criativo e a nossa capacidade de pensar e agir. A MT aumenta a atividade do córtex pré-frontal, região do cérebro responsável  pelas funções cognitivas, pelo processamento de informações, pelo raciocínio, etc.
            </p>
            <p>Praticar regularmente a MT promove o pleno potencial da mente, gerando total integração e coerência cerebral, o que aumenta nossa criatividade, foco, inteligência e capacidade de concentração e de resolução de problemas. Assim, a gente se torna mais eficiente e com mais energia.</p>
          </div>
        </div>
      </div>
      <div class="row d-none d-lg-block">
        <h2>O que diz a <strong>ciência</strong>?</h2>
        <div class="swiper swiperCiencia">
          <div class="swiper-wrapper">
            <div class="swiper-slide active">
              <div class="swiper-mobile">
                <div class="container px-sm-5">
                  <div class="row d-flex align-items-center justify-content-center px-3 px-sm-5">
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
                <div class="container px-sm-5">
                  <div class="row d-flex align-items-center justify-content-center px-3 px-sm-5">
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
                <div class="container px-sm-5">
                  <div class="row d-flex align-items-center justify-content-center px-3 px-sm-5">
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
                <div class="container px-sm-5">
                  <div class="row d-flex align-items-center justify-content-center px-3 px-sm-5">
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
                <div class="container px-sm-5">
                  <div class="row d-flex align-items-center justify-content-center px-3 px-sm-5">
                    <div class="col-12 col-lg-5 order-2 order-lg-1">
                      <h3>Pressão arterial</h3>
                      <div class="text-center d-block d-lg-none">
                        <img loading="lazy" class="border-0"
                          src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/line.png' ?>
                          alt="Linha">
                      </div>
                      <p>Uma meta-análise com 107 estudos, mostra que a prática da MT tem efeitos significativos na redução da pressão arterial sanguínea, em comparação com aplicação de outras técnicas não farmacológicas. 
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
                <div class="container px-sm-5">
                  <div class="row d-flex align-items-center justify-content-center px-3 px-sm-5">
                    <div class="col-12 col-lg-5 order-2 order-lg-1">
                      <h3>Diabetes</h3>
                      <div class="text-center d-block d-lg-none">
                        <img loading="lazy" class="border-0"
                          src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/line.png' ?>
                          alt="Linha">
                      </div>
                      <p>
                        Uma  pesquisa realizada em colaboração com o National Institute of Health (NIH) e o governo norte-americano comprovou a eficácia da  MT na diminuição da resistência insulínica. 
                      </p>
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
            <div class="swiper-slide">
              <div class="swiper-mobile">
                <div class="container px-sm-5">
                  <div class="row d-flex align-items-center justify-content-center px-3 px-sm-5">
                    <div class="col-12 col-lg-5 order-2 order-lg-1">
                      <h3>Colesterol alto </h3>
                      <div class="text-center d-block d-lg-none">
                        <img loading="lazy" class="border-0"
                          src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/line.png' ?>
                          alt="Linha">
                      </div>
                      <p>Um estudo da Kaiser Permanent Medical Center verificou que a taxa de colesterol total dos pacientes estudados diminuiu 30 mg/dl após 1 ano de prática da MT por 20 minutos, duas vezes ao dia.</p>
                    </div>
                    <div class="col-12 col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-end p-0 mb-4 mb-lg-0 order-1 order-lg-2">
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
                <div class="container px-sm-5">
                  <div class="row d-flex align-items-center justify-content-center px-3 px-sm-5">
                    <div class="col-12 col-lg-5 order-2 order-lg-1">
                      <h3>Fortalecimento do sistema imunológico </h3>
                      <div class="text-center d-block d-lg-none">
                        <img loading="lazy" class="border-0"
                          src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/line.png' ?>
                          alt="Linha">
                      </div>
                      <p>A MT também é eficaz para o fortalecimento do sistema imunológico, de acordo com a ciência. Uma pesquisa mostrou o aumento de glóbulos brancos em pacientes, o que ajuda a proteger o organismo de câncer e de infecções. 
                      </p>
                    </div>
                    <div class="col-12 col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-end p-0 mb-4 mb-lg-0 order-1 order-lg-2">
                      <img loading="lazy" class="img-fluid"
                        src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/9.png' ?>
                        alt="Gráfico">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="swiper-mobile">
                <div class="container px-sm-5">
                  <div class="row d-flex align-items-center justify-content-center px-3 px-sm-5">
                    <div class="col-12 col-lg-5 order-2 order-lg-1">
                      <h3>Relacionamentos profissionais</h3>
                      <div class="text-center d-block d-lg-none">
                        <img loading="lazy" class="border-0"
                          src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/line.png' ?>
                          alt="Linha">
                      </div>
                      <p>Um estudo realizado em uma indústria automobilística concluiu que, após três meses de prática regular da MT, funcionários apresentaram melhores relações no trabalho em comparação a outras pessoas da mesma empresa. 
                      </p>
                    </div>
                    <div class="col-12 col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-end p-0 mb-4 mb-lg-0 order-1 order-lg-2">
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
                <div class="container px-sm-5">
                  <div class="row d-flex align-items-center justify-content-center px-3 px-sm-5">
                    <div class="col-12 col-lg-5 order-2 order-lg-1">
                      <h3>Relacionamentos afetivos </h3>
                      <div class="text-center d-block d-lg-none">
                        <img loading="lazy" class="border-0"
                          src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/line.png' ?>
                          alt="Linha">
                      </div>
                      <p>Estudantes universitários que praticaram o Programa de Meditação Transcendental® classificaram mais positivamente as pessoas importantes de suas vidas (pais, cônjuge) em comparação aos estudantes do grupo de controle.
                      </p>
                    </div>
                    <div class="col-12 col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-end p-0 mb-4 mb-lg-0 order-1 order-lg-2">
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
                <div class="container px-sm-5">
                  <div class="row d-flex align-items-center justify-content-center px-3 px-sm-5">
                    <div class="col-12 col-lg-5 order-2 order-lg-1">
                      <h3>Autorrealização</h3>
                      <div class="text-center d-block d-lg-none">
                        <img loading="lazy" class="border-0"
                          src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/line.png' ?>
                          alt="Linha">
                      </div>
                      <p>Uma metanálise de todos os estudos científicos já realizados sobre os efeitos de diferentes técnicas de meditação na realização pessoal mostrou que a MT apresenta eficácia de 3 a 4 vezes maior que outras técnicas de meditação e de relaxamento. 
                      </p>
                    </div>
                    <div class="col-12 col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-end p-0 mb-4 mb-lg-0 order-1 order-lg-2">
                      <img loading="lazy" class="img-fluid"
                        src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/12.png' ?>
                        alt="Gráfico">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="swiper-mobile">
                <div class="container px-sm-5">
                  <div class="row d-flex align-items-center justify-content-center px-3 px-sm-5">
                    <div class="col-12 col-lg-5 order-2 order-lg-1">
                      <h3>Criatividade e outras habilidades </h3>
                      <div class="text-center d-block d-lg-none">
                        <img loading="lazy" class="border-0"
                          src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/line.png' ?>
                          alt="Linha">
                      </div>
                      <p>
                        Depois de um período de 6 a 12 meses de prática regular de MT, um grupo de estudantes de Taiwan apresentou melhora significativa em cinco escalas diferentes de capacidade intelectual, incluindo uma escala de “toda a criatividade cerebral”. 
                      </p>
                    </div>
                    <div class="col-12 col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-end p-0 mb-4 mb-lg-0 order-1 order-lg-2">
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
                <div class="container px-sm-5">
                  <div class="row d-flex align-items-center justify-content-center px-3 px-sm-5">
                    <div class="col-12 col-lg-5 order-2 order-lg-1">
                      <h3>Desenvolvimento da inteligência </h3>
                      <div class="text-center d-block d-lg-none">
                        <img loading="lazy" class="border-0"
                          src=<?php echo get_template_directory_uri() . '/images/beneficios-mt/line.png' ?>
                          alt="Linha">
                      </div>
                      <p>
                        Um estudo feito com estudantes universitários praticantes de MT mostrou  que eles obtiveram um aumento significativo do QI, enquanto o grupo de controle não apresentou avanços. 
                      </p>
                      <p>
                        A pesquisa comprovou que adultos com mais de 18 anos podem elevar a inteligência com a ajuda da técnica, ao contrário do que se acreditava anteriormente. 
                      </p>
                    </div>
                    <div class="col-12 col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-end p-0 mb-4 mb-lg-0 order-1 order-lg-2">
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
        <div class="text-center">
          <a href="<?php echo home_url( '/agendamento/' ); ?>" class="btn">Agende uma palestra gratuita </a>
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
      loop: false,
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
<script src="https://meditacaotranscedental.activehosted.com/f/embed.php?id=8" type="text/javascript" charset="utf-8"></script>
<?php get_footer();