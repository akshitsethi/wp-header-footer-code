<?php
/**
 * Frontend class for the plugin.
 *
 * @package AkshitSethi\Plugins\WPHeaderFooterCode
 */

namespace AkshitSethi\Plugins\WPHeaderFooterCode;

use AkshitSethi\Plugins\WPHeaderFooterCode\Config;

/**
 * Frontend for the plugin.
 *
 * @package    AkshitSethi\Plugins\WPHeaderFooterCode
 * @since      1.0.0
 */
class Front {

	/**
	 * @var array
	 */
	public $options;

	/**
	 * Class constructor.
	 */
	public function __construct() {
		// Load options
		$this->options = get_option( Config::DB_OPTION, Config::DEFAULT_OPTIONS );

		add_action( 'wp_head', array( $this, 'css' ), PHP_INT_MAX );
		add_action( 'wp_head', array( $this, 'header_js' ), PHP_INT_MAX );
		add_action( 'wp_footer', array( $this, 'footer_js' ), PHP_INT_MAX );
	}


	/**
	 * Adds custom CSS to the header.
	 *
	 * @since 1.0.0
	 */
	public function css() {
		if ( $this->if_exists( $this->options['css'] ) ) {
			echo '<style>' . "\r\n";
			echo stripslashes( $this->options['css'] );
			echo '</style>' . "\r\n";
		}
	}


	/**
	 * Adds custom JS to the header.
	 *
	 * @since 1.0.0
	 */
	public function header_js() {
		if ( $this->if_exists( $this->options['js']['header'] ) ) {
			echo '<script type="text/javascript">' . "\r\n";
			echo stripslashes( $this->options['js']['header'] );
			echo '</script>' . "\r\n";
		}
	}


	/**
	 * Adds custom JS to the footer.
	 *
	 * @since 1.0.0
	 */
	public function footer_js() {
		if ( $this->if_exists( $this->options['js']['footer'] ) ) {
			echo '<script type="text/javascript">' . "\r\n";
			echo stripslashes( $this->options['js']['footer'] );
			echo '</script>' . "\r\n";
		}
	}


	/**
	 * Checks if the option is set and is not empty.
	 *
	 * @param string|integer|boolean $option Option to check and verify
	 * @since 1.0.0
	 */
	private function if_exists( $option ) {
		if ( isset( $option ) ) {
			if ( ! empty( $option ) ) {
				return true;
			}
		}

		return false;
	}

}
