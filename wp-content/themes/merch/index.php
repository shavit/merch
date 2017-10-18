<?php
  query_posts(array(
    'post_type' => 'product',
    'paged' => get_query_var('paged'),
    'showposts' => 8,
    'cat' => get_query_var('cat'),
  ));
?>
<?php get_template_part('header') ?>

  <header class="hero">
    <!-- TODO: Custom header for each category  -->
    <img src="<?= get_theme_file_uri(); ?>/assets/images/HeroGridStandard_S73FS-Unskilled-Worker-13_001_Default.jpg" alt="<?= the_title(); ?>" class="full-width" />
    <h1 class="headline"><?php single_cat_title(); ?></h1>
  </header>

  <div id="content" class="wrap">
    <?php if (have_posts()): ?>
      <div class="row products">
        <?php while (have_posts()): the_post();  ?>
            <?php get_template_part('content') ?>
        <?php endwhile; ?>
      </div>

      <nav class="pagination">
        <?= paginate_links(array(
          'prev_next' => true,
          'show_all' => false
        )); ?>
      </nav>

    <?php endif; ?>
  </div>

<?php get_template_part('footer') ?>
