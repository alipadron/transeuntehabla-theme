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
    <header class="header header--white header--shadow">
      <div class="wrapper">
        <div class="header__logo">
          <a href="<?php echo site_url(); ?>">
            <img
              src="<?php echo get_theme_file_uri('assets/images/logo-medium.png') ?>"
              alt="Transeúnte Logo"
            >
          </a>
        </div>
        <div class="header__menu-icon header__menu-icon--black">
          <div class="header__menu-icon__top"></div>
          <div class="header__menu-icon__middle"></div>
          <div class="header__menu-icon__bottom"></div>
        </div>
        <div class="header__menu-content">
          <nav class="header__menu-content__navigation header__menu-content__navigation--black">
            <ul>
              <li><a href="#">Cuentos</a></li>
              <li><a href="#">Entrevistas</a></li>
              <li><a href="#">Listas</a></li>
              <li><a href="#">Editoriales</a></li>
              <li><a href="#">Artículos</a></li>
            </ul>
          </nav>
          <!-- <div class="header__menu-content__btn-container">
            <a class="btn btn--outline btn--red-text" href="#">Tienda</a>  
          </div> -->
        </div>
      </div>
    </header>