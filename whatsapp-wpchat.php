<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://gegeriyadi.com
 * @since             1.0.0
 * @package           Whatsapp_Wpchat
 *
 * @wordpress-plugin
 * Plugin Name:       Whatsapp WP Chat
 * Plugin URI:        https://gegeriyadi.com/whatsapp-wpchat
 * Description:       A simple click to chat button WhatsApp plugin.
 * Version:           1.0.0
 * Author:            Gege Riyadi
 * Author URI:        https://gegeriyadi.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       whatsapp-wpchat
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
define( 'WHATSAPP_WPCHAT', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-whatsapp-wpchat-activator.php
 */
function activate_whatsapp_wpchat() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-whatsapp-wpchat-activator.php';
	Whatsapp_Wpchat_Activator::activate();
}

add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'configure_action_link' );
/**
 * Show a "Configure" link in the plugin action links.
 *
 * @since 1.5
 */
function configure_action_link( $links ) {
	$configuration_link = '<a href="' . admin_url( 'tools.php?page=whatsapp-wpchat' ) . '">' . __( 'Configure', 'whatsapp-wpchat' ) . '</a>';
	return array_merge( $links, array( $configuration_link ) );
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-whatsapp-wpchat-deactivator.php
 */
function deactivate_whatsapp_wpchat() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-whatsapp-wpchat-deactivator.php';
	Whatsapp_Wpchat_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_whatsapp_wpchat' );
register_deactivation_hook( __FILE__, 'deactivate_whatsapp_wpchat' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-whatsapp-wpchat.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_whatsapp_wpchat() {

	$plugin = new Whatsapp_Wpchat();
	$plugin->run();

}
run_whatsapp_wpchat();
