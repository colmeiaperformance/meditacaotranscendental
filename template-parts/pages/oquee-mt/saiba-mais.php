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