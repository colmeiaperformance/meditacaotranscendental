<?php get_header(); ?>
<main class="lp-live-typ">

  <header class="header header--lp-live-typ p-md-auto">
    <?php get_template_part('template-parts/pages/live-convidados/navbar'); ?>
    <div class="container ps-3">
      <div class="row pt-5">
        <div class="col-lg-5 pb-5 pb-lg-auto text-white pe-lg-5">
          <h1 class="fs-1 mb-5"><span class="fw-500">Obrigado!<br> Recebemos sua inscrição.</span><br>
          </h1>
          <div class="text fs-5">
            <p>
              Você receberá as informações via
              e-mail e whatsapp.
            </p>
            <div class="d-flex align-items-center live-data pt-5">
            <span class="live-data-icon">
              <img class="img-fluid w-75"
                src="<?php echo get_template_directory_uri() . '/images/lp-live-convidados/calendar-white.svg'; ?>" alt>
            </span>
            <div class="live-data-text fs-3">
              <p class="mb-0">
                <span class="fw-500">30 de março,</span>
              </p>
              <p class="mb-0">terça-feira, às <span class="fw-500">19h30</span></p>
            </div>
          </div>
          </div>
        </div>
        <div class="col-lg-7 image">
          <img loading="lazy" class="d-none d-lg-inline-block img-fluid"
            src="<?php echo get_template_directory_uri() . '/images/lp-live-convidados/header-woman.png' ?>"
            alt="Agendamento">
          <div>
  </header>


  <?php get_template_part('template-parts/pages/home/visite-blog'); ?>

</main>
<?php get_footer();