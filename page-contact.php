<?php get_header(); ?>

<main class="site-main contact-page">

  <section class="contact-hero">
    <div class="container">
      <p class="section-label">CONTACT</p>
      <h1 class="contact-hero__title">Momentiaへのお問い合わせ</h1>
      <p class="contact-hero__lead">
        コラボ・企画相談、チーム活動に関するお問い合わせは、
        公式Xまたはメールアドレスよりご連絡ください。
      </p>
    </div>
  </section>

  <section class="contact-section">
    <div class="container contact-grid">

      <a
        class="contact-card contact-card--x"
        href="https://x.com/Momentia31"
        target="_blank"
        rel="noopener noreferrer"
      >
        <div class="contact-card__visual">
          <span class="contact-card__mark">X</span>
        </div>

        <div class="contact-card__content">
          <p class="section-label">OFFICIAL X</p>
          <h2>@Momentia31</h2>
          <p>
            Momentiaの最新情報、活動報告、NEWS更新、募集告知などは公式Xでも発信していきます。
          </p>
          <span class="contact-card__button">公式Xを見る</span>
        </div>
      </a>

      <article class="contact-card contact-card--mail">
        <p class="section-label">MAIL</p>
        <h2>メールでのお問い合わせ</h2>
        <p>
          コラボ・企画相談、チーム活動に関する正式なご連絡は、
          下記メールアドレスよりお願いいたします。
        </p>

        <a class="contact-mail-link" href="mailto:momentia31@gmail.com">
          momentia31@gmail.com
        </a>

        <div class="contact-card__notes">
          <h3>ご連絡時にあると助かる情報</h3>
          <ul>
            <li>お名前・活動名</li>
            <li>ご連絡内容</li>
            <li>関連するSNS・配信・活動URL</li>
            <li>返信先の連絡先</li>
          </ul>
        </div>
      </article>

    </div>
  </section>

  <section class="contact-info">
    <div class="container">
      <div class="contact-info__box">
        <p class="section-label">INFORMATION</p>
        <h2>募集・応募について</h2>
        <p>
          Momentiaでメンバー募集や企画参加募集を行う場合は、NEWSページにてお知らせします。
          応募フォームを使用する場合も、該当するNEWS記事内で案内します。
        </p>
        <a class="button button--primary" href="<?php echo esc_url(home_url('/news/')); ?>">
          NEWSを見る
        </a>
      </div>
    </div>
  </section>

  <section class="contact-flow">
    <div class="container">
      <p class="section-label">FLOW</p>
      <h2 class="contact-flow__title">お問い合わせの流れ</h2>

      <div class="flow-list">
        <article class="flow-item">
          <span class="flow-item__number">01</span>
          <h3>公式Xまたはメールで連絡</h3>
          <p>
            内容に応じて、公式Xまたはメールアドレス宛にご連絡ください。
          </p>
        </article>

        <article class="flow-item">
          <span class="flow-item__number">02</span>
          <h3>内容確認</h3>
          <p>
            いただいた内容を確認し、必要に応じて詳細をお伺いします。
          </p>
        </article>

        <article class="flow-item">
          <span class="flow-item__number">03</span>
          <h3>返信・相談</h3>
          <p>
            内容に応じて、返信・相談・調整を行います。
          </p>
        </article>
      </div>
    </div>
  </section>

  <section class="contact-notice">
    <div class="container">
      <div class="contact-notice__box">
        <p class="section-label">NOTICE</p>
        <h2>ご連絡前にご確認ください</h2>
        <p>
          Momentiaはアマチュアゲーミングチームです。
          すべてのご連絡に必ず返信できるとは限りませんが、内容を確認のうえ、必要に応じて対応いたします。
        </p>
        <p>
          迷惑行為、誹謗中傷、勧誘目的、その他チーム活動と関係のない内容については、
          返信を控えさせていただく場合があります。
        </p>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>