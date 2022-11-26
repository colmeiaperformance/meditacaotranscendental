<?php

// Check value exists.
if (have_rows('content')):

  // Loop through rows.
  while (have_rows('content')):
    the_row(); ?>

<?php
    // Section: Home - MT Unica. ACF OK
    if (get_row_layout() == 'mt_unica'): ?>
<?php get_template_part('template-parts/pages/home/mt-unica/mt-unica'); ?>


<?php
    // Section: Home - MT Unica - Banners. ACF OK
    elseif (get_row_layout() == 'mt_unica_banners'): ?>
<?php get_template_part('template-parts/pages/home/mt-unica/mt-unica-slide'); ?>

<?php
    // Section: Home - MT Unica - Depoimentos. ACF OK
    elseif (get_row_layout() == 'mt_unica_depoimentos'): ?>
<?php get_template_part('template-parts/pages/home/mt-unica/mt-unica-depoimentos'); ?>

<?php
    // Section: Home - Beneficios da MT. ACF OK
    elseif (get_row_layout() == 'beneficios_da_mt'): ?>
<?php get_template_part('template-parts/pages/home/conheca-beneficios'); ?>

<?php
    // Section: Home - Como Aprender MT. ACF OK
    elseif (get_row_layout() == 'como_aprender_mt'): ?>
<?php get_template_part('template-parts/pages/home/como-aprender'); ?>

<?php
    // Section: Home - O Que Dizem. ACF OK
    elseif (get_row_layout() == 'o_que_dizem'): ?>
<?php get_template_part('template-parts/pages/beneficios/o-que-dizem'); ?>

<?php
    // Section: Home - Transcender. ACF OK
    elseif (get_row_layout() == 'transcender'): ?>
<?php get_template_part('template-parts/pages/home/transcender'); ?>

<?php
    // Section: Home - Mundo Melhor. ACF OK
    elseif (get_row_layout() == 'para_um_mundo_melhor'): ?>
<?php get_template_part('template-parts/pages/home/mundo-melhor'); ?>

<?php
    // Section: Home - Visite Nosso Blog. ACF OK
    elseif (get_row_layout() == 'visite_nosso_blog'): ?>
<?php get_template_part('template-parts/pages/home/visite-blog'); ?>

<?php
    // Section: Home - Agende Palestra. ACF OK
    elseif (get_row_layout() == 'agende_palestra'): ?>
<?php get_template_part('template-parts/pages/home/agende-palestra'); ?>

<?php
    // Section: Aprenda - Passos
    elseif (get_row_layout() == 'aprenda_passos'): ?>
<?php get_template_part('template-parts/pages/aprenda/passos'); ?>

<?php
    // Section: Aprenda - Mais que um curso
    elseif (get_row_layout() == 'aprenda_mais_curso'): ?>
<?php get_template_part('template-parts/pages/aprenda/curso'); ?>


<?php
    // Section: Section Name.
    // if( get_row_layout() == 'paragraph' ):
    //     $text = get_sub_field('text');
    // Do something...

    // Section: Section Name.
    // elseif( get_row_layout() == 'download' ):
    //     $file = get_sub_field('file');
    // Do something...

    endif;

  // End loop.
  endwhile;

// No value.
else:
// Do something...
endif;
