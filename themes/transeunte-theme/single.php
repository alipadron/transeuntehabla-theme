<?php
get_header('blog');
transeunte_set_post_view();
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
        <a href="<?php echo site_url('/blog'); ?>">Ir al blog</a>
      </p>
    </div>
    
    <div class="row row--gutters-large">
      <!-- Contenido del post -->
      <div class="row__large-10">
        <section class="post-content">
          <div class="social-icons social-icons--blog-post social-icons--background-red">
            <?php
              $url = get_the_permalink();
              $title = get_the_title();
              $summary = has_excerpt() ? wp_trim_words(get_the_content(), 18) : get_the_excerpt();
              $linkedInParameters = http_build_query(array(
                'mini' => true,
                'url' => $url,
                'title' => $title,
                'summary' => $summary,
                'source' => site_url()
              ));
              $twitterParameters = http_build_query(array(
                'url' => $url,
                'text' => $title,
                'hashtags' => 'transeunte,transeuntehabla'
              ));
              $whatsappParameters = http_build_query(array(
                'text' => $url
              ));
              $facebookParameters = http_build_query(array(
                'u' => $url
              ));
              $useragent = $_SERVER['HTTP_USER_AGENT'];
              $userAgentIsMobile = preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))              
            ?>
            <p class="social-icons__text social-icons__text--display-always social-icons__text--white">Comparte</p>
            <a 
              href="http://www.linkedin.com/shareArticle?<?php echo $linkedInParameters; ?>" target="_blank">
              <i class="fa fa-linkedin"></i>
            </a>
            <a href="https://www.facebook.com/sharer.php?<?php echo $facebookParameters; ?>" target="_blank">
              <i class="fa fa-facebook"></i>
            </a>
            <a href="https://twitter.com/intent/tweet?<?php echo $twitterParameters; ?>" target="_blank">
              <i class="fa fa-twitter"></i>
            </a>
            <?php
              if ($userAgentIsMobile) {
            ?>
              <a href="whatsapp://send?<?php echo $whatsappParameters; ?>" target="_blank">
                <i class="fa fa-whatsapp"></i>
              </a>
            <?php
              }
            ?>
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

          <div class="post-content__author">
            <div class="row row--gutters-large">
              <div class="row__medium-4">
                <img
                  class="post-content__author__image"
                  src="
                  <?php
                    echo get_avatar_url(get_the_author_meta('ID'), array(
                      'size' => 160
                    ));
                  ?>"
                  alt="María Laura Padrón"
                  title="María Laura Padrón"
                >  
              </div>
              <div class="row__medium-8">
                <div class="post-content__author__text">
                  <h3 class="post-content__author__text__name"><?php echo get_the_author(); ?></h3>
                  <p class="post-content__author__text__bio">
                    <?php echo get_the_author_description(); ?>
                  </p>
                  
                  <div class="post-content__author__text__social-icons">
                  <?php
                    $authorSocialLinks = array(
                      'facebook' => get_the_author_meta('facebook'),
                      'instagram' => get_the_author_meta('instagram'),
                      'linkedin' => get_the_author_meta('linkedin'),
                      'pinterest' => get_the_author_meta('pinterest'),
                      'soundcloud' => get_the_author_meta('soundcloud'),
                      'tumblr' => get_the_author_meta('tumblr'),
                      'twitter' => 'https://twitter.com/' . get_the_author_meta('twitter'),
                      'youtube' => get_the_author_meta('youtube')
                    );
                    foreach($authorSocialLinks as $socialNetwork => $url) {
                      if ($url) {
                  ?>
                    <a href="<?php echo $url; ?>"><i class="fa fa-<?php echo $socialNetwork; ?>"></i></a>
                  <?php
                      }
                    }
                    $twitterUrl = get_the_author_meta('twitter');
                  ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <!-- Contenido del post -->
      <hr class="separator separator--visible-until-large">
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
<!-- Posts -->

<div class="social-icons social-icons--blog-home social-icons--background-dark-gray social-icons--light-gray">
  <p class="social-icons__text">Síguenos</p>
  <a href="https://www.instagram.com/transeuntehabla/"><i class="fa fa-instagram"></i></a>
  <a href="https://www.linkedin.com/company/transeuntehabla"><i class="fa fa-linkedin"></i></a>
  <a href="https://www.facebook.com/transeuntehabla"><i class="fa fa-facebook"></i></a>
</div>

</main>


<?php get_footer(); ?>