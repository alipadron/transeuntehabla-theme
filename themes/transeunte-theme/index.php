<?php
get_header('blog');
?>
<main class="main-blog">
<?php get_template_part('template-parts/content', 'banner'); ?>

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
            get_template_part('template-parts/content', 'blog-post');
            if (($postCounter + 1) % 3 === 0 || $postCounter + 1 === $relationedEditorialPosts->post_count) {
              echo '</div>';
            }
            $postCounter++;
          }
          echo '</div>';
          echo '<!-- Posts relacionados con la editorial -->';
        }
        wp_reset_postdata();
      ?>
        </section>
      </div>
      
        <?php get_template_part('template-parts/content', 'destacados'); ?>
      
      
    </div>
  </div>
<!-- Posts -->

<?php get_template_part('template-parts/content', 'social-icons'); ?>

</main>


<?php get_footer(); ?>