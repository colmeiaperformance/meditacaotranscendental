<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container">
    <a class="navbar-brand" href="<?php echo home_url(); ?>">
       <img loading="lazy" src=<?php echo get_template_directory_uri() . '/images/header/logo-topo.png' ?> alt="Logotipo Meditação Transcedental" height="auto" width="260px">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
      aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <img loading="lazy" src=<?php echo get_template_directory_uri() . '/images/header/toggler.png' ?> alt="Menu">
    </button>
    <div class="collapse navbar-collapse ms-auto" id="navbarCollapse">
      <div class="d-flex align-items-center my-3 m-lg-0">
      </div>
      <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'container' => false,
                'menu_class' => '',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                'depth' => 2,
                'walker' => new bootstrap_5_wp_nav_menu_walker()
            ));
            ?>
    </div>
  </div>
</nav>