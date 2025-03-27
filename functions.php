<?php
function my_block_theme_setup() {
  add_theme_support('wp-block-styles');
  add_theme_support('align-wide');
  add_theme_support('editor-styles');
  add_editor_style('assets/css/bootstrap.css');

  register_nav_menus([
    'primary_menu' => __('Primary Menu', 'meyo'),
  ]);
}
add_action('after_setup_theme', 'my_block_theme_setup');

function meyo_enqueue_styles() {
  wp_enqueue_style('meyo-tailwind', get_theme_file_uri('/assets/css/bootstrap.css'), [], '1.0');
  wp_enqueue_script('meyo-primary-menu', get_template_directory_uri() . '/assets/js/primary-menu.js', [], false, true);
}
add_action('wp_enqueue_scripts', 'meyo_enqueue_styles');
