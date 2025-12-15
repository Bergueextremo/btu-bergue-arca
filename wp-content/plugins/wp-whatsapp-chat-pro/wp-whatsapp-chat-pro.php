<?php

/**
 * Plugin Name:             Social Chat PRO
 * Description:             Social Chat PRO allows your visitors to contact you or your team through Social Chat with a single click.
 * Plugin URI:              https://quadlayers.com/portfolio/whatsapp-chat/
 * Version:                 2.7.5
 * Text Domain:             wp-whatsapp-chat-pro
 * Author:                  QuadLayers
 * Author URI:              https://quadlayers.com
 * License:                 Copyright
 * Domain Path:             /languages
 * Request at least:        4.7.0
 * Tested up to:            6.1
 * Requires PHP:            5.6
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'QLWAPP_PRO_PLUGIN_NAME', 'Social Chat PRO' );
define( 'QLWAPP_PRO_PLUGIN_VERSION', '2.7.5' );
define( 'QLWAPP_PRO_PLUGIN_FILE', __FILE__ );
define( 'QLWAPP_PRO_PLUGIN_DIR', __DIR__ . DIRECTORY_SEPARATOR );
define( 'QLWAPP_PRO_DEMO_URL', 'https://quadlayers.com/portfolio/whatsapp-chat/?utm_source=qlwapp_admin' );
define( 'QLWAPP_PRO_LICENSES_URL', 'https://quadlayers.com/account/licenses/?utm_source=qlwapp_admin' );
define( 'QLWAPP_PRO_SUPPORT_URL', 'https://quadlayers.com/account/support/?utm_source=qlwapp_admin' );
/**
 * Load composer autoload.
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Load composer packages.
 */
require_once __DIR__ . '/vendor_packages/wp-i18n-map.php';
require_once __DIR__ . '/vendor_packages/wp-dashboard-widget-news.php';
require_once __DIR__ . '/vendor_packages/wp-license-client.php';
require_once __DIR__ . '/vendor_packages/wp-notice-plugin-required.php';
require_once __DIR__ . '/vendor_packages/wp-plugin-table-links.php';
/**
 * Load plugin.
 */
require_once __DIR__ . '/includes/qlwapp.php';

