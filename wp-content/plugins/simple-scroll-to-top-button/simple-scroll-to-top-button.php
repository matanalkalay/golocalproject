<?php
/**
 * Plugin Name: Simple Scroll to Top Button
 * Plugin URI: https://github.com/ArthurGareginyan/simple-scroll-to-top-button
 * Description: Easily add cross browser "Scroll to Top" button to your website. It will be responsive and compatible with all major browsers. It will work with any theme!
 * Author: Arthur Gareginyan
 * Author URI: https://www.arthurgareginyan.com
 * Version: 4.6
 * License: GPL3
 * Text Domain: simple-scroll-to-top-button
 * Domain Path: /languages/
 *
 * Copyright 2016-2017 Arthur Gareginyan ( website : https://www.arthurgareginyan.com )
 *
 * This plugin is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This plugin is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this plugin. If not, see <http://www.gnu.org/licenses/>.
 *
 *
 *               █████╗ ██████╗ ████████╗██╗  ██╗██╗   ██╗██████╗
 *              ██╔══██╗██╔══██╗╚══██╔══╝██║  ██║██║   ██║██╔══██╗
 *              ███████║██████╔╝   ██║   ███████║██║   ██║██████╔╝
 *              ██╔══██║██╔══██╗   ██║   ██╔══██║██║   ██║██╔══██╗
 *              ██║  ██║██║  ██║   ██║   ██║  ██║╚██████╔╝██║  ██║
 *              ╚═╝  ╚═╝╚═╝  ╚═╝   ╚═╝   ╚═╝  ╚═╝ ╚═════╝ ╚═╝  ╚═╝
 *
 *   ██████╗  █████╗ ██████╗ ███████╗ ██████╗ ██╗███╗   ██╗██╗   ██╗ █████╗ ███╗   ██╗
 *  ██╔════╝ ██╔══██╗██╔══██╗██╔════╝██╔════╝ ██║████╗  ██║╚██╗ ██╔╝██╔══██╗████╗  ██║
 *  ██║  ███╗███████║██████╔╝█████╗  ██║  ███╗██║██╔██╗ ██║ ╚████╔╝ ███████║██╔██╗ ██║
 *  ██║   ██║██╔══██║██╔══██╗██╔══╝  ██║   ██║██║██║╚██╗██║  ╚██╔╝  ██╔══██║██║╚██╗██║
 *  ╚██████╔╝██║  ██║██║  ██║███████╗╚██████╔╝██║██║ ╚████║   ██║   ██║  ██║██║ ╚████║
 *   ╚═════╝ ╚═╝  ╚═╝╚═╝  ╚═╝╚══════╝ ╚═════╝ ╚═╝╚═╝  ╚═══╝   ╚═╝   ╚═╝  ╚═╝╚═╝  ╚═══╝
 *
 */


/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Define global constants
 *
 * @since 4.2
 */
$plugin_data = get_file_data( __FILE__, array( 'name'=>'Plugin Name', 'version'=>'Version', 'text'=>'Text Domain' ) );
function ssttbutton_define_constants( $constant_name, $value ) {
    $constant_name = 'SSTOPB_' . $constant_name;
    if ( !defined( $constant_name ) )
        define( $constant_name, $value );
}
ssttbutton_define_constants( 'DIR', dirname( plugin_basename( __FILE__ ) ) );
ssttbutton_define_constants( 'BASE', plugin_basename( __FILE__ ) );
ssttbutton_define_constants( 'URL', plugin_dir_url( __FILE__ ) );
ssttbutton_define_constants( 'PATH', plugin_dir_path( __FILE__ ) );
ssttbutton_define_constants( 'SLUG', dirname( plugin_basename( __FILE__ ) ) );
ssttbutton_define_constants( 'NAME', $plugin_data['name'] );
ssttbutton_define_constants( 'VERSION', $plugin_data['version'] );
ssttbutton_define_constants( 'TEXT', $plugin_data['text'] );
ssttbutton_define_constants( 'PREFIX', 'ssttbutton' );
ssttbutton_define_constants( 'SETTINGS', 'ssttbutton' );

/**
 * Load the plugin modules
 *
 * @since 4.2
 */
require_once( SSTOPB_PATH . 'inc/php/core.php' );
require_once( SSTOPB_PATH . 'inc/php/upgrade.php' );
require_once( SSTOPB_PATH . 'inc/php/versioning.php' );
require_once( SSTOPB_PATH . 'inc/php/enqueue.php' );
require_once( SSTOPB_PATH . 'inc/php/functional.php' );
require_once( SSTOPB_PATH . 'inc/php/page.php' );
require_once( SSTOPB_PATH . 'inc/php/messages.php' );
require_once( SSTOPB_PATH . 'inc/php/uninstall.php' );
