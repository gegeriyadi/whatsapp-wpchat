<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://gegeriyadi.com
 * @since      1.0.0
 *
 * @package    Whatsapp_Wpchat
 * @subpackage Whatsapp_Wpchat/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Whatsapp_Wpchat
 * @subpackage Whatsapp_Wpchat/admin
 * @author     Gege Riyadi <me@gegeriyadi.com>
 */
class Whatsapp_Wpchat_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Whatsapp_Wpchat_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Whatsapp_Wpchat_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/whatsapp-wpchat-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Whatsapp_Wpchat_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Whatsapp_Wpchat_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/whatsapp-wpchat-admin.js', array( 'jquery' ), $this->version, false );

	}

	public function admin_init_register() {
		register_setting( 'whatsapp-wpchat-group', 'whatsapp_wpchat' );
	}

	public function whatsapp_wpchat_options_page()
	{
	    add_submenu_page(
	        'tools.php',
	        'WhatsApp WP Chat',
	        'WA-Wp Chat',
	        'manage_options',
	        'whatsapp-wpchat',
	        array( $this, 'display_plugin_setup_page' )
	    );
	}

	public function display_plugin_setup_page() {

		// get option
		$data = get_option('whatsapp_wpchat');
		
		// show form on admin page
		include_once( 'partials/whatsapp-wpchat-admin-display.php' );
	}

}
