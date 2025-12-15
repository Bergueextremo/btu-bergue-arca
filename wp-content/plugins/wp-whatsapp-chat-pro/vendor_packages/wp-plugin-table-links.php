<?php

if ( class_exists( 'QuadLayers\\WP_Plugin_Table_Links\\Load' ) ) {
	new \QuadLayers\WP_Plugin_Table_Links\Load(
		QLWAPP_PRO_PLUGIN_FILE,
		array(
			array(
				'text' => esc_html__( 'Support', 'perfect-woocommerce-brands-pro' ),
				'url'  => QLWAPP_PRO_SUPPORT_URL,
			),
			array(
				'text' => esc_html__( 'License', 'perfect-woocommerce-brands-pro' ),
				'url'  => QLWAPP_PRO_LICENSES_URL,
			),
		)
	);
}
