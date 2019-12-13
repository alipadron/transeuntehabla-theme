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
		<header class="header header--white header--shadow">
			<div class="wrapper">
				<div class="header__logo">
					<a href="<?php echo esc_url( site_url( 'tienda' ) ); ?>">
					<img
						src="<?php echo esc_url( get_theme_file_uri( 'assets/images/logo-medium.png' ) ); ?>"
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
						<li><a href="<?php echo esc_url( site_url( 'cuentos' ) ); ?>">Camisetas</a></li>
						<li><a href="<?php echo esc_url( site_url( 'entrevistas' ) ); ?>">Bolsos</a></li>
						<li><a href="<?php echo esc_url( site_url( 'listas' ) ); ?>">Accesorios</a></li>
						<li><a href="<?php echo esc_url( site_url( 'editoriales' ) ); ?>">Diseños</a></li>
						<li><a href="<?php echo esc_url( site_url( 'articulos' ) ); ?>">Otros</a></li>
						<li><i class="fa fa-shopping-bag fa-lg"></i></li>
					</ul>
					</nav>
				</div>
			</div>
		</header>
