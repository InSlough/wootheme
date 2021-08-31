<?php if (!defined('ABSPATH')) exit;

// ?
// add_action('woocommerce_HOOK', function () {}, 5);
// add_action('woocommerce_HOOK', function () {}, 200);
// !

// ? remove shop page title
add_filter('woocommerce_show_page_title', '__return_null');
// !

// ? add custom side bar
add_action('woocommerce_before_main_content', function () {
  if (is_active_sidebar('shop-sidebar') && (is_shop() || is_product_category())) {
    echo '<div class="row">
            <div class="col-12 col-lg-3 shop-sidebar-col">
              <h1 class="woocommerce-products-header__title">';
    woocommerce_page_title(); // ? TITLE
    echo '    </h1>
              <div id="secondary" class="widget-area" role="complementary">';
    dynamic_sidebar('shop-sidebar'); // ? SIDEBAR
    echo '    </div>
            </div>
            <div class="col-12 col-lg-9 woocommerce">';
  }
}, 200);
add_action('woocommerce_after_main_content', function () {
  if (is_active_sidebar('shop-sidebar') && (is_shop() || is_product_category()))
    echo '  </div>
          </div>';
}, 5);
// !

// ? add container for top bar in shop
add_action('woocommerce_before_shop_loop', function () {
  echo '<div class="products-top_bar">';
}, 5);
add_action('woocommerce_before_shop_loop', function () {
  echo '</div>';
}, 200);
// !
