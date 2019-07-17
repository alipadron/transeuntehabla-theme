<?php

  function transeunte_files() {
    /* wp_enqueue_script(
      'WOW',
      '//cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js'
    );
    wp_enqueue_script(
      'jQuery',
      '//code.jquery.com/jquery-3.3.1.min.js'
    );
    wp_enqueue_script(
      'popper',
      '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'
    );
    wp_enqueue_script(
      'bootstrap-js',
      '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'
    ); */
    wp_enqueue_script(
      'transeunte_main_js',
      get_theme_file_uri('assets/js/scripts-bundled.js'),
      NULL,
      microtime(),
      true
    );
    /* wp_enqueue_style(
      'bootstrap-css',
      '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'
    );
    wp_enqueue_style(
      'font-awesome',
      '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.1/css/all.min.css'
    );
    wp_enqueue_style(
      'animate-css',
      '//cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css'
    ); */
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
  }
  add_action('after_setup_theme', 'transeunte_features');
  