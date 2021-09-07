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
    <div class="col-12">';
    if (is_product_category()) {
      global $wp_query;
      $cat = $wp_query->get_queried_object();
      $thumbnail_id = get_term_meta($cat->term_id, 'thumbnail_id', true);
      $image = wp_get_attachment_url($thumbnail_id);
      echo "<img src='{$image}' alt='' />";
    }

    echo ' <h2 class="woocommerce-products-header__title">';
    woocommerce_page_title(); // ? TITLE

    echo '    </h2>';
    if (is_product_taxonomy() && 0 === absint(get_query_var('paged'))) {
      $term = get_queried_object();

      if ($term && !empty($term->description)) {
        echo '<div class="term-description">' . wc_format_content(wp_kses_post($term->description)) . '</div>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
      }
    }
    echo '</div>
    </div>
    <div class="row">
            <div class="col-12 col-lg-3 shop-sidebar-col">
              <div id="secondary" class="widget-area" role="complementary">';
    dynamic_sidebar('shop-sidebar'); // ? SIDEBAR
    dynamic_sidebar('shop-filter'); // ? SIDEBAR
    // echo '<div class="products-filters-toggle--container"><button type="button" class="btn products-filters-toggle">';
    // _e('Filter', GV('slug'));
    // echo '</button></div>';
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
