<?php

/**
 * View: CSS
 *
 * @since 1.0.0
 */

use AkshitSethi\Plugins\WPHeaderFooterCode\Config;

?>

<div class="as-tile" id="css">
	<form method="post" class="as-css-form">
		<div class="as-tile-body">
			<h2 class="as-tile-title"><?php esc_html_e( 'CSS', 'wp-header-footer-code' ); ?></h2>
			<p><?php esc_html_e( 'Insert your custom CSS code in the appropriate section of the page.', 'wp-header-footer-code' ); ?></p>

			<div class="as-section-content">
				<div class="as-form-group">
					<label for="<?php echo Config::PREFIX . 'css'; ?>" class="as-strong"><?php esc_html_e( 'CSS', 'wp-header-footer-code' ); ?></label>
					<textarea name="<?php echo Config::PREFIX . 'css'; ?>" id="<?php echo Config::PREFIX . 'css'; ?>" rows="8" placeholder="<?php esc_html_e( 'Add CSS to be inserted in the header of the page.', 'wp-header-footer-code' ); ?>"><?php echo esc_textarea( stripslashes( $options['css'] ) ); ?></textarea>
					<div id="<?php echo Config::PREFIX . 'css_editor'; ?>" class="as-code-editor"></div>

					<p class="as-form-help-block"><?php echo sprintf( esc_html__( 'Add CSS to be inserted in the header of the page. Please note that %1$sopening <style> and closing </style> tags%2$s are not required. Just add your CSS code and nothing else.', 'wp-header-footer-code' ), '<i style="color: #f96773">', '</i>' ); ?></p>
				</div>
			</div><!-- .as-section-content -->
		</div><!-- .as-tile-body -->
	</form><!-- .as-css-form -->
</div><!-- #css -->
