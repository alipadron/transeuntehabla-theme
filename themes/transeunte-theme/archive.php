<?php
get_header('blog');
?>
<main class="main-blog">
<?php get_template_part('template-parts/content', 'banner'); ?>
<div class="archive">
  <div class="wrapper wrapper--no-padding-until-large">
    <div class="archive__title-container">
      <h1 class="archive__title-container__text"><?php echo explode(' ', get_the_archive_title())[1]; ?></h1>
      <div class="archive__title-container__lines">
        <div class="archive__title-container__lines__left"></div>
        <div class="archive__title-container__lines__center"></div>
        <div class="archive__title-container__lines__right"></div>
      </div>
    </div>
    <?php
    
      $postCounter = 0;
      if (have_posts()) {
        echo '<div class="blog-posts__others">';
        while(have_posts()) {
          the_post();
          if ($postCounter % 3 === 0) {
            echo '<div class="row row--gutters-large row--equal-height-at-large">';
          }
          get_template_part('template-parts/content', 'blog-post');
          if (($postCounter + 1) % 3 === 0 || $postCounter + 1 === $wp_query->post_count) {
            echo '</div>';
          }
          $postCounter++;
        }
        echo '</div>';
      }
      global $wp_query;
      if ($wp_query->max_num_pages > 1) {
    ?>
        <div class="archive__pagination">
          <div class="archive__pagination__line"></div>
          <div class="archive__pagination__links">
            <?php 
                echo paginate_links(array(
                  'prev_text' => __( '&laquo;' ),
                  'next_text' => __( '&raquo;' )
                  )
                );
              ?>
          
          </div>
        </div>
    <?php
      }
    ?>
    
  </div>
</div>


<?php get_template_part('template-parts/content', 'social-icons'); ?>
</main>


<?php get_footer(); ?>