<?php
// Template Name: Home
?>
<?php get_header(); ?>
  <!-- About section start -->
  <section class="about" id="about">
    <div class="main">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/main-img.jpg" alt="">
      <div class="about-text">
        <h2>Sobre Mim</h2>
        <h5>Desenvolvedor Web.</h5>
        <p>Gosto de trabalhar em equipe, compartilhar conhecimento e enfrentar novos desafios. Sou uma pessoa comunicativa e criativa, gosto de criar coisas novas e adquirir novos conhecimentos. Sou apaixonado por tecnologia, livros, filmes, series e games, principalmente os que me fazem pensar.</p>
        <p>Sou tecnólogo em Redes de Computadores, pós graduado em Engenharia de Software, tenho experiência de trabalho com infraestrutura de redes, gerenciamento de times e projetos, atendimento ao cliente, e desenvolvimento web.</p>
        <a href="https://wa.me/5596981403089?text=Ol%C3%A1%2C+achei+seu+contato+pelo+seu+site%21" target="_blank">
          <button type="submit">Fale comigo</button>
        </a>
      </div>
    </div>
  </section>
  <!-- Skills section start -->
  <section class="skills" id="skills">
    <div class="main row">
      <h1><span>Conhecimentos</span></h1>
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
  <!-- Formulario de contato -->
  <!-- <section class="section" id="contact">
    <div class="main row">
      <h1>Formulário de Contato</h1>
      <div class="formContent">
        <form name="contato" method="post" action="https://formsubmit.co/devnoleto@gmail.com" method="POST">
          <fieldset>
              <div class="campo">
                <label for="nome">Nome completo:</label>
                <input type="text" id="nome" name="nome" required>
              </div>
              <div class="campo">
                <label for="celular">Whatsapp</label>
                <input type="text" id="celular" name="celular" required>
              </div>
            </fieldset>
            <fieldset>
              <div class="campo">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
              </div>
            </fieldset>
            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" rows="4" cols="50" required></textarea>          
          <input type="submit" value="Enviar">
        </form>
      </div>
    </div>
  </section> -->
  <!-- Footer start -->
<?php get_footer(); ?>