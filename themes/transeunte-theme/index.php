<?php
get_header('blog');
?>
<div class="wrapper">
  <div class="page-banner">
    <h1 class="page-banner__title">
      Blog de transeúnte
    </h1>
    <p class="page-banner__subtitle">
      Bienvenido al blog de <span class="page-banner__subtitle__line">Transeúnte</span>
    </p>
  </div>
</div>
<?php
  if (have_posts()) {
?>
  <div class="wrapper">
    <div class="row row--gutters-large">
      <div class="row__large-10">
        <section class="blog-posts">
      <?php
        $postCounter = 0;        
        while (have_posts()) {
          the_post();
          if ($postCounter) {
            if ($postCounter === 1) {
              echo '<div class="blog-posts__others">';
              echo '<div class="row">';
            }
      ?>
              <div class="row__large-4">
                <article class="post">
                  <?php the_post_thumbnail('thumbnail'); ?>
                  <h2 class="post__title"><?php echo get_the_title(); ?></h2>
                  <p class="post__content"><?php echo wp_trim_words(get_the_content()); ?></p>
                </article>
              </div>           
      <?php
            if ($postCounter + 1 === $wp_query->post_count) {
              echo '</div>';
              echo '</div>';
            }
          } else {
      ?>
          <article class="blog-posts__most-recent">
            <div class="row">
              <div class="row__large-8">
                <?php the_post_thumbnail('thumbnail'); ?>
              </div>
              <div class="row__large-4">
                <h2 class="post__title"><?php echo get_the_title(); ?></h2>
                <p class="post__content"><?php echo wp_trim_words(get_the_content()); ?></p>
              </div>
            </div>
          </article>
      <?php
          }
        $postCounter++;
        }
      ?>
        </section>
      </div>
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
          <article class="featured-post">
            <?php the_post_thumbnail('thumbnail'); ?>
            <h2 class="featured-post__title">
              <?php echo get_the_title(); ?>
            </h2>
            <p class="featured-post__content">
              <?php echo wp_trim_words(get_the_content(), 18); ?>
            </p>
          </article>
      <?php
        }
      ?>
        </section>
      </div>
      
    </div>
  </div>
<?php
  }
?>
<?php get_footer(); ?>