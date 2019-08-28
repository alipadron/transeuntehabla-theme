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
    <header class="header">
      <div class="wrapper">
        <div class="header__logo">
          <a href="<?php echo site_url(); ?>">
            <img
              src="<?php echo get_theme_file_uri('assets/images/logo-medium.png') ?>"
              alt="Transeúnte Logo"
            >
          </a>
        </div>
        <div class="header__menu-icon">
          <div class="header__menu-icon__middle"></div>
        </div>
        <div class="header__menu-content">
          <nav class="header__menu-content__navigation">
            <ul>
              <li><a href="#">¿Qué hacemos?</a></li>
              <li><a href="#">Orgía cultural</a></li>
              <li><a href="#">Transeúntes</a></li>
              <li><a href="#">Blog</a></li>
            </ul>
          </nav>
          <div class="header__menu-content__btn-container">
            <a class="btn" href="#">Contacto</a>
          </div>
        </div>
      </div>
    </header>