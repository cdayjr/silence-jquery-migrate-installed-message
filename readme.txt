=== Silence jQuery Migrate Installed Message ===
Plugin URI: https://github.com/cdayjr/silence-jquery-migrate-installed-message
Contributors: cdayjr
Author URI: https://www.chadwadedayjr.info/
Tags: jquery migrate, console message
Requires at least: 4.5
Tested up to: 4.9
Stable tag: 1.0.1
Requires PHP: 5.3.0
License: MIT
License URI: https://opensource.org/licenses/MIT

Silence the "JQMIGRATE: Migrate is installed" console message.

== Description ==

A simple WordPress plugin to silence the "JQMIGRATE: Migrate is installed" console message.

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/silence-jquery-migrate-installed-message` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. You should no longer see the "JQMIGRATE: Migrate is installed" message in the developer tools console from each page.

== Changelog ==

= 1.0.1 =
* Fixed some weirdness in the `console.log` override function that may have caused issues with non-string console entries.
* Updated README and prepared to be added to the WordPress.org plugins website.

= 1.0.0 =
* First release on Github.

== Upgrade Notice ==

= 1.0.1 =
* This fixes some potential weridness with the `console.log` override function.

== Acknowledgements ==

* [jquery - Annoying JQMIGRATE: Migrate is in console after update to WP 4.5 - WordPress Development Stack Exchange](https://wordpress.stackexchange.com/a/224719) - This answer has the base idea for the plugin, I just decided to package it into a plugin.

