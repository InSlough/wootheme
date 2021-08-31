<?php

// ? get variables (globally)
function GV($gv)
{
  if ($gv == 'dev') $gv = false;
  else if ($gv == 'critical') $gv = true;
  else if ($gv == 'critical_min') $gv = false;
  else if ($gv == 'ver') $gv = "1.000";
  else if ($gv == 'slug') $gv = "royal-forest";
  else if ($gv == 'home_id') $gv = 2;
  else $gv = 0;
  return $gv;
}

require_once(__DIR__ . '/functions/base.php');
require_once(__DIR__ . '/functions/styles.php');
require_once(__DIR__ . '/functions/scripts.php');
require_once(__DIR__ . '/functions/acf.php');
require_once(__DIR__ . '/functions/woo.php');
// require_once(__DIR__ . '/functions/name.php');

if (extension_loaded("zlib") && (ini_get("output_handler") != "ob_gzhandler"))
  add_action('wp', create_function('', '@ob_end_clean();@ini_set("zlib.output_compression", 1);'));

// CUSTOMIZE ADMIN MENU ORDER
// function custom_menu_order($menu_ord)
// {
//   if (!$menu_ord) return true;
//   return array(
//     'index.php', // this represents the dashboard link
//     // 'edit.php?post_type=events', // this is a custom post type menu
//     'edit.php?post_type=news',
//     'edit.php?post_type=articles',
//     'edit.php?post_type=faqs',
//     'edit.php?post_type=mentors',
//     'edit.php?post_type=testimonials',
//     'edit.php?post_type=services',
//     'edit.php?post_type=page', // this is the default page menu
//     'edit.php', // this is the default POST admin menu
//   );
// }
// add_filter('custom_menu_order', 'custom_menu_order');
// add_filter('menu_order', 'custom_menu_order');
