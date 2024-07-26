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
      <h1><?php the_title(); ?></h1>
      <div class="cards">
        <!-- Inicio do loop de projetos vindo do wordpress -->
        <?php 
        $projetos = get_field2('projetos');
        if(isset($projetos)) { 
          foreach($projetos as $projeto) { ?>
          
          <div class="card">
            <img src="<?php echo $projeto['imagem']; ?>" alt="<?php echo $projeto['nome']; ?>">
            <h3><?php echo $projeto['nome']; ?></h3>
            <a href="<?php echo $projeto['url'] ?>" target="_blank">
              <button class="submit">Conhecer</button>
            </a>
          </div>
        <?php } }?>
        <!-- Fim do loop de projetos vindo do wordpress -->
      </div>
    </div>
  </section>
<!-- Fim de conteudo de Projetos -->

<?php endwhile; else : endif ?>
<!-- Fim de Loop -->

<!-- Footer Padrão -->
<?php get_footer(); ?>
<!-- Fim Footer Padrão -->