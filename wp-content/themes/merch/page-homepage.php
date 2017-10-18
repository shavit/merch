<?php
  /**
  * Template Name: Homepage
  *
  * @package merch
  * @since merch 1.0
  */
?>
<?php get_template_part('header'); ?>
<header class="hero">
  <img src="<?= get_header_image(); ?>" alt="<?= the_title(); ?>" class="full-width" />
  <h1 class="headline"><?php the_title(); ?></h1>
  <h2 class="tagline"><?php bloginfo('description'); ?></h2>
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

<?php get_template_part('footer'); ?>
