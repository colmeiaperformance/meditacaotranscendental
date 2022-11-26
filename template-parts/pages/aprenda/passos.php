<?php 
$titulo_passos = get_sub_field('titulo_passos');
$itens_passos = get_sub_field('itens_passos');
$dias_passos = get_sub_field('dias_passos');
$cor_de_fundo_passos = get_sub_field('cor_de_fundo_passos');
$texto_do_botao_passos = get_sub_field('texto_do_botao_passos');
$link_do_botao_passos = get_sub_field('link_do_botao_passos');
?>

<section class="tres-passos" style="background-color:<?php if ( $cor_de_fundo_passos ) { echo $cor_de_fundo_passos; } else { echo ''; } ?>;">
  <div class="container">
    <h2>
      <?php if ( $titulo_passos ) { echo $titulo_passos; } else { echo ''; } ?>
    </h2>
  </div>
  <?php
    $i = 1;
    foreach ($itens_passos as $i_p ) { ?>
  <div class="item">
    <div class="container d-flex align-items-lg-center justify-content-start">
      <span><?php echo $i; ?></span>
      <div class="text">
        <h4><?php if($i_p['titulo_itens']) { echo $i_p['titulo_itens']; } else { echo ''; }  ?></h4>
        <p><?php if($i_p['descricao_itens']) { echo $i_p['descricao_itens']; } else { echo ''; }  ?></p>
      </div>
    </div>
  </div>
  <?php $i++;
    } ?>
  <div class="passos-aprender">
    <div class="container">
      <div class="swiper passosSwiper">
        <div class="swiper-wrapper">

          <?php
            foreach ($dias_passos as $d_p ) { ?>
          <div class="swiper-slide">
            <div class="passo">
              <h5>
                <?php if($d_p['titulo_dias']) { echo $d_p['titulo_dias']; } else { echo ''; }  ?>
              </h5>
              <p>
                <?php if($d_p['descricao_dias']) { echo $d_p['descricao_dias']; } else { echo ''; }  ?>
              </p>
            </div>
          </div>
          <?php } ?>

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
  </div>
  <div class="text-center">
    <a href="<?php if ( $link_do_botao_passos ) { echo $link_do_botao_passos; } else { echo ''; } ?>" class="btn"><?php if ( $texto_do_botao_passos ) { echo $texto_do_botao_passos; } else { echo ''; } ?></a>
  </div>
</section>

<script defer>
  jQuery(document).ready(function() {
    var swiper = new Swiper(".passosSwiper", {
      slidesPerView: 1,
      slidesPerGroup: 1,
      loop: false,
      spaceBetween: 0,
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