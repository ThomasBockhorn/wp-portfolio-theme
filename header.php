<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-133170645-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-133170645-1');
</script>

<!--adsence-->
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-4162220607269796",
    enable_page_level_ads: true
  });
</script>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo get_bloginfo('name') ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!--navbar template-->
<nav class="navbar navbar-expand-lg navbar-light" id="nav">
  <a id="home" class="navbar-brand" href="<?php echo site_url('/') ?>"><img src="<?php echo get_template_directory_uri() . '/img/Color-logo-with-background.png' ?>" alt="logo" width="300" height="50"></a>
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

