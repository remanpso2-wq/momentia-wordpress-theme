<?php get_header(); ?>

<main class="site-main front-page">

  <section class="front-hero">
    <div class="container front-hero__inner">
      <p class="front-hero__label">AMATEUR GAMING TEAM</p>

      <h1 class="front-hero__title front-hero__title--logo">
        <img
          src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/momentia-logo.png'); ?>"
          alt="Momentia"
          class="front-hero__logo"
        >
      </h1>

      <p class="front-hero__copy">瞬間が集まり、物語になる。</p>
      <p class="front-hero__text">
        ゲームを通じて生まれる笑い、悔しさ、熱狂、挑戦。
        Momentiaは、その一瞬一瞬を仲間と積み重ねていくアマチュアゲーミングチームです。
      </p>

      <div class="front-hero__actions">
        <a class="button button--primary" href="<?php echo esc_url(home_url('/about/')); ?>">
          ABOUT
        </a>
        <a class="button button--outline" href="<?php echo esc_url(home_url('/activity/')); ?>">
          ACTIVITY
        </a>
      </div>
    </div>
  </section>

  <section class="front-concept">
    <div class="container front-grid">
      <div class="front-section-head">
        <p class="section-label">CONCEPT</p>
        <h2>一瞬を、チームの物語へ。</h2>
      </div>

      <div class="front-section-body">
        <p>
          Momentiaは、「Moment（瞬間）」と、場所や状態、集まりを表す語尾「-ia」を組み合わせた名前です。
        </p>
        <p>
          仲間と笑った今、悔しがった今、盛り上がった今。
          その“今”を積み重ね、やがて大きな物語にしていく場所。
          それがMomentiaです。
        </p>

        <a class="text-link" href="<?php echo esc_url(home_url('/about/')); ?>">
          ABOUTを見る
        </a>
      </div>
    </div>
  </section>

  <section class="front-links">
    <div class="container">
      <div class="front-links__head">
        <p class="section-label">CONTENTS</p>
        <h2>Momentiaを知る</h2>
      </div>

      <div class="front-link-cards">
        <a class="front-link-card" href="<?php echo esc_url(home_url('/about/')); ?>">
          <span class="front-link-card__label">ABOUT</span>
          <h3>チーム理念</h3>
          <p>
            Momentiaの名前に込めた意味、活動方針、大切にしている価値観を紹介します。
          </p>
        </a>

        <a class="front-link-card" href="<?php echo esc_url(home_url('/activity/')); ?>">
          <span class="front-link-card__label">ACTIVITY</span>
          <h3>活動記録</h3>
          <p>
            大会参加、配信企画、イベント、加入報告など、Momentiaの活動を記録します。
          </p>
        </a>

        <a class="front-link-card" href="<?php echo esc_url(home_url('/news/')); ?>">
          <span class="front-link-card__label">NEWS</span>
          <h3>お知らせ</h3>
          <p>
            チーム活動、募集情報、イベント参加、配信企画などの最新情報を掲載します。
          </p>
        </a>

        <a class="front-link-card" href="<?php echo esc_url(home_url('/contact/')); ?>">
          <span class="front-link-card__label">CONTACT</span>
          <h3>お問い合わせ</h3>
          <p>
            コラボ・企画相談、チーム活動に関するお問い合わせはこちらからご確認ください。
          </p>
        </a>
      </div>
    </div>
  </section>

  <section class="front-news">
    <div class="container">
      <div class="front-news__head">
        <div>
          <p class="section-label">LATEST NEWS</p>
          <h2>最新のお知らせ</h2>
        </div>

        <a class="text-link" href="<?php echo esc_url(home_url('/news/')); ?>">
          NEWS一覧へ
        </a>
      </div>

      <?php
      $front_news_query = new WP_Query(array(
        'post_type'      => 'post',
        'posts_per_page' => 3,
      ));
      ?>

      <?php if ($front_news_query->have_posts()) : ?>
        <div class="front-news-list">
          <?php while ($front_news_query->have_posts()) : $front_news_query->the_post(); ?>
            <article class="front-news-card">
              <a href="<?php the_permalink(); ?>">
                <div class="front-news-card__meta">
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

                <h3><?php the_title(); ?></h3>
                <p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 60, '...')); ?></p>
              </a>
            </article>
          <?php endwhile; ?>
        </div>
        <?php wp_reset_postdata(); ?>
      <?php else : ?>
        <div class="front-news-empty">
          <p>現在、お知らせはありません。</p>
        </div>
      <?php endif; ?>
    </div>
  </section>

  <section class="front-contact">
    <div class="container">
      <div class="front-contact__box">
        <p class="section-label">CONTACT</p>
        <h2>Momentiaへのお問い合わせ</h2>
        <p>
          コラボ・企画相談、チーム活動に関するお問い合わせは、
          公式Xまたはメールアドレスよりご連絡ください。
        </p>

        <div class="front-contact__actions">
          <a class="button button--primary" href="https://x.com/Momentia31" target="_blank" rel="noopener noreferrer">
            Official X
          </a>
          <a class="button button--outline" href="<?php echo esc_url(home_url('/contact/')); ?>">
            CONTACT
          </a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
