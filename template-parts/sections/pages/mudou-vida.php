  <section class="mudou-vida">
    <div class="container">
      <h2>O que dizem os praticantes da <strong>MT</strong></h2>
   
      <div id="mudouvida" class="swiper swiperMudouVida" data-bs-ride="carousel">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="swiper-mobile">
              <iframe class="yt-video" width="280" height="200" src="https://www.youtube.com/embed/0g0MFzECtb4"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
              </iframe>
              <p>
                David Lynch explica como a MT pode potencializar sua inteligência e sua capacidade criativa.
              </p>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="swiper-mobile">
              <iframe class="yt-video" width="280" height="200" src="https://www.youtube.com/embed/0g0MFzECtb4"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
              </iframe>
              <p>
                David Lynch explica como a MT pode potencializar sua inteligência e sua capacidade criativa.
              </p>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="swiper-mobile">
              <iframe class="yt-video" width="280" height="200" src="https://www.youtube.com/embed/0g0MFzECtb4"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
              </iframe>
              <p>
                David Lynch explica como a MT pode potencializar sua inteligência e sua capacidade criativa.
              </p>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="swiper-mobile">
              <iframe class="yt-video" width="280" height="200" src="https://www.youtube.com/embed/0g0MFzECtb4"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
              </iframe>
              <p>
                David Lynch explica como a MT pode potencializar sua inteligência e sua capacidade criativa.
              </p>
            </div>
          </div>

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
  </section>

  <script>
jQuery(document).ready(function() {
  var swiper = new Swiper(".swiperMudouVida", {
    slidesPerView: 1,
    slidesPerGroup: 1,
    loop: true,
    spaceBetween: 0,
    grabCursor: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
        slidesPerGroup: 2,
        spaceBetween: 40,
      },
      768: {
        slidesPerView: 2,
        slidesPerGroup: 2,
        spaceBetween: 40,
      },
      1024: {
        slidesPerView: 3,
        slidesPerGroup: 3,
        spaceBetween: 40,
      },
    },
  });
});
</script>