<?php

/**
 * This is a test script for the eBay driver.
 */

require_once('../Panhandler.php');
require_once('../Drivers/eBay.php');

$ebay     = new eBayPanhandler("CyberSpr-e973-4a45-ad8b-430a8ee3b190");
$keywords = array('love hina', 'anime');

echo "eBay Driver suports options...\n";

var_dump($ebay->get_supported_options());

echo "Fetching by keywords...\n";

$products = $ebay->get_products(array('keywords' => $keywords));

foreach ($products as $p) {
    echo $p->name,"\n";
}

echo "\nFetching by vendor 'cybersprocketlabs'...\n";

$products = $ebay->get_products(array('sellers' => array('cybersprocketlabs')));

foreach ($products as $p) {
    echo $p->name,"\n";
}


?>