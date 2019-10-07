<!-- Posts destacados -->
<div class="row__large-2">
  <section class="featured-posts">
<?php
  $featuredPosts = new WP_Query(array(
    'posts_per_page' => 2,
    'post_type' => 'post',
    'meta_key' => 'post_views_count',
    'orderby' => 'meta_value_num',
    'order' => 'DESC'
  ));
  while ($featuredPosts->have_posts()) {
    $featuredPosts->the_post();
?>
  <a href="<?php echo get_the_permalink(); ?>">
    <article class="featured-posts__post generic-content-container">
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
        <?php echo get_the_title(); ?>
          <!-- <a href="<?php echo get_the_permalink(); ?>"></a> -->
        </h2>
        <!-- <p class="featured-posts__post__text__content">
          <?php echo has_excerpt() ? get_the_excerpt() : wp_trim_words(get_the_content(), 18); ?>
          <a href="<?php echo get_the_permalink() ?>">Leer más</a>
        </p> -->
      </div>
    </article>
  </a>
<?php
  }
  wp_reset_postdata();
?>
  </section>
</div>
<!-- Posts destacados -->