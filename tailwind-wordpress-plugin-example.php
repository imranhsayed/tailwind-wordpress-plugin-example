<?php
/**
 * Plugin Name: Tailwind WordPress Plugin Example
 * Description: An example WordPress plugin for using Tailwind css in Gutenberg editor with webpack and sass
 * Plugin URI:  https://codeytek.com
 * Author:      Imran Sayed
 * Author URI:  https://codeytek.com
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Version:     1.0.0
 * Text Domain: twp-example
 *
 * @package headless-cms
 */

define( 'TWP_JS_URI', trailingslashit( plugins_url( 'tailwind-wordpress-plugin-example' ) ) . 'assets/build/js/' );
define( 'TWP_JS_PATH', trailingslashit( plugin_dir_path( __FILE__ ) ). 'assets/build/js/' );
define( 'TWP_CSS_URI', trailingslashit( plugins_url( 'tailwind-wordpress-plugin-example' ) ) . 'assets/build/css/' );
define( 'TWP_CSS_PATH', trailingslashit( plugin_dir_path( __FILE__ ) ). 'assets/build/css/' );

require_once 'inc/class-enqueue-assets.php';
