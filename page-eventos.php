<?php
  /* Template Name: Eventos*/
  ?>
<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>

<style>

	.page-eventos {
  padding: 64px 0 64px 0;
}

.page-eventos h2 {
  font-family: 'Work Sans';
  font-style: normal;
  font-weight: 300;
  font-size: 54px;
  line-height: 63px;
  text-align: center;
  letter-spacing: -0.02em;
  color: #323B50;
}

.page-eventos h2 span {
  font-weight: 600;
  color: #FFC536;
}

.page-eventos h3 {
  float: none !important;
  margin: 26px auto;
  font-family: 'Work Sans';
  font-style: normal;
  font-weight: 300;
  font-size: 24px;
  line-height: 28px;
  text-align: center;
  letter-spacing: -0.02em;
  color: #323B50;
  width: 70%;
}

.page-eventos h3 b {
  font-weight: 500;
}
</style>
<main class="page-eventos">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</main>
<?php get_footer();