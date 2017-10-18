  <footer id="footer">
    <div class="wrap">
      <div class="row">

        <div class="four columns">
          <?php if (has_nav_menu('footer-services')): ?>
            <h4 class="title">Services</h4>
            <?php wp_nav_menu(array(
              'theme_location' => 'footer-services',
              'menu_class' => 'menu top',
              'container' => 'nav',
              'container-id' => 'nav-top'
            )); ?>
          <?php endif; ?>
        </div>

        <div class="four columns">
          <?php if (has_nav_menu('footer-about')): ?>
            <h4 class="title">About</h4>
            <?php wp_nav_menu(array(
              'theme_location' => 'footer-about',
              'menu_class' => 'menu top',
              'container' => 'nav',
              'container-id' => 'nav-top'
            )); ?>
          <?php endif; ?>
        </div>

        <div class="four columns">
          <?php if (has_nav_menu('footer-contact')): ?>
            <h4 class="title">Contact</h4>
            <?php wp_nav_menu(array(
              'theme_location' => 'footer-contact',
              'menu_class' => 'menu top',
              'container' => 'nav',
              'container-id' => 'nav-top'
            )); ?>
          <?php endif; ?>
        </div>

        <div class="four columns">
          <?php if (has_nav_menu('footer-social')): ?>
            <h4 class="title">Find us on</h4>
            <?php wp_nav_menu(array(
              'theme_location' => 'footer-social',
              'menu_class' => 'menu top',
              'container' => 'nav',
              'container-id' => 'nav-top'
            )); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>
