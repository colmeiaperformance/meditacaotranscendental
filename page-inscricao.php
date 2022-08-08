<?php
  /* Template Name: Inscricão*/
?>
<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>
<main class="page-inscricao">
    <section class="inscricao-header">
        <div class="container">
            <h2>Olá! Que bom te ver por aqui!</h2>
            <div>
                <p>Ficamos muito felizes em saber que você decidiu aprender a Meditação Transcendental!</p>
                <p>Certamente, esse é um importante passo para você vivenciar uma vida com mais saúde, equilíbrio e paz interior.</p>
                <p id="thanks"><strong>Para darmos continuidade, por favor, preencha abaixo a ficha de inscrição: </strong></p>
            </div>    
        </div> 
    </div>
    <section class="inscricao-form">
        <div class="container">
            <?php get_template_part('template-parts/sections/pages/inscricao-form'); ?>
        </div>
    </section>
    <section class="inscricao-footer">
        <div class="container">
        <div>
            <img loading="lazy" class="img-fluid" src=<?php echo get_template_directory_uri() . '/images/instrutores/mt.png' ?>
                alt="mt."><h2>Aprenda a meditar de forma <Strong>simples e fácil</Strong>.</h2>
        </div>
        </div>
    </section>
</main>
<?php get_footer();