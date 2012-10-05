<?php
/*
  Plugin Name: MoneyPress : eBay Edition
  Plugin URI: http://www.charlestonsw.com/product/moneypress-ebay-edition/
  Description: This plugin allows you to display eBay listings on your web site by placing a simple shortcode in your page or post.
  Version: 2.1.6
  Author: Charleston Software Associates
  Author URI: http://www.charlestonsw.com
  License: GPL3
  
 Copyright (C) 2012 Charlestonn Software Associates

 This program is free software; you can redistribute it and/or        
 modify it under the terms of the GNU General Public License          
 as published by the Free Software Foundation; either version 3       
 of the License, or (at your option) any later version.               

 This program is distributed in the hope that it will be useful,      
 but WITHOUT ANY WARRANTY; without even the implied warranty of       
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the        
 GNU General Public License for more details.                         

 You should have received a copy of the GNU General Public License    
 along with this program. If not, see <http://www.gnu.org/licenses/>. 
 
 */

/// DEBUGGING
/* error_reporting(E_ALL); */
/* ini_set('display_errors', '1'); */


if (defined('MP_EBAY_PLUGINDIR') === false) {
    define('MP_EBAY_PLUGINDIR', plugin_dir_path(__FILE__));
}

if (defined('MP_EBAY_PLUGINURL') === false) {
    define('MP_EBAY_PLUGINURL', plugins_url('',__FILE__));
}

if (defined('MP_EBAY_BASENAME') === false) {
    define('MP_EBAY_BASENAME', plugin_basename(__FILE__));
}

if (defined('MP_EBAY_PREFIX') === false) {
    define('MP_EBAY_PREFIX', 'csl-mp-ebay');
}

if (defined('MP_EBAY_ADMINPAGE') === false) {
    define('MP_EBAY_ADMINPAGE', get_option('siteurl') . '/wp-admin/admin.php?page=' . MP_EBAY_PLUGINDIR );
}



// Include our needed files
//
global $MP_ebay_plugin;
require_once(MP_EBAY_PLUGINDIR . '/include/config.php');
require_once(MP_EBAY_PLUGINDIR . '/include/csl_helpers.php');

require_once(MP_EBAY_PLUGINDIR . '/include/actions_class.php');
$MP_ebay_plugin->Actions = new MPEBY_Actions(array('parent'=>$MP_ebay_plugin));

// actions
add_action('wp_print_styles', 'setup_stylesheet_for_mpebay');
add_action('admin_menu', array($MP_ebay_plugin->Actions,'admin_menu'));
add_action('admin_print_styles','setup_ADMIN_stylesheet_for_mpebay');
add_action('admin_init','setup_admin_interface_for_mpebay',10);

