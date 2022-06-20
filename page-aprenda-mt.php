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
    <div class="container text-center">
      <div class="text">
        <p>A MT é uma técnica <strong>simples, natural e sem esforço</strong> que pode ser praticada por qualquer pessoa, <span>a partir dos 5 anos de idade</span>.</p>
        <p>O <Strong>primeiro passo</Strong> é participar de uma <span>palestra online gratuita</span>.</p>
      </div>
      <a href="<?php echo home_url( '/agendamento/' ); ?>" class="btn">Agende sua participação</a>
    </div>
    <!-- <div class="container text-center d-block d-lg-none">
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
      </div> -->
  </section>
  <section class="tres-passos">
    <div class="container">
      <h2><strong>Os passos</strong> para aprender a MT</h2>
    </div>
    <div class="item">
      <div class="container d-flex align-items-lg-center justify-content-start">
        <span>1</span>
        <div class="text">
          <h4>Palestra gratuita</h4>
          <p>Você vai entender como a MT funciona e os benefícios para a mente e o corpo.</p>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="container d-flex align-items-lg-center justify-content-start">
        <span>
        2
        </span>
        <div class="text">
          <h4>Entrevista individual</h4>
          <p>Um bate-papo com o instrutor credenciado para identificar suas necessidades.</p>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="container d-flex align-items-lg-center justify-content-start">
        <span>
        3
        </span>
        <div class="text">
          <h4>Curso presencial</h4>
          <p>São 4 encontros consecutivos de aproximadamente 1h30 cada.</p>
        </div>
      </div>
    </div>
    <div class="passos-aprender">
      <div class="container">
        <div class="swiper passosSwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="passo">
                <h5>Dia 1</h5>
                <p>Instrução da técnica de forma individualizada e personalizada.</p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="passo">
                <h5>Dia 2</h5>
                <p>Os aspectos da prática correta para benefícios máximos.</p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="passo">
                <h5>Dia 3</h5>
                <p>A mecânica da técnica na mente e no corpo para a dissolução do estresse.</p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="passo">
                <h5>Dia 4</h5>
                <p>Os efeitos no longo prazo para sua evolução individual e plenitude na vida.</p>
              </div>
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
    </div>
    <div class="text-center">
      <a href="<?php echo home_url( '/beneficios/' ); ?>" class="btn">Conheça os benefícios</a>
    </div>
  </section>
  <section class="mt-curso">
    <div class="container">
      <h2><strong>Mais</strong> que um curso</h2>
      <h3>Após aprender a MT, você tem acesso a <strong>diversas atividades</strong>.</h3>
      <div class="atividades">
        <div class="swiper atividadesSwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="text-center">
                <img loading="lazy" src="<?php echo get_template_directory_uri() . '/images/aprenda-mt/acompanhamento.png' ?>" alt="Acompanhamento pós-curso">
              </div>
              <div class="content">
                <h4>Acompanhamento<br/> pós-curso</h4>
                <p>Só na MT você recebe acompanhamento gratuito depois do curso. Tudo para fortalecer sua experiência e ajudar você a alcançar os melhores resultados. </p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="text-center">
                <img loading="lazy" src="<?php echo get_template_directory_uri() . '/images/aprenda-mt/meditacao.png' ?>" alt="Meditação coletiva">
              </div>
              <div class="content">
                <h4>Meditação<br/> coletiva</h4>
                <p>Encontros diários que acontecem de forma gratuita e online. Uma maneira de você manter regularidade na prática e ainda contribuir para a paz mundial.</p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="text-center">
                <img loading="lazy" src="<?php echo get_template_directory_uri() . '/images/aprenda-mt/residencial.png' ?>" alt="Curso residencial">
              </div>
              <div class="content">
                <h4>Curso <br />residencial</h4>
                <p>Um agradável final de semana em meio à natureza para uma imersão na MT. Uma vivência extraordinária para aprofundar sua experiência.</p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="text-center">
                <img loading="lazy" src="<?php echo get_template_directory_uri() . '/images/aprenda-mt/conhecimento.png' ?>" alt="Universo de conhecimento">
              </div>
              <div class="content">
                <h4>Universo de<br />conhecimento</h4>
                <p>Como praticante da MT, você tem acesso ao conhecimento da milenar Ciência Védica, por meio de palestras, cursos, eventos e técnicas avançadas.</p>
              </div>
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
      <div class="text-center mb-2 mb-lg-3">
        <img loading="lazy" src="<?php echo get_template_directory_uri() . '/images/aprenda-mt/separador.png' ?>" alt="Separador">
      </div>
      <p>Somente instrutores certificados e credenciados pela Associação Internacional de Meditação (SIM) podem ensinar a autêntica técnica de MT. Essa é a sua <strong>garantia de receber a verdadeira técnica</strong> ensinada há mais de 60 anos, com base no conhecimento puro da Ciência Védica.</p>
      <div class="text-center">
        <a href="<?php echo home_url( '/instrutores/' ); ?>" class="btn">Conheça os instrutores credenciados</a>
      </div>
    </div>
  </section>
  <section class="aprenda-mt-investir position-relative">
    <div class="aprenda-mt-investir-topo">
      <img loading="lazy" src="<?php echo get_template_directory_uri() . '/images/aprenda-mt/investir-mobile.png' ?>" alt="Investir">
    </div>
    <div class="container">
      <div class="aprenda-mt-investir-bg position-absolute"></div>
      <div class="row align-items-center justify-content-end">
        <div class="col-12 col-lg-7">
          <div class="text-center text-lg-start">
            <h2>Ao investir no seu bem-estar, você ajuda outras pessoas.</h2>
          </div>
          <p>Somos uma organização sem fins lucrativos comprometida em tornar a Meditação Transcendental e seus benefícios acessíveis ao maior número possível de pessoas. Por isso, parte do valor pago no curso é direcionado a projetos que ensinam a MT gratuitamente a milhares de crianças e adultos em todo o mundo.</p>
          <p><strong>Converse com um instrutor para conhecer as condições especiais de pagamento.</strong></p>
        </div>
      </div>
    </div>
  </section>
  <section class="mudou-vida">
    <div class="container">
      <h2>Veja como a MT <strong>mudou a vida</strong> deles</h2>
      <!-- inicio carousel -->
      <div id="mudouvida" class="swiper swiperMudouVida" data-bs-ride="carousel">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="swiper-mobile">
              <iframe class="yt-video" width="280" height="200" src="https://www.youtube.com/embed/BZyF2GtjzGI"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
              </iframe>
              <p>
                Akyria Ougos e a leveza da Meditacão Transcendental
              </p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="swiper-mobile">
              <iframe class="yt-video" width="280" height="200" src="https://youtu.be/rvF2rYZZegg"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
              </iframe>
              <p>
                Depoimento Jess - 6 anos de Meditação Transcendental
              </p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="swiper-mobile">
              <iframe class="yt-video" width="280" height="200" src="https://www.youtube.com/embed/Ta2wL5Q4rkw"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
              </iframe>
              <p>
                Não imagino minha vida sem a Meditação Transcendental
              </p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="swiper-mobile">
              <iframe class="yt-video" width="280" height="200" src="https://www.youtube.com/embed/wRYq9imI-4M"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
              </iframe>
              <p>
                Foco, Energia, Plenitude e Saúde - Meditação Transcendental
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
  <section class="aprenda-mt-footer">
    <div class="container text-center">
      <h2>Dúvidas?</h2>
      <p>Veja as respostas para as  <a href="<?php echo home_url( '/faq/' ); ?>">perguntas mais frequentes.</a></p>
    </div>
  </section>
</main>
<script>
  jQuery(document).ready(function() {
    var swiper = new Swiper(".swiperMudouVida", {
      slidesPerView: 1,
      slidesPerGroup: 1,
      loop: false,
      spaceBetween: 10,
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
          slidesPerGroup: 1,
          spaceBetween: 50,
        },
        768: {
          slidesPerView: 2,
          slidesPerGroup: 1,
          spaceBetween: 50,
        },
        1024: {
          slidesPerView: 3,
          slidesPerGroup: 1,
          spaceBetween: 50,
        },
      },
    });
  });
</script>
<script>
  jQuery(document).ready(function() {
    var swiper = new Swiper(".atividadesSwiper", {
      slidesPerView: 1,
      slidesPerGroup: 1,
      loop: false,
      spaceBetween: 0,
      autoplay: {
        delay: 3000,
      },
      grabCursor: false,
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
          loop: true,
          grabCursor: true,
          autoplay: {
            delay: 3000,
          },
        },
        768: {
          slidesPerView: 2,
          slidesPerGroup: 1,
          spaceBetween: 20,
          loop: true,
          grabCursor: true,
          autoplay: {
            delay: 3000,
          },
        },
        992: {
          slidesPerView: 4,
          slidesPerGroup: 1,
          spaceBetween: 40,
          grabCursor: true,
          loop: true, autoplay: {
            delay: 3000,
          },
        },
      },
    });
  });
</script>
<script>
  jQuery(document).ready(function() {
    var swiper = new Swiper(".passosSwiper", {
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
          slidesPerView: 2,
          slidesPerGroup: 1,
          spaceBetween: 0,
        },
        768: {
          slidesPerView: 2,
          slidesPerGroup: 1,
          spaceBetween: 0,
        },
        992: {
          slidesPerView: 4,
          slidesPerGroup: 1,
          spaceBetween: 45,
        },
      },
    });
  });
</script>
<?php get_footer();