<article class="blog-post">
          <div class="featurette-image m-auto mb-3">
            <?php 
              if ( has_post_thumbnail() ) { 
                  echo the_post_thumbnail();
              }
              else { 
                  echo '';
                  } ?>
          </div>
         <div class="post-content">
            <?php the_content(' '); ?>
            <!-- <div class="post-like">
              <p>Esse artigo foi útil?</p> 
              <div>
                <a href="/">Sim</a> <a href="/">Não</a>
              </div>
            </div> -->
         </div>
          <div class="post-footer">
            <div class="tags d-flex align-items-center justify-content-start">
              <?php $tags = get_tags(); ?>
                <?php foreach ( $tags as $tag ) { ?>
                <a href="<?php echo get_tag_link( $tag->term_id ); ?> " rel="tag">#<?php echo $tag->name; ?></a>
                <?php } ?>
            </div>
            <div class="social">
              <a title="Compartilhe no Facebook" target="_blank"  href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>"><i class="bi bi-facebook"></i></a>
              <a title="Compartilhe no Twitter"  target="_blank" href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>&amp;url=<?php the_permalink() ?>"><i class="bi bi-twitter"></i></a>
              <a title="Compartilhe no Whatsapp" target="_blank" href="https://api.whatsapp.com/send?text=<?php the_title(); ?> - <?php the_permalink() ?>"><i class="bi bi-whatsapp"></i></a>
              <a title="Compartilhe no Linkedin" target="_blank" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php the_permalink() ?>"><i class="bi bi-linkedin"></i></a>
              <a title="Compartilhe no Telegram" target="_blank" href="https://t.me/share/url?url=<?php the_permalink() ?>&text=<?php the_title(); ?>"><i class="bi bi-telegram"></i></a>
              <a title="Compartilhe por email" target="_blank" href="mailto:?subject=Recomendação%20de%20%Post:%20<?php the_permalink() ?>"><i class="bi bi-envelope-fill"></i></a>
            </div>
          </div>
        </article>