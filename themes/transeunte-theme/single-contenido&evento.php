<?php
get_header();
?>
<main class="main-blog">
<!-- Título del post -->
<?php get_template_part( 'template-parts/content', 'single-banner' ); ?>
<!-- Título del post -->

<!-- Posts -->
<div class="wrapper wrapper--no-padding-until-large">
	<div class="meta-info">
		<p class="meta-info__text">
			<a href="<?php echo esc_url( site_url() ); ?>">Ir al inicio</a>
		</p>
	</div>
	<div class="row row--gutters-large">
	<!-- Contenido del post -->
		<div class="row__large-10">
			<section class="post-content">
				<?php
				get_template_part( 'template-parts/content', 'single-common' );
				$images = get_field( 'galeria' );
				if ( $images ) {
					?>
				<div id="gallery" class="post-gallery wrapper">
					<div class="row row--gutters-large">
					<?php
					foreach ( $images as $image ) {
						?>
				<div class="row__small-6 row__medium-4 row__extra-large-3">
				<a class="item" href="<?php echo esc_url( $image['url'] ); ?>">
					<img src="<?php echo esc_url( $image['sizes']['squareMedium'] ); ?>" />
				</a>
				</div>
						<?php
					}
					?>
					</div>
				</div>
					<?php
				}
				?>
			</section>
		</div>      
	</div>
</div>
<!-- Posts -->

<div class="social-icons social-icons--blog-home social-icons--background-dark-gray social-icons--light-gray">
	<p class="social-icons__text">Síguenos</p>
	<a href="https://www.instagram.com/transeuntehabla/"><i class="fa fa-instagram"></i></a>
	<a href="https://www.linkedin.com/company/transeuntehabla"><i class="fa fa-linkedin"></i></a>
	<a href="https://www.facebook.com/transeuntehabla"><i class="fa fa-facebook"></i></a>
</div>
</main>
<?php get_footer(); ?>
