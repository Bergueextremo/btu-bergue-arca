<?php
if ( ! class_exists( 'QLWAPP_PRO_Frontend' ) ) {

	class QLWAPP_PRO_Frontend {

		protected static $instance;

		function add_js() {

			wp_enqueue_style( 'qlwapp-icons', plugins_url( '/assets/qlwapp-icons.min.css', QLWAPP_PRO_PLUGIN_FILE ), null, QLWAPP_PRO_PLUGIN_VERSION, 'all' );

			$settings_model = new QLWAPP_Settings();
			$settings       = $settings_model->get();

			if ( empty( $settings['googleAnalytics'] ) || $settings['googleAnalytics'] == 'disable' ) {
				return;
			}

			$ga_key      = $settings['googleAnalytics'] == 'v3' ? trim( $settings['googleAnalyticsV3Id'] ) : trim( $settings['googleAnalyticsV4Id'] );
			$ga_category = $settings['googleAnalyticsCategory'] ? trim( $settings['googleAnalyticsCategory'] ) : 'Quadlayers Social Chat';
			$ga_label    = $settings['googleAnalyticsLabel'] ? trim( $settings['googleAnalyticsLabel'] ) : 'Quadlayers Social Chat';

			if ( 'yes' === $settings['googleAnalyticsScript'] ) {
				wp_enqueue_script( 'qlwapp-analytics', sprintf( 'https://www.googletagmanager.com/gtag/js?id=%s', esc_attr( $ga_key ) ), array(), null );
			} else {
				wp_register_script( 'qlwapp-analytics', '', array(), '', true );
				wp_enqueue_script( 'qlwapp-analytics' );
			}
			wp_add_inline_script(
				'qlwapp-analytics',
				sprintf(
					'( function($) {
						window.dataLayer = window.dataLayer || [];

						function gtag() {
							dataLayer.push(arguments);
						}
	
						gtag("js", new Date());
						gtag("config", "%1$s");
	
						function ga_events(events) {
	
							const {
								ga_action,
								ga_category,
								ga_label,
							} = events;
	
							if (typeof gtag !== "undefined") {
								gtag("event", ga_action, {
									"event_category": ga_category,
									"event_label": ga_label,
								});
							} else 
							if (typeof ga !== "undefined" && typeof ga.getAll !== "undefined") {
								var tracker = ga.getAll();
								tracker[0].send("event", ga_category, ga_action, ga_label);
							} else 
							if (typeof __gaTracker !== "undefined") {
								__gaTracker("send", "event", ga_category, ga_action, ga_label);
							}
	
							if (typeof dataLayer !== "undefined") {
								dataLayer.push({
									"event": ga_action,
									"event_action": ga_action,
									"event_category": ga_category,
									"event_label": ga_label,
								});
							}
						}
	
						$(window).on("qlwapp.click", function () {
							ga_events({
								ga_action: "click:quadlayers_social_chat",
								ga_category: "%2$s",
								ga_label: "%3$s",
							});
						});
					} ) (jQuery);',
					$ga_key,
					$ga_category,
					$ga_label
				)
			);
		}

		function box_premium( $template ) {

			include_once QLWAPP_PLUGIN_DIR . 'includes/models/Box.php';
			include_once QLWAPP_PLUGIN_DIR . 'includes/models/Contact.php';
			include_once QLWAPP_PLUGIN_DIR . 'includes/models/Display.php';
			include_once QLWAPP_PLUGIN_DIR . 'includes/models/Button.php';
			include_once QLWAPP_PLUGIN_DIR . 'includes/controllers/Display_services.php';

			$box_model       = new QLWAPP_Box();
			$contact_model   = new QLWAPP_Contact();
			$button_model    = new QLWAPP_Button();
			$display_model   = new QLWAPP_Display();
			$display_service = new QLWAPP_DisplayServices_Controller();
			$contacts        = $contact_model->get_contacts_reorder();
			$display         = $display_model->get();
			$button          = $button_model->get();
			$box             = $box_model->get();
			$template        = QLWAPP_PRO_PLUGIN_DIR . 'template/box_premium.php';
			return $template;
		}

		function load() {
			add_action( 'wp_enqueue_scripts', array( $this, 'add_js' ) );
			add_filter( 'qlwapp_box_template', array( $this, 'box_premium' ) );
		}

		function init() {
			add_action( 'qlwapp_load', array( $this, 'load' ) );
		}

		public static function instance() {
			if ( ! isset( self::$instance ) ) {
				self::$instance = new self();
				self::$instance->init();
			}
			return self::$instance;
		}
	}

	QLWAPP_PRO_Frontend::instance();
}
