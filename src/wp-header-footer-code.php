<?php

/**
 * Plugin Name: WP Header & Footer Code
 * Description: Insert custom code into the header & footer of a WordPress website.
 * Version:     1.0.0
 * Runtime:     5.6+
 * Author:      akshitsethi
 * Text Domain: wp-header-footer-code
 * Domain Path: i18n
 * Author URI:  https://akshitsethi.com
 * License:     GPLv3
 * License URI: http://www.gnu.org/licenses/gpl-3.0.txt
 */

namespace AkshitSethi\Plugins\WPHeaderFooterCode;

// Stop execution if the file is called directly.
defined( 'ABSPATH' ) || exit;

// Composer autoloder file.
require_once __DIR__ . '/vendor/autoload.php';

/**
 * Plugin class where all the action happens.
 *
 * @category   Plugins
 * @package    AkshitSethi\Plugins\WPHeaderFooterCode
 * @since      1.0.0
 */
class WPHeaderFooterCode {

	/**
	 * Class Constructor.
	 */
	public function __construct() {
		add_action( 'plugins_loaded', array( $this, 'init' ) );
		add_action( 'plugins_loaded', array( $this, 'load_textdomain' ) );
	}


	/**
	 * Initialize plugin when all the plugins have been loaded.
	 *
	 * @since 1.0.0
	 */
	public function init() {
		// Initialize front and admin
		new Front();
		new Admin();
	}


	/**
	 * Loads textdomain for the plugin.
	 *
	 * @since 1.0.0
	 */
	public function load_textdomain() {
		load_plugin_textdomain( Config::PLUGIN_SLUG, false, Config::$plugin_path . 'i18n/' );
	}


	/**
	 * Attached to the activation hook.
	 */
	public function activate() {
		// Check for existing options in the database
		$options = get_option( Config::DB_OPTION );

		// Present? Overwrite the default options
		if ( $options ) {
			$options = array_merge( Config::DEFAULT_OPTIONS, $options );
		} else {
			$options = Config::DEFAULT_OPTIONS;
		}

		// Update `wp_options` table
		update_option( Config::DB_OPTION, $options );
	}


	/**
	 * Attached to the de-activation hook.
	 */
	public function deactivate() {
		/**
		 * @todo Keeping it here as it will be needed in future versions.
		 */
	}

}

// Initialize plugin.
$wphf_code = new WPHeaderFooterCode();

/**
 * Hooks for plugin activation & deactivation.
 */
register_activation_hook( __FILE__, array( $wphf_code, 'activate' ) );
register_deactivation_hook( __FILE__, array( $wphf_code, 'deactivate' ) );
