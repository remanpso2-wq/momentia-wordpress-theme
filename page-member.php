<?php get_header(); ?>

<main class="site-main member-page">

  <section class="member-hero">
    <div class="container">
      <p class="section-label">MEMBER</p>
      <h1 class="member-hero__title">Momentia Members</h1>
      <p class="member-hero__lead">
        Momentiaを形づくるメンバーたち。  
        それぞれのゲーム、配信、挑戦の瞬間を、ここから紹介していきます。
      </p>
    </div>
  </section>

  <section class="member-coming">
    <div class="container">
      <div class="member-coming__box">
        <p class="section-label">COMING SOON</p>
        <h2>メンバー情報は順次公開予定です。</h2>
        <p>
          所属メンバーのプロフィール、主な活動ゲーム、SNS・配信リンク、
          おすすめ動画やアーカイブなどは、準備が整い次第掲載していきます。
        </p>
        <p>
          Momentiaでは、メンバー一人ひとりの活動スタイルや個性が伝わるページを目指しています。
        </p>

        <div class="member-coming__actions">
          <a class="button button--primary" href="<?php echo esc_url(home_url('/activity/')); ?>">
            ACTIVITYを見る
          </a>
          <a class="button button--outline" href="<?php echo esc_url(home_url('/news/')); ?>">
            NEWSを見る
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="member-plan">
    <div class="container">
      <p class="section-label">PROFILE PLAN</p>
      <h2 class="member-plan__title">今後掲載予定の情報</h2>

      <div class="member-plan-cards">
        <article class="member-plan-card">
          <span class="member-plan-card__number">01</span>
          <h3>Profile</h3>
          <p>
            活動名、担当ゲーム、役割、活動スタイルなどを掲載予定です。
          </p>
        </article>

        <article class="member-plan-card">
          <span class="member-plan-card__number">02</span>
          <h3>Links</h3>
          <p>
            X、YouTube、Twitchなど、各メンバーの活動リンクをまとめます。
          </p>
        </article>

        <article class="member-plan-card">
          <span class="member-plan-card__number">03</span>
          <h3>Archive / Video</h3>
          <p>
            希望がある場合は、代表的な配信アーカイブや動画も掲載予定です。
          </p>
        </article>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>