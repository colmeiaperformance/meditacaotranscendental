<?php 
$imagem_desktop_aa = get_sub_field('imagem_desktop_aa');
$imagem_mobile_aa = get_sub_field('imagem_mobile_aa');
$titulo_aa = get_sub_field('titulo_aa');
$texto_aa = get_sub_field('texto_aa');
$rodape_aa = get_sub_field('rodape_aa');
$cor_de_fundo_aa = get_sub_field('cor_de_fundo_aa');
?>
<section class="aprenda-mt-investir position-relative" style="background-color:<?php if ( $cor_de_fundo_aa ) { echo $cor_de_fundo_aa; } else { echo ''; } ?>;">
  <div class="aprenda-mt-investir-topo">
    <img loading="lazy" src="<?php if ( $imagem_mobile_aa ) { echo $imagem_mobile_aa;} else { echo ''; } ?>"
      alt="Investir">
  </div>
  <div class="container">
    <div class="aprenda-mt-investir-bg position-absolute"
      style="background: url(<?php if ( $imagem_desktop_aa ) { echo $imagem_desktop_aa;} else { echo ''; } ?>) center right no-repeat;">
    </div>
    <div class="row align-items-center justify-content-end">
      <div class="col-12 col-lg-7">
        <div class="text-center text-lg-start">
          <?php if ( $titulo_aa ) { echo '<h2>' . $titulo_aa . '</h2>'; } else { echo ''; } ?>
        </div>
        <?php if ( $texto_aa ) { echo $texto_aa; } else { echo ''; } ?>
        <p><?php if ( $rodape_aa ) { echo $rodape_aa; } else { echo ''; } ?></p>
      </div>
    </div>
  </div>
</section>