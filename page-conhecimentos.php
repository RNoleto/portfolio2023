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
          <!-- Campos dinamicos vindo do wordpress -->
          <?php
          $tecnologias = get_field2('tecnologias');
          if (isset($tecnologias)) {
            foreach ($tecnologias as $tecnologia) { ?>
              <div class="card">
                <a><i class="<?php echo $tecnologia['icone']; ?>"></i></a>
                <p><?php echo $tecnologia['nome']; ?></p>
              </div>
          <?php }
          } ?>
        </div>
      </div>
    </section>
    <!-- Fim de conteudo de Projetos -->

<?php endwhile;
else : endif ?>
<!-- Fim de Loop -->

<!-- Footer Padrão -->
<?php get_footer(); ?>
<!-- Fim Footer Padrão -->