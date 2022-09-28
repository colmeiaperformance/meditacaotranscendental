        <div class="blog-spotlight">


          <div class="swiper swiperFeaturedBlog">
            <div class="swiper-wrapper">


              <?php $catquery = new WP_Query( 'cat=1&posts_per_page=5' ); ?>
              <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
              <div class="swiper-slide">
                <article class="spotlight-item text-white position-relative active">
                  <div class="spotlight-image img-fluid position-relative"
                    style="width:100vw;background-image:url('<?php 
                    if ( has_post_thumbnail() ) { 
                        echo the_post_thumbnail_url();
                    }
                    else { 
                        echo get_template_directory_uri() . '/images/blog-media.jpg';
                        } ?>');background-position: center;background-attachment: scroll;background-repeat: no-repeat;background-size: cover;z-index:2;">
                  </div>
                  <div
                    style="background: linear-gradient(0deg, rgba(34,34,34,0) 0%, rgba(34,34,34,0) 50%, rgba(34,34,34,0.7) 100%);z-index:5;position:absolute;left:0;top:0;width:100%;height:100%;">
                  </div>
                  <div class="col-md-10 position-absolute top-0 spotilight-content" style="z-index:10;">
                    <h2 class="color-white"><a href="<?php the_permalink(); ?>"
                        class="color-white text-decoration-none stretched-link">
                        <?php the_title(); ?>
                      </a>
                    </h2>
                    <?php the_excerpt(); ?>
                  </div>
                </article>
              </div>
              <?php endwhile;  wp_reset_postdata(); ?>


            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

          </div>

        </div>