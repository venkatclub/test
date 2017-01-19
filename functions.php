<?php

//  ************* setup *************
add_theme_support('menus');

add_theme_support('post-formats', array('aside', 'gallery', 'chat'));


// *************  includes  *************
include(get_template_directory().'/includes/frontend.php');
include(get_template_directory().'/includes/setup.php');
include(get_template_directory().'/includes/adminside.php');
include(get_template_directory().'/includes/admin/menu.php');
include(get_template_directory().'/includes/admin/shortcode.php');


// ************* actions and filters - hooks *************

add_action('wp_enqueue_scripts', 'add_resources');
add_action('wp_enqueue_scripts', 'register_css_files');
add_action('init','reg_nav_menu');
add_action( 'widgets_init', 'register_widget_area' );
add_action('after_setup_theme', 'reg_feature_image');
add_action('customize_register','admin_customize_reg');
// add_action('customize_register', 'learningWordPress_customize_register');
add_action('wp_head','admin_custom_css');
add_action('customize_register', 'front_page_box_admin');

add_action('admin_menu', 'test_admin_menu');





add_filter('excerpt_length', 'excerpt_count');



// *************  shortcodes  *************

add_shortcode('scone', 'second_scone_sc');
add_shortcode('sctwo', 'second_sctwo_sc');
add_shortcode('scthree', 'second_scthree_sc');
add_shortcode('scfour', 'second_scfour_sc');
add_shortcode('scfive', 'second_scfive_sc');

















 ?>
