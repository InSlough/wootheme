<?php if (!defined('ABSPATH')) exit;

// ? Styles for WP Admin panel
add_action('admin_enqueue_scripts', function () {
  f_add_c_style("admin-style", "/assets/admin-style.css");
});

// ? remove style files
add_action('wp_enqueue_scripts', function () {
  wp_dequeue_style('wp-block-library'); // WordPress
  wp_dequeue_style('wp-block-library-theme'); // WordPress
  wp_dequeue_style('wc-block-style'); // WordPress
  wp_dequeue_style('woocommerce-general'); // WooCommerce
  wp_dequeue_style('storefront-gutenberg-blocks'); // Storefront theme
}, 100);

/* add_filter('nav_menu_css_class', function ($classes, $item) {
  // ?? add extra css class for nav li
  $classes[] = "header-menu--base-item";
  // if (is_single() && $item->title == "Blog") {
  // }
  return $classes;
}, 10, 2); */


add_action('wp_enqueue_scripts', function () {
  // ?? Add to Site Header
  // f_add_style('file_name', 0);
  if (GV('critical') == true) f_add_c_style("critical", "/assets/critical" . (GV('critical_min') ? '.min' : '') . ".css");
});
add_action('get_footer', function () {
  // ?? Add to Site Footer
  // f_add_style('file_name', 0);
  f_add_style('libs');
  f_add_style('main');
  // wp_enqueue_style('jquery-scrollbar', getUrl('/css/jquery.scrollbar.css') , NULL, GV('ver'));
  // wp_enqueue_script('jquery-scrollbar', getUrl('/js/jquery.scrollbar.min.js') , NULL, GV('ver'), true);
});


// ? Add custom styles to page/post/...
add_action('ac_css', function ($slug = '', $url = '', $min = false) {
  wp_enqueue_style("$slug-", getUrl($url . ($min ? ".min" : "") . ".css"), NULL, GV('ver'));
}, 50, 3);

// ?
add_action('get_header', function () {
  remove_action('wp_head', '_admin_bar_bump_cb');
});
add_action('wp_head', function () {
  if (is_admin_bar_showing()) :
?>
    <style type="text/css">
      #wpadminbar {
        top: calc(var(--menu-h, 70px) + 5px);
        left: 5px;
        min-width: auto;
        max-width: 260px;
      }

      @media (max-width: 1024px) {
        #wpadminbar {
          display: none !important;
        }
      }

      #wp-admin-bar-customize {
        display: none;
      }

      #wpadminbar:not(:hover) {
        opacity: 0.15;
      }

      #wpadminbar .quicklinks>ul>li>a {
        font-size: 0;
        padding-right: 1px;
      }

      #wpadminbar .quicklinks>ul>li#wp-admin-bar-my-account>a {
        padding-right: 7px;
        padding-left: 1px;
      }

      #wp-admin-bar-search,
      #wp-admin-bar-wp-logo,
      #wp-admin-bar-my-account .display-name,
      #wp-admin-bar-new-content .ab-label {
        display: none;
      }

      #wp-admin-bar-clearfy-menu .wbcr-clearfy-admin-bar-menu-title {
        display: none !important;
      }

      #wpadminbar #wp-admin-bar-my-account.with-avatar>.ab-empty-item img,
      #wpadminbar #wp-admin-bar-my-account.with-avatar>a img {
        margin: 7px 1px 0 6px;
      }

      #wp-admin-bar-my-account:not(.with-avatar)>.ab-item {
        display: block;
      }
    </style>
<?php endif;
});
