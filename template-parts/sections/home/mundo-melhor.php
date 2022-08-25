<?php
$cor_de_fundo_mm = get_sub_field('cor_de_fundo_mm');
$image_mobile_mm = get_sub_field('image_mobile_mm');
$logo_mm = get_sub_field('logo_mm');
$titulo_mm = get_sub_field('titulo_mm');
$texto_mm = get_sub_field('texto_mm');
$link_do_botao_mm = get_sub_field('link_do_botao_mm');
$texto_do_botao_mm = get_sub_field('texto_do_botao_mm');
$image_desktop_mm = get_sub_field('image_desktop_mm');
?>

<section class="mundo-melhor position-relative" style="background-color: <?php if ( $cor_de_fundo_mm ) { echo $cor_de_fundo_mm; } else { echo ''; } ?>;">
  <div class="mundo-melhor-topo">
    <img loading="lazy" src="<?php if ( $image_mobile_mm ) { echo $image_mobile_mm; } else { echo ''; } ?>" alt="mt.">
  </div>
  <div class="container">
    <div class="row align-items-center justify-content-start">
      <div class="col-12 col-lg-7">
       <div class="text-center text-lg-start">
       <?php if ( $logo_mm ) { echo '<h2><img loading="lazy" src="' . $logo_mm . '" alt="mt."></h2>'; } else { echo ''; } ?>
         <h3><?php if ( $titulo_mm ) { echo $titulo_mm; } else { echo ''; } ?></h3>
       </div>
       <?php if ( $texto_mm ) { echo $texto_mm; } else { echo ''; } ?>
        <div class="text-center text-lg-start">
          <a href="<?php if ( $link_do_botao_mm ) { echo $link_do_botao_mm; } else { echo ''; } ?>" class="btn"><?php if ( $texto_do_botao_mm ) { echo $texto_do_botao_mm; } else { echo ''; } ?></a>
        </div>
      </div>
    </div>
    <div class="mundo-melhor-bg position-absolute" style="background: url(<?php if ( $image_desktop_mm ) { echo $image_desktop_mm; } else { echo ''; } ?>); background-size: cover;"></div>
  </div>
</section>