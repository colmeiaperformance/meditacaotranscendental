<?php
$titulo_tr = get_sub_field('titulo_tr');
$video_tr = get_sub_field('video_tr');
$texto_tr = get_sub_field('texto_tr');
$cor_de_fundo_tr = get_sub_field('cor_de_fundo_tr');
?>

<section class="transcender"  style="background-color: <?php if ( $cor_de_fundo_tr ) { echo $cor_de_fundo_tr; } else { echo ''; } ?>;">
  <div class="container py-5">
    <h2><?php if ( $titulo_tr ) { echo $titulo_tr; } else { echo ''; } ?></h2>
    <div class="row align-items-center justify-content-center">

      <div class="col-12 col-lg-5">
        <div class="transcender-video">
        <?php if ( $video_tr ) { echo $video_tr; } else { echo ''; } ?>
        </div>
      </div>

      <div class="col-12 col-lg-7">
        <div>
        <?php if ( $texto_tr ) { echo $texto_tr; } else { echo ''; } ?>
        </div>

      </div>

    </div>
  </div>
</section>