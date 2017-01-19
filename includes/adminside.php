<?php

function admin_customize_reg($wp_customize){

  $wp_customize->add_section('test_standard_color', array(
     'title' => __('standard colors', 'test'),
     'priority'=> 30,
  ));


  $wp_customize->add_setting('test_link_color', array(
    'default' => '#4c4cec',
     'transport' => 'refresh',
  ));
  $wp_customize->add_setting('test_menu_color', array(
    'default' => '#98fb98',
     'transport' => 'refresh',
  ));
  $wp_customize->add_setting('test_menu_hover_color', array(
    'default' => '#008000',
     'transport' => 'refresh',
  ));


   $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'test_link_color_control', array(
     'label'=> __('link color', 'test'),
     'section' => 'test_standard_color',
     'settings' => 'test_link_color',
   )));
   $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'test_menu_color_control', array(
     'label'=> __('menu color', 'test'),
     'section' => 'test_standard_color',
     'settings' => 'test_menu_color',
   )));
   $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'test_menu_hover_control', array(
     'label'=> __('menu hover color', 'test'),
     'section' => 'test_standard_color',
     'settings' => 'test_menu_hover_color',
   )));

}

/*  adding sytle form admin customize .. */

function admin_custom_css(){ ?>
  <style media="screen">
  .header-nav ul,
  .footer-nav ul {
    background-color: <?php echo get_theme_mod('test_menu_color') ?>;
  }

  .header-nav a:hover,
  .footer-nav a:hover {
    background-color: <?php echo get_theme_mod('test_menu_hover_color') ?>;
  }
  a{
    color: <?php echo get_theme_mod('test_link_color') ?>;
  }

  </style>




<?php } ?>


<!-- front page box  -->
<?php
function front_page_box_admin($wp_customize){
  $wp_customize-> add_section('test_front_page_section', array(
    'title' => __('front page box', 'test'),
    'priority'=> 50,
  ));

  $wp_customize-> add_setting('test_front_box_display', array(
    'default'=> 'Yes',
  ));
  $wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'test_front_page_display_control',array(
    'label' => __('Display', 'test'),
    'section'=> 'test_front_page_section',
    'settings'=> 'test_front_box_display',
    'type' => 'select',
    'choices'=> array('Yes'=> 'Yes', 'No'=>'No'),
  )));

  $wp_customize-> add_setting('test_front_box_heading', array(
    'default'=> 'change heading! ',
    'transport'=> 'refresh',
  ));
  $wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'test_front_page_heading_control',array(
    'label' => __('heading', 'test'),
    'section'=> 'test_front_page_section',
    'settings'=> 'test_front_box_heading',
  )));


  $wp_customize-> add_setting('test_front_box_para', array(
    'default'=> ' some paragraph ',
    'transport'=> 'refresh',
  ));
  $wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'test_front_page_para_control',array(
    'label' => __('paragraph', 'test'),
    'section'=> 'test_front_page_section',
    'settings'=> 'test_front_box_para',
    'type'=> 'textarea',
  )));

  $wp_customize-> add_setting('test_front_box_heading_link');
  $wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'test_front_page_heading_link_control',array(
    'label' => __('link', 'test'),
    'section'=> 'test_front_page_section',
    'settings'=> 'test_front_box_heading_link',
    'type'=> 'dropdown-pages',
  )));


  $wp_customize-> add_setting('test_front_box_img');
  $wp_customize-> add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'test_front_page_img_control',array(
    'label' => __('image', 'test'),
    'section'=> 'test_front_page_section',
    'settings'=> 'test_front_box_img',
    'width' => 800,
    'height'=> 350,
  )));











}








?>
