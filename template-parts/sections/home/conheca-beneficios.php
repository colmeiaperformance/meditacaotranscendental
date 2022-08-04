<?php
$titulo_bmt = get_sub_field('titulo_bmt');
$cards_bmt = get_sub_field('cards_bmt');
$citacao_bmt = get_sub_field('citacao_bmt');
$autor_bmt = get_sub_field('autor_bmt');
$cor_de_fundo_bmt = get_sub_field('cor_de_fundo_bmt');
?>
<section class="conheca-beneficios" style="background-color: <?php if ( $cor_de_fundo_bmt ) { echo $cor_de_fundo_bmt; } else { echo ''; } ?>;">
  <div class="container">
    <h2><?php if ( $titulo_bmt ) { echo $titulo_bmt; } else { echo ''; } ?></h2>
    <div class="row align-items-center justify-content-center">

      <?php foreach ($cards_bmt as $c_bmt) { ?>
      
      <div class="box-container col-12 col-lg-3 d-flex align-items-center justify-content-center p-0">
        <div class="box rounded-circle text-center">
          <div class="default">
              <img loading="lazy" class="img-fluid" src=<?php if ( $c_bmt['logo_card']['url'] ) { echo $c_bmt['logo_card']['url']; } else { echo ''; } ?>
            alt="<?php if ( $c_bmt['logo_card']['alt'] ) { echo $c_bmt['logo_card']['alt']; } else { echo ''; } ?>">
              <h4><?php if ( $c_bmt['titulo_card'] ) { echo $c_bmt['titulo_card']; } else { echo ''; } ?></h4>
              <span>+</span>
          </div>
           <div class="hover">
            <p>
              <?php if ( $c_bmt['descricao_card'] ) { echo $c_bmt['descricao_card']; } else { echo ''; } ?>
            </p>
            <a href="<?php if ( $c_bmt['link_do_botao_card'] ) { echo $c_bmt['link_do_botao_card']; } else { echo ''; } ?>" class="btn">
              <?php if ( $c_bmt['texto_do_botao_card'] ) { echo $c_bmt['texto_do_botao_card']; } else { echo ''; } ?>
            </a>
          </div>
        </div>
      </div>

      <?php } ?>

    </div>
    <div class="row">
      <div class="col-12 quote">
        <div>
          <p><?php if ( $citacao_bmt ) { echo $citacao_bmt; } else { echo ''; } ?></p>
          <h4><?php if ( $autor_bmt ) { echo $autor_bmt; } else { echo ''; } ?></h4>
        </div>
    </div>
    </div>
  </div>
</section>