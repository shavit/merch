<?php get_template_part('header') ?>

  <header class="hero">
    <!-- TODO: Custom header for each category  -->
    <img src="<?= get_theme_file_uri(); ?>/assets/images/HeroGridStandard_Decor-Groupage2_001_Default.jpg" alt="<?= the_title(); ?>" class="full-width" />
    <h1 class="headline"><?php the_title(); ?></h1>
  </header>

  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <div id="content">
        <div class="wrap">
          <article class="page page-<?php the_ID(); ?>">
            <div class="body">
              <?php the_content(); ?>
            </div>
          </article>
        </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>

<?php get_template_part('footer') ?>
