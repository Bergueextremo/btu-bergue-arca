<?php

if ( class_exists( 'QuadLayers\\WP_License_Client\\Load' ) ) {

	if ( ! function_exists( 'qlwapp_license_client_integration' ) ) {

		function qlwapp_license_client_integration() {

			global $qlwapp_license_client;

			if ( ! isset( $qlwapp_license_client ) ) {

				$qlwapp_license_client = new QuadLayers\WP_License_Client\Load(
					array(
						'api_url'           => 'https://quadlayers.com/wp-json/wc/wlm/',
						'product_key'       => '4c3b7745ace5a4648fe6b434964955b6',
						'plugin_file'       => QLWAPP_PRO_PLUGIN_FILE,
						'parent_menu_slug'  => 'qlwapp',
						'license_menu_slug' => 'qlwapp_license',
						'support_url'       => QLWAPP_PRO_SUPPORT_URL,
					)
				);
			}

			return $qlwapp_license_client;
		}

		qlwapp_license_client_integration();
	}
}
