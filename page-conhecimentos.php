<?php
// Template Name: Conhecimentos
?>
<!-- Header Padrão -->
<?php get_header(); ?>
<!-- Fim Header Padrão -->

<!-- Inicio de Loop -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!-- Inicio de conteudo de Projetos -->
<section class="skills" id="skills">
    <div class="main row">
      <h1><span><?php the_title(); ?></span></h1>
      <div class="swiper">
        <div class="card">
          <a><i class="fa-brands fa-html5"></i></a>
          <p>HTML 5</p>
        </div>
        <div class="card">
          <a><i class="fa-brands fa-css3-alt"></i></a>
          <p>CSS 3</p>
        </div>
      <div class="card">
          <a><i class="fa-brands fa-square-js"></i></a>
          <p>JavaScript</p>
        </div>
      <div class="card">
          <a><i class="fa-brands fa-php"></i></a>
          <p>PHP</p>
        </div>
        <div class="card">
          <a><i class="fa-brands fa-vuejs"></i></a>
          <p>VueJs</p>
        </div>
        <div class="card">
          <a><i class="fa-brands fa-laravel"></i></a>
          <p>Laravel</p>
        </div>
      <div class="card">
          <a><i class="fa-brands fa-figma"></i></a>
          <p>Figma</p>
        </div>
      <div class="card">
          <a><i class="fa-brands fa-github"></i></a>
          <p>Github</p>
        </div>
      </div>
    </div>
  </section>
<!-- Fim de conteudo de Projetos -->

<?php endwhile; else : endif ?>
<!-- Fim de Loop -->

<!-- Footer Padrão -->
<?php get_footer(); ?>
<!-- Fim Footer Padrão -->