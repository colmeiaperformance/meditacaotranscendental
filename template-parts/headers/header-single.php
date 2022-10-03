<header class="header--single ">
  <div class="container position-relative overflow-hidden">
    <div class="col">
      <h1><?php the_title(); ?></h1>
      <div class="d-flex align-items-center justify-content-left">
        <!-- <div class="avi"><?php echo get_avatar( get_the_author_meta('ID') , 92 ); ?></div> -->
        <div class="d-flex align-items-center justify-content-left">
          <!-- <h4><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a></h4> -->
          <p><a href="<?php echo get_day_link(get_post_time('Y'), get_post_time('m'), get_post_time('d'));  ?>"><?php the_time('d') ?> de <?php the_time('F') ?> de <?php the_time('Y') ?></a></p>
        </div>
      </div>
    </div>
  </div>
</header>