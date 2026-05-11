<?php

function momentia_theme_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');

  register_nav_menus(array(
    'global-nav' => 'Global Navigation',
  ));
}
add_action('after_setup_theme', 'momentia_theme_setup');

function momentia_enqueue_assets() {
  wp_enqueue_style(
    'momentia-main-style',
    get_template_directory_uri() . '/assets/css/main.css',
    array(),
    '1.0.0'
  );

  wp_enqueue_script(
    'momentia-main-script',
    get_template_directory_uri() . '/assets/js/main.js',
    array(),
    '1.0.0',
    true
  );
}
add_action('wp_enqueue_scripts', 'momentia_enqueue_assets');