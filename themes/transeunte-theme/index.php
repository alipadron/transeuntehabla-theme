<?php
get_header('blog');
?>
<main class="main-blog">
<!-- Título del blog -->
<section class="page-banner">
  <div class="wrapper">
    <h1 class="page-banner__title">
      La calle de las opiniones
    </h1>
    <p class="page-banner__subtitle">
      Transitamos sin
      <span class="page-banner__subtitle__line">cesar</span>
    </p>
  </div>
</section>
<!-- Título del blog -->

<!-- Posts -->
<?php
  if (have_posts()) {
?>
  <div class="wrapper wrapper--no-padding-until-large">
    <div class="row row--gutters-large">

      <!-- Los últimos 4 posts -->
      <div class="row__large-10">
        <section class="blog-posts">
      <?php
        $postCounter = 0;        
        while (have_posts()) {
          the_post();
          if ($postCounter) {
            if ($postCounter === 1) { // Otros posts
              echo '<div class="blog-posts__others">';
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
                  <div class="blog-posts__others__post__text wrapper wrapper--keep-padding generic-content-container">
                    <h2 class="blog-posts__others__post__text__title">
                      <a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a>
                    </h2>
                    <p class="blog-posts__others__post__text__content">
                      <?php echo wp_trim_words(get_the_content(), 18); ?>
                    </p>
                  </div>
                </article>
              </div>           
      <?php
            if ($postCounter + 1 === $wp_query->post_count) {
              echo '</div>';
              echo '</div>';
            }
          } else { // Post principal
      ?>
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
                    <?php echo wp_trim_words(get_the_content(), 18); ?>
                  </p>
                  <p class="blog-posts__most-recent__text__meta-info">
                    <span><?php echo get_the_category_list(', '); ?></span> - 
                    <?php echo get_the_date('d/m/Y'); ?>
                  </p>
                </div>
              </div>
            </div>
          </article>
          <hr class="separator separator--one-third-up-to-large">
      <?php
          }
        $postCounter++;
        }
      ?>
        </section>
      </div>
      <!-- Los últimos 4 posts -->

      <!-- Posts destacados -->
      <div class="row__large-2">
        <section class="featured-posts">
      <?php
        $featuredPosts = new WP_Query(array(
          'posts_per_page' => 1,
          'post_type' => 'post',
        ));
        while ($featuredPosts->have_posts()) {
          $featuredPosts->the_post();
      ?>
          <article class="featured-posts__post generic-content-container">
            <?php /* the_post_thumbnail('thumbnail', array(
                    'title' => get_the_title(get_post_thumbnail_id(get_the_id())),
                    'class' => 'featured-posts__post__image'
                  )); */
            ?>
            <picture>
              <source
                media="(min-width: 992px)"
                srcset="<?php echo get_the_post_thumbnail_url( get_the_id(), 'postPortraitLarge'); ?>"
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
                class="featured-posts__post__image"
                src="<?php echo get_the_post_thumbnail_url( get_the_id(), 'postLandscapeExtraSmall'); ?>"
              >
            </picture>
            <p class="featured-posts__post__label">
              Destacado
            </p>
            <div class="featured-posts__post__text wrapper">
              <h2 class="featured-posts__post__text__title">
                <a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a>
              </h2>
              <p class="featured-posts__post__text__content">
                <?php echo wp_trim_words(get_the_content(), 18); ?>
                <a href="<?php echo get_the_permalink() ?>">Leer más</a>
              </p>
            </div>
            
          </article>
      <?php
        }
      ?>
        </section>
      </div>
      <!-- Posts destacados -->
      
    </div>
  </div>
<?php
  }
?>
<!-- Posts -->

<div class="social-icons social-icons--blog-home social-icons--background-dark-gray social-icons--light-gray">
  <p class="social-icons__text">Síguenos</p>
  <a href="https://www.instagram.com/transeuntehabla/"><i class="fa fa-instagram"></i></a>
  <a href="https://www.linkedin.com/company/transeuntehabla"><i class="fa fa-linkedin"></i></a>
  <a href="https://www.facebook.com/transeuntehabla"><i class="fa fa-facebook"></i></a>
  
  
</div>

</main>


<?php get_footer(); ?>