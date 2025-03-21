<?php
function my_block_theme_setup() {
  add_theme_support('wp-block-styles');
  add_theme_support('align-wide');
}
add_action('after_setup_theme', 'my_block_theme_setup');
