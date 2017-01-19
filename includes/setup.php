<?php

function reg_nav_menu(){
  register_nav_menus(array(
    'primary' => __('primary menu'),
    'footer' => __('secondary menu'),
    'thirdmenu' => __('third menu')
  ));
  // register_nav_menu('primary' => __('Primary Menu') );
}

function register_widget_area(){
  register_sidebar( array(
    'name'          => __( 'Sidebar', 'twentysixteen' ),
    'id'            => 'sidebar-1',
    'description'   => __( 'Add widgets here to appear in your sidebar.', 'test theme' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
}


function test_get_top_an(){
  global $post;

  if($post->post_parent){
    $an = array_reverse(get_post_ancestors($post->ID));
    return $an[0];
  }
  return $post->ID;
}

function excerpt_count(){
  return 25;
}

/* register the featured image */
function reg_feature_image(){
  add_theme_support('post-thumbnails');
  add_image_size('for-index',220,180, true);
  add_image_size('for-single', 950, 390, array('left', 'top'));
}


















 ?>
