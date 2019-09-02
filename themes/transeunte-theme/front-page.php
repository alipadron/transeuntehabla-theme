<?php
get_header();
while(have_posts()) { the_post(); 
?>
  <!-- Portada -->
  <section class="portada">
    <picture>
      <source
        media="(min-width: 1200px)"
        srcset="<?php echo get_theme_file_uri('assets/images/portada--extra-large.jpg'); ?>"
      >
      <source
        media="(min-width: 992px)"
        srcset="<?php echo get_theme_file_uri('assets/images/portada--large.jpg'); ?>"
      >
      <source
        media="(min-width: 768px)"
        srcset="<?php echo get_theme_file_uri('assets/images/portada--medium.jpg'); ?>"
      >
      <source
        media="(min-width: 576px)"
        srcset="<?php echo get_theme_file_uri('assets/images/portada--small.jpg'); ?>"
      >
      <img
        class="portada__imagen"
        src="<?php echo get_theme_file_uri('assets/images/portada--extra-small.jpg'); ?>"
      >
    </picture>
    <div class="portada__contenido">
      <div class="wrapper">
        <h1 class="portada__contenido__titulo">La calle habla</h1>
        <h2 class="portada__contenido__subtitulo">
          ¡Todo un viaje por la ciudad de experiencias interminables!
        </h2>
        <p class="portada__contenido__descripcion">
          Agencia de contenidos culturales
        </p>
      </div>
    </div>
  </section>
  <!-- Portada -->
  
  <!-- Transeúntes -->
  <section class="page-section page-section--transeuntes" id="transeuntes">
    <div 
      class="wrapper wrapper--no-padding-until-large generic-content-container generic-content-container--gray"
    >
      <h2 class="page-section__title page-section__title--italic">
        Transeúntes
      </h2>
      <div class="wrapper">
        <p class="page-section__description">El equipo de Transeúnte está conformado por tres profesionales que buscan generar ruido y alboroto 
        consciente en la sociedad mediante la cultura como la expresión más humana de los individuos.</p>
      </div>
      <div class="row row--gutters row--equal-height-at-large">
        <div class="row__large-4">
          <div class="transeunte">
            <div class="transeunte__photo">
              <img
                src="
                <?php 
                  echo get_theme_file_uri('assets/images/jesus-konde.jpg');
                ?>"
                alt="Jesús Konde"
                title="Jesús Konde"
              >
            </div>
            <h3 class="transeunte__title">Jesús Konde</h3>
            <p class="transeunte__description">Artista visual con experiencia en el desarrollo de la identidad para marcas, eventos y 
            proyectos vinculados con el sector cultural. Ha trabajado con el diseño editorial y 
            publicitario para redes sociales.</p>
          </div>
        </div>
        <div class="row__large-4">
          <div class="transeunte">
            <div class="transeunte__photo">
              <img
                src="
                <?php
                  echo get_theme_file_uri('assets/images/maria-laura.jpg');
                ?>"
                alt="María Laura Padrón"
                title="María Laura Padrón"
              >
            </div>
            <h3 class="transeunte__title">María Padrón</h3>
            <p class="transeunte__description">Es periodista enfocada en la literatura. Ha escrito entrevistas, reportajes y crónicas en las principales revistas y periódicos de Venezuela. En España se está conociendo su trabajo no solo por su aporte periodístico en medios digitales, sino gracias a la organización de presentaciones de libros y sus respectivas giras de medios, así como la participación en proyectos de gestión cultural.</p>
          </div>
        </div>
        <div class="row__large-4">
          <div class="transeunte">
            <div class="transeunte__photo">
              <img
                src="
                <?php
                  echo get_theme_file_uri('assets/images/luis-felipe.jpg');
                ?>"
                alt="Luis Felipe Hernández"
                title="Luis Felipe Hernández"
              >
            </div>
            <h3 class="transeunte__title">Luis Hernández</h3>
            <p class="transeunte__description">Es comunicador y melómano. Ha escrito reportajes, crónicas y entrevistas para medios de comunicación de relevancia en Venezuela y una de tinte internacional (especializada en música como lo es Noisey de la Vice). Desde hace dos años se ha enfocado en el marketing digital aplicando estrategias y redacción de contenido para diferentes sectores del mercado en Estados Unidos y Colombia.</p>
          </div>
        </div>
      </div>
      
      
      
      
      
    </div>
  </section>
  <!-- Transeúntes -->

  <!-- ¿Qué hacemos? -->
  <section class="page-section page-section--dark-gray" id="que-hacemos">
    <div class="wrapper">
      <h2 class="page-section__title page-section__title--italic page-section__title--blue">
        ¿Qué <strong>hacemos?</strong>
      </h2>
      <div class="row row--gutters generic-content-container generic-content-container--white">
        <div class="row__medium-6">
          <div class="que-hacemos-item">
            <h3 class="que-hacemos-item__title">Título 1</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipiscing, elit sodales lobortis iaculis inceptos 
              dictum, risus quis congue in cubilia. Potenti eleifend hendrerit sociis nostra tellus interdum donec, dapibus tempor mi integer accumsan lacinia, rutrum magnis vehicula auctor cursus quam.
            </p>
          </div>
          <div class="que-hacemos-item">
            <h3 class="que-hacemos-item__title">Título 2</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipiscing, elit sodales lobortis iaculis inceptos dictum, risus quis congue in cubilia. Potenti eleifend hendrerit sociis nostra tellus interdum donec, dapibus tempor mi integer accumsan lacinia, rutrum magnis vehicula auctor cursus quam.
            </p>
          </div>
        </div>
        <div class="row__medium-6">
          <div class="que-hacemos-item">
            <h3 class="que-hacemos-item__title">Título 3</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing, elit sodales lobortis iaculis inceptos 
              dictum, risus quis congue in cubilia. Potenti eleifend hendrerit sociis nostra tellus interdum 
              donec, dapibus tempor mi integer accumsan lacinia, rutrum magnis vehicula auctor cursus quam.
            </p>
          </div>
          <div class="que-hacemos-item">
            <h3 class="que-hacemos-item__title">Título 4</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing, elit sodales lobortis iaculis inceptos 
              dictum, risus quis congue in cubilia. Potenti eleifend hendrerit sociis nostra tellus interdum 
              donec, dapibus tempor mi integer accumsan lacinia, rutrum magnis vehicula auctor cursus quam.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ¿Qué hacemos? -->

  <!-- Orgía cultural -->
  <section class="page-section" id="orgia-cultural">
    <div class="wrapper">
      <h2 class="page-section__title page-section__title--dark-gray page-section__title--italic">
        Orgía <strong>cultural</strong>
      </h2>
      <div class="row row--gutters-large row--margin-top row--margin-bottom">
    <?php
      $homepagePosts = new WP_Query(array(
        'post_type' => array('evento', 'contenido'),
        'orderby' => 'date',
        'posts_per_page' => 20
      ));
      while($homepagePosts->have_posts()) {
        $homepagePosts->the_post();
    ?>
      <div class="row__small-6 row__medium-4 row__extra-large-3">
        <div class="orgia-cultural-item">
        <?php
        // Get img tag
        /**
         * Extra small screens: 280x280 image
         * Small screens: 250x250 image
         * Medium screens: 230x230 image
         * Large screens: 
         * 
         */
          the_post_thumbnail('squareMedium', array(
            'title' => get_the_title(get_post_thumbnail_id(get_the_id())),
            'class' => 'orgia-cultural-item__image'
            ));
        ?>
          
          <div class="orgia-cultural-item__content">
            <h3 class="orgia-cultural-item__content__title">
              <?php echo get_the_title(); ?>
            </h3>
              <i class="orgia-cultural-item__content__icon fa fa-arrow-up"></i>
            <div class="orgia-cultural-item__content__container">
              <p class="orgia-cultural-item__content__container__description">
                <?php echo get_the_excerpt(); ?>
              </p>
              <a href="<?php echo get_the_permalink(); ?>" class="btn">Ir a evento</a>
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

<?php } get_footer(); ?>
