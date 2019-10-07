<?php
get_header('blog');
?>
<main class="main-blog">
<!-- Título del blog -->
<section class="page-banner">
  <picture>
      <source
        media="(min-width: 1200px)"
        srcset="<?php echo get_theme_file_uri('assets/images/portada-blog--extra-large.jpg'); ?>"
      >
      <source
        media="(min-width: 992px)"
        srcset="<?php echo get_theme_file_uri('assets/images/portada-blog--large.jpg'); ?>"
      >
      <source
        media="(min-width: 768px)"
        srcset="<?php echo get_theme_file_uri('assets/images/portada-blog--medium.jpg'); ?>"
      >
      <source
        media="(min-width: 576px)"
        srcset="<?php echo get_theme_file_uri('assets/images/portada-blog--small.jpg'); ?>"
      >
      <img
        class="page-banner__image"
        src="<?php echo get_theme_file_uri('assets/images/portada-blog--extra-small.jpg'); ?>"
      >
    </picture>
  <!-- <div class="wrapper">
    <h1 class="page-banner__title">
      Calle de las opiniones
    </h1>
    <p class="page-banner__subtitle">
      Transitamos sin
      <span class="page-banner__subtitle__line">cesar</span>
    </p>
  </div> -->
</section>
<!-- Título del blog -->

<!-- Posts -->
  <div class="wrapper wrapper--no-padding-until-large">
    <div class="row row--gutters-large">
      <div class="row__large-10">
        <section class="blog-posts">
      <?php
      // Obtener la editorial
        $editorialPost = new WP_Query(array(
          'posts_per_page' => 1,
          'category_name' => 'editoriales',
          'post_type' => 'post'
        ));
        $editorialPostId = NULL;
        if ($editorialPost->have_posts()) {
          $editorialPost->the_post();
          $editorialPostId = get_the_ID();
      ?>
        <!-- Editorial -->
          <article class="blog-posts__most-recent">
            <div class="row row--gutters-large">
              <div class="row__large-8">
                <picture>
                  <source
                    media="(min-width: 992px)"
                    srcset="<?php echo get_the_post_thumbnail_url( get_the_id(), 'postLandscapeLarge'); ?>"
                  >
                  <source
                    media="(min-width: 768px)"
                    srcset="<?php echo get_the_post_thumbnail_url( get_the_id(), 'postLandscapeMedium'); ?>"
                  >
                  <source
                    media="(min-width: 576px)"
                    srcset="<?php echo get_the_post_thumbnail_url( get_the_id(), 'postLandscapeSmall'); ?>"
                  >
                  <img
                    alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>"
                    title="<?php echo get_the_title(get_post_thumbnail_id()); ?>"
                    class="blog-posts__most-recent__image"
                    src="<?php echo get_the_post_thumbnail_url( get_the_id(), 'postLandscapeExtraSmall'); ?>"
                  >
                </picture>
              </div>
              <div class="row__large-4">
                <div class="blog-posts__most-recent__text wrapper generic-content-container">
                  <h2 class="blog-posts__most-recent__text__title">
                    <a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a>
                  </h2>
                  <p class="blog-posts__most-recent__text__content">
                    <?php echo has_excerpt() ? get_the_excerpt() : wp_trim_words(get_the_content(), 18); ?>
                  </p>
                  <p class="blog-posts__most-recent__text__meta-info">
                    <span><?php echo get_the_category_list(', '); ?></span> - 
                    <?php echo get_the_date('d/m/Y'); ?>
                  </p>
                </div>
              </div>
            </div>
          </article>
        <!-- Editorial -->
          <hr class="separator separator--one-third-up-to-large">
      <?php
        }
        wp_reset_postdata();
        // Obtener posts relacionados a la editorial
        $relationedEditorialPosts = new WP_Query(array(
          'posts_per_page' => get_option('posts_per_page'),
          'post_type' => 'post',
          'meta_query' => array(
            array(
              'key' => 'editorial',
              'compare' => 'LIKE',
              'value' => '"' . $editorialPostId . '"'
            )
          )
        ));
        $postCounter = 0;
        if ($relationedEditorialPosts->have_posts()) {
          echo '<!-- Posts relacionados con la editorial -->';
          echo '<div class="blog-posts__others">';
          while($relationedEditorialPosts->have_posts()) {
            $relationedEditorialPosts->the_post();
            if ($postCounter % 3 === 0) {
              echo '<div class="row row--gutters-large row--equal-height-at-large">';
            }
      ?>
        <div class="row__large-4">
          <article class="blog-posts__others__post">
            <picture>
              <source
                media="(min-width: 992px)"
                srcset="<?php echo get_the_post_thumbnail_url( get_the_id(), 'postLandscapeSmall'); ?>"
              >
              <source
                media="(min-width: 768px)"
                srcset="<?php echo get_the_post_thumbnail_url( get_the_id(), 'postLandscapeMedium'); ?>"
              >
              <source
                media="(min-width: 576px)"
                srcset="<?php echo get_the_post_thumbnail_url( get_the_id(), 'postLandscapeSmall'); ?>"
              >
              <img
                alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>"
                title="<?php echo get_the_title(get_post_thumbnail_id()); ?>"
                class="blog-posts__others__post__image"
                src="<?php echo get_the_post_thumbnail_url( get_the_id(), 'postLandscapeExtraSmall'); ?>"
              >
            </picture>
            <div class="wrapper wrapper--keep-padding generic-content-container">
              <h2 class="blog-posts__others__post__title">
                <a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a>
              </h2>
              <p class="blog-posts__others__post__content">
                <?php echo has_excerpt() ? get_the_excerpt() : wp_trim_words(get_the_content(), 18); ?>
              </p>
            </div>
          </article>
        </div>
      <?php
            if (($postCounter + 1) % 3 === 0 || $postCounter + 1 === $relationedEditorialPosts->post_count) {
              echo '</div>';
            }

            if ($postCounter + 1 === $relationedEditorialPosts->post_count) {
              echo '</div>';
              echo '<!-- Posts relacionados con la editorial -->';
            }
            $postCounter++;
          }
        }
        wp_reset_postdata();
      ?>
        </section>
      </div>
      
        <?php get_template_part('destacados'); ?>
      
      
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