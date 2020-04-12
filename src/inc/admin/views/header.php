<?php

/**
 * View: Header
 *
 * @since 1.0.0
 */

use AkshitSethi\Plugins\WPHeaderFooterCode\Config;

?>

<div class="as-cnt-fix">
	<div class="as-header as-clearfix">
		<img src="<?php echo Config::$plugin_url; ?>assets/admin/images/lrg-icon.png" alt="<?php echo Config::get_plugin_name(); ?>" class="as-logo">
		<p>
			<strong><?php echo Config::get_plugin_name(); ?></strong>
			<span><?php esc_html_e( 'by', 'wp-header-footer-code' ); ?> <a href="https://akshitsethi.com/" target="_blank"><?php esc_html_e( 'Akshit Sethi', 'wp-header-footer-code' ); ?></a></span>
		</p>

		<div class="as-header-right">
			<input type="submit" id="<?php echo Config::PREFIX . 'submit'; ?>" name="<?php echo Config::PREFIX . 'submit'; ?>" class="as-btn" value="<?php esc_attr_e( 'Save Changes', 'wp-header-footer-code' ); ?>" data-tab="#javascript">
		</div><!-- .as-header-right -->
	</div><!-- .as-header -->
