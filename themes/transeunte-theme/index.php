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
  <section class="blog-posts">
<?php        
    while(have_posts()) {
      the_post(); 
?>
    <article class="post">
      <h2 class="post__title"><?php echo get_the_title(); ?></h2>
      <p class="post__content"><?php echo get_the_content(); ?></p>
    </article>
<?php
    }
?>
  </section>
<?php
  }
?>
<?php get_footer(); ?>