<?php

/**
 * Settings panel view for the plugin.
 *
 * @since 1.0.0
 */

use AkshitSethi\Plugins\WPHeaderFooterCode\Config;
require_once 'header.php';

?>

<div class="as-body as-clearfix">
	<div class="as-float-left">
		<div class="as-mobile-menu">
			<a href="javascript:;">
				<img src="<?php echo Config::$plugin_url; ?>assets/admin/images/toggle.png" alt="<?php esc_attr_e( 'Menu', 'wp-header-footer-code' ); ?>" />
			</a>
		</div><!-- .as-mobile-menu -->

		<ul class="as-main-menu">
			<li><a href="#css"><?php esc_html_e( 'CSS', 'wp-header-footer-code' ); ?></a></li>
			<li><a href="#js"><?php esc_html_e( 'JavaScript', 'wp-header-footer-code' ); ?></a></li>
			<li><a href="#support"><?php esc_html_e( 'Support', 'wp-header-footer-code' ); ?></a></li>
			<li><a href="#about"><?php esc_html_e( 'About', 'wp-header-footer-code' ); ?></a></li>
		</ul>
	</div><!-- .as-float-left -->

	<div class="as-float-right">
		<?php

			// Tabs
			require_once 'settings-css.php';
			require_once 'settings-javascript.php';
			require_once 'settings-support.php';
			require_once 'settings-about.php';

		?>
	</div><!-- .as-float-right -->
</div><!-- .as-body -->

<?php

require_once 'footer.php';
