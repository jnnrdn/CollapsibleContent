<?php
/**
 * Collapsible Content plugin
 *
 * @package     WebJen\CollapsibleContent
 * @author      webjen
 * @copyright   2016 Jenny Ryden
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: Collapsible Content
 * Plugin URI:  https://github.com/webjen/collapsible-content
 * Description: A plugin that allows you to show and hide pieces of content. Click on the teaser to open, click again to close. For FAQ's, Q & A's, hints, marketing teasers and more.
 * Version:     1.0.0
 * Author:      webjen
 * Author URI:  https://jennyryden.com
 * Text Domain: collapsible_content
 * Domain Path: /languages
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Requires WP: 4.7
 * Requires PHP: 5.5
 */

/*
	Collapsible Content is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 2 of the License, or
	any later version.

	Collapsible Content is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with Collapsible Content. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/

namespace WebJen\CollapsibleContent;

if ( ! defined( 'ABSPATH' ) ) {
	die( "Nothing to see here, move along." );
}

define( 'COLLAPSIBLE_CONTENT_PLUGIN', __FILE__ );
define( 'COLLAPSIBLE_CONTENT_DIR', plugin_dir_path( __FILE__ ) );
$plugin_url = plugin_dir_url( __FILE__ );
if ( is_ssl() ) {
	$plugin_url = str_replace( 'http://', 'https://', $plugin_url );
}
define( 'COLLAPSIBLE_CONTENT_URL', $plugin_url );
define( 'COLLAPSIBLE_CONTENT_TEXT_DOMAIN', 'collapsible_content' );

include( __DIR__ . '/src/plugin.php' );