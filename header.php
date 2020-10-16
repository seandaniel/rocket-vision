<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- og meta tags -->
  <meta property="og:title" content="Rocket Vision">
  <!-- get_site_url/know host name -->
  <!-- <meta property="og:image" content="https://seandaniel.github.io/git-check/metaImg.png">
  <meta property="og:url" content="https://seandaniel.github.io/git-check/"> -->

  <!-- Twitter meta tags -->
  <meta name="twitter:card" content="summary">
  <meta property="twitter:title" content="Rocket Vision">
<!-- 
  <meta property="twitter:image" content="https://seandaniel.github.io/git-check/favicon.png">
  <meta property="twitter:url" content="https://seandaniel.github.io/git-check/" -->
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <!-- google fonts  -->
  <link href="https://fonts.googleapis.com/css2?family=Barlow&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet"> 
  <!-- css -->

  <link rel="stylesheet" type="text/css" href="<?php echo get_site_url() . "/wp-content/themes/starter-theme/styles/styles.css"?>" />
  <?php wp_head(); ?>
</head>

<!-- mobile navigation -->
<div class="mobile-nav">
  <button class="mobile-toggle-close"><i class="fas fa-hamburger"></i></button>
  <?php wp_nav_menu( array(
    'theme_location' => 'primary-mobile',
    'container_class' => 'primary-mobile-menu'
  )); ?>
</div>

<body <?php body_class(); ?>>
<header>
  <div class="main-nav">
    <div class="wrapper flex">
      <?php wp_nav_menu( array(
        'theme_location' => 'primary',
        'container_class' => 'primary-menu'
      )); ?>
      <button class="mobile-toggle-open"><i class="fas fa-hamburger"></i></button>
    </div>
  </div> 
</header>

<main id="maincontent">
