<?php
  /*
  Template Name: O que é MT
  */
  ?>
<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>
<?php get_template_part('template-parts/headers/header-o-que-e-mt'); ?>
<main class="page-o-que-e-mt">
  <section class="o-que-e-mt-hero">
    <div class="container">
      <div class="row d-flex align-items-end justify-content-center">
        <div class="col-12 col-lg-5 text-center pe-lg-4">
          <img loading="lazy" class="img-fluid d-none d-lg-block"
            src=<?php echo get_template_directory_uri() . '/images/o-que-e-mt/mt.png' ?> alt="mt.">
        </div>
        <div class="col-12 col-lg-7">
          <p>A <strong>Meditação Transcendental®</strong> atua na redução do estresse e da ansiedade, pois leva a mente
            para níveis mais aquietados. Nenhuma crença ou expectativa é necessária para que a prática seja eficaz à
            promoção da saúde mental e física.
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="o-que-e-mt-praticamt">
    <div class="container">
      <div class="row d-flex align-items-start justify-content-center">
        <div class="col-12 col-lg-5">
          <h2><strong>O que acontece</strong> durante a prática de MT?</h2>
        </div>
        <div class="col-12 col-lg-7">
          <ul class="list-unstyled ps-0">
            <li>
              <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                data-bs-target="#home-collapse" aria-expanded="false">
              Coerência cerebral
              </button>
              <div class="collapse" id="home-collapse" style="">
                <div class="btn-toggle-nav p-4">
                  <p>Durante a prática, o cérebro atinge um funcionamento integrado e mais ordenado, permitindo que a
                    mente se mova naturalmente do nível ativo do pensamento para níveis mais silenciosos, alcançando o
                    estado mais puro da Consciência.
                  </p>
                </div>
              </div>
            </li>
            <li>
              <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                data-bs-target="#dashboard-collapse" aria-expanded="false">
              Repouso profundo
              </button>
              <div class="collapse" id="dashboard-collapse">
                <div class="btn-toggle-nav p-4">
                  <p>À medida que a mente se aquieta durante a prática, o corpo experimenta um descanso muito profundo e
                    altamente reparador para a fisiologia, pois permite a dissolução do estresse para o equilíbrio da
                    saúde física e mental.
                  </p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="o-que-e-mt-meditar">
    <div class="container">
      <h2>E se eu não conseguir <strong>meditar</strong>?</h2>
      <div class="row">
        <div class="col-12 col-lg-6 text">
          <p>É comum as pessoas acharem que, por terem uma mente muito ativa ou por serem muito agitadas, não
            conseguirão meditar ou se sentirão desconfortáveis com a prática.
          </p>
          <p>Isso acontece porque, ao contrário da MT, quase todas as técnicas envolvem algum tipo de concentração e de
            esforço mental. Entenda as diferenças comprovadas cientificamente.
          </p>
          <p><strong>Um estudo publicado na revista internacional Consciousness and Cognition identificou três
            categorias de meditação:</strong>
          </p>
        </div>
        <div class="col-12 col-lg-6 itens">
          <div class="item" style="background-color: #fff">
            <div class="content d-flex">
              <h5>Concentração ou foco</h5>
              <p class="border-left-yellow">Zen, Vipassana etc.</p>
            </div>
          </div>
          <div class="item" style="background-color: #fff">
            <div class="content d-flex">
              <h5>Monitoramento aberto</h5>
              <p class="border-left-yellow">Mindfulness, Kriya Yoga etc.</p>
            </div>
          </div>
          <div class="item" style="background-color: #FFC536">
            <div class="content d-flex">
              <h5>
                <div class="text-white">Autotranscendência</div>
              </h5>
              <p class="border-left-white"><img loading="lazy" class="img-fluid"
                src="<?php echo get_template_directory_uri() . '/images/o-que-e-mt/mt-meditar.png' ?>" alt="mt."></p>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center px-lg-4">
        <p>Observe as diferenças entre algumas linhas de meditação, com base nas ondas cerebrais registradas por meio de
          eletroencefalograma (EEG):
        </p>
      </div>
      <div class="table-responsive-lg">
        <table class="table">
          <thead>
            <tr>
              <th class="first-column">Forma de meditação</th>
              <th><img src="<?php echo get_template_directory_uri() . '/images/o-que-e-mt/mt-meditar.png' ?>" class="img-fluid" alt="mt"></th>
              <th>Mindfulness</th>
              <th>Concentração ou foco</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="first-column">Esforço mental</td>
              <td>Sem esforço</td>
              <td>Esforço moderado</td>
              <td>Esforço forte</td>
            </tr>
            <tr>
              <td class="first-column">Imagem EEG</td>
              <td><img src="<?php echo get_template_directory_uri() . '/images/o-que-e-mt/oqueemt-eeg1.png' ?>" class="img-fluid" alt="EEG"></td>
              <td><img src="<?php echo get_template_directory_uri() . '/images/o-que-e-mt/oqueemt-eeg2.png' ?>" class="img-fluid" alt="EEG"></td>
              <td><img src="<?php echo get_template_directory_uri() . '/images/o-que-e-mt/oqueemt-eeg3.png' ?>" class="img-fluid" alt="EEG"></td>
            </tr>
            <tr>
              <td class="first-column">Atividade das ondas cerebrais</td>
              <td>Alfa</td>
              <td>Theta</td>
              <td>Beta</td>
            </tr>
            <tr>
              <td class="first-column">Descrição das ondas cerebrais</td>
              <td>“Descontraído, feliz, focado”<br><span class="autor">- Clínica Mayo</span></td>
              <td>“Sonhe comigo”<br><span class="autor">- Clínica Mayo</span></td>
              <td>“Pensamento lógico, resolução de problemas”<br><span class="autor">- Clínica Mayo</span></td>
            </tr>
          <tbody>
        </table>
      </div>
    </div>
  </section>
  <section class="o-que-e-mt-diferente position-relative">
    <div class="mundo-melhor-topo">
      <img loading="lazy"
        src="<?php echo get_template_directory_uri() . '/images/o-que-e-mt/mt-diferente-mobile.png' ?>" alt="mt.">
    </div>
    <div class="container">
      <div class="row align-items-center justify-content-start">
        <div class="col-12 col-lg-7">
          <div class="text-center text-lg-start">
            <h2>Por que a MT é <strong>diferente</strong>?</h2>
          </div>
          <p>Existem diversas técnicas de meditação, mas elas são distintas e não produzem os mesmos resultados. A
            maioria envolve exercícios de relaxamento ou de respiração, narrativas guiadas ou algum tipo de esforço que
            faz com que a mente continue ativa na superfície, sem experimentar o verdadeiro silêncio interior.
          </p>
          <p><strong>Nada disso é necessário na MT. Ela é uma forma natural, confortável e automática de satisfação
            mental e de relaxamento físico. Sem esforço, sem tentar controlar ou observar pensamentos.</strong>
          </p>
        </div>
      </div>
      <div class="mundo-melhor-bg position-absolute"></div>
    </div>
  </section>
  <section class="o-que-e-mt-atua">
    <div class="container">
      <h2>Como a MT atua no <strong>cérebro</strong>?</h2>
      <div class="d-flex justify-content-center mx-lg-3 px-lg-5">
        <h3>O acúmulo de estresse e de ansiedade faz com que nosso cérebro entenda que estamos em constante perigo. Isso
          afeta nossa capacidade de pensar e agir e aumenta a produção de hormônios, como o cortisol, que prejudicam nossa
          saúde.
        </h3>
      </div>
      <h4>A prática regular da MT:</h4>
      <div class="row d-flex justify-content-center">
        <div class="col-12 col-lg-4 d-flex align-items-start justify-content-center d-block d-lg-none">
          <img loading="lazy" class="img-fluid"
            src=<?php echo get_template_directory_uri() . '/images/o-que-e-mt/cerebro-m.png' ?> alt="Cérebro">
        </div>
        <div class="col-12 col-lg-4 d-flex align-items-start mt-md-4">
          <p><strong>Aumenta</strong> a atividade do <span>córtex pré-frontal</span>, responsável pelas decisões, foco e
            criatividade.
          </p>
        </div>
        <div class="col-12 col-lg-4 d-flex align-items-start justify-content-center d-none d-lg-block">
          <img loading="lazy" class="img-fluid"
            src=<?php echo get_template_directory_uri() . '/images/o-que-e-mt/cerebro.png' ?> alt="Cérebro">
        </div>
        <div class="col-12 col-lg-4 d-flex align-items-end mb-md-4">
          <p><strong>Diminui</strong> a atividade da área responsável pelo medo e instintos: a <span>amígdala</span>.
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="o-que-e-mt-imagine">
    <div class="container text-center">
      <h2>Imagine a mente como um grande oceano. Transcender é ir além da sua superfície.</h2>
      <p>Praticar a MT é como submergir naturalmente dentro de si para encontrar, na mente, um lugar que está além do
        nível agitado dos pensamentos, onde experimentamos um estado de descanso muito profundo, que nos leva a acessar
        uma fonte abundante de energia, de criatividade e de bem-estar.
      </p>
      <a href="<?php echo home_url( '/agendamento/' ); ?>" class="btn" role="button">Aprenda a MT</a>
    </div>
  </section>
 
  <section class="o-que-e-mt-sabermais">
    <div class="container">
      <h2>Para <strong>saber mais</strong></h2>
      <div id="sabermais" class="swiper swiperSabermais" data-bs-ride="carousel">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="book d-lg-flex align-items-start justify-content-center text-center text-lg-start">
              <img loading="lazy" class="img-fluid"
                src=<?php echo get_template_directory_uri() . '/images/o-que-e-mt/book.png' ?> alt="Book">
              <div>
                <h5>Meditação Transcendental® com perguntas e respostas</h5>
                <div class="mb-3">
                  <span>Mythos Editora</span>
                </div>
                <p>A publicação reproduz uma das mais brilhantes palestras proferidas por Maharishi Mahesh Yogi. Na primeira parte ele explica a  Meditação Transcendental®; na segunda, responde às perguntas do público presente nos discursos realizados por Maharishi em Londres, no início dos anos 60.</p>
                
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="book d-lg-flex align-items-start justify-content-center text-center text-lg-start">
              <img loading="lazy" class="img-fluid"
                src=<?php echo get_template_directory_uri() . '/images/o-que-e-mt/book3.png' ?> alt="Book">
              <div>
                <h5>Ciência do Ser e Arte de Viver</h5>
                <div class="mb-3">
                  <span>Gryphus Editora</span>
                </div>
                <p>Neste livro, Maharishi apresenta a técnica simples, natural e sem esforço da MT®. Ele mostra que qualquer pessoa pode aproveitar os tesouros ilimitados do campo do Ser -  infinita felicidade, energia, criatividade, inteligência e poder organizador - a fim de trazer realização à vida diária.</p>
                
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="book d-lg-flex align-items-start justify-content-center text-center text-lg-start">
              <img loading="lazy" class="img-fluid"
                src=<?php echo get_template_directory_uri() . '/images/o-que-e-mt/book2.png' ?> alt="Book">
              <div>
                <h5>Um Oceano Ilimitado de Consciência: Respostas Simples para as Grandes Questões da Vida</h5>
                <div class="mb-3">
                  <span>Gryphus Editora</span>
                </div>
                <p>Neste livro, o Dr. Tony Nader propõe soluções profundas para questões que há muito fascinam e intrigam filósofos e cientistas. O que é Consciência? Temos liberdade? Como tirar o melhor da vida e criar harmonia entre povos e nações? Ele oferece essas soluções com base em um paradigma que unifica mente, corpo e ambiente.</p>
                
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="book d-lg-flex align-items-start justify-content-center text-center text-lg-start">
              <img loading="lazy" class="img-fluid"
                src=<?php echo get_template_directory_uri() . '/images/o-que-e-mt/book4.png' ?> alt="Book">
              <div>
                <h5>Em Águas Profundas – Criatividade e Meditação</h5>
                <div class="mb-3">
                  <span>Gryphus Editora</span>
                </div>
                <p>Neste livro, David Lynch discorre sobre o impacto da prática da MT em sua vida e obra. O cineasta  tornou-se adepto à prática na década de 70 e revela a experiência de “mergulhar em si mesmo” e de “pescar ideias” como se pescam peixes; em seguida, indica como aplicar esses conceitos na televisão, no cinema e nos outros meios criativos, como pintura, música e desenho. </p>
                
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="book d-lg-flex align-items-start justify-content-center text-center text-lg-start">
              <img loading="lazy" class="img-fluid"
                src=<?php echo get_template_directory_uri() . '/images/o-que-e-mt/book5.png' ?> alt="Book">
              <div>
                <h5>Olhando para Dentro</h5>
                <div class="mb-3">
                  <span>Gryphus Editora</span>
                </div>
                <p>Neste livro, a Dra Valeria Portugal demonstra como é possível modificar o estado basal do cérebro e prepará-lo para ter um insight por meio da MT. Com o trabalho, a autora busca mostrar uma importante ligação entre a ciência moderna e a ciência védica, com conhecimentos milenares e que consideram a Consciência como primária à matéria, portanto criadora do cérebro.</p>
                
              </div>
            </div>
          </div>

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
    <script>
      jQuery(document).ready(function() {
        var swiper = new Swiper(".swiperSabermais", {
          slidesPerView: 1,
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
              slidesPerView: 1,
              slidesPerGroup: 1,
              spaceBetween: 0,
            },
            768: {
              slidesPerView: 2,
              slidesPerGroup: 2,
              spaceBetween: 0,
            },
            1024: {
              slidesPerView: 2,
              slidesPerGroup: 2,
              spaceBetween: 0,
            },
          },
        });
      });
    </script>
  </section>
  <section class="o-que-e-mt-footer">
    <div class="container text-center">
      <h2>Dúvidas?</h2>
      <p>Veja as respostas para as <a href="<?php echo home_url( '/faq/' ); ?>">perguntas mais frequentes.</a></p>
      <a href="<?php echo home_url( '/instrutores/' ); ?>" class="btn" role="btn">Encontre um instrutor certificado</a>
    </div>
  </section>
</main>
<?php get_footer();