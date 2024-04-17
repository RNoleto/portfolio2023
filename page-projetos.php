<?php
// Template Name: Projetos
?>
<!-- Header Padrão -->
<?php get_header(); ?>
<!-- Fim Header Padrão -->

<!-- Inicio de Loop -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!-- Inicio de conteudo de Projetos -->
<section class="projects" id="projects">
    <div class="main">
      <h1>Projetos</h1>
      <div class="cards">
        <div class="card">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/projetos/animaisfantasticos.jpg" alt="Site Animais Fantasticos">
          <h3>Animais Fantásticos</h3>
          <a href="https://rnoleto.github.io/Animais-Fantasticos/" target="_blank">
            <button class="submit">Conhecer</button>
          </a>
        </div>
        <div class="card">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/projetos/todolist.jpg" alt="Lista de tarefas Online">
          <h3>Lista de Tarefas</h3>
          <a href="https://rnoleto.github.io/To-Do-List-Inbreap/" target="_blank">
            <button class="submit">Conhecer</button>
          </a>
        </div>
        <div class="card">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/projetos/horadodia.jpg" alt="Site que muda suas cores de acordo com a hora do dia">
          <h3>Hora do Dia</h3>
          <a href="https://rnoleto.github.io/HoraDia/" target="_blank">
            <button class="submit">Conhecer</button>
          </a>
        </div>
        <div class="card">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/projetos/flexBlog.jpg" alt="Site feito em flex blox">
          <h3>Flex Blog</h3>
          <a href="https://rnoleto.github.io/FlexBlog/" target="_blank">
            <button class="submit">Conhecer</button>
          </a>
        </div>
        <div class="card">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/projetos/geradordesenha.jpg" alt="Site Gerador de senha">
          <h3>Gerador de Senha</h3>
          <a href="https://rnoleto.github.io/geradorSenha/" target="_blank">
            <button class="submit">Conhecer</button>
          </a>
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