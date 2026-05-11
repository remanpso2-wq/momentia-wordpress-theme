<?php get_header(); ?>

<main class="site-main news-page">

  <section class="news-hero">
    <div class="container">
      <p class="section-label">NEWS</p>
      <h1 class="news-hero__title">Momentia News</h1>
      <p class="news-hero__lead">
        チーム活動、メンバー募集、イベント参加、配信企画など、
        Momentiaの最新情報をお届けします。
      </p>
    </div>
  </section>

  <section class="news-section">
    <div class="container">

      <?php if (have_posts()) : ?>

        <div class="news-grid">
          <?php while (have_posts()) : the_post(); ?>
            <article class="news-item">
              <a class="news-item__link" href="<?php the_permalink(); ?>">
                <div class="news-item__meta">
                  <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                    <?php echo esc_html(get_the_date('Y.m.d')); ?>
                  </time>

                  <?php
                  $categories = get_the_category();
                  if (!empty($categories)) :
                  ?>
                    <span>
                      <?php echo esc_html($categories[0]->name); ?>
                    </span>
                  <?php else : ?>
                    <span>NEWS</span>
                  <?php endif; ?>
                </div>

                <h2 class="news-item__title">
                  <?php the_title(); ?>
                </h2>

                <p class="news-item__excerpt">
                  <?php echo esc_html(wp_trim_words(get_the_excerpt(), 80, '...')); ?>
                </p>

                <span class="news-item__more">READ MORE</span>
              </a>
            </article>
          <?php endwhile; ?>
        </div>

        <div class="news-pagination">
          <?php
          the_posts_pagination(array(
            'mid_size'  => 1,
            'prev_text' => 'PREV',
            'next_text' => 'NEXT',
          ));
          ?>
        </div>

      <?php else : ?>

        <div class="news-empty">
          <p class="section-label">NO NEWS</p>
          <h2>現在、お知らせはありません。</h2>
          <p>
            Momentiaの活動情報や募集告知は、今後こちらで更新していきます。
          </p>
        </div>

      <?php endif; ?>

    </div>
  </section>

</main>

<?php get_footer(); ?>