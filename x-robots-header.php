<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.redolive.com
 * @since             1.0.0
 * @package           X_Robots_Header
 *
 * @wordpress-plugin
 * Plugin Name:       X Robots Header
 * Plugin URI:        https://www.redolive.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Michael Bonner
 * Author URI:        https://www.redolive.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       x-robots-header
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define('X_ROBOTS_HEADER_VERSION', '1.0.0');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-x-robots-header.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_x_robots_header()
{

	$plugin = new X_Robots_Header();
	$plugin->run();
}
run_x_robots_header();
