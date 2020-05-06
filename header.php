<!DOCTYPE html>
<html>
  <head>
    <meta Http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
  </head>
  <body>
    <?php body_class(); ?>
    <div class="nav">
      <nav class="main-navigation">
        <? wp_nav_menu(array('menu' => 'top-menu', 'menu_class' => 'top-menu')); ?>
      </nav>
    </div>
    <div class="logo"><a href="/"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="Whitesquare logo"></a></div>
    <hr class="hr-header">
     <div class="wrapper">
