<?php 
$titulo_camt = get_sub_field('titulo_camt');
$logo_camt = get_sub_field('logo_camt');
$texto_camt = get_sub_field('texto_camt');
$lista_camt = get_sub_field('lista_camt');
$texto_do_cta_camt = get_sub_field('texto_do_cta_camt');
$texto_do_botao_camt = get_sub_field('texto_do_botao_camt');
$link_do_botao_camt = get_sub_field('link_do_botao_camt');
?>

<section class="como-aprender py-5">
  <div class="container">
    <h2 class="como-aprender-title mb-0 mb-lg-5">
      <?php if ( $titulo_camt ) { echo $titulo_camt; } else { echo ''; } ?>
    </h2>
    <div class="row align-items-center justify-content-center">

      <div class="col-12 col-lg-6 d-none d-lg-block d-lg-flex">
        <div class="col-12 col-lg-4 d-flex align-items-start justify-content-center">
          <img class="img-fluid como-aprender-img" src=<?php if ( $logo_camt['url'] ) { echo $logo_camt['url']; } else { echo ''; } ?>
            alt="<?php if ( $logo_camt['alt'] ) { echo $logo_camt['alt']; } else { echo ''; } ?>">
        </div>
        <div class="col-12 col-lg-8 como-aprender-texto mb-4">
          <?php if ( $texto_camt ) { echo $texto_camt; } else { echo ''; } ?>
        </div>
      </div>

      <div class="row text-call mt-0 mt-lg-4 d-block d-lg-none text-center">
        <p>
          <?php if ( $texto_do_cta_camt ) { echo $texto_do_cta_camt; } else { echo ''; } ?>
        </p>
      </div>

      <div class="col-12 col-lg-6">
        <div class="como-aprender-box">

          <?php if ($lista_camt) { ?>
          <ul class="como-aprender-list">

            <?php foreach ($lista_camt as $l_camt) { ?>
            
            <li class="como-aprender-list-item"><?php if( $l_camt['item'] ) { echo $l_camt['item']; } else { echo ''; } ?></li>

            <?php } ?>

          </ul>
          <?php } ?>

        </div>

      </div>

    </div>

    <div class="row text-call mt-sm-4 d-none d-lg-block text-center">
      <p>
        <?php if ( $texto_do_cta_camt ) { echo $texto_do_cta_camt; } else { echo ''; } ?>
      </p>
    </div>

    <div class="row justify-content-center mt-4 mt-lg-0">
      <div class="col-12 text-center">
        <a class="btn px-4" href="<?php if ( $link_do_botao_camt ) { echo $link_do_botao_camt; } else { echo ''; } ?>" role="button"><?php if ( $texto_do_botao_camt ) { echo $texto_do_botao_camt; } else { echo ''; } ?></a>
      </div>
    </div>
  </div>
</section>