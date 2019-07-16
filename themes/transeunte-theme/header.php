<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    >
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header>
      <a href="<?php echo site_url(); ?>">
        <img
          src="<?php echo get_theme_file_uri('assets/images/logo-medium.png') ?>"
          alt="Transeúnte Logo"
        >
      </a>
      <nav>
        <ul>
          <li><a href="#">¿Qué hacemos?</a></li>
          <li><a href="#">Orgía Cultural</a></li>
          <li><a href="#">Transeúntes</a></li>
        </ul>
      </nav>
      <a href="#">Contacto</a>
    </header>