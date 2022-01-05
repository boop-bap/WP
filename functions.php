<?php

function test_theme_files() {
  wp_enqueue_script('main-university-js', get_theme_file_uri('/src/index.js'), array(''), '1.0', true);
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Titillium+Web:wght@300;400;600;700;900');
  // wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  // wp_enqueue_style('university_main_styles', get_theme_file_uri('/build/style-index.css'));
  wp_enqueue_style('main_style_file', get_theme_file_uri('/scss/style.css'));
}

add_action('wp_enqueue_scripts', 'test_theme_files');