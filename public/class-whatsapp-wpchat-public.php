<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://gegeriyadi.com
 * @since      1.0.0
 *
 * @package    Whatsapp_Wpchat
 * @subpackage Whatsapp_Wpchat/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Whatsapp_Wpchat
 * @subpackage Whatsapp_Wpchat/public
 * @author     Gege Riyadi <me@gegeriyadi.com>
 */
class Whatsapp_Wpchat_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/whatsapp-wpchat-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
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

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/whatsapp-wpchat-public.js', array( 'jquery' ), $this->version, false );

	}

	public function whatsapp_wpchat_widget() {
		
		// // get data options
		$data = get_option('whatsapp-wpchat');

		if ($data == 0) {
			// whatsapp api url
			$whatsappApi = 'https://api.whatsapp.com/send?phone=08123456789&text=Kamu belum mengedit di setting menu';
			$data['cta'] = 'Contact us on Whatsapp';
		} else {
			// whatsapp api url
			$whatsappApi = 'https://api.whatsapp.com/send?phone='
				. $data['nomorWhatsapp'] . '&text=' 
				. stripslashes($data['isiChat']);
		}

		include_once( 'partials/whatsapp-wpchat-public-display.php' );

	}

}