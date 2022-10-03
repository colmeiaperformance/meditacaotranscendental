<div class="latest-posts">
          <h2>Últimos posts</h2>
          <?php
            $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
            $args = array(
                'posts_per_page' => 4,
                'paged' => $paged,
            );
            $wp_query = new WP_Query( $args );   
            if ( $wp_query->have_posts() ) : ?>
          <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
          <article class="row">
            <div class="col-12 col-md-5 mb-3 mb-lg-4 mb-md-0">
              <div class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                style="height:260px;width:100vw;background-image:url('<?php 
                  if ( has_post_thumbnail() ) { 
                      echo the_post_thumbnail_url();
                  }
                  else { 
                      echo get_template_directory_uri() . '/images/blog-media.jpg';
                      } ?>');background-position: center;background-attachment: scroll;background-repeat: no-repeat;background-size: cover;">
              </div>
            </div>
            <div class="col-12 col-md-7">
              <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                <h3><?php the_title(); ?></h3>
              </a>
              <span>
                <a href="<?php echo get_day_link(get_post_time('Y'), get_post_time('m'), get_post_time('d'));  ?>">
                  <?php the_time('d') ?> <?php the_time('M') ?>, <?php the_time('Y') ?>
                </a>
              </span>
              <p class="lead"><?php the_excerpt(); ?></p>
              <a href="<?php the_permalink(); ?>" class="btn text-uppercase">Leia Mais...</a>
            </div>
          </article>
          <?php endwhile; ?>
          <?php  wp_boostrap_4_pagination();?>
          <?php
            wp_reset_postdata(); 
            else: ?>
          <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
          <?php endif; ?>
        </div>