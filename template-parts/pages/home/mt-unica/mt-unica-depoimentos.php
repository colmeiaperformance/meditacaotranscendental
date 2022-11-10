<section class="mt-unica-depoimentos">
  <div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" name="btn-1" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
          caria-label="Slide 1" class="active" aria-current="true"></button>
        <button type="button" name="btn-2" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" name="btn-3" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
          aria-label="Slide 3" class=""></button>
        <button type="button" name="btn-4" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
          aria-label="Slide 4" class=""></button>
      </div>
      <div class="carousel-inner container">
        <div class="carousel-item active text-center">
          <div class="container">
            <div class="depoimento d-block depoimento text-center">
              <div class="quote"></div>
              <p>
                Talvez o maior benefício seja o fato de que a MT é relativamente rápida de se aprender e fácil de se
                dominar. Não é necessário meses de prática para perceber os resultados.
              </p>
              <img loading="lazy"  src=<?php echo get_template_directory_uri() . '/images/mt-unica/forbes.png' ?> alt="Forbes"
                class="forbes">
            </div>
          </div>
        </div>
        <div class="carousel-item text-center">
          <div class="container">
            <div class="depoimento d-block depoimento text-center">
              <div class="quote"></div>
              <p>
                A MT não se concentra na respiração, como outras formas de meditação. Em vez disso, incentiva um estado
                de espírito repousante, que vai além do pensamento.
              </p>
              <img loading="lazy"  src=<?php echo get_template_directory_uri() . '/images/mt-unica/clevelandclinic.png' ?>
                alt="Cleveland Clinic" class="forbes">
            </div>
          </div>
        </div>
        <div class="carousel-item  text-center">
          <div class="container">
            <div class="depoimento d-block depoimento text-center">
              <div class="quote"></div>
              <p>
                A MT é uma técnica simples e natural. Essa forma de meditação permite que seu corpo se estabeleça em
                estado profundo de repouso e de relaxamento.
              </p>
              <img loading="lazy"  src=<?php echo get_template_directory_uri() . '/images/mt-unica/mayoclinic.png' ?> alt="Mayo Clinic"
                class="forbes">
            </div>
          </div>
        </div>
        <div class="carousel-item  text-center">
          <div class="container">
            <div class="depoimento d-block depoimento text-center">
              <div class="quote"></div>
              <p>
                Um estudo científico mostra que a MT pode ter ajudado a aliviar sintomas de estresse pós-traumático e a
                melhorar a qualidade de vida de veteranos de guerras.
              </p>
              <img loading="lazy"  src=<?php echo get_template_directory_uri() . '/images/mt-unica/time.png' ?> alt="Time "
                class="forbes">
            </div>
          </div>
        </div>
      </div>
      <button name="btn-prev" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button name="btn-next" class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</section>
<script defer>
jQuery(document).ready(function() {
  jQuery('#carouselExampleIndicators').carousel({
    interval: 3000
  });
});
</script>