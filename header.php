<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

  <!-- Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Header Wordpress -->
  <title><?php bloginfo('name'); ?></title>
  <!-- Fecha Header Wordpress -->
  <?php wp_head(); ?>
</head>

<body>
  <!-- hero section start -->
  <div class="hero">
    <!-- Menu section start -->
    <header class="header">
      <h2 class="logo"><a href="/"><span>R</span>Noleto<span>.</span></a></h2>
      <nav class="nav">
        <button class="btn-menu" aria-label="Abrir Menu" aria-haspopup="true" aria-controls="menu" aria-expanded="false"><span class="hamburger"></span></button>
        <ul class="menu" role="menu" id="menu">
          <li><a href="/">Home</a></li>
          <li><a href="/sobre">Sobre mim</a></li>
          <li><a href="/conhecimentos">Conhecimentos</a></li>
          <li><a href="/projetos">Projetos</a></li>
          <li><a href="/contato">Contato</a></li>
        </ul>
      </nav>

      <div class="content">
        <h4>Olá, meu nome é</h4>
        <h1>Ramon Noleto</h1>
        <h3>Desenvolvedor Web e Engenheiro de Software</h3>
      </div>
  </div>
  </header>