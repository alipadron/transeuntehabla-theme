<?php
get_header();
while(have_posts()) { the_post(); 
?>
  <section>
    <h1>La calle habla</h1>
    <h2>¡Todo un viaje por la ciudad de experiencias interminables!</h2>
    <p>Agencia de contenidos culturales</p>
    <img
      src="<?php echo get_theme_file_uri('assets/images/cover-page.jpg'); ?>"
    >
  </section>
  <section>
    <h2>¿Qué hacemos?</h2>
    <h3>Literatura</h3>
    <p>Presentaciones de libros, talleres y conversatorios.</p>
    <h3>Música</h3>
    <p>Mini conciertos acústicos y clínicas musicales.</p>
    <h3>Cine y fotografía</h3>
    <p>Cine foros, talleres, exposiciones y recorridos fotográficos.</p>
    <h3>Artes plásticas</h3>
    <p>Exposiciones, shows de arte en vivo y talleres.</p>
  </section>
  <section>
    <h2>Orgía cultural</h2>
  <?php
    $homepagePosts = new WP_Query(array(
      'post_type' => array('evento', 'contenido'),
      'orderby' => 'date',
    ));
    while($homepagePosts->have_posts()) { $homepagePosts->the_post();
      the_post_thumbnail('post-thumbnail', array(
        'title' => get_the_title(get_post_thumbnail_id(get_the_id()))
        ));
  ?>
    <img src="" alt="">
        <div class="evento-title font-italic">
          <span class="mx-auto"> <?php echo get_the_title(); ?> </span>
          <div class="evento-title-verMas btn btn-light">
            <span>Ver Más</span> <i class="fa fa-arrow-up evento-arrow" aria-hidden="true"></i>
          </div>
        </div>
        <div class="evento-content">
          <div class="evento-content-text">
            <h2 class="evento-content-text-title"><?php echo get_the_title(); ?></h2>
            <p class="evento-content-text-p"> <?php echo get_the_excerpt(); ?> </p>
            <p class="evento-content-text-info">
            <?php if(get_post_type() === 'evento') { ?>
              <span><? echo get_field('lugar') ?></span>
              <span><? echo get_field('fecha') ?></span>
              <span><? echo get_field('tipo_de_evento') ?></span>
              <span><? echo get_field('tipo_de_espacio') ?></span>
              <span>Asistentes: <? echo get_field('numero_de_asistentes') ?>+</span>
            <?php } ?>
            <?php if(get_post_type() === 'contenido') { ?>
              <span><? echo get_field('plataforma_o_red_social') ?></span>
              <span>Alcance: <? echo get_field('alcance') ?></span>
            <?php } ?>
            </p>
            <a class="evento-content-text-link btn btn-dark w-100 font-italic " href="<?php echo get_permalink(); ?>">
              Ir a evento
            </a>
          </div>
        </div>
      </div>
      <?php } wp_reset_postdata(); ?>
    </div>
    <!-- Eventos responsive -->
    <div class="orgiaCultural-eventosMovil">
    <?php
      $homepagePosts = new WP_Query(array(
        'post_type' => array('evento', 'contenido'),
        'orderby' => 'date',
      ));
      $i = 0;
      while($homepagePosts->have_posts()) {
        $homepagePosts->the_post();
        if($i === 4) { ?>
        <div class="colapsable orgiaCultural-eventosMovil-C">
    <?php } ?>
      <div class="eventoMovil">
        <a class="wow rotateInDownLeft  " href="<?php echo get_permalink(); ?>"
          ><span class="eventoMovil-subTitle"><?php echo get_the_title(); ?></span></a
        >
        <!-- <span class="eventoMovil-subTitle">Valencia - Venezuela</span> -->
      </div>
    <?php 
        $i++;
      } ?>
    <?php if($homepagePosts->post_count > 0 && $i === $homepagePosts->post_count) { ?>
      </div>
      <div class="show-boton moreEvents">
        <span style="color: #fff !important">VER MÁS</span>
      </div>
    <?php } wp_reset_postdata();
    ?>
    </div>
  </section>
    <!-- FIN seccion orgia cultural -->
    <!-- seccion caminemos y proyectos, que hacemos? -->
    <section id="caminemos" class="caminemos container-fluid">
      <div class="caminemos-img"></div>
      <div class="caminemos-text d-flex justify-content-center flex-column align-items-center ">
        <img
          src="<?php echo get_theme_file_uri('assets/images/icon/Separador.png') ?>"
          alt="Sombra"
          class="sombra"
          title="Sombra"
          />
        <div>
          <p>
          Cualquier lugar es nuestra casa. <br />
            Si abres la puerta posiblemente te costará decirnos adiós.
          </p>
        </div>
        <img
        src="<?php echo get_theme_file_uri('assets/images/icon/Separador.png') ?>"
        alt="Sombra"
        class="sombra"
        title="Sombra"
        />
      </div>
      <div class="proyectos">
        <div class="proyectos-img"></div>
        <div class="proyectos-proyectos">
          <div class="cuerpo-proyecto font-italic">
            <div class="proyectos-contenido  row">
              <div class="proyecto-titulo ">Literatura</div>
              <div class="proyecto-separador">
                <img
                  src="<?php echo get_theme_file_uri('assets/images/icon/Linea2-01.png') ?>"
                  alt="Linea"
                  title="Linea"
                  />
              </div>
              <div class="proyecto-descripcion">
                <span> Presentaciones de libros, talleres y conversatorios </span>
              </div>
            </div>
            <div class="proyectos-contenido ">
              <div class="proyecto-titulo">Música</div>
              <div class="proyecto-separador">
                <img
                  src="<?php echo get_theme_file_uri('assets/images/icon/Linea2-01.png') ?>"
                  alt="Linea"
                  title="Linea"
                  />
              </div>
              <div class="proyecto-descripcion">
                <span> Mini conciertos acústicos y clínicas musicales </span>
              </div>
            </div>
            <div class="proyectos-contenido">
              <div class="proyecto-titulo">Cine y fotografía</div>
              <div class="proyecto-separador">
                <img
                  src="<?php echo get_theme_file_uri('assets/images/icon/Linea2-01.png') ?>"
                  alt="Linea"
                  title="Linea"
                  />
              </div>
              <div class="proyecto-descripcion">
                <span> Cine foros, talleres, exposiciones y recorridos fotográficos. </span>
              </div>
            </div>
            <div class="proyectos-contenido">
              <div class="proyecto-titulo">Artes plásticas</div>
              <div class="proyecto-separador">
                <img
                  src="<?php echo get_theme_file_uri('assets/images/icon/Linea2-01.png') ?>"
                  alt="Linea"
                  title="Linea"
                  />
              </div>
              <div class="proyecto-descripcion">
                <span> Exposiciones, shows de arte en vivo y talleres. </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- seccion caminemos y proyectos, que hacemos? -->
    <!-- contenidos y ¡Que hacemos? -->
    <section id="contenidos" class="contenidos container-fluid">
      <div class="contenidos-img bg-danger"></div>

      <div class="contenidos-text font-italic">
        <img
          src="<?php echo get_theme_file_uri('assets/images/icon/Separador.png') ?>"
          alt="Sombra"
          class="sombra"
          title="Sombra"
          />
        <p>
          Nos inspiramos en perfiles reales que se cruzan en tu camino y los convertimos en
          personajes. Dinos quiénes son, el resto se lo dejamos a la imaginación.
        </p>
        <span> ¡Contamos historias para conectar! </span>
        <img
          src="<?php echo get_theme_file_uri('assets/images/icon/Separador.png') ?>"
          alt="Sombra"
          class="sombra"
          title="Sombra"
          />
      </div>
      <div class="contenidos-queHacemos font-italic ">
        <div class="contenidos-queHacemos-text wow slideInUp">
          <img
            src="<?php echo get_theme_file_uri('assets/images/icon/Linea2-01.png') ?>"
            alt="Linea"
            title="Linea"
            />
          <span>Creación de campañas</span>
          <div class="lineaContenidos"></div>
        </div>
        <img
          src="<?php echo get_theme_file_uri('assets/images/icon/Separador.png') ?>"
          alt="Sombra"
          class="sombra"
          title="Sombra"
          />
        <div class="contenidos-queHacemos-text wow  slideInUp ">
          <img
            src="<?php echo get_theme_file_uri('assets/images/icon/Linea2-01.png') ?>"
            alt="Linea"
            title="Linea"
            />
          <span>Creación de personajes</span>
          <div class="lineaContenidos"></div>
        </div>
        <img
          src="<?php echo get_theme_file_uri('assets/images/icon/Separador.png') ?>"
          alt="Sombra"
          class="sombra"
          title="Sombra"
          />
        <div class="contenidos-queHacemos-text wow  slideInUp ">
          <img
            src="<?php echo get_theme_file_uri('assets/images/icon/Linea2-01.png') ?>"
            alt="Linea"
            title="Linea"
            />
          <span>Redacción y diseño gráfico de publicaciones para redes sociales.</span>
          <div class="lineaContenidos"></div>
        </div>
        <img
          src="<?php echo get_theme_file_uri('assets/images/icon/Separador.png') ?>"
          alt="Sombra"
          class="sombra"
          title="Sombra"
          />
        <div class="contenidos-queHacemos-text wow  slideInUp ">
          <img
            src="<?php echo get_theme_file_uri('assets/images/icon/Linea2-01.png') ?>"
            alt="Linea"
            title="Linea"
            />
          <span>Redacción y diseño gráfico de blogs, email marketing y sitios web.</span>
          <div class="lineaContenidos"></div>
        </div>
        <img
          src="<?php echo get_theme_file_uri('assets/images/icon/Separador.png') ?>"
          alt="Sombra"
          class="sombra"
          title="Sombra"
          />
        <div class="contenidos-queHacemos-text wow  slideInUp ">
          <img
            src="<?php echo get_theme_file_uri('assets/images/icon/Linea2-01.png') ?>"
            alt="Linea"
            title="Linea"
            />
          <span> Redacción y edición de contenido para vídeos</span>
          <div class="lineaContenidos"></div>
        </div>
        <img
          src="<?php echo get_theme_file_uri('assets/images/icon/Separador.png') ?>"
          alt="Sombra"
          class="sombra"
          title="Sombra"
          />
      </div>
    </section>
    <!--  FIN contenidos y ¡Que hacemos? -->
    <!--camina con nosotros -->
    <div class="ConNosotros-img"></div>
    <div id="contacto" class="bgRayas footPage">
      <div class="footPage-text">
        <p class="footPage-text-p">
          <span> "Queremos unirnos </span> <span> con otros que andan </span>
          <span> por allí en un caminar constante". </span>
        </p>
        <span class="footPage-text-resaltado"> ¡Encontrémonos! </span>
      </div>
      <div class="footPage-contact ">
        <div class="footPage-contact-phone  ">
          <span>+34 625 43 7696</span> <span> +58 424 463 2964</span>
        </div>
        <div class="footPage-contact-mail"><span>info@transeuntehabla.com</span></div>
        <div class=" footPage-contact-city "><h5>Madrid (España) / Valencia (Venezuela)</h5></div>
        <div class="socialF d-flex ">
          <div class="redS  mx-2">
            <a href="https://www.facebook.com/transeuntehabla/">
              <img
                src="<?php echo get_theme_file_uri('assets/images/icon/Redes Sociales F.png') ?>"
                alt="Icono Facebook"
                title="Icono Facebook"
                />
            </a>
          </div>
          <div class="redS  mx-2">
            <a href="https://www.linkedin.com/company/transeuntehabla/">
              <img
                src="<?php echo get_theme_file_uri('assets/images/icon/Redes Sociales in.png') ?>"
                alt="Icono LinkedIn"
                title="Icono LinkedIn"
                />
            </a>
          </div>
          <div class="redS  mx-2">
            <a href="https://www.instagram.com/transeuntehabla/">
              <img
                src="<?php echo get_theme_file_uri('assets/images/icon/Redes Sociales I.png') ?>"
                alt="Icono Instagram"
                title="Icono Instagram"
                />
            </a>
          </div>
        </div>
      </div>
      <div class="footPage-form">
        <div class="Formularios mx-auto  ">
        <?php 
          echo do_shortcode(get_field('formulario'));
        ?>
          <!-- <div class="botonAlert botonAlert-succ alert alert-success alert-dismissible fade show" role="alert">
            <strong>Mensaje enviado con éxito</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div> -->
        </div>
      </div>
    </div>
    <footer>
      <div class="pieDos container-fluid d-flex align-self-end justify-content-center ">
        <div class="textF text-center align-self-center d-flex flex-column py-2">
          <h4>FOTOGRAFÍAS:</h4>
          <span class="">Kala Madriz / kalamadriz@gmail.com</span>
          <span
            >Transeúnte &copy; <? echo date(Y);?></span
          >
        </div>
      </div>
    </footer>
<?php } get_footer(); ?>
