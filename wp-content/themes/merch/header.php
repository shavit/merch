<html>
  <html <?php language_attributes(); ?>>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
  	<link rel="profile" href="http://gmpg.org/xfn/11">
  	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
  </head>
  <body>
    <header id="header">
      <div class="wrap">
        <a href="/" class="logo">merch</a>
        <?php wp_nav_menu(array(
          'theme_location' => 'top',
          'menu_class' => 'menu top',
          'container' => 'nav',
          'container-id' => 'nav-top'
        )); ?>
      </div>
    </header>
