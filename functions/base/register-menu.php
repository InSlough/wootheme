<?php if (!defined('ABSPATH')) exit;

// ? Register Navigation Menus
add_action('after_setup_theme', function () {
  register_nav_menus(array(
    'main_menu' => __('Main menu', GV('slug')),
    'first_footer_menu' => __('Footer col 1', GV('slug')),
    'second_footer_menu' => __('Footer col 2', GV('slug')),
    // 'link_menu' => __('Link_menu', GV('slug')),
  ));
});
