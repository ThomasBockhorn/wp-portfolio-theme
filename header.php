<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo get_bloginfo('name') ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!--navbar template-->
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a id="home" class="navbar-brand" href="<?php echo site_url('/home') ?>"><?php echo get_bloginfo('name') ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <?php
      wp_nav_menu(array(
        'theme_location' => 'headerMenuLocation',
        'menu_class' => 'navbar-nav'
      ));
      ?>
  </div>
</nav>

