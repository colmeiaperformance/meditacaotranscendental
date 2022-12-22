<?php
$titulo_vb = get_sub_field('titulo_vb');
$texto_do_botao_vb = get_sub_field('texto_do_botao_vb');
$cor_de_fundo_vb = get_sub_field('cor_do_fundo_vb');
?>

<section class="visite-blog" style="background-color: <?php if ( $cor_de_fundo_vb ) { echo $cor_de_fundo_vb; } else { echo ''; } ?>;">
    <div class="container py-5">
      <h2><?php if ( $titulo_vb ) { echo $titulo_vb; } else { echo ''; } ?></h2>
      <div id="conhecaBlog" class="swiper swiperConhecaBlog" data-bs-ride="carousel">
        <div class="swiper-wrapper">
        <?php $oquedizem_query = new WP_Query( 'posts_per_page=4' );
             while ( $oquedizem_query->have_posts() ) : $oquedizem_query->the_post();
              $do_not_duplicate = $post->ID; ?>
          <div class="swiper-slide col-12 col-lg-6">
            <div class="p-3 col d-flex h-100">
              <div class="post p-3 d-lg-flex">
                <div class="post-img col mb-2 mb-lg-0 col-lg-5" style="background: url('<?php if ( the_post_thumbnail_url() ) { echo the_post_thumbnail_url(); } else { echo ''; } ?>'); background-size: cover; background-position:center;">
                <img class="d-lg-none" src="<?php if ( has_post_thumbnail() ) {  echo the_post_thumbnail_url(); } else { echo get_template_directory_uri() . '/images/blog-media.jpg'; } ?>" alt="">
                </div>
                <div class="col post-item d-flex flex-column text-center text-lg-start">
                  <div class="item-content">
                    <p>
                      <strong><?php if (strlen($post->post_title) > 50) {echo substr(the_title($before = '', $after = '', FALSE), 0, 50) .'...'; } else {the_title();} ?></strong></p>
                    <p>
                      <?php if ( the_excerpt() ) { echo wp_trim_words(get_the_excerpt(), 13); } else { echo ''; } ?>
                    </p>
                  </div>
                  <div class="item-btn d-flex align-items-end justify-content-center justify-content-lg-end">
                    <a class="btn text-uppercase" href="<?php if ( the_permalink() ) { the_permalink(); } else { echo '#'; } ?>" role="button">Leia +</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endwhile; 
            wp_reset_postdata();
          ?>
      
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <!-- <div class="swiper-pagination"></div> -->
      </div>
    </div>
</section>
<script defer>
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