<?php 
$texto_filtro = get_sub_field('texto_filtro');
$shortcode_filtro = get_sub_field('shortcode_filtro');
?>
<section class="agende-mt">
  <div class="container text-center">
    <div class="text">
      <?php if ($texto_filtro) { echo $texto_filtro; } else { echo ''; } ?>
    </div>
    <?php echo do_shortcode("$shortcode_filtro"); ?>
    <!-- <a href="<?php //echo home_url( '/agendamento/' ); ?>" class="btn">Agende sua participação</a> -->
  </div>
</section>