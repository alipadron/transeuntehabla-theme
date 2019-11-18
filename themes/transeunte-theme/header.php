<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
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
					<a href="<?php echo esc_url( site_url() ); ?>">
					<img
						src="<?php echo esc_url( get_theme_file_uri( 'assets/images/logo-medium.png' ) ); ?>"
						alt="Transeúnte Logo"
					>
					</a>
				</div>
				<div class="header__menu-icon">
					<div class="header__menu-icon__top"></div>
					<div class="header__menu-icon__middle"></div>
					<div class="header__menu-icon__bottom"></div>
				</div>
				<div class="header__menu-content">
					<nav class="header__menu-content__navigation">
					<ul>
						<li><a href="#orgia-cultural">Orgía cultural</a></li>
						<li><a href="#servicios">Servicios</a></li>
						<li><a href="#transeuntes">Transeúntes</a></li>
						<li>
						<a href="<?php echo esc_url( site_url( '/blog' ) ); ?>">Blog</a>
						</li>
					</ul>
					</nav>
					<div class="header__menu-content__btn-container">
					<a class="btn open-modal" href="#">Contacto</a>
					</div>
				</div>
			</div>
		</header>
