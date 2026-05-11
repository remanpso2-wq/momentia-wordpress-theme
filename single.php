<?php get_header(); ?>

<main class="site-main single-news-page">

  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

      <article class="single-news">

        <header class="single-news-hero">
          <div class="container">
            <div class="single-news__meta">
              <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                <?php echo esc_html(get_the_date('Y.m.d')); ?>
              </time>

              <?php
              $categories = get_the_category();
              if (!empty($categories)) :
              ?>
                <span><?php echo esc_html($categories[0]->name); ?></span>
              <?php else : ?>
                <span>NEWS</span>
              <?php endif; ?>
            </div>

            <h1 class="single-news__title"><?php the_title(); ?></h1>
          </div>
        </header>

        <section class="single-news-body-section">
          <div class="container single-news-container">

            <?php if (has_post_thumbnail()) : ?>
              <div class="single-news__thumbnail">
                <?php the_post_thumbnail('large'); ?>
              </div>
            <?php endif; ?>

            <div class="single-news__content">
              <?php the_content(); ?>
            </div>

            <div class="single-news__footer">
              <a class="button button--outline" href="<?php echo esc_url(home_url('/news/')); ?>">
                NEWS一覧へ戻る
              </a>
            </div>

          </div>
        </section>

      </article>

    <?php endwhile; ?>
  <?php endif; ?>

</main>

<?php get_footer(); ?>