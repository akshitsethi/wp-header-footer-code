<?php
/**
 * Configuration file for the plugin.
 */

namespace AkshitSethi\Plugins\WPHeaderFooterCode;

/**
 * Set configuration options.
 *
 * @package AkshitSethi\Plugins\WPHeaderFooterCode
 */
class Config {

	public static $plugin_url;
	public static $plugin_path;

	const PLUGIN_SLUG     = 'wp-header-footer-code';
	const SHORT_SLUG      = 'wphfcode';
	const VERSION         = '1.0.0';
	const DB_OPTION       = 'as_' . self::SHORT_SLUG;
	const PREFIX          = self::SHORT_SLUG . '_';
	const DEFAULT_OPTIONS = array(
		'css' => '',
		'js'  => array(
			'header' => '',
			'footer' => '',
		),
	);

	/**
	 * Class constructor.
	 */
	public function __construct() {
		self::$plugin_url  = plugin_dir_url( dirname( __FILE__ ) );
		self::$plugin_path = plugin_dir_path( dirname( __FILE__ ) );
	}


	/**
	 * Get plugin name.
	 *
	 * @since 1.0.0
	 */
	public static function get_plugin_name() {
		return esc_html__( 'WP Header & Footer Code', 'wp-header-footer-code' );
	}

}

new Config();
