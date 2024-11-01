<?php

/**
 * The plugin bootstrap file
 *
 * @link              https://www.webmaxy.co
 * @since             1.0.0
 * @package           WebMaxy
 *
 * @wordpress-plugin
 * Plugin Name:       WebMaxy
 * Plugin URI:        https://www.webmaxy.co
 * Description:       WebMaxy Wordpress plugins allows you to integrate WebMaxy Session Recording in your website seemlessly.
 * Version:           1.0.0
 * Author:            Anand Mahajan
 * Author URI:        https://www.webmaxy.co
 * License:           GPL-2.0+
 * Text Domain:       webmaxy
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'WebMaxy_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-webmaxy-activator.php
 */
function activate_WebMaxy() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-webmaxy-activator.php';
	WebMaxy_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-webmaxy-deactivator.php
 */
function deactivate_WebMaxy() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-webmaxy-deactivator.php';
	WebMaxy_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_WebMaxy' );
register_deactivation_hook( __FILE__, 'deactivate_WebMaxy' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-webmaxy.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_WebMaxy() {

	$plugin = new WebMaxy();
	$plugin->run();

}
run_WebMaxy();
