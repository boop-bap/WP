<?php

function test_theme_files() {
  wp_enqueue_script('main-university-js', get_theme_file_uri('./src/index.js'), array('jquery'), '1.0', true);
  wp_enqueue_script( 'fa', 'https://kit.fontawesome.com/191dcb4902.js', array(), '1.0.0', true );
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Titillium+Web:wght@300;400;600;700;900');
  wp_enqueue_style('custom-google-fonts-two', '//fonts.googleapis.com/css2?family=Overpass:wght@300;400;500;600;700;800;900');
  wp_enqueue_style('main_style_file', get_theme_file_uri('./scss/style.css'));
}

add_action('wp_enqueue_scripts', 'test_theme_files');