=== MoneyPress : eBay Edition ===
Plugin Name: MoneyPress : eBay Edition
Contributors: cybersprocket
Donate Link: http://www.cybersprocket.com/products/moneypress-ebay/
Tags: plugin,post,page,ebay,affiliate,store
Requires at least: 2.6
Tested up to: 3.0.4
Stable tag: 2.0

This plugin allows you to display eBay listings on your web site by placing a simple shortcode in your page or post. Filter results by keyword, seller ID, or a combination of both.

== Description ==

Our MoneyPress : eBay Edition plugin allows you to easily display products from eBay based on keywords you provide. It makes it simple to show product listings for anything relevant to your site. All product entries also come with images, current asking prices, and links to eBay to get further information about the product.

List your own products by entering your seller ID, or sell any product on eBay and earn a commission with your eBay Partner ID or other approved affiliate program ID. If you are an eBay seller or an approved eBay affiliate this plugin will help boost the income earning potential of your site in just a few easy steps.

After installing the plugin (see below for instructions) you can show products on any page on your site by using the ‘[ebay_show_items]’ shortcode.  For example, entering the shortcode

    [ebay_show_items keywords="cakes black bears"]

would populate your site with a listing of products matching those keywords.  It’s quite likely that there is not a large intersection between delicious cakes and ferocious black bears, but you never know.  Fortunately you can put any keywords you like into the shortcode, to best suit your website.

If you are a merchant on eBay then you can enter your seller ID to list only your own products.  Or you could put it anyone’s seller ID, if you want to list their products.  If you have entered a seller ID then you do not have to provide any keywords.  For example, you could just write

    [ebay_show_items]

on one of your pages to list everything you are selling on eBay.

== Installation ==

Requirements: PHP 5.2 or later with support for cURL and SimpleXML.

 * Get the plugin from Cyber Sprocket Labs.
 * Install the plugin using the Zip file.
 * Browse to ‘MoneyPress : eBay Edition’ in your admin settings menu.
 * (Optional) Enter your seller ID if you want to list only your own products.
 * (Optional) Set the number of products you wish to show per page.  By default, ten products will be shown.
 * (Optional) Enter your affiliate information.  For example, see the description for the ‘Network ID’ on how to sign up as an eBay affiliate.
 * Enter the ‘[ebay_show_items keywords=”…” category_id=""]’ on any page you want to list products.
 * Category ID is an optional attribute that allows you to filter the displayed products by category. It requires the numerical category id which can be found at http://pages.ebay.com/sellerinformation/growing/categorychanges.html. For example, the Category ID for Antiques is 20081 so to filter by antiques, the tag would be ‘[ebay_show_items category_id="20081"]’

== Frequently Asked Questions ==

See the knowledgebase at http://redmine.cybersprocket.com/projects/mpress-ebay/wiki

All support inquiries should be posted at the forum section of the knowledgebase.

== Changelog ==

=v 2.0 (January 2011) =

* Improve product output to allow for easier manipulation with CSS
* Some product listing improvements
* Integrated with latest WPCSL Generic libraries

= v1.2.2 (August 26 2010) =
* Added support for filtering products by category ID
* Changed the title
* Added additional links on plugin page
* Added additional options in navigation on plugin page

= v1.2.1 (June 14th 2010) =
* Add missing image from v1.2 release.
* Allow plugin to co-exist peacefully with other MoneyPress plugins.

= v1.2 (June 11th 2010) =
* Allow users to sort products by price.

= v1.1 (May 17th 2010) =
* Added support for affiliate networking.

= v1.0 (May 14th 2010) =
* Initial release.
