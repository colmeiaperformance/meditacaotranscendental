<?php 
$cor_de_fundo_agp = get_sub_field('cor_de_fundo_agp');
$circulos_agp = get_sub_field('circulos_agp');
$link_do_botao_agp = get_sub_field('link_do_botao_agp');
$texto_do_botao_agp = get_sub_field('texto_do_botao_agp');
?>
<section class="agende-palestra"
  style="background-color: <?php if ( $cor_de_fundo_agp ) { echo $cor_de_fundo_agp; } else { echo ''; } ?>;">
  <div class="container py-5">
    <div class="row align-items-center justify-content-center">

      <?php foreach ($circulos_agp as $c_agp) { ?>

      <div class="col-6 col-md-3 d-flex align-items-center justify-content-center">
        <div class="circle rounded-circle" style="background: <?php if ( $c_agp['cor_circulo'] ) { echo $c_agp['cor_circulo']; } else { echo ''; } ?>;">
          <div class="d-block text-center px-2">
            <h4>+<span class="counter"><?php if ( $c_agp['titulo_circulo'] ) { echo $c_agp['titulo_circulo']; } else { echo ''; } ?></span></h4>
            <p><?php if ( $c_agp['subtitulo_circulo'] ) { echo $c_agp['subtitulo_circulo']; } else { echo ''; } ?></p>
          </div>
        </div>
      </div>

      <?php 
      } ?>


    </div>

    <div class="row align-items-center justify-content-center py-5">
      <div class="col text-center">
        <a class="btn" href="<?php if ( $link_do_botao_agp ) { echo $link_do_botao_agp; } else { echo ''; } ?>" role="button"><?php if ( $texto_do_botao_agp ) { echo $texto_do_botao_agp; } else { echo ''; } ?></a>
      </div>
    </div>

  </div>
</section>

<script defer>
jQuery(document).ready(function() {
  // jQuery(".counter").counterUp({
  //   delay: 10,
  //   time: 1200
  // });

  const counterUp = window.counterUp.default

  const callback = entries => {
    entries.forEach(entry => {
      const el = entry.target
      if (entry.isIntersecting && !el.classList.contains('is-visible')) {
        for (const counter of counters) {
          counterUp(counter, {
            duration: 1000,
            delay: 10,
          })
          el.classList.add('is-visible')
        }
      }
    })
  }

  // observer
  const IO = new IntersectionObserver(callback, {
    threshold: 1
  })

  // First element to target
  const el = document.querySelector('.counter')

  // all numbers
  const counters = document.querySelectorAll('.counter')
  IO.observe(el)
});
</script>
