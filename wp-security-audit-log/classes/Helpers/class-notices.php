<?php
/**
 * Responsible for notices showing.
 *
 * @package    wsal
 * @subpackage helpers
 * @copyright  2025 Melapress
 * @license    https://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @link       https://wordpress.org/plugins/wp-security-audit-log/
 * @since 4.6.0
 */

declare(strict_types=1);

namespace WSAL\Helpers;

use WSAL\Helpers\Settings_Helper;
use WSAL\Utils\Abstract_Migration;

if ( ! class_exists( '\WSAL\Helpers\Notices' ) ) {

	/**
	 * Holds the notices of the plugin
	 *
	 * @since 4.6.0
	 */
	class Notices {

		/**
		 * That is a global constant used for showing the ebook notice.
		 */
		public const EBOOK_NOTICE = 'ebook-notice-show';

		/**
		 * Holds the number of notices we have to show in the admin menu bubble.
		 *
		 * @var integer
		 *
		 * @since 5.2.2
		 */
		private static $number_of_notices = 0;

		/**
		 * Sets the class hooks.
		 *
		 * @return void
		 *
		 * @since 4.6.0
		 */
		public static function init() {
			global $current_screen;

			if ( ! isset( $current_screen ) ) {
				return;
			}

			if ( in_array( $current_screen->base, \WpSecurityAuditLog::get_plugin_screens_array(), true ) ) {

				$notice_upgrade = Settings_Helper::get_boolean_option_value( Abstract_Migration::UPGRADE_NOTICE, false );
				if ( $notice_upgrade ) {
					Settings_Helper::delete_option_value( self::EBOOK_NOTICE );
					self::display_notice_upgrade();
				}

				// if ( 'free' === \WpSecurityAuditLog::get_plugin_version() ) {
				// 	$ebook = Settings_Helper::get_boolean_option_value( self::EBOOK_NOTICE, false );
				// 	if ( ! $ebook ) {
				// 		self::display_ebook_notice();
				// 	}
				// }
			}
		}

		/**
		 * Responsible for initializing the AJAX hooks for the notifications
		 *
		 * @return void
		 *
		 * @since 4.6.0
		 */
		public static function init_ajax_hooks() {

			$notice_upgrade = Settings_Helper::get_boolean_option_value( Abstract_Migration::UPGRADE_NOTICE, false );
			if ( $notice_upgrade ) {
				\add_action( 'wp_ajax_wsal_dismiss_upgrade_notice', array( __CLASS__, 'dismiss_upgrade_notice' ) );

				++self::$number_of_notices;
			}

			// if ( 'free' === \WpSecurityAuditLog::get_plugin_version() ) {
			// 	$ebook = Settings_Helper::get_boolean_option_value( self::EBOOK_NOTICE, false );
			// 	if ( ! $ebook ) {
			// 		++self::$number_of_notices;
			// 		\add_action( 'wp_ajax_wsal_dismiss_ebook_notice', array( __CLASS__, 'dismiss_ebook_notice' ) );
			// 	}
			// }
		}

		/**
		 * Display upgrade notice.
		 *
		 * @since 5.1.0
		 */
		public static function display_notice_upgrade() {
			include_once WSAL_BASE_DIR . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . 'Free' . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . 'plugin-update-card.php';
		}

		/**
		 * Display upgrade notice.
		 *
		 * @since 5.1.1
		 */
		public static function display_ebook_notice() {
			include_once WSAL_BASE_DIR . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . 'Free' . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . 'wsal-ebook-card.php';
		}

		/**
		 * Method: Ajax request handler to dismiss upgrade notice.
		 *
		 * @since 5.1.0
		 */
		public static function dismiss_upgrade_notice() {
			if ( ! Settings_Helper::current_user_can( 'edit' ) ) {
				\wp_send_json_error();
			}

			if ( ! array_key_exists( 'nonce', $_POST ) || ! wp_verify_nonce( \sanitize_text_field( \wp_unslash( $_POST['nonce'] ) ), 'dismiss_upgrade_notice' ) ) {
				\wp_send_json_error( \esc_html_e( 'nonce is not provided or incorrect', 'wp-security-audit-log' ) );
			}

			Settings_Helper::delete_option_value( Abstract_Migration::UPGRADE_NOTICE );
			\wp_send_json_success();
		}

		/**
		 * Method: Ajax request handler to dismiss ebook notice.
		 *
		 * @since 5.1.1
		 */
		public static function dismiss_ebook_notice() {
			if ( ! Settings_Helper::current_user_can( 'edit' ) ) {
				\wp_send_json_error();
			}

			if ( ! array_key_exists( 'nonce', $_POST ) || ! wp_verify_nonce( \sanitize_text_field( \wp_unslash( $_POST['nonce'] ) ), 'dismiss_ebook_notice' ) ) {
				\wp_send_json_error( \esc_html_e( 'nonce is not provided or incorrect', 'wp-security-audit-log' ) );
			}

			Settings_Helper::set_option_value( self::EBOOK_NOTICE, true );
			\wp_send_json_success();
		}

		/**
		 * Returns the number of notifications we have to show.
		 *
		 * @return int
		 *
		 * @since 5.2.2
		 */
		public static function get_number_of_notices(): int {
			return self::$number_of_notices;
		}
	}
}
