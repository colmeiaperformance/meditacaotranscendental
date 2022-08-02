<?php
$texto_mtu = get_sub_field('texto_mtu');
$video_mtu = get_sub_field('video_mtu');
$autor_mtu = get_sub_field('autor_mtu');
$especializacao_mtu = get_sub_field('especializacao_mtu');
$logo_mtu = get_sub_field('logo_mtu');
$descricao_mtu = get_sub_field('descricao_mtu');
?>
<section class="mt-unica">
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <div class="p-lg-0 pe-lg-5">
        <?php if ($texto_mtu) { echo $texto_mtu; } ?>
      </div>

      <div class="p-lg-0">
        <div class="mt-unica-video">
          <?php if ($video_mtu) { echo $video_mtu; } ?>
        </div>
        <div class="video-caption">
          <h5><?php if ($autor_mtu) { echo $autor_mtu; } ?></h5>
          <p><em><?php if ($especializacao_mtu) { echo $especializacao_mtu; } ?></em></p>
        </div>
      </div>
    </div>

      <div class="mt-unica-title d-lg-flex justify-content-left align-items-lg-end justify-content-lg-center">
        <h2>
          <img loading="lazy" src=<?php if ( $logo_mtu ) { echo $logo_mtu; } ?> alt="mt.">
        </h2>
        <h3><?php if ($descricao_mtu) { echo $descricao_mtu; } ?></h3>
      </div>
    </div>
  </div>
</section>