<?php get_header(); ?>
<main class="lp-live-convidados">

  <header class="header header--lp-live-convidados p-md-auto">
    <?php get_template_part('template-parts/pages/live-convidados/navbar'); ?>
    <div class="container ps-3">
      <div class="row pt-2">
        <div class="col-lg-5 pb-3 pb-lg-auto pb-xxl-4 text-white pe-lg-5">
          <h1 class="fs-1 mb-3"><span class="fw-500">O impacto do estresse na saúde e como a MT pode mudar
              isso.</span><br>
          </h1>
          <div class="text fs-5">
            <p>
              Você sente que está vivendo uma sobrecarga de estresse e cansaço, com uma rotina cada vez mais exigente e
              acelerada?
            </p>
            <p class="d-none d-md-block">
              Muitas vezes, achamos que isso é normal. Mas não é!
            </p>
            <p class="d-none d-md-block">
              Essa sobrecarga acarreta danos graves à nossa saúde física e mental.
            </p>
            <p class="d-none d-md-block">
              Mas, como lidar com uma vida tão intensa e, ao mesmo tempo, encontrar equilíbrio, saúde e realização
              pessoal?
            </p>
            <p class="d-md-none">
            Participe do evento, dia 4 de abril, e entenda como encontrar esse equilíbrio para viver com mais saúde e realização.
            </p>
          </div>
        </div>
        <div class="col-lg-7 image">
          <img loading="lazy" class="d-none d-lg-inline-block img-fluid"
            src="<?php echo get_template_directory_uri() . '/images/lp-live-convidados/header-woman.png' ?>"
            alt="Agendamento">
          <div>
  </header>


  <section class="attend">
    <div class="container">
      <div class="row p-2 p-lg-auto">
        <div class="col-lg-6 text-left fw-light pe-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-end">
          <p class="fs-2 pe-lg-5">
            Participe deste evento gratuito e descubra como você pode transformar sua vida para
            viver com mais
            <span class="fw-500">saúde e felicidade</span>.
          </p>
          <div class="d-flex align-items-center live-data pt-5">
            <span class="live-data-icon">
              <img class="img-fluid w-75"
                src="<?php echo get_template_directory_uri() . '/images/lp-live-convidados/calendar.svg'; ?>" alt>
            </span>
            <div class="live-data-text fs-3">
              <p class="mb-0">
                <span class="fw-500">04 de abril,</span>
              </p>
              <p class="mb-0">terça-feira, às <span class="fw-500 color-highlight">19h30</span></p>
            </div>
          </div>
        </div>
        <div id="attend" class="col-lg-6 form-live-guests p-4 p-lg-5 order-1 order-lg-2 d-flex flex-column justify-content-around">
          <?php echo get_template_part( 'template-parts/pages/live-convidados/form-live-convidados' ); ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Guests -->
  <section class="guests mt-5 pt-5">
    <div class="w-100 h-100">
      <div class="row">
        <img class="mx-auto w-auto"
          src="<?php echo get_template_directory_uri() . '/images/lp-live-convidados/separador.png'; ?>" alt>
      </div>
      <div class="row">
        <h2 class="guests-title py-5 text-center">Convidados <strong>Especiais</strong></h2>
      </div>
      <div class="background-primary-light">
        <div class="container guest d-flex justify-content-around">
          <div class="row">
            <div class="col-lg-6 text-center text-lg-end gx-0 order-1">
              <img class="guest-img img-fluid"
                src="<?php echo get_template_directory_uri() . '/images/lp-live-convidados/img-maria-bernardete.jpg'; ?>"
                alt>
            </div>
            <div class="col-lg-6 p-5 guest-content text-white order-2 d-flex flex-column justify-content-evenly">
              <h3 class="guest-content-title fw-500 mb-3 mb-lg-0">Maria Bernardete Ferreira - “Como a MT pode nos trazer
                mais saúde e
                equilíbrio”</h3>
              <p class="guest-content-text lead fw-normal">Presidente da Associação Internacional de Meditação e, há 30
                anos,
                instrutora
                de Meditação Transcendental pela Maharishi European Research University.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="background-green">
        <div class="container guest d-flex justify-content-around">
          <div class="row">
            <div class="col-lg-6 text-center text-lg-start gx-0 order-1 order-lg-2">
              <img class="guest-img img-fluid"
                src="<?php echo get_template_directory_uri() . '/images/lp-live-convidados/img-dr-otavio.jpg'; ?>" alt>
            </div>
            <div
              class="col-lg-6 p-5 guest-content text-white order-2 order-lg-1 d-flex flex-column justify-content-evenly">
              <h3 class="guest-content-title fw-500 mb-3 mb-lg-0">Dr. Otávio Mangili - “Os efeitos do estresse na nossa
                saúde e como
                combater
                isso”</h3>
              <p class="guest-content-text lead fw-normal">Doutor em Cardiologia pela FMUSP, médico pesquisador do PMRC
                e praticante de
                MT desde 2014.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END Guests -->

  <section class="coupon">
    <div class="container">
      <div class="row d-flex p-5">
        <div class="col-12 col-lg-6 d-flex pi-center pc-center">
          <img class="img-fluid coupon-icon"
            src="<?php echo get_template_directory_uri() . '/images/lp-live-convidados/saude-fisica.svg'; ?>" alt>
        </div>
        <div class="col-12 col-lg-6 fw-light fs-4">
          A ciência já comprovou que a <span class="fw-500">Meditação Transcendental</span> é uma ferramenta poderosa
          para combater o estresse, gerando um efeito regenerativo para prevenção e melhora de diversas doenças, como
          problemas cardíacos, hipertensão, diabetes, síndrome de burnout, entre outras, além de nos trazer plenitude e
          paz interior.
        </div>
      </div>
      <div class="row py-5"><img class="mx-auto w-auto"
          src="<?php echo get_template_directory_uri() . '/images/lp-live-convidados/separador.png'; ?>" alt></div>
      <div class="row text-center py-5 mb-5 fs-1">
        <p>Os participantes irão receber uma técnica para ajudar no relaxamento e um <span
            class="fw-600 badge rounded-pill color-secondary-dark-80 background-primary-light">cupom especial da
            MT!</span></p>
      </div>
    </div>
  </section>

  <section class="cta-live">
    <div class="container">
      <div class="row d-flex justify-content-center pb-5 mb-5">
        <div class="d-flex justify-content-center col-12">
          <a name="inscricao" class="btn" href="#attend" role="button">Faça sua inscrição</a>
        </div>
      </div>
    </div>
  </section>

</main>
<?php get_footer();