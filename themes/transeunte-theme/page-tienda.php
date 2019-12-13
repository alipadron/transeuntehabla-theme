<?php
get_header( 'tienda' );
?>
<main class="main-tienda">
<?php get_template_part( 'template-parts/content', 'blog-banner' ); ?>

<div class="wrapper wrapper--no-padding-until-large">
	<div class="row row--gutters-large">
		<div class="row__medium-4">
			<div class="main-tienda__feature-item">
				<div class="main-tienda__feature-item__container">
					<div class="main-tienda__feature-item__container__text">
						<p class="main-tienda__feature-item__container__text__title">Diseños únicos</p>
						<p class="main-tienda__feature-item__container__text__subtitle">Se diferente</p>
					</div>
					<div class="main-tienda__feature-item__container__icon">
						<i class="fa fa-user fa-lg"></i>
					</div>
				</div>
			</div>
		</div>
		<div class="row__medium-4">
			<div class="main-tienda__feature-item">
				<div class="main-tienda__feature-item__container">
					<div class="main-tienda__feature-item__container__text">
						<p class="main-tienda__feature-item__container__text__title">Envíos gratis</p>
						<p class="main-tienda__feature-item__container__text__subtitle">En toda Europa</p>
					</div>
					<div class="main-tienda__feature-item__container__icon">
						<i class="fa fa-archive fa-lg"></i>
					</div>
				</div>
			</div>
		</div>
		<div class="row__medium-4">
			<div class="main-tienda__feature-item">
				<div class="main-tienda__feature-item__container">
					<div class="main-tienda__feature-item__container__text">
						<p class="main-tienda__feature-item__container__text__title">Formas de pago</p>
						<p class="main-tienda__feature-item__container__text__subtitle">Transferencias bancarias</p>
					</div>
					<div class="main-tienda__feature-item__container__icon">
						<i class="fa fa-credit-card fa-lg"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</main>


<?php
get_footer();
?>
