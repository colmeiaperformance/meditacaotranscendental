<?php 
$titulo_duvidas = get_sub_field('titulo_duvidas');
$descricao_duvidas = get_sub_field('descricao_duvidas');
$link_do_botao_duvidas = get_sub_field('link_do_botao_duvidas');
$texto_do_botao_duvidas = get_sub_field('texto_do_botao_duvidas');
$cor_de_fundo_duvidas = get_sub_field('cor_de_fundo_duvidas');
?>
<section class="aprenda-mt-footer" style="background-color:<?php if ( $cor_de_fundo_duvidas ) { echo $cor_de_fundo_duvidas; } else { echo ''; } ?>;">
  <div class="container text-center">
    <?php if ( $titulo_duvidas ) { echo '<h2>' . $titulo_duvidas . '</h2>'; } else { echo ''; } ?>
    <?php if ( $descricao_duvidas ) { echo $descricao_duvidas; } else { echo ''; } ?>
    <a href="<?php if ( $link_do_botao_duvidas ) { echo $link_do_botao_duvidas; } else { echo ''; } ?>" class="btn" role="button">
    <?php if ( $texto_do_botao_duvidas ) { echo $texto_do_botao_duvidas; } else { echo ''; } ?>
    </a>
  </div>
</section>