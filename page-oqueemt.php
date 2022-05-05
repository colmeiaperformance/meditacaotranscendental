<?php
/*
Template Name: O que é MT
*/
?>
<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>
<?php get_template_part('template-parts/headers/header-oqueemt'); ?>
<main class="page-oqueemt">
  <section class="oqueemt-hero">
    <div class="container">
      <div class="row d-flex align-items-end justify-content-center">
        <div class="col-12 col-lg-5 text-center pe-lg-4">
         <img class="img-fluid" src=<?php echo get_template_directory_uri() . '/images/oqueemt/mt.png' ?> alt="mt.">
        </div>
        <div class="col-12 col-lg-7">
          <p>A <strong>Meditação Transcendental®</strong> atua na redução do estresse e da ansiedade, pois leva a mente para níveis mais aquietados. Nenhuma crença ou expectativa é necessária para que a prática seja eficaz à promoção da saúde mental e física.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="oqueemt-diferente position-relative">
    <div class="mundo-melhor-topo">
      <img src="<?php echo get_template_directory_uri() . '/images/oqueemt/mt-diferente-mobile.png' ?>" alt="mt.">
    </div>
    <div class="container">
      <div class="row align-items-center justify-content-start">
        <div class="col-12 col-lg-7">
        <div class="text-center text-lg-start">
            <h2>Por que a MT é <strong>diferente</strong>?</h2>
        </div>
        <p>Existem diversas técnicas de meditação, mas elas são distintas e não produzem os mesmos resultados. A maioria envolve exercícios de relaxamento ou de respiração, narrativas guiadas ou algum tipo de esforço que faz com que a mente continue ativa na superfície, sem experimentar o verdadeiro silêncio interior.</p>
        <p><strong>Nada disso é necessário na MT. Ela é uma forma natural, confortável e automática de satisfação mental e de relaxamento físico. Sem esforço, sem tentar controlar ou observar pensamentos.</strong></p>
        </div>
      </div>
      <div class="mundo-melhor-bg position-absolute"></div>
    </div>
  </section>
  <section class="oqueemt-atua">
    <div class="container">
      <h2>Como a MT atua no <strong>cérebro</strong>?</h2>
      <div class="row d-flex align-items-end justify-content-center">
        <div class="col-12 col-lg-5 d-none d-lg-block">
           <img class="img-fluid" src=<?php echo get_template_directory_uri() . '/images/oqueemt/cerebro.png' ?> alt="Cérebro">
        </div>
         <div class="col-12 col-lg-7">
           <p>O acúmulo de estresse e de ansiedade é um fator que afeta toda nossa vida e, principalmente, nossa capacidade de pensar, agir, sentir e de nos relacionar.</p>
           <p>Nosso cérebro age como se estivéssemos em constante perigo, ativando mais a função da amígdala, área do cérebro responsável pelo medo e pelos instintos, prejudicando nossa saúde.</p>
           <div class="d-block d-lg-none text-center">
            <img class="img-fluid" src=<?php echo get_template_directory_uri() . '/images/oqueemt/cerebro.png' ?> alt="Cérebro">
           </div>
           <p><strong>A prática regular da MT aumenta a atividade do córtex pré-frontal</strong> (região cérebro responsável por decisões, foco, inteligência e criatividade); </p>
           <p><strong>Reduz a atividade da amígdala</strong>, dando mais equilíbrio emocional ao dia a dia.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="oqueemt-imagine">
    <div class="container text-center">
      <h2>Imagine a mente como um grande oceano. Transcender é ir além da sua superfície.</h2>
      <p>Praticar a MT é como submergir naturalmente dentro de si para encontrar, na mente, um lugar que está além do nível agitado dos pensamentos, onde experimentamos um estado de descanso muito profundo, que nos leva a acessar uma fonte abundante de energia, de criatividade e de bem-estar.</p>
      <a href="#" class="btn" role="button">Aprenda a MT</a>
    </div>
  </section>
  <section class="oqueemt-footer">
    <div class="container text-center">
      <h2>Dúvidas?</h2>
      <p>Veja as respostas para as <a href="#">perguntas mais frequentes.</a></p>
      <a href="#" class="btn" role="btn">Encontre um instrutor certificado</a>
    </div>
  </section>
</main>
<?php get_footer();