<?php
global $MP_ebay_plugin;

// Update license key only
//
$new_license = false;
$lkPrefix = $MP_ebay_plugin->license->packages['Pro Pack']->prefix .
          '-'.
          $MP_ebay_plugin->license->packages['Pro Pack']->sku
        ;

$lkName = $lkPrefix . '-lk';
if (!$MP_ebay_plugin->license->packages['Pro Pack']->isenabled_after_forcing_recheck() && isset($_POST[$lkName])) {
    update_option($lkName, $_POST[$lkName]);
    update_option($lkPrefix.'-isenabled', $MP_ebay_plugin->license->packages['Pro Pack']->isenabled_after_forcing_recheck());
    $new_license = true;
}


// Instantiate the form rendering object
//
global $ebPlusSettings;
$ebPlusSettings = new wpCSL_settings__mpebay(
    array(
            'no_license'        => true,
            'prefix'            => $MP_ebay_plugin->prefix,
            'css_prefix'        => $MP_ebay_plugin->css_prefix,
            'url'               => $MP_ebay_plugin->url,
            'name'              => $MP_ebay_plugin->name . ' - Pro Pack Settings',
            'plugin_url'        => $MP_ebay_plugin->plugin_url,
            'form_action'       => admin_url().'/admin.php?page='.$MP_ebay_plugin->prefix.'-pro_options',
            'themes_enabled'    => true,
            'render_csl_blocks' => false,
            'settings_obj_name' => 'default'
        )
 );

//-------------------------
// Navbar Section
//-------------------------
//
$ebPlusSettings->add_section(
    array(
        'name' => 'Navigation',
        'div_id' => 'mp_ebay_navbar',
        'description' => $MP_ebay_plugin->helper->get_string_from_phpexec(MP_EBAY_PLUGINDIR.'/templates/navbar.php'),
        'is_topmenu' => true,
        'auto' => false
    )
);



// Pro Pack Only
//
if ($MP_ebay_plugin->license->packages['Pro Pack']->isenabled_after_forcing_recheck()) {

    //-------------------
    // Update PRO Options
    //-------------------
    if (!$new_license && $_POST) {
        update_option(MP_EBAY_PREFIX.'-theme',$_POST[MP_EBAY_PREFIX.'-theme']);


        // Checkboxes with normal names
        //
        $BoxesToHit = array(
            'show_bin_price',
            );
        foreach ($BoxesToHit as $JustAnotherBox) {
            $MP_ebay_plugin->helper->SaveCheckBoxToDB($JustAnotherBox);
        }

        // Textboxes with normal names
        //
        $BoxesToHit = array(
            'custom_css',
            'money_prefix',
            );
        foreach ($BoxesToHit as $JustAnotherBox) {
            $MP_ebay_plugin->helper->SaveTextboxToDB($JustAnotherBox);
        }
    }

    //-------------------------
    // Display Settings Section
    //-------------------------
    //
    $ebPlusSettings->add_section(
        array(
            'name' => __('Display Settings',MP_EBAY_PREFIX),
            'description' => ''
        )
    );
    $MP_ebay_plugin->themes->add_admin_settings($ebPlusSettings);


    $ebPlusSettings->add_item(
        __('Display Settings',MP_EBAY_PREFIX),
        __('Show Buy It Now Price',MP_EBAY_PREFIX),
        'show_bin_price',
        'checkbox',
        false,
        __('When checked, show the BIN price next to the Buy It Now indicator.', MP_EBAY_PREFIX)
        );

    $ebPlusSettings->add_item(
        __('Display Settings',MP_EBAY_PREFIX),
        __('Money Prefix',MP_EBAY_PREFIX),
        'money_prefix',
        'text',
        false,
        __('What character do we put in front of money? (default $)', MP_EBAY_PREFIX)        
        );

    // Custom CSS Field
    //
    $ebPlusSettings->add_item(
            'Display Settings',
            __('Custom CSS',MP_EBAY_PREFIX),
            'custom_css',
            'textarea',
            false,
            __('Enter your custom CSS, preferably for styling this plugin only but it can be used for any page element as this will go in your page header.',MP_EBAY_PREFIX),
            null,
            null,
            !$this->parent->license->packages['Pro Pack']->isenabled
            );

} else {

    //-------------------------
    // Info Panel
    //-------------------------
    //
    $ebPlusSettings->add_section(
        array(
            'name' => __('Pro Pack',MP_EBAY_PREFIX),
            'description' =>
                __('The Pro Pack extends the features and settings of this plugin.', MP_EBAY_PREFIX) .
                '<br/>'.
                sprintf(__('Visit <a href="%s">%s</a> to learn more.', MP_EBAY_PREFIX), $MP_ebay_plugin->purchase_url, $MP_ebay_plugin->purchase_url) .
                '<div style="clear:both;">' . $MP_ebay_plugin->settings->ListThePackages(false) . '</div>'
        )
    );
}


$ebPlusSettings->render_settings_page();


?>

