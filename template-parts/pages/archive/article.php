       <article class="row">
          <div class="col-12 col-md-5 mb-4 mb-md-0">
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
            <p class="lead"><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn text-uppercase">Leia Mais</a>
          </div>
        </article>