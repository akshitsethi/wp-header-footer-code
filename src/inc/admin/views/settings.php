<?php

/**
 * Settings panel view for the plugin.
 *
 * @since 1.0.0
 */

use AkshitSethi\Plugins\WidgetsBundle\Config;
require_once 'header.php';

?>

<div class="as-body as-clearfix">
	<div class="as-float-left">
		<div class="as-mobile-menu">
			<a href="javascript:void;">
				<img src="<?php echo Config::$plugin_url; ?>assets/admin/images/toggle.png" alt="<?php esc_attr_e( 'Menu', 'widgets-bundle' ); ?>" />
			</a>
		</div><!-- .as-mobile-menu -->

		<ul class="as-main-menu">
			<li><a href="#options"><?php esc_html_e( 'Options', 'widgets-bundle' ); ?></a></li>
			<li><a href="#support"><?php esc_html_e( 'Support', 'widgets-bundle' ); ?></a></li>
			<li><a href="#about"><?php esc_html_e( 'About', 'widgets-bundle' ); ?></a></li>
		</ul>
	</div><!-- .as-float-left -->

	<div class="as-float-right">
		<?php

			// Tabs.
			require_once 'settings-options.php';
			require_once 'settings-support.php';
			require_once 'settings-about.php';

		?>
	</div><!-- .as-float-right -->
</div><!-- .as-body -->

<?php

require_once 'footer.php';
