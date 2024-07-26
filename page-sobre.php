<?php
// Template Name: Sobre
?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <section class="about" id="about">
            <div class="main">
                <img src="<?php the_field2('foto'); ?>" alt="Foto de perfil">
                <div class="about-text">
                    <h2><?php the_title(); ?></h2>
                    <h5><?php the_field2('titulo'); ?></h5>
                    <!-- Usando o ACF -->
                    <!-- <p><?php echo get_post_meta(get_the_ID(), 'sobre', true) ?></p> -->
                     <p><?php the_field2('descricao'); ?></p>
                    <a href="https://wa.me/5596981403089?text=Ol%C3%A1%2C+achei+seu+contato+pelo+seu+site%21" target="_blank">
                        <button type="submit">Fale comigo</button>
                    </a>
                </div>
            </div>
        </section>

    <?php endwhile; else : endif ?>

<?php get_footer(); ?>