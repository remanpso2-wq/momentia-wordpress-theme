<footer class="site-footer">
  <div class="site-footer__inner">

    <div class="site-footer__brand">
      <a class="site-footer__logo" href="<?php echo esc_url(home_url('/')); ?>">
        MOMENTIA
      </a>
      <p>
        瞬間が集まり、物語になる場所。<br>
        Momentiaは、ゲームを通じて生まれる一瞬を仲間と積み重ねていくアマチュアゲーミングチームです。
      </p>
    </div>

    <div class="site-footer__nav">
      <div class="site-footer__column">
        <p class="site-footer__heading">SITE</p>
        <ul>
          <li><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a></li>
          <li><a href="<?php echo esc_url(home_url('/about/')); ?>">ABOUT</a></li>
          <li><a href="<?php echo esc_url(home_url('/activity/')); ?>">ACTIVITY</a></li>
          <li><a href="<?php echo esc_url(home_url('/member/')); ?>">MEMBER</a></li>
          <li><a href="<?php echo esc_url(home_url('/news/')); ?>">NEWS</a></li>
        </ul>
      </div>

      <div class="site-footer__column">
        <p class="site-footer__heading">CONTACT</p>
        <ul>
          <li>
            <a href="https://x.com/Momentia31" target="_blank" rel="noopener noreferrer">
              Official X
            </a>
          </li>
          <li>
            <a href="mailto:momentia31@gmail.com">
              Mail
            </a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/contact/')); ?>">
              Contact Page
            </a>
          </li>
        </ul>
      </div>
    </div>

  </div>

  <div class="site-footer__bottom">
    <p>&copy; <?php echo date('Y'); ?> Momentia. All Rights Reserved.</p>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>