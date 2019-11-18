<?php
get_header();
while ( have_posts() ) {
	the_post();
	?>
	<!-- Portada -->
	<section class="portada">
		<picture>
			<source
			media="(min-width: 1200px)"
			srcset="<?php echo esc_attr( get_theme_file_uri( 'assets/images/portada--extra-large.jpg' ) ); ?>"
			>
			<source
			media="(min-width: 992px)"
			srcset="<?php echo esc_attr( get_theme_file_uri( 'assets/images/portada--large.jpg' ) ); ?>"
			>
			<source
			media="(min-width: 768px)"
			srcset="<?php echo esc_attr( get_theme_file_uri( 'assets/images/portada--medium.jpg' ) ); ?>"
			>
			<source
			media="(min-width: 576px)"
			srcset="<?php echo esc_attr( get_theme_file_uri( 'assets/images/portada--small.jpg' ) ); ?>"
			>
			<img
			class="portada__imagen"
			src="<?php echo esc_attr( get_theme_file_uri( 'assets/images/portada--extra-small.jpg' ) ); ?>"
			>
		</picture>
		<div class="portada__contenido">
			<div class="wrapper">
			<h1 class="portada__contenido__titulo"><?php echo esc_html( get_field( 'titulo' ) ); ?></h1>
			<h2 class="portada__contenido__subtitulo">
			<?php echo esc_html( get_field( 'subtitulo' ) ); ?>
			</h2>
			<p class="portada__contenido__descripcion">
			<?php echo esc_html( get_field( 'descripcion' ) ); ?>
			</p>
			</div>
		</div>
	</section>
	<!-- Portada -->

	<!-- Orgía cultural -->
	<section class="page-section" id="orgia-cultural">
	<div class="wrapper">
		<h2 class="page-section__title page-section__title--dark-gray page-section__title--italic">
		Orgía <strong>cultural</strong>
		</h2>
		<div class="row row--gutters-large row--margin-top row--margin-bottom">
	<?php
	$homepage_posts = new WP_Query(
		array(
			'post_type'      => array( 'evento', 'contenido' ),
			'orderby'        => 'date',
			'posts_per_page' => 20,
		)
	);
	while ( $homepage_posts->have_posts() ) {
		$homepage_posts->the_post();
		?>
			<div class="row__small-6 row__medium-4 row__extra-large-3">
				<div class="orgia-cultural-item">
		<?php
		// Get img tag.
		the_post_thumbnail(
			'squareMedium',
			array(
				'title' => get_the_title( get_post_thumbnail_id( get_the_id() ) ),
				'class' => 'orgia-cultural-item__image',
			)
		);
		?>
					<div class="orgia-cultural-item__content">
						<h3 class="orgia-cultural-item__content__title">
						<?php echo esc_html( get_the_title() ); ?>
						</h3>
						<i class="orgia-cultural-item__content__icon fa fa-arrow-up"></i>
						<div class="orgia-cultural-item__content__container">
							<p class="orgia-cultural-item__content__container__description">
							<?php echo esc_html( get_the_excerpt() ); ?>
							</p>
							<a href="<?php echo esc_url( get_the_permalink() ); ?>" class="btn">Ir a evento</a>
						</div>
					</div>
				</div>
			</div>
		<?php
	}
		wp_reset_postdata();
	?>
		</div>
	</div>
	</section>
	<!-- Orgía cultural -->

	<!-- Servicios -->
	<section class="page-section page-section--dark-gray" id="servicios">
		<div class="wrapper">
			<h2 class="page-section__title page-section__title--italic page-section__title--blue">
				Servicios
			</h2>
			<div class="wrapper">
				<p class="page-section__description page-section__description--white page-section__description--fixed-width-at-large">Queremos ayudarte a encontrar tu camino. Si representas una marca, empresa, proyecto o medio de comunicación, te costará decirnos adiós.</p>
			</div>
			<div class="row row--gutters generic-content-container generic-content-container--white">
				<div class="row__medium-6">
					<div class="servicio">
						<h3 class="servicio__title">Organización de <span class="servicio__title__line">eventos</span></h3>
						<p>
							Conceptualizamos, planificamos y organizamos eventos como presentaciones de libros, talleres, conversatorios, festivales, conciertos acústicos, clínicas musicales, 
							cine foros, exposiciones, recorridos fotográficos y performance artísticos. 
						</p>
						<p>
							El entorno offline necesita de movimiento y contacto. Propiciamos experiencias que conectan con el público. 
						</p>
					</div>
				</div>
				<div class="row__medium-6">
					<div class="servicio">
						<h3 class="servicio__title">Generación de <span class="servicio__title__line">contenido</span></h3>
						<p>
							Conceptualizamos, planificamos, redactamos y diseñamos pensando en el marketing de contenidos. 
							Aplicamos el storytelling para proyectos culturales. No obstante, también nos valemos del periodismo y el arte multimedia.
						</p>
						<p>
							El entorno online se reinventa. Es por eso que nuestra tarea es comunicar una 
							idea apta para determinadas narrativas.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Servicios -->

	<!-- Transeúntes -->
	<section class="page-section page-section--transeuntes" id="transeuntes">
		<div 
			class="wrapper wrapper--no-padding-until-large generic-content-container generic-content-container--gray"
		>
			<h2 class="page-section__title page-section__title--italic">
				Transeúntes
			</h2>
			<div class="wrapper">
				<p class="page-section__description">
					El equipo de Transeúnte está conformado por tres profesionales que buscan generar ruido y alboroto 
					consciente en la sociedad mediante la cultura como la expresión más humana de los individuos.
				</p>
			</div>
			<div class="row row--gutters row--equal-height-at-large">
				<div class="row__large-4">
					<div class="transeunte">
						<div class="transeunte__photo">
							<img
							src="
							<?php
								echo esc_url( get_theme_file_uri( 'assets/images/jesus-konde.jpg' ) );
							?>
							"
							alt="Jesús Konde"
							title="Jesús Konde"
							>
						</div>
						<h3 class="transeunte__title">Jesús Konde</h3>
						<p class="transeunte__description">
							Artista visual con experiencia en el desarrollo de la identidad para marcas, 
							eventos y proyectos vinculados con el sector cultural. Además he trabajado como diseñador editorial y publicitario 
							pero como el arte es heterodoxo, busco dejar mi esencia en cualquier proyecto que sea coherente. No importa el medio.
						</p>
						<div class="transeunte__social-icons">
							<a href="https://www.instagram.com/saintkonde/"><i class="fa fa-instagram"></i></a>
							<a href="https://twitter.com/SaintKonde"><i class="fa fa-twitter"></i></a>
						</div>
					</div>
				</div>
				<div class="row__large-4">
					<div class="transeunte">
						<div class="transeunte__photo">
							<img
							src="
							<?php
								echo esc_url( get_theme_file_uri( 'assets/images/maria-laura-padron.jpg' ) );
							?>
							"
							alt="María Laura Padrón"
							title="María Laura Padrón"
							>
						</div>
						<h3 class="transeunte__title">María Laura Padrón</h3>
						<p class="transeunte__description">
							Periodista con predilección hacia la literatura. Desde hace cuatro años malabareo el arte de escribir, 
							conceptualizar, organizar y entrevistar. Cada acción ha sido una experiencia reflejada en prensa 
							digital e impresa; en presentaciones de libros y otros eventos culturales en Valencia-Venezuela y Madrid-España.
						</p>
						<div class="transeunte__social-icons">
							<a href="https://www.instagram.com/malaupadron/"><i class="fa fa-instagram"></i></a>
							<a href="https://www.linkedin.com/in/marialaurapadron/"><i class="fa fa-linkedin"></i></a>
							<a href="https://twitter.com/malaupadron/"><i class="fa fa-twitter"></i></a>
						</div>
					</div>
				</div>
				<div class="row__large-4">
					<div class="transeunte">
						<div class="transeunte__photo">
							<img
							src="
							<?php
								echo esc_url( get_theme_file_uri( 'assets/images/luis-felipe-hernandez.png' ) );
							?>
							"
							alt="Luis Felipe Hernández"
							title="Luis Felipe Hernández"
							>
						</div>
						<h3 class="transeunte__title">Luis Felipe Hernández</h3>
						<p class="transeunte__description">
							Comunicador por naturaleza y periodista ante la ley. No se trata solamente de informar, 
							educar y entretener sino de contar. Mi filosofía de trabajo emprende la búsqueda de detalles 
							para convertirlos en un valor agregado, eso trato de llevarlo a cabo en el periodismo y la redacción de contenido.
						</p>
						<div class="transeunte__social-icons">
							<a href="https://www.linkedin.com/in/luis-felipe-hern%C3%A1ndez-l%C3%B3pez-/"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Transeúntes -->
	<?php
	get_template_part( 'template-parts/content', 'modal' );
}
get_footer(); ?>
