<?php get_header(); ?>

<main class="site-main">
  <section class="section">
    <div class="container">
      <p class="section-label">NEWS</p>
      <h1 class="page-title">News</h1>

      <?php if (have_posts()) : ?>
        <div class="news-list">
          <?php while (have_posts()) : the_post(); ?>
            <article class="news-card">
              <p class="news-card__date"><?php echo get_the_date(); ?></p>
              <h2 class="news-card__title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h2>
              <p class="news-card__excerpt"><?php echo wp_trim_words(get_the_excerpt(), 60, '...'); ?></p>
            </article>
          <?php endwhile; ?>
        </div>
      <?php else : ?>
        <p>現在、お知らせはありません。</p>
      <?php endif; ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>
