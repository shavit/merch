<div class="product product-<?php the_ID(); ?>">
  <div class="thumbnail">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
  </div>
  <div class="caption">
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    <a href="<?php the_permalink(); ?>">
      <span class="price"><?= get_post_custom_values('price', get_the_ID())[0]; ?>&dollar;</span>
    </a>
  </div>
</div>
