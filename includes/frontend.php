<?php

function register_css_files(){
  // wp_enqueue_style('newcss', get_stylesheet_directory_uri().'/css/first.css');
  //or this two lines register and enqueue ...
  wp_register_style('newcss', get_stylesheet_directory_uri().'/css/first.css');
  wp_enqueue_style('newcss');
}

function add_resources(){
  wp_enqueue_style('style', get_stylesheet_uri());

}



 ?>
