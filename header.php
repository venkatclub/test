<!DOCTYPE html>
<html>
  <head>
    <!-- <meta charset="utf-8"> -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo('title'); ?> </title>
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?> >

      <header>
        <h1> <a href="<?php echo home_url(); ?>"> <?php bloginfo('name'); ?></a></h1>
        <h5><?php bloginfo('description') ?></h5>

          <div class="search-form">
            <?php get_search_form(); ?>
          </div>

        <nav class="header-nav">
          <?php wp_nav_menu( array(
            'theme_location' => 'primary'
          )); ?>
        </nav>
      </header>
