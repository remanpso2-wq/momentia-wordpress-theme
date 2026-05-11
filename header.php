<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="site-loader" aria-hidden="true">
  <div class="site-loader__bg"></div>
  <div class="site-loader__grid"></div>
  <div class="site-loader__particles">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>

  <div class="site-loader__content">
    <img
      src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/momentia-logo.png'); ?>"
      alt="Momentia"
      class="site-loader__logo"
    >
    <p class="site-loader__copy">瞬間が集まり、物語になる。</p>
    <div class="site-loader__bar">
      <span></span>
    </div>
    <p class="site-loader__text">LOADING MOMENTIA</p>
  </div>
</div>

<header class="site-header">
  <div class="site-header__inner">

    <a class="site-logo" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Momentia トップページへ">
      MOMENTIA
    </a>

    <button
      class="menu-toggle"
      type="button"
      aria-label="メニューを開く"
      aria-controls="site-nav"
      aria-expanded="false"
    >
      <span class="menu-toggle__text">MENU</span>
      <span class="menu-toggle__icon" aria-hidden="true">
        <span></span>
        <span></span>
      </span>
    </button>

    <nav id="site-nav" class="site-nav" aria-label="Global Navigation">
      <?php
      wp_nav_menu(array(
        'theme_location' => 'global-nav',
        'container'      => false,
        'fallback_cb'    => false,
        'menu_class'     => 'site-nav__list',
      ));
      ?>
    </nav>

  </div>
</header>