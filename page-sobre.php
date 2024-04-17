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
                    <p><?php echo get_post_meta(get_the_ID(), 'sobre', true) ?></p>
                    <a href="https://wa.me/5596981403089?text=Ol%C3%A1%2C+achei+seu+contato+pelo+seu+site%21" target="_blank">
                        <button type="submit">Fale comigo</button>
                    </a>
                </div>
            </div>
        </section>

    <?php endwhile; else : endif ?>

<?php get_footer(); ?>