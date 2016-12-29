<?php
/**
 * Zeerat
 *
 * This plugin allows you to easily integrate Zeerat into your WordPress website.
 *
 * @link    http://s3rgiosan.com/
 * @since   1.0.0
 *
 * @package Zeerat
 *
 * @wordpress-plugin
 * Plugin Name:       Zeerat
 * Plugin URI:        https://github.com/s3rgiosan/wpzeerat/
 * Description:       Easy integration of Zeerat into your WordPress website.
 * Version:           1.0.0
 * Author:            Sérgio Santos
 * Author URI:        http://s3rgiosan.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wpzeerat
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/s3rgiosan/wpzeerat
 * GitHub Branch:     master
 */

if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

use s3rgiosan\Zeerat;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Begins execution of the plugin.
 *
 * @since 1.0.0
 */
\add_action( 'plugins_loaded', function () {
	$plugin = new Zeerat\Plugin( 'wpzeerat', '1.0.0' );
	$plugin->run();
} );
