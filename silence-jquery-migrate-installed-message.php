<?php
/**
 * Silence jQuery Migrate Installed Message
 *
 * @author      Chad Wade Day, Jr.
 * @copyright   2018 Chad Wade Day, Jr.
 * @license     MIT
 *
 * @wordpress-plugin
 * Plugin Name: Silence jQuery Migrate Installed Message
 * Plugin URI:  https://github.com/cdayjr/silence-jquery-migrate-installed-message
 * Description: Silence the "JQMIGRATE: Migrate is installed" console message.
 * Version:     1.0.1
 * Author:      Chad Wade Day, Jr.
 * Author URI:  https://www.chadwadedayjr.info
 * Text Domain: silence-jquery-migrate-installed-message
 * License:     MIT
 * License URI: https://opensource.org/licenses/MIT
 */

defined('ABSPATH') or die('No direct script access allowed.');

// Remove jQuery Migrate is Installed message
function silence_jquery_migrate_installed_message()
{
    wp_add_inline_script(
        'jquery-migrate',
        <<<'EOD'
window.console.log2 = window.console.log;
window.console.log = function(entry) {
    if (typeof entry === "string" && entry.indexOf("JQMIGRATE: Migrate is installed") >= 0) {
        return;
    }
    window.console.log2(entry);
}
EOD
        ,
        'before'
    );
    wp_add_inline_script(
        'jquery-migrate',
        <<<'EOD'
window.console.log = window.console.log2;
delete window.console.log2;
EOD
        ,
        'after'
    );
}
add_action('wp_enqueue_scripts', 'silence_jquery_migrate_installed_message');
add_action('admin_enqueue_scripts', 'silence_jquery_migrate_installed_message');
