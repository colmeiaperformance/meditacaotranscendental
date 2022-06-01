<section class="visite-blog">
    <div class="container py-5">
      <h2>Visite o nosso <strong>blog</strong></h2>
      <div id="conhecaBlog" class="swiper swiperConhecaBlog" data-bs-ride="carousel">
        <div class="swiper-wrapper">

          <div class="swiper-slide col-12 col-lg-6">
            <div class="p-3 col d-flex h-100">
              <div class="post p-3 d-lg-flex">
                <div class="post-img col mb-2 mb-lg-0 col-lg-5">
                  <img loading="lazy" class="img-fluid" src="https://picsum.photos/800/500?random=1" alt="">
                </div>
                <div class="col post-item d-flex flex-column text-center text-lg-start">
                  <div class="item-content">
                    <p>
                      <strong>Quem foi Maharishi Mahesh Yogi, o fundador da Meditação Transcendental®</strong></p>
                    <p>
                      Conheça o cientista Dr. Tony Nader, chefe da Organização Internacional de Meditação Transcendental®
                    </p>
                  </div>
                  <div class="item-btn d-flex align-items-end justify-content-center justify-content-lg-end">
                    <a class="btn visite-blog-btn text-uppercase" href="#" role="button">Leia +</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide col-12 col-lg-6">
            <div class="p-3 col d-flex h-100">
              <div class="post p-3 d-lg-flex">
                <div class="post-img col mb-2 mb-lg-0 col-lg-5">
                  <img loading="lazy" class="img-fluid" src="https://picsum.photos/800/500?random=1" alt="">
                </div>
                <div class="col post-item d-flex flex-column text-center text-lg-start">
                  <div class="item-content">
                    <p>
                      <strong>Quem foi Maharishi Mahesh Yogi, o fundador da Meditação Transcendental®</strong></p>
                    <p>
                    Conheça o cientista Dr. Tony Nader, chefe da Organização Internacional de Meditação Transcendental®Conheça o cientista Dr. Tony Nader, chefe da Organização Internacional de Meditação Transcendental®Conheça o cientista Dr. Tony Nader, chefe da Organização Internacional de Meditação Transcendental®
                    </p>
                  </div>
                  <div class="item-btn d-flex align-items-end justify-content-center justify-content-lg-end">
                    <a class="btn visite-blog-btn text-uppercase" href="#" role="button">Leia +</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <!-- <div class="swiper-pagination"></div> -->
      </div>
    </div>
</section>
<script>
  jQuery(document).ready(function() {
    var swiper = new Swiper(".swiperConhecaBlog", {
      slidesPerView: 1,
      slidesPerGroup: 1,
      loop: true,
      spaceBetween: 0,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      mousewheel: false,
      keyboard: true,
      breakpoints: {
        640: {
          slidesPerView: 1,
          slidesPerGroup: 1,
          spaceBetween: 10,
        },
        768: {
          slidesPerView: 2,
          slidesPerGroup: 2,
          spaceBetween: 20,
        },
        1024: {
          slidesPerView: 2,
          slidesPerGroup: 2,
          spaceBetween: 20,
        },
      },
    });
  });
  </script>