<?php
// Template Name: Sobre
?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <section class="about" id="about">
            <div class="main">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/main-img.jpg" alt="">
                <div class="about-text">
                    <h2><?php the_title(); ?></h2>
                    <h5>Desenvolvedor Web.</h5>
                    <p>Gosto de trabalhar em equipe, compartilhar conhecimento e enfrentar novos desafios. Sou uma pessoa comunicativa e criativa, gosto de criar coisas novas e adquirir novos conhecimentos. Sou apaixonado por tecnologia, livros, filmes, series e games, principalmente os que me fazem pensar.</p>
                    <p>Sou tecnólogo em Redes de Computadores, pós graduado em Engenharia de Software, tenho experiência de trabalho com infraestrutura de redes, gerenciamento de times e projetos, atendimento ao cliente, e desenvolvimento web.</p>
                    <a href="https://wa.me/5596981403089?text=Ol%C3%A1%2C+achei+seu+contato+pelo+seu+site%21" target="_blank">
                        <button type="submit">Fale comigo</button>
                    </a>
                </div>
            </div>
        </section>

    <?php endwhile; else : endif ?>

<?php get_footer(); ?>