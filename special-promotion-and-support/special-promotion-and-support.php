<?php
/*
Plugin Name: Type Name [Special Promotion and Support]
Plugin URI: https://store.devilhunter.net/wordpress-plugin/special-promotion-and-support/
Description: ​Type Description. 
Version: X.X
Author: Your Name [Tawhidur Rahman Dear]
Author URI: https://www.tawhidurrahmandear.com
Requires at least: X.X
Requires PHP: X.X
License: GPLv2 or later
Text Domain: special-promotion-and-support
*/

// Prevent direct file access
if ( ! defined ( 'ABSPATH' ) ) {
	exit;
}





// This is my own PlugIn, just replace information with yours

// To ensure WordPress ecosystem, folder-name, main-plugin-file-name.php, and text-domain should be same. Please replace special-promotion-and-support with yours

// Replace specialpromotion with your pluginname

// Replace tawhidurrahmandear with your WordPress.org developer ID. My WordPress URL is https://profiles.wordpress.org/tawhidurrahmandear and username is tawhidurrahmandear which means if I use tawhidurrahmandear everywhere, there is no chance of conflicts. You should read this article for details: https://www.devilhunter.net/2024/10/choose-unique-identifier-in-wordpress.html 





// Add custom links to the plugin's action links
function specialpromotionandsupport_by_tawhidurrahmandear_add_plugin_links($plugin_meta, $plugin_file) {
    if ($plugin_file === plugin_basename(__FILE__)) {
        $new_links = array(
        '<a href="https://store.devilhunter.net/wordpress-plugin/special-promotion-and-support" target="_blank">Introduction to Plugin with Documentation</a>',
	'<a href="https://codecanyon.net/item/we-are-with-you/20284354" target="_blank">Buy Pro Version</a>',
	'<a href="https://www.youtube.com/watch?v=mOAS7mvQjRM" target="_blank">Live Preview of Pro Version</a>',
        '<a href="https://wordpress.org/plugins/special-promotion-and-support#reviews" target="_blank">Rate and Review at WordPress.org</a>',
        '<a href="https://itsolution.devilhunter.net" target="_blank">Hire for WordPress Web Development</a>',
        );

        // Add the new links to the existing array of links
        $plugin_meta = array_merge($plugin_meta, $new_links);
    }
    return $plugin_meta;
}
add_filter('plugin_row_meta', 'specialpromotionandsupport_by_tawhidurrahmandear_add_plugin_links', 10, 2);

// WordPress PlugIn Extra Metadata code available at https://github.com/tawhidurrahmandear/wordpress-plugin-extra-metadata 

