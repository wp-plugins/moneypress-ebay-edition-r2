=== MoneyPress : eBay Edition ===
Plugin Name: MoneyPress : eBay Edition
Contributors: charlestonsw
Donate Link: http://www.charlestonsw.com/product/moneypress-ebay-edition/
Tags: plugin,post,page,ebay,affiliate,store
Requires at least: 3.1
Tested up to: 3.4.2
Stable tag: 2.2

This plugin allows you to display eBay listings on your web site by placing a simple shortcode in your page or post. Filter results by keyword, seller ID, or a combination of both.

== Description ==

Our MoneyPress : eBay Edition plugin allows you to easily display products from eBay based on keywords you provide. It makes it simple to show product listings for anything relevant to your site. All product entries also come with images, current asking prices, and links to eBay to get further information about the product.

List your own products by entering your seller ID, or sell any product on eBay and earn a commission with your eBay Partner ID or other approved affiliate program ID. If you are an eBay seller or an approved eBay affiliate this plugin will help boost the income earning potential of your site in just a few easy steps.

After installing the plugin (see below for instructions) you can show products on any page on your site by using the ‘[ebay_show_items]’ shortcode.  For example, entering the shortcode

    [mp_ebay keywords="wordpress books"]

would populate your site with a listing of products matching those keywords.  You can put any keywords you like into the shortcode, to best suit your website.

If you are a merchant on eBay then you can enter your seller ID to list only your own products.  Or you could put it anyone’s seller ID, if you want to list their products.  If you have entered a seller ID then you do not have to provide any keywords.  For example, you could just write

    [mp_ebay]

on one of your pages to list everything you are selling on eBay.

http://www.youtube.com/watch?v=N8SIKH00p7k

= Pro Pack (Premium Add-On) =

The following features are now available in the Pro Pack:

* CSS Theme System - several simple pre-defined themes are available.  Easily add your own to make listings look exactly right for your site.
* Additional Default/Shortcode Filters - specify in more detail what products to return.
* More listing details - turn on/off additional listing details.

For more information on Pro Pack features, visit the [MoneyPress : eBay Edition](http://www.charlestonsw.com/product/moneypress-ebay-pro-pack/)  page.

= Related Links =

* [CSA](http://www.charlestonsw.com)
* [Resend Your License](http://www.charlestonsw.com/mindset/contact-us/)
* [Documentation](http://www.charlestonsw.com/support/)
* [WordPress Support Forum](http://www.wordpress.org/support/plugin/moneypress-ebay-edition-r2)

== Installation ==

= Requirements =

PHP 5.2 or later with support for cURL and SimpleXML.

= Main Plugin =

 * Login to WordPress and search for "MoneyPress eBay" from the add plugins page.
 * Click install.
 * Browse to ‘MoneyPress : eBay Edition’ in your admin settings menu.
 * (Optional) Enter your seller ID if you want to list only your own products.
 * (Optional) Set the number of products you wish to show per page.  By default, ten products will be shown.
 * (Optional) Enter your affiliate information.  For example, see the description for the ‘Network ID’ on how to sign up as an eBay affiliate.
 * Enter the ‘[ebay_show_items keywords=”…” category_id=""]’ on any page you want to list products.
 * Category ID is an optional attribute that allows you to filter the displayed products by category. It requires the numerical category id which can be found at http://pages.ebay.com/sellerinformation/growing/categorychanges.html. For example, the Category ID for Antiques is 20081 so to filter by antiques, the tag would be ‘[ebay_show_items category_id="20081"]’


== Frequently Asked Questions ==

= Where can I find support for this plugin? =

[WordPress Support Forum](http://www.wordpress.org/support/plugin/moneypress-ebay-edition-r2)


= How can i translate the plugin into my language? =

* Find on internet the free program POEDIT, and learn how it works.
* Use the .pot file located in the languages directory of this plugin to create or update the .po and .mo files.
* Place these file in the languages subdirectory.
* If everything is ok, email the files to lobbyjones@cybersprocket.com and we will add them to the next release.
* For more information on POT files, domains, gettext and i18n have a look at the I18n for WordPress developers Codex page and more specifically at the section about themes and plugins.

== Screenshots ==

1. Default listing output.
2. Creating a page with a shortcode.
3. Pro Pack premium options available.
4. Pro Pack adds price and country filters to listings.
5. Pro Pack also adds listing themes.
6. Pro Pack "white theme" listing output.
7. Affiliate linking/tracking built in!
8. Standard settings filter by specific seller, and more.
9. Product Logo

== Changelog ==

= v2.2 (November 2012) =

* [Pro Pack](http://www.charlestonsw.com/product/moneypress-ebay-pro-pack/) Add admin based CSS editor, make it easy to over-ride CSS for plugin.

= v2.1.6 (October 2012) = 

* v2.1.5 did not update on plugin directory properly (again) same as 2.1.5

= v2.1.5 (October 2012) =

* Added separate Pro Pack settings page.
* Added "show buy it now price" for Pro Pack.
* Added "money prefix" character for Pro Pack.
* Patch to theme loading.
* Better Pro Pack license checking.
* Refactor code for better isolation, reducing conflicts and corruption with/from other plugins.
* Transition to CSA from CSL.


= v2.1.4 (December 28th 2011) =

* Admin panel styling updates.

= v2.1.3 (December 2011) =

* Fixed various issues with caching system and related php warnings

= v2.1.1 (October 2011) =

* Base product now requires NO LICENSE KEY.  The base product is fully functional.
* New add-on packs now available from directly within the plugin.
* Pro Pack : optional paid package now available (see website for details).
* Pro Pack : CSS themes are now available, several to choose from are provided.
* Pro Pack : More product filters.
* Pro Pack : Add more details to listing.

= v2.0 (January 2011) =

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
