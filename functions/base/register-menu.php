<?php if (!defined('ABSPATH')) exit;

// ? Register Navigation Menus
add_action('after_setup_theme', function () {
  register_nav_menus(array(
    'main_menu' => __('Главное меню', GV('slug')),
    'first_footer_menu' => __('Первое меню (подвал сайта)', GV('slug')),
    'second_footer_menu' => __('Второе меню (подвал сайта)', GV('slug')),
    // 'link_menu' => __('Link_menu', GV('slug')),
  ));
});
