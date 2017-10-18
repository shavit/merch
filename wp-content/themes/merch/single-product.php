<?php get_template_part('header') ?>

  <header class="hero">
    <!-- TODO: Custom header for each category  -->
    <img src="<?= get_theme_file_uri(); ?>/assets/images/HeroGridStandard_S73FS-Unskilled-Worker-13_001_Default.jpg" alt="<?= the_title(); ?>" class="full-width" />
    <h1 class="headline"><?php single_cat_title(); ?></h1>
  </header>

  <div id="content" class="wrap single">
    <?php if (have_posts()): ?>
      <?php while (have_posts()): the_post();  ?>

          <div class="product product-<?php the_ID(); ?> detail">
            <figure class="picture">
              <img src="<?= wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail')[0]; ?>"
                alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
            </figure>
          </div>

          <div class="product meta">
            <h1 class="name"><?php the_title(); ?></h1>
            <span class="price"><?= get_post_custom_values('price', get_the_ID())[0]; ?>&dollar;</span>
            <hr  />
            <!-- TODO: Replace those <br /> with product details -->
            <br />
            <br />
            <div class="actions">
              <button class="btn btn-primary">Add to my shopping bag</button>
            </div>
          </div>

      <?php endwhile; ?>
    <?php endif; ?>
  </div>

<?php get_template_part('footer') ?>
