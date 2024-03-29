<header class="header header--home">
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container">
          <div class="row row-cols-1 row-cols-lg-2 align-items-center justify-content-center">
            <div class="col carousel-caption p-0 position-relative text-left text-lg-start start-0 end-0">
              <div class="text-banner position-relative">
                <h1>
                  <strong>A mudança começa dentro.</strong><br />
                  20 minutos.<br />
                  2 vezes ao dia.<br />
                  <!-- <div class="d-none d-lg-block">
                    <?php //echo do_shortcode( '[typed string0="Sem concentração" string1="Sem esvaziar a mente" string2="Sem esforço" typeSpeed="60" startDelay="0" backSpeed="40" backDelay="500" loopCount="0" loop="1"]' ) ?>
                  </div> -->
                  <div id="typed-strings">
                    <p>Sem concentração</p>
                    <p>Sem esvaziar a mente</p>
                    <p>Sem esforço</p>
                  </div>
                  <span id="typed"></span>
                  <script async>
                  jQuery(document).ready(function() {
                    //look for functions.php to edit it
                    typingEffect();
                  });
                  </script>
                </h1>
              </div>
              <div class="btn-header position-relative">
                <button name="btn-home-saiba-mais" onclick="location.href='<?php echo home_url( '/aprenda/' ); ?>'"
                  type="button">Saiba mais</button>

              </div>
            </div>
            <div class="col p-0 text-center text-lg-end position-relative">
              <img src=<?php echo get_template_directory_uri() . '/images/header/banner-home.png' ?> alt="Header">
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</header>