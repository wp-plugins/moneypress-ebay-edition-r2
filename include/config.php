<?php

/**
 * We need the generic WPCSL plugin class, since that is the
 * foundation of much of our plugin.  So here we make sure that it has
 * not already been loaded by another plugin that may also be
 * installed, and if not then we load it.
 */
if (defined('MP_EBAY_PLUGINDIR')) {
    if (class_exists('wpCSL_plugin__mpebay') === false) {
        require_once(MP_EBAY_PLUGINDIR.'WPCSL-generic/classes/CSL-plugin.php');
    }
    
    /**
     * This section defines the settings for the admin menu.
     */    
    global $MP_ebay_plugin; 
    $MP_ebay_plugin = new wpCSL_plugin__mpebay(
        array(
            'prefix'                 => MP_EBAY_PREFIX,
            'cache_path'             => MP_EBAY_PLUGINDIR . 'cache',
            'plugin_url'             => MP_EBAY_PLUGINURL,
            'plugin_path'            => MP_EBAY_PLUGINDIR,
            'basefile'               => MP_EBAY_BASENAME,

            'name'                   => 'MoneyPress eBay Edition',
            'url'                    => 'http://www.charlestonsw.com/product/moneypress-ebay/',
            'support_url'            => 'http://www.charlestonsw.com/support/',
            'purchase_url'           => 'http://www.charlestonsw.com/product/moneypress-ebay-pro-pack/',
            'rate_url'              => 'http://wordpress.org/extend/plugins/moneypress-ebay-edition-r2/',
            'forum_url'             => 'http://wordpress.org/support/plugin/moneypress-ebay-edition-r2/',

            'has_packages'           => true,

            'use_obj_defaults'       => true,
            'no_default_css'         => false,
            'css_prefix'            => 'csl_themes',
            
            'driver_name'            => 'eBay',
            'driver_type'            => 'Panhandler',
            'driver_defaults' => array(
                    'affiliate_info'    => array('network_id', 'tracking_id'),
                    'category_id'       => 'category_id',
                    'country_listed_in' => 'country_listed_in',
                    'detailed_listings' => 'detailed_listings',
                    'keywords'          => 'keywords',
                    'max_price'         => 'max_price',
                    'min_price'         => 'min_price',
                    'money_prefix'      => 'money_prefix',
                    'product_count'     => 'product_count',
                    'search_description'=> 'search_description',
                    'sellers'           => 'sellers',
                    'show_bin_price'    => 'show_bin_price',
                    'sort_order'        => 'sort_order',
                ),
            'driver_args'            => array(
                'app_id' => "CyberSpr-e973-4a45-ad8b-430a8ee3b190",
                'pro_pack_enabled' => get_option(MP_EBAY_PREFIX.'-MPEBY-PRO-isenabled'),
                'prefix' => MP_EBAY_PREFIX
            ),
            'shortcodes'             => array('mp-ebay','mp_ebay', 'ebay_show_items'),
            
        )
    );
    
    // Setup our optional packages
    //
    add_options_packages_for_mpebay();     
}

/**************************************
 ** function: list_options_packages_for_mpebay
 **
 ** Setup the option package list.
 **/
function add_options_packages_for_mpebay() {
    global $MP_ebay_plugin;   
    
    // Add : Pro Pack
    //
    $MP_ebay_plugin->license->add_licensed_package(
            array(
                'name'              => 'Pro Pack',
                'help_text'         => 'A variety of enhancements are provided with this package.  ' .
                                       'See the <a href="'.$MP_ebay_plugin->purchase_url.'" target="CSA">product page</a> for details.  If you purchased this add-on ' .
                                       'come back to this page to enter the license key to activate the new features.',
                'sku'               => 'MPEBY-PRO',
                'paypal_button_id'  => '79K7YNKRUVTA8',
                'paypal_upgrade_button_id' => '79K7YNKRUVTA8'
            )
        );

    if ($MP_ebay_plugin->license->packages['Pro Pack']->isenabled_after_forcing_recheck()) {
        $MP_ebay_plugin->themes_enabled = true;
    }       

}
