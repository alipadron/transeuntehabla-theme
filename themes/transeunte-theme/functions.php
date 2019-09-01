<?php

  function transeunte_files() {
    wp_enqueue_script(
      'transeunte_main_js',
      get_theme_file_uri('assets/js/scripts-bundled.js'),
      NULL,
      microtime(),
      true
    );
    wp_enqueue_style(
      'font-awesome',
      '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'
    );
    wp_enqueue_style(
      'transeunte_main_styles',
      get_stylesheet_uri(),
      NULL,
      microtime()
    );
  }
  add_action('wp_enqueue_scripts', 'transeunte_files');

  function transeunte_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    // Post Landscape Sizes
    add_image_size('postLandscapeExtraSmall', 448, 250, true);
    add_image_size('postLandscapeSmall', 672, 350, true);
    add_image_size('postLandscapeMedium', 880, 350, true);
    add_image_size('postLandscapeLarge', 1096, 425, true);

    // Portrait Portrait Sizes
    add_image_size('postPortraitLarge', 150, 300, true);
  }
  add_action('after_setup_theme', 'transeunte_features');
  