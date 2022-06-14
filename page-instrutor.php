<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>
<main class="page-instrutor">
  <?php  echo do_shortcode( '[mt_render_employee]' ); ?>
  <!-- <section class="instrutor-profile">
  <div class="col-12 instrutor-picture-mobile mb-5 text-center d-block d-lg-none">
    <img loading="lazy" src=<?php echo get_template_directory_uri() . '/images/instrutor/instrutor.png' ?> alt="Instrutor">  
  </div>
    <div class="container">
      <div class="row d-flex justify-content-center align-items-stat">
        <div class="col-12 col-lg-5 instrutor-picture pe-lg-4 mb-4 mb-lg-0 text-center d-none d-lg-block">
          <img loading="lazy" src=<?php echo get_template_directory_uri() . '/images/instrutor/instrutor.png' ?> alt="Instrutor">  
        </div>
        <div class="col-12 col-lg-7 instrutor-bio">
          <div class="d-flex align-items-center justify-content-start mb-2 mb-lg-4">
            <div class="mt-icon"><img loading="lazy" src=<?php echo get_template_directory_uri() . '/images/instrutor/mt.png' ?> alt="mt."></div>
            <h1>Maria Cícera Aranha</h1>
          </div>
          <div class="instrutor-address">
           <div class="d-flex align-items-center align-items-lg-baseline justify-content-start mb-2"><img loading="lazy" src=<?php echo get_template_directory_uri() . '/images/instrutor/map.png' ?> alt="Mapa"> <p><strong>Onde atua:</strong> São Paulo (SP), Santo André (SP)</p></div> 
           <div class="d-flex align-items-center align-items-lg-baseline mb-2"><img loading="lazy" src=<?php echo get_template_directory_uri() . '/images/instrutor/building.png' ?> alt="Prédio"> <p><strong>Unidade:</strong> Planalto Paulista (SP) – Av. Piassanguaba, 658</p></div> 
          </div>
          <div class="mt-4">
           <p>A visão de Maharishi sobre o Conhecimento Védico e sua aplicação para resgatar as vidas individuais e a Consciência coletiva de uma condição de limitação e de sofrimento para uma realidade de plenitude me arrebata.<br> A possibilidade desse caminho simples, natural e ordenado para a mais elevada experiência humana, a Iluminação, inspira-me a participar, como praticante e instrutora de MT, da concretização do desejo de Maharishi: a máxima evolução da Consciência humana, culminando no ideal da paz mundial. Sou economista (FAAP) e estudei Filosofia (USP).</p>
          </div>

        </div>
      </div>

    </div>
  </section> -->
  <!-- <section class="instrutor-contact">
    <div class="container">
      <div class="row d-flex align-items-baseline">
        <div class="col-12 col-lg-5">
          <h2>Vamos <strong>conversar?</strong></h2>
          <div class="text-center text-lg-start">
            <a href="#" class="btn"> 
              <img loading="lazy" src=<?php echo get_template_directory_uri() . '/images/instrutor/wpp.png' ?> alt="Whatsapp"> Fale comigo no Whatsapp
            </a>
          </div>
          <div class="instrutor-social d-grid mt-lg-5">
            <div class="d-flex align-items-baseline justify-content-start mb-2 mb-lg-3"><a href="#"><img loading="lazy" src=<?php echo get_template_directory_uri() . '/images/instrutor/instagram.png' ?> alt="Instagram"> @flaviabaptista</a></div>
            <div class="d-flex align-items-baseline justify-content-start mb-2 mb-lg-3"><a href="#"><img loading="lazy" src=<?php echo get_template_directory_uri() . '/images/instrutor/youtube.png' ?> alt="Youtube"> /canalflaviabaptista</a></div>
          </div> 
        </div>
        <div class="col-12 col-lg-7 mt-4 mt-lg-0">
          <form>
            <div class="form-group">
              <input type="text" class="form-control" id="exampleInputText" aria-describedby="textHelp" placeholder="Nome">
            </div>
            <div class="row">
              <div class="col-12 col-md-6 form-group">
                <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email">
              </div>
              <div class="col-12 col-md-6 form-group">
                <input type="phone" class="form-control" id="exampleInputPhone" aria-describedby="phoneHelp" placeholder="Telefone">
              </div>
            </div>
            <div class="form-group">
              <textarea class="form-control" id="exampleFormControlTextarea" rows="7" placeholder="Sua mensagem"></textarea>
            </div>
            <div class="text-end">
              <button type="submit" class="btn">Enviar Mensagem</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section> -->
  <!-- <section class="instrutor-depoimentos">
    <div id="instrutor-depoimentos" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">

        <div class="carousel-item active text-center">
          <div class="container">
            <div class="depoimento d-block depoimento text-center">
              <div class="quote"></div>
              <p>Talvez o maior benefício seja o fato de que a MT é relativamente rápida de se aprender e fácil de se dominar. Não é necessário meses de prática para perceber os resultados.</p>
              <h6><strong>Carlos Almeida</strong>, Aluno</h6>
            </div>
          </div>
        </div>

        <div class="carousel-item text-center">
          <div class="container">
            <div class="depoimento d-block depoimento text-center">
              <div class="quote"></div>
              <p>Talvez o maior benefício seja o fato de que a MT é relativamente rápida de se aprender e fácil de se dominar. Não é necessário meses de prática para perceber os resultados.</p>
              <h6><strong>Carlos Almeida</strong>, Aluno</h6>
            </div>
          </div>
        </div>

        <div class="carousel-item text-center">
          <div class="container">
            <div class="depoimento d-block depoimento text-center">
              <div class="quote"></div>
              <p>Talvez o maior benefício seja o fato de que a MT é relativamente rápida de se aprender e fácil de se dominar. Não é necessário meses de prática para perceber os resultados.</p>
              <h6><strong>Carlos Almeida</strong>, Aluno</h6>
            </div>
          </div>
        </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#instrutor-depoimentos" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#instrutor-depoimentos" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
        <div class="carousel-indicators">
        <button type="button" data-bs-target="#instrutor-depoimentos" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#instrutor-depoimentos" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
        <button type="button" data-bs-target="#instrutordepoimentos" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
      </div>
    </div>
  </section> -->
  <!-- <section class="instrutor-depoimentos">
    <div id="instrutor-depoimentos-video" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">

        <div class="carousel-item active">
          <div class="container">
            <div class="row d-flex align-items-center justify-content-center mb-5 px-5">
              <div class="col-12 col-lg-7 depoimento depoimento-video d-block text-center text-lg-end mb-4 mb-lg-0">
                <p>Talvez o maior benefício seja o fato de que a MT é relativamente rápida de se aprender e fácil de se dominar. Não é necessário meses de prática para perceber os resultados.</p>
                <h6><strong>Carlos Almeida</strong>, Aluno</h6>
              </div>
              <div class="col-12 col-lg-5">
                <iframe width="100%" height="255px" src="https://www.youtube.com/embed/YDicaTzD9tw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="container">
            <div class="row d-flex align-items-center justify-content-center mb-5 px-5">
              <div class="col-12 col-lg-7 depoimento depoimento-video d-block text-center text-lg-end mb-4 mb-lg-0">
                <p>Talvez o maior benefício seja o fato de que a MT é relativamente rápida de se aprender e fácil de se dominar. Não é necessário meses de prática para perceber os resultados.</p>
                <h6><strong>Carlos Almeida</strong>, Aluno</h6>
              </div>
              <div class="col-12 col-lg-5">
                <iframe width="100%" height="255px" src="https://www.youtube.com/embed/YDicaTzD9tw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>

         <div class="carousel-item">
          <div class="container">
            <div class="row d-flex align-items-center justify-content-center mb-5 px-5">
              <div class="col-12 col-lg-7 depoimento depoimento-video d-block text-center text-lg-end mb-4 mb-lg-0">
                <p>Talvez o maior benefício seja o fato de que a MT é relativamente rápida de se aprender e fácil de se dominar. Não é necessário meses de prática para perceber os resultados.</p>
                <h6><strong>Carlos Almeida</strong>, Aluno</h6>
              </div>
              <div class="col-12 col-lg-5">
                <iframe width="100%" height="255px" src="https://www.youtube.com/embed/YDicaTzD9tw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#instrutor-depoimentos-video" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#instrutor-depoimentos-video" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
        <div class="carousel-indicators">
        <button type="button" data-bs-target="#instrutor-depoimentos-video" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#instrutor-depoimentos-video" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
        <button type="button" data-bs-target="#instrutordepoimentos-video" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
      </div>
    </div>
  </section> -->
  <section class="instrutor-footer">
    <div class="container text-center">
      <a href="<?= site_url() ?>/agendamento" class="btn" role="button">Agende a palestra gratuita</a>
    </div>
  </section>
</main>
<?php get_footer();