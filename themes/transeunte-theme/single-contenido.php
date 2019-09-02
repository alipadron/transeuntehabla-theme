<?php
get_header();
?>
<main class="main-blog">
<!-- Título del post -->
<section class="page-banner">
  <div class="wrapper">
    <h1 class="page-banner__title page-banner__title--align-left">
      <?php
        $titleConvertedInArray = explode(' ', get_the_title());
        $lastWord = array_pop($titleConvertedInArray);
        $firstWords = implode(' ', $titleConvertedInArray);
        echo $firstWords;
      ?>
      <span class="page-banner__line">
        <?php echo $lastWord; ?>
      </span>
    </h1>
  </div>
</section>
<!-- Título del post -->

<!-- Posts -->
  <div class="wrapper wrapper--no-padding-until-large">
    <div class="meta-info">
      <p class="meta-info__text">
        <?php echo get_the_category_list(', ') . ' ' . get_the_date('d/m/Y'); ?>
        por
        <a href="<?php echo get_author_posts_url(get_the_author_ID()); ?>">
          <?php echo get_the_author(); ?>
        </a>
      </p>
    </div>
    
    <div class="row row--gutters-large">
      <!-- Contenido del post -->
      <div class="row__large-10">
        <section class="post-content">
          <div class="social-icons social-icons--blog-post social-icons--background-red">
            <p class="social-icons__text social-icons__text--display-always social-icons__text--white">Comparte</p>
            <!-- <a href="https://www.instagram.com/transeuntehabla/"><i class="fa fa-instagram"></i></a> -->
            <a href="https://www.linkedin.com/company/transeuntehabla"><i class="fa fa-linkedin"></i></a>
            <a href="https://www.facebook.com/transeuntehabla"><i class="fa fa-facebook"></i></a>
          </div>
          <picture>
            <source
              media="(min-width: 1200px)"
              srcset="<?php echo get_the_post_thumbnail_url( get_the_id(), 'postLandscapeExtraLarge'); ?>"
            >
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
              class="post-content__thumbnail"
              src="<?php echo get_the_post_thumbnail_url( get_the_id(), 'postLandscapeExtraSmall'); ?>"
            >
          </picture>
          <div class="post-content__text generic-content-container wrapper">
            <?php the_content(); ?>
          </div>
          <?php
            $images = get_field('galeria');
            if ($images) {
          ?>
            <div id="gallery" class="post-gallery wrapper">
              <div class="row row--gutters-large">
                
          <?php
            foreach($images as $image) {
          ?>
          <div class="row__small-6 row__medium-4 row__extra-large-3">
            <a class="item" href="<?php echo $image['url']; ?>">
              <img src="<?php echo $image['sizes']['thumbnail']; ?>" />
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