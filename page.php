<?php get_header(); ?>

<main class="site-main">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article class="page-content">
        <div class="container">
          <p class="section-label">PAGE</p>
          <h1 class="page-title"><?php the_title(); ?></h1>
          <div class="page-body">
            <?php the_content(); ?>
          </div>
        </div>
      </article>
    <?php endwhile; ?>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
