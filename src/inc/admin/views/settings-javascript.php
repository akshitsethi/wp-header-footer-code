<?php

/**
 * View: JavaScript
 *
 * @since 1.0.0
 */

use AkshitSethi\Plugins\WPHeaderFooterCode\Config;

?>

<div class="as-tile" id="js">
	<form method="post" class="as-js-form">
		<div class="as-tile-body">
			<h2 class="as-tile-title"><?php esc_html_e( 'JavaScript', 'wp-header-footer-code' ); ?></h2>
			<p><?php esc_html_e( 'Insert your custom JS code in the appropriate section of the page.', 'wp-header-footer-code' ); ?></p>

			<div class="as-section-content">
				<div class="as-form-group">
					<label for="<?php echo Config::PREFIX . 'header_js'; ?>" class="as-strong"><?php esc_html_e( 'Header JS', 'wp-header-footer-code' ); ?></label>
					<textarea name="<?php echo Config::PREFIX . 'header_js'; ?>" id="<?php echo Config::PREFIX . 'header_js'; ?>" rows="8" placeholder="<?php esc_html_e( 'Add JS to be inserted in the header of the page.', 'wp-header-footer-code' ); ?>"><?php echo esc_textarea( stripslashes( $options['js']['header'] ) ); ?></textarea>
					<div id="<?php echo Config::PREFIX . 'header_js_editor'; ?>" class="as-code-editor"></div>

					<p class="as-form-help-block"><?php echo sprintf( esc_html__( 'Add JS to be inserted in the header of the page. Please note that %1$sopening <script> and closing </script> tags%2$s are not required. Just add the code between these tags over here.', 'wp-header-footer-code' ), '<i style="color: #f96773">', '</i>' ); ?></p>
				</div>

				<div class="as-form-group">
					<label for="<?php echo Config::PREFIX . 'footer_js'; ?>" class="as-strong"><?php esc_html_e( 'Footer JS', 'wp-header-footer-code' ); ?></label>
					<textarea name="<?php echo Config::PREFIX . 'footer_js'; ?>" id="<?php echo Config::PREFIX . 'footer_js'; ?>" rows="8" placeholder="<?php esc_html_e( 'Add JS to be inserted in the header of the page.', 'wp-header-footer-code' ); ?>"><?php echo esc_textarea( stripslashes( $options['js']['footer'] ) ); ?></textarea>
					<div id="<?php echo Config::PREFIX . 'footer_js_editor'; ?>" class="as-code-editor"></div>

					<p class="as-form-help-block"><?php echo sprintf( esc_html__( 'Add JS to be inserted in the footer of the page. Please note that %1$sopening <script> and closing </script> tags%2$s are not required. Just add the code between these tags over here.', 'wp-header-footer-code' ), '<i style="color: #f96773">', '</i>' ); ?></p>
				</div>
			</div><!-- .as-section-content -->
		</div><!-- .as-tile-body -->
	</form><!-- .as-js-form -->
</div><!-- #js -->
