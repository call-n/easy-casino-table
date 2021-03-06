<?php
/**
 * Plugin Name: Easy Casino Table
 * Plugin URI: http://mediaclever.se/
 * Description: Simple table plugin for creating nice top lists.
 * Author: Media Clever
 * Author URI: http://mediaclever.se/plugin/
 * Version: 1.0.0
 * License: GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package ectplugin
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once plugin_dir_path( __FILE__ ) . 'src/init.php';
// add casino post type
require_once plugin_dir_path( __FILE__ ) . '/includes/ect-post-type.php';
// plugin setup
require_once plugin_dir_path( __FILE__ ) . '/includes/plugin-setup.php';
// redirect file
require_once plugin_dir_path( __FILE__ ) . '/includes/ect-redirect.php';
// redirect file tc
require_once plugin_dir_path( __FILE__ ) . '/includes/ect-redirect-tc.php';
