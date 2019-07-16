<?php
get_header();
while(have_posts()) { the_post(); 
?>
  <section class="portada">
    <img
      class="portada__imagen"
      src="<?php echo get_theme_file_uri('assets/images/portada--large.jpg'); ?>"
    >
    <div class="portada__contenido">
      <div class="row">
        <div class="row__medium-6">
          <div class="portada__contenido__video">
            <iframe
              width="560"
              height="315"
              src="https://www.youtube.com/embed/8R-KBB92iXk"
              frameborder="0"
              allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
            >
            </iframe>
          </div>
        </div>
        <div class="row__medium-6">
          <div class="portada__contenido__texto">
            <h1 class="portada__contenido__texto__titulo">La calle habla</h1>
            <h2 class="portada__contenido__texto__subtitulo">
              ¡Todo un viaje por la ciudad de experiencias interminables!
            </h2>
            <p class="portada__contenido__texto__descripcion">Agencia de contenidos culturales</p>
          </div>
        </div>
      </div>
    </div>
    
    
  </section>
  <section id="que-hacemos">
    <h2>¿Qué hacemos?</h2>
    <h3>Título 1</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipiscing, elit sodales lobortis iaculis inceptos 
      dictum, risus quis congue in cubilia. Potenti eleifend hendrerit sociis nostra tellus interdum 
      donec, dapibus tempor mi integer accumsan lacinia, rutrum magnis vehicula auctor cursus quam. 
      Sodales condimentum urna inceptos dignissim semper purus dictumst velit mi, varius a aliquam quis 
      fames parturient auctor ridiculus malesuada, non posuere risus sociis montes dui est nisi.</p>
    <h3>Título 2</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipiscing, elit sodales lobortis iaculis inceptos 
      dictum, risus quis congue in cubilia. Potenti eleifend hendrerit sociis nostra tellus interdum 
      donec, dapibus tempor mi integer accumsan lacinia, rutrum magnis vehicula auctor cursus quam. 
      Sodales condimentum urna inceptos dignissim semper purus dictumst velit mi, varius a aliquam quis 
      fames parturient auctor ridiculus malesuada, non posuere risus sociis montes dui est nisi.</p>
    <h3>Título 3</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipiscing, elit sodales lobortis iaculis inceptos 
      dictum, risus quis congue in cubilia. Potenti eleifend hendrerit sociis nostra tellus interdum 
      donec, dapibus tempor mi integer accumsan lacinia, rutrum magnis vehicula auctor cursus quam. 
      Sodales condimentum urna inceptos dignissim semper purus dictumst velit mi, varius a aliquam quis 
      fames parturient auctor ridiculus malesuada, non posuere risus sociis montes dui est nisi.</p>
    <h3>Título 4</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipiscing, elit sodales lobortis iaculis inceptos 
      dictum, risus quis congue in cubilia. Potenti eleifend hendrerit sociis nostra tellus interdum 
      donec, dapibus tempor mi integer accumsan lacinia, rutrum magnis vehicula auctor cursus quam. 
      Sodales condimentum urna inceptos dignissim semper purus dictumst velit mi, varius a aliquam quis 
      fames parturient auctor ridiculus malesuada, non posuere risus sociis montes dui est nisi.</p>
  </section>
  <section id="orgia-cultural">
    <h2>Orgía cultural</h2>
  <?php
    $homepagePosts = new WP_Query(array(
      'post_type' => array('evento', 'contenido'),
      'orderby' => 'date',
    ));
    while($homepagePosts->have_posts()) {
      $homepagePosts->the_post();
  ?>
    <div>
      <?php
      // Get img tag
        the_post_thumbnail('post-thumbnail', array(
          'title' => get_the_title(get_post_thumbnail_id(get_the_id())),
          'class' => ''
          ));
      ?>
      <h3> <?php echo get_the_title(); ?> </h3>
      <a href="<?php echo get_the_permalink() ?>">Ir a evento</a>
    </div>
  <?php 
    }
    wp_reset_postdata();
  ?>
  <section id="transeuntes">
    <h2>Transeúntes</h2>
    <p>El equipo de Transeúnte está conformado por tres profesionales que buscan generar ruido y alboroto 
      consciente en la sociedad mediante la cultura como la expresión más humana de los individuos.</p>
    <img
      src="<?php echo get_theme_file_uri('assets/images/jesus-konde.jpg') ?>"
      alt="Jesús Konde"
      title="Jesús Konde"
    >
    <h3>Jesús Konde</h3>
    <p>Artista visual con experiencia en el desarrollo de la identidad para marcas, eventos y 
    proyectos vinculados con el sector cultural. Ha trabajado con el diseño editorial y 
    publicitario para redes sociales.</p>
    <img
      src="<?php echo get_theme_file_uri('assets/images/maria-laura.jpg') ?>"
      alt="María Laura Padrón"
      title="María Laura Padrón"
    >
    <h3>María Laura Padrón</h3>
    <p>Es periodista enfocada en la literatura. Ha escrito entrevistas, reportajes y crónicas en las principales revistas y periódicos de Venezuela. En España se está conociendo su trabajo no solo por su aporte periodístico en medios digitales, sino gracias a la organización de presentaciones de libros y sus respectivas giras de medios, así como la participación en proyectos de gestión cultural.</p>
    <img
      src="<?php echo get_theme_file_uri('assets/images/luis-felipe.jpg') ?>"
      alt="Luis Felipe Hernández"
      title="Luis Felipe Hernández"
    >
    <h3>Luis Felipe Hernández</h3>
    <p>Es comunicador y melómano. Ha escrito reportajes, crónicas y entrevistas para medios de comunicación de relevancia en Venezuela y una de tinte internacional (especializada en música como lo es Noisey de la Vice). Desde hace dos años se ha enfocado en el marketing digital aplicando estrategias y redacción de contenido para diferentes sectores del mercado en Estados Unidos y Colombia.</p>
  </section>
<?php } get_footer(); ?>
