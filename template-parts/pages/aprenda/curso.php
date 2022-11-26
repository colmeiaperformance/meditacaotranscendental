<?php
$titulo_amc = get_sub_field('titulo_amc');
$subtitulo_amc = get_sub_field('subtitulo_amc');
$carousel_amc = get_sub_field('carousel_amc');
$imagem_cta_amc = get_sub_field('imagem_cta_amc');
$texto_cta_amc = get_sub_field('texto_cta_amc');
$link_do_botao_amc = get_sub_field('link_do_botao_amc');
$texto_do_botao_amc = get_sub_field('texto_do_botao_amc');
$cor_de_fundo_amc = get_sub_field('cor_de_fundo_amc');
?>

<section class="mt-curso" style="background-color:<?php if ( $cor_de_fundo_amc ) { echo $cor_de_fundo_amc; } else { echo ''; } ?>;">
    <div class="container">
      <?php if ( $titulo_amc ) { echo '<h2>' . $titulo_amc . '</h2>'; } else { echo ''; } ?>
      <?php if ( $subtitulo_amc ) { echo '<h3>' . $subtitulo_amc . '</h3>'; } else { echo ''; } ?>
      <div class="atividades">
        <div class="swiper atividadesSwiper">
          <div class="swiper-wrapper">

          <?php 
          foreach ($carousel_amc as $c_a) { ?>
            
            
            <div class="swiper-slide">
              <div class="text-center">
                <img loading="lazy" src="<?php if ( $c_a['imagem_carousel']['url'] ) { echo $c_a['imagem_carousel']['url']; } else { echo ''; } ?>" alt="<?php if ( $c_a['imagem_carousel']['alt'] ) { echo $c_a['imagem_carousel']['alt']; } else { echo ''; } ?>">
              </div>
              <div class="content">
                <?php if ( $c_a['titulo_carousel'] ) { echo '<h4>' . $c_a['titulo_carousel'] . '</h4>'; } else { echo ''; } ?>
                <?php if ( $c_a['descricao_carousel'] ) { echo '<p>' . $c_a['descricao_carousel'] . '</p>'; } else { echo ''; } ?>
              </div>
            </div>

          <?php } ?>
           
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
      <div class="text-center mb-2 mb-lg-3">
        <img loading="lazy" src="<?php if ( $imagem_cta_amc ) { echo $imagem_cta_amc; } else { echo ''; } ?>" alt="Separador">
      </div>
      <p>Somente instrutores certificados pela Associação Internacional de Meditação (SIM) podem ensinar a autêntica técnica de MT. Essa é a sua <strong>garantia de receber a verdadeira técnica</strong> ensinada há mais de 60 anos, com base no conhecimento puro da Ciência Védica.</p>
      <div class="text-center">
        <a href="<?php echo home_url( '/instrutores/' ); ?>" class="btn">Conheça os instrutores certificados</a>
      </div>
    </div>
  </section>

  <script defer>
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