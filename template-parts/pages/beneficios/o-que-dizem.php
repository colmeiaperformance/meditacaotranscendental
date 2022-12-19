<section class="o-que-dizem py-5">
  <div class="container">
    <div class="text-center title">
      <h2>O que dizem praticantes da <strong>MT</strong> ?</h2>
    </div>
          <!-- inicio carousel -->
          <div id="mudouvida" class="swiper swiperMudouVida" data-bs-ride="carousel">
        <div class="swiper-wrapper">

          <?php
          if ( is_front_page() ) {
            get_template_part( 'template-parts/pages/home/videos' ); 
          } else {
            get_template_part( 'template-parts/pages/beneficios/videos' ); 
          }
          ?>

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
      <!-- final carousel -->
    <div class="row mt-4 mt-lg-5">
      <div class="col-12 text-center">
        <a class="btn px-4" href="<?php echo home_url( '/agendamento/' ); ?>" role="button">
          <?php if ( is_front_page() ) { echo 'Encontre um instrutor credenciado'; } else { echo 'Agende sua participação'; } ?>
        </a>
      </div>
    </div>
  </div>
  <!-- <script defer>
    jQuery(function() {
      jQuery('#oquedizem.slide').carousel({
        interval: 8000,
        pause: "hover"
      });

      jQuery('input').focus(function() {
        jQuery("#oquedizem").carousel('pause');
      }).blur(function() {
        jQuery("#oquedizem").carousel('cycle');
      });
    });

  </script> -->
</section>