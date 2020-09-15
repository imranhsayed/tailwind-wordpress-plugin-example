<?php
/**
 * Enqueue Assets
 *
 * @package twp-example
 */

class Enqueue_Assets {

	/**
	 * Constructor.
	 */
	public function __construct() {

		/**
		 * Actions.
		 */
		add_action( 'enqueue_block_editor_assets', [ $this, 'enqueue_editor_assets' ] );
	}

	/**
	 * Enqueue editor scripts & styles.
	 *
	 */
	public function enqueue_editor_assets() {

		// Theme Gutenberg blocks CSS.
		$css_dependencies = [
			'wp-block-library-theme',
			'wp-block-library'
		];

		wp_enqueue_style(
			'twp-editor-css',
			TWP_CSS_URI . 'editor.css',
			$css_dependencies,
			filemtime( TWP_CSS_PATH . 'editor.css' ),
			false
		);

		// Theme Gutenberg blocks JS.
		$js_dependencies = [
			'wp-block-editor',
			'wp-blocks',
			'wp-editor',
			'wp-components',
			'wp-compose',
			'wp-data',
			'wp-element',
			'wp-hooks',
			'wp-i18n',
			'wp-blocks',
			'wp-i18n',
			'wp-element',
		];

		wp_enqueue_script(
			'twp-editor-css',
			TWP_JS_URI . 'editor.js',
			$js_dependencies,
			filemtime( TWP_JS_PATH . 'editor.js' ),
			true
		);

	}
}

new Enqueue_Assets();
