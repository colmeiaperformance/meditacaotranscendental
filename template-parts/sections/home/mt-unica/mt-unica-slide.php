<?php
$banners = get_sub_field('banners');
?>

<section class="mt-unica-slide">
  <div id="mt-unica-slide" class="swiper unicaSwiper">
    <div class="swiper-wrapper">

      <?php 
      foreach ($banners as $bns ) { ?>  
      
      <div class="swiper-slide">
        <img src=<?php if ( $bns['banner_mtub'] ) { echo $bns['banner_mtub']; } else { echo ''; } ?> alt="Vídeo" width="100%" height="100%" class="img-1 bd-placeholder-img">
        <div class="container">
          <div class="row">
            <div class="col-6 carousel-caption text-start">
              <h3><?php if ( $bns['titulo_mtub'] ) { echo $bns['titulo_mtub']; } else { echo ''; } ?></h3>
              <p><?php if ( $bns['descricao_mtub'] ) { echo $bns['descricao_mtub']; } else { echo ''; } ?></p>
              <a class="btn" href="<?php if ( $bns['link_do_botao_mtub'] ) { echo $bns['link_do_botao_mtub']; } else { echo ''; } ?>">
              <?php if ( $bns['texto_do_botao_mtub'] ) { echo $bns['texto_do_botao_mtub']; } else { echo ''; } ?>
              </a>
            </div>
          </div>
        </div>
      </div>

      <?php }
      ?>

    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
  <a class="btn btn-mobile" href="<?php echo home_url( '/agendamento/' ); ?>">Participe da palestra gratuita</a>
</section>

<script>
  jQuery(document).ready(function() {
    var swiper = new Swiper(".unicaSwiper", {
      slidesPerView: 1,
      slidesPerGroup: 1,
      loop: true,
      spaceBetween: 0,
      autoplay: {
        delay: 3000,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
     },
    });
  });
</script>