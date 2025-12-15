<?php

require_once QLWAPP_PLUGIN_DIR . 'includes/controllers/QLWAPP_Controller.php';

class QLWAPP_PRO_License_Controller extends QLWAPP_Controller {

	protected static $instance;

	function add_menu() {
		remove_submenu_page( QLWAPP_DOMAIN, QLWAPP_DOMAIN . '_premium' );
	}

	function init() {
		add_action( 'admin_menu', array( $this, 'add_menu' ) );
	}

	public static function instance() {
		if ( ! isset( self::$instance ) ) {
			self::$instance = new self();
			self::$instance->init();
		}
		return self::$instance;
	}

}

QLWAPP_PRO_License_Controller::instance();
