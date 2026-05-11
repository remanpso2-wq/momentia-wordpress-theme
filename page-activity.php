<?php get_header(); ?>

<main class="site-main activity-page">

  <section class="activity-hero">
    <div class="container">
      <p class="section-label">ACTIVITY</p>
      <h1 class="activity-hero__title">Momentiaの活動記録</h1>
      <p class="activity-hero__lead">
        大会参加、配信企画、イベント、加入報告。  
        Momentiaが積み重ねてきた一つひとつの瞬間を、活動記録として残していきます。
      </p>
    </div>
  </section>

  <section class="activity-category">
    <div class="container">
      <div class="activity-category__head">
        <p class="section-label">CATEGORIES</p>
        <h2>活動の種類</h2>
        <p>
          Momentiaでは、競技だけでなく、配信や企画、メンバーの参加報告などもチームの大切な活動として記録します。
        </p>
      </div>

      <div class="activity-category__grid">
        <article class="activity-category-card">
          <span class="activity-category-card__tag">TOURNAMENT</span>
          <h3>大会参加</h3>
          <p>
            チームメンバーが参加した大会や対戦イベントの記録を掲載します。
          </p>
        </article>

        <article class="activity-category-card">
          <span class="activity-category-card__tag">STREAM</span>
          <h3>配信企画</h3>
          <p>
            コラボ配信、参加型配信、チーム企画など、配信を通じた活動をまとめます。
          </p>
        </article>

        <article class="activity-category-card">
          <span class="activity-category-card__tag">EVENT</span>
          <h3>イベント</h3>
          <p>
            外部イベントやコミュニティ企画への参加、チーム内イベントを記録します。
          </p>
        </article>

        <article class="activity-category-card">
          <span class="activity-category-card__tag">JOIN</span>
          <h3>加入・お知らせ</h3>
          <p>
            新メンバー加入やチームとしてのお知らせを活動ログとして残します。
          </p>
        </article>
      </div>
    </div>
  </section>

  <section class="activity-list-section">
    <div class="container">
      <div class="activity-list-section__head">
        <p class="section-label">RECENT ACTIVITY</p>
        <h2>最近の活動</h2>
      </div>

      <div class="activity-list">
        <article class="activity-card">
          <div class="activity-card__meta">
            <span>2026.05</span>
            <span>JOIN</span>
          </div>
          <h3>Momentia公式サイト制作開始</h3>
          <p>
            アマチュアゲーミングチーム Momentia の活動紹介・メンバー紹介・NEWS導線を整えるため、公式サイト制作を開始しました。
          </p>
        </article>

        <article class="activity-card">
          <div class="activity-card__meta">
            <span>COMING SOON</span>
            <span>STREAM</span>
          </div>
          <h3>配信企画・コラボ活動</h3>
          <p>
            今後、メンバーの配信企画やコラボ活動をこのページに掲載していきます。
          </p>
        </article>

        <article class="activity-card">
          <div class="activity-card__meta">
            <span>COMING SOON</span>
            <span>TOURNAMENT</span>
          </div>
          <h3>大会・イベント参加記録</h3>
          <p>
            大会参加やイベント出演など、Momentiaとして積み重ねた活動を記録していきます。
          </p>
        </article>
      </div>
    </div>
  </section>

  <section class="activity-news-link">
    <div class="container">
      <div class="activity-news-link__box">
        <p class="section-label">NEWS</p>
        <h2>最新情報はNEWSへ</h2>
        <p>
          活動の詳細やお知らせは、NEWSページでも更新していきます。
          Momentiaの新しい動きは、こちらから確認できます。
        </p>
        <a class="button button--primary" href="<?php echo esc_url(home_url('/news/')); ?>">
          NEWSを見る
        </a>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>