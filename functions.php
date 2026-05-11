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
    'momentia-style',
    get_template_directory_uri() . '/assets/css/main.css',
    array(),
    '1.0.0'
  );

  wp_enqueue_script(
    'momentia-main',
    get_template_directory_uri() . '/assets/js/main.js',
    array(),
    '1.0.0',
    true
  );
}
add_action('wp_enqueue_scripts', 'momentia_enqueue_assets');

/**
 * OGP / Twitter Card
 */
function momentia_add_ogp_meta_tags() {
  if (is_admin()) {
    return;
  }

  $site_name = get_bloginfo('name');
  $default_description = '瞬間が集まり、物語になる。Momentiaは、ゲームを通じて生まれる一瞬を仲間と積み重ねていくアマチュアゲーミングチームです。';
  $ogp_image = get_template_directory_uri() . '/assets/images/momentia-ogp.png';

  if (is_singular()) {
    $title = get_the_title() . ' | ' . $site_name;

    $description = get_the_excerpt();
    if (!$description) {
      $description = wp_strip_all_tags(get_the_content());
    }

    $description = wp_trim_words($description, 80, '...');
    $type = is_single() ? 'article' : 'website';
    $url = get_permalink();
  } else {
    $title = $site_name . ' | Amateur Gaming Team';
    $description = $default_description;
    $type = 'website';
    $url = home_url(add_query_arg(array(), $_SERVER['REQUEST_URI']));
  }

  $title = esc_attr($title);
  $description = esc_attr($description);
  $url = esc_url($url);
  $ogp_image = esc_url($ogp_image);
  $site_name = esc_attr($site_name);
  ?>

  <meta property="og:title" content="<?php echo $title; ?>">
  <meta property="og:description" content="<?php echo $description; ?>">
  <meta property="og:type" content="<?php echo esc_attr($type); ?>">
  <meta property="og:url" content="<?php echo $url; ?>">
  <meta property="og:image" content="<?php echo $ogp_image; ?>">
  <meta property="og:site_name" content="<?php echo $site_name; ?>">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo $title; ?>">
  <meta name="twitter:description" content="<?php echo $description; ?>">
  <meta name="twitter:image" content="<?php echo $ogp_image; ?>">

  <?php
}
add_action('wp_head', 'momentia_add_ogp_meta_tags');