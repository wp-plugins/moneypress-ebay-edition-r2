<?php

class wpCSL_license__mpebay {

    function __construct($params) {
        foreach ($params as $name => $value) {
            $this->$name = $value;
        }
    }

    /**
     ** method: check_license_key()
     **
     ** Currently only checks for an existing license key (PayPal
     ** transaction ID).
     **/
    function check_license_key() {

        // HTTP Handler is not set fail the license check
        //
        if (!isset($this->http_handler)) { return false; }

        // Build our query string from the options provided
        //  
        $query_string = http_build_query(
            array(
                'id' => get_option($this->prefix . '-license_key')
            )
        );

        // Places we check the license
        //
        $csl_urls = array(
            'http://cybersprocket.com/paypal/valid_transaction.php?',
            'http://license.cybersprocket.com/paypal/valid_transaction.php?',
            );

        // Check each server until all fail or ONE passes
        //  
        foreach ($csl_urls as $csl_url) {
            $result = $this->http_handler->request( 
                            $csl_url . $query_string, 
                            array('timeout' => 60) 
                            );      
            if ($this->http_result_is_ok($result) ) {
                $response = ($result['body'] != 'false');
            }

            // If we get a true response record it in the DB and exit
            //
            if ($response) { 
                update_option($this->prefix.'-purchased','true');
                return true; 
            }
        }
        return false;
    }

    function check_product_key() {
        // Attempt to find old versions of the license
        if (!get_option($this->prefix.'-purchased') && (get_option('purchased') != '') ) {
            update_option($this->prefix.'-purchased', get_option('purchased'));
        }
        if (!get_option($this->prefix.'-license_key') && (get_option('license_key') != '') ) {
            update_option($this->prefix.'-license_key', get_option('license_key'));
        }

        if (!get_option($this->prefix.'-purchased')) {
            if (get_option($this->prefix.'-license_key') != '') {
                update_option($this->prefix.'-purchased', $this->check_license_key());
            }

            if (!get_option($this->prefix.'-purchased')) {
                if (isset($this->notifications)) {
                    $this->notifications->add_notice(
                        2,
                        "You have not provided a valid license key for this plugin. " .
                            "Until you do so, it will only display content for Admin users.",
                        "options-general.php?page={$this->prefix}-options#product_settings"
                    );
                }
            }
        }

        return (isset($notices)) ? $notices : false;
    }

    function initialize_options() {
        register_setting($this->prefix.'-settings', $this->prefix.'-license_key');
        register_setting($this->prefix.'-Settings', $this->prefix.'-purchased');
    }

    /**
     * method: http_result_is_ok()
     *
     * Determine if the http_request result that came back is valid.
     *
     * params:
     *  $result (required, object) - the http result
     *
     * returns:
     *   (boolean) - true if we got a result, false if we got an error
     */
    private function http_result_is_ok($result) {

        // Yes - we can make a very long single logic check
        // on the return, but it gets messy as we extend the
        // test cases. This is marginally less efficient but
        // easy to read and extend.
        //
        if ( is_a($result,'WP_Error') ) { return false; }
        if ( !isset($result['body'])  ) { return false; }
        if ( $result['body'] == ''    ) { return false; }

        return true;
    }
}
