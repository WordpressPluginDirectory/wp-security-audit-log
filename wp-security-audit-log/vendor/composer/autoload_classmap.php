<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);

return array(
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'Tools\\Select2_WPWS' => $baseDir . '/classes/Select2/class-select2-wpws.php',
    'WSAL\\Actions\\Plugin_Installer' => $baseDir . '/classes/Actions/class-plugin-installer.php',
    'WSAL\\Controllers\\Alert' => $baseDir . '/classes/Controllers/class-alert.php',
    'WSAL\\Controllers\\Alert_Manager' => $baseDir . '/classes/Controllers/class-alert-manager.php',
    'WSAL\\Controllers\\Connection' => $baseDir . '/classes/Controllers/class-connection.php',
    'WSAL\\Controllers\\Constants' => $baseDir . '/classes/Controllers/class-constants.php',
    'WSAL\\Controllers\\Cron_Jobs' => $baseDir . '/classes/Controllers/class-cron-jobs.php',
    'WSAL\\Controllers\\Database_Manager' => $baseDir . '/classes/Controllers/class-database-manager.php',
    'WSAL\\Controllers\\Plugin_Extensions' => $baseDir . '/classes/Controllers/class-plugin-extensions.php',
    'WSAL\\Controllers\\Sensors_Load_Manager' => $baseDir . '/classes/Controllers/class-sensors-load-manager.php',
    'WSAL\\Controllers\\Slack\\Slack' => $baseDir . '/classes/Controllers/slack/class-slack.php',
    'WSAL\\Controllers\\Slack\\Slack_API' => $baseDir . '/classes/Controllers/slack/class-slack-api.php',
    'WSAL\\Controllers\\Twilio\\Twilio' => $baseDir . '/classes/Controllers/twilio/class-twilio.php',
    'WSAL\\Controllers\\Twilio\\Twilio_API' => $baseDir . '/classes/Controllers/twilio/class-twilio-api.php',
    'WSAL\\Controllers\\WP_CLI\\WP_CLI_Commands' => $baseDir . '/classes/Controllers/WP_CLI/class-wp-cli-commands.php',
    'WSAL\\Entities\\Abstract_Entity' => $baseDir . '/classes/Entities/class-abstract-entity.php',
    'WSAL\\Entities\\Archive\\Archive_Records' => $baseDir . '/classes/Entities/Archive/class-archive-records.php',
    'WSAL\\Entities\\Archive\\Delete_Records' => $baseDir . '/classes/Entities/Delete/class-delete-records.php',
    'WSAL\\Entities\\Base_Fields' => $baseDir . '/classes/Entities/Fields/class-base-fields.php',
    'WSAL\\Entities\\Custom_Notifications_Entity' => $baseDir . '/classes/notification/Entities/class-custom-notifications-entity.php',
    'WSAL\\Entities\\DBConnection\\MySQL_Connection' => $baseDir . '/classes/Entities/DBConnection/class-mysql-connection.php',
    'WSAL\\Entities\\MainWP_Server_Users' => $baseDir . '/classes/MainWPAddon/Entities/class-mainwp-server-users-entity.php',
    'WSAL\\Entities\\Metadata_Entity' => $baseDir . '/classes/Entities/class-metadata-entity.php',
    'WSAL\\Entities\\Occurrences_Entity' => $baseDir . '/classes/Entities/class-occurrences-entity.php',
    'WSAL\\Entities\\Options_Entity' => $baseDir . '/classes/Entities/class-options-entity.php',
    'WSAL\\Entities\\Query_Builder_Parser' => $baseDir . '/classes/Entities/Fields/query-builder-parser/class-query-builder-parser.php',
    'WSAL\\Extensions\\Helpers\\Notification_Helper' => $baseDir . '/classes/notification/class-notification-helper.php',
    'WSAL\\Extensions\\Helpers\\Notification_Template' => $baseDir . '/classes/notification/class-notification-template.php',
    'WSAL\\Extensions\\Notifications\\Custom_Notifications' => $baseDir . '/classes/notification/Lists/class-custom-notifications.php',
    'WSAL\\Helpers\\Assets' => $baseDir . '/classes/Helpers/class-assets.php',
    'WSAL\\Helpers\\Classes_Helper' => $baseDir . '/classes/Helpers/class-classes-helper.php',
    'WSAL\\Helpers\\DateTime_Formatter_Helper' => $baseDir . '/classes/Helpers/class-datetime-formatter-helper.php',
    'WSAL\\Helpers\\Email_Helper' => $baseDir . '/classes/Helpers/class-email-helper.php',
    'WSAL\\Helpers\\File_Helper' => $baseDir . '/classes/Helpers/class-file-helper.php',
    'WSAL\\Helpers\\Formatters\\Alert_Formatter' => $baseDir . '/classes/Helpers/formatters/class-alert-formatter.php',
    'WSAL\\Helpers\\Formatters\\Alert_Formatter_Configuration' => $baseDir . '/classes/Helpers/formatters/class-alert-formatter-configuration.php',
    'WSAL\\Helpers\\Formatters\\Formatter_Factory' => $baseDir . '/classes/Helpers/formatters/class-formatter-factory.php',
    'WSAL\\Helpers\\Logger' => $baseDir . '/classes/Helpers/class-logger.php',
    'WSAL\\Helpers\\Notices' => $baseDir . '/classes/Helpers/class-notices.php',
    'WSAL\\Helpers\\PHP_Helper' => $baseDir . '/classes/Helpers/class-php-helper.php',
    'WSAL\\Helpers\\Plugin_Settings_Helper' => $baseDir . '/classes/Helpers/class-plugin-settings-helper.php',
    'WSAL\\Helpers\\Plugins_Helper' => $baseDir . '/classes/Helpers/class-plugins-helper.php',
    'WSAL\\Helpers\\Settings\\Settings_Builder' => $baseDir . '/classes/Helpers/settings/class-settings-builder.php',
    'WSAL\\Helpers\\Settings_Helper' => $baseDir . '/classes/Helpers/class-settings-helper.php',
    'WSAL\\Helpers\\Uninstall_Helper' => $baseDir . '/classes/Helpers/class-uninstall-helper.php',
    'WSAL\\Helpers\\Upgrade_Notice' => $baseDir . '/classes/Helpers/class-upgrade-notice.php',
    'WSAL\\Helpers\\User_Helper' => $baseDir . '/classes/Helpers/class-user-helper.php',
    'WSAL\\Helpers\\User_Utils' => $baseDir . '/classes/Helpers/class-user-utils.php',
    'WSAL\\Helpers\\Validator' => $baseDir . '/classes/Helpers/class-validator.php',
    'WSAL\\Helpers\\View_Manager' => $baseDir . '/classes/Helpers/class-view-manager.php',
    'WSAL\\Helpers\\WP_Helper' => $baseDir . '/classes/Helpers/class-wp-helper.php',
    'WSAL\\Helpers\\Widget_Manager' => $baseDir . '/classes/Helpers/class-widget-manager.php',
    'WSAL\\ListAdminEvents\\List_Events' => $baseDir . '/classes/ListAdminEvents/class-list-events.php',
    'WSAL\\Loggers\\Database_Logger' => $baseDir . '/classes/Loggers/class-database-logger.php',
    'WSAL\\Loggers\\Notification_Logger' => $baseDir . '/classes/notification/class-notification-logger.php',
    'WSAL\\MainWP\\MainWP_API' => $baseDir . '/classes/MainWPAddon/class-mainwp-api.php',
    'WSAL\\MainWP\\MainWP_Addon' => $baseDir . '/classes/MainWPAddon/class-mainwp-addon.php',
    'WSAL\\MainWP\\MainWP_Helper' => $baseDir . '/classes/MainWPAddon/class-mainwp-helper.php',
    'WSAL\\MainWP\\MainWP_Settings' => $baseDir . '/classes/MainWPAddon/class-mainwp-settings.php',
    'WSAL\\Migration\\Metadata_Migration_440' => $baseDir . '/classes/Migration/class-metadata-migration-440.php',
    'WSAL\\PluginExtensions\\WFCM_Extension' => $baseDir . '/classes/PluginExtensions/class-wfcm-extension.php',
    'WSAL\\Utils\\Abstract_Migration' => $baseDir . '/classes/Migration/class-abstract-migration.php',
    'WSAL\\Utils\\Migrate_53' => $baseDir . '/classes/Migration/class-migrate-53.php',
    'WSAL\\Utils\\Migration' => $baseDir . '/classes/Migration/class-migration.php',
    'WSAL\\Views\\Notifications' => $baseDir . '/classes/notification/class-notifications.php',
    'WSAL\\Views\\Premium_Features' => $baseDir . '/classes/Views/class-premium-features.php',
    'WSAL\\Views\\Setup_Wizard' => $baseDir . '/classes/Views/class-setup-wizard.php',
    'WSAL\\WP_Sensors\\ACF_Meta_Sensor' => $baseDir . '/classes/WPSensors/class-acf-meta-sensor.php',
    'WSAL\\WP_Sensors\\ACF_Sensor' => $baseDir . '/classes/WPSensors/class-acf-sensor.php',
    'WSAL\\WP_Sensors\\Alerts\\ACF_Custom_Alerts' => $baseDir . '/classes/WPSensors/Alerts/class-acf-custom-alerts.php',
    'WSAL\\WP_Sensors\\Alerts\\BBPress_Custom_Alerts' => $baseDir . '/classes/WPSensors/Alerts/class-bbpress-custom-alerts.php',
    'WSAL\\WP_Sensors\\Alerts\\Gravity_Forms_Custom_Alerts' => $baseDir . '/classes/WPSensors/Alerts/class-gravity-forms-custom-alerts.php',
    'WSAL\\WP_Sensors\\Alerts\\MainWP_Server_Custom_Alerts' => $baseDir . '/classes/WPSensors/Alerts/class-mainwp-server-custom-alerts.php',
    'WSAL\\WP_Sensors\\Alerts\\Memberpress_Custom_Alerts' => $baseDir . '/classes/WPSensors/Alerts/class-memberpress-custom-alerts.php',
    'WSAL\\WP_Sensors\\Alerts\\Multisite_Custom_Alerts' => $baseDir . '/classes/WPSensors/Alerts/class-multisite-custom-alerts.php',
    'WSAL\\WP_Sensors\\Alerts\\Redirection_Custom_Alerts' => $baseDir . '/classes/WPSensors/Alerts/class-redirection-custom-alerts.php',
    'WSAL\\WP_Sensors\\Alerts\\Tablepress_Custom_Alerts' => $baseDir . '/classes/WPSensors/Alerts/class-tablepress-custom-alerts.php',
    'WSAL\\WP_Sensors\\Alerts\\WPForms_Custom_Alerts' => $baseDir . '/classes/WPSensors/Alerts/class-wpforms-custom-alerts.php',
    'WSAL\\WP_Sensors\\Alerts\\WP_2FA_Custom_Alerts' => $baseDir . '/classes/WPSensors/Alerts/class-wp-2fa-custom-alerts.php',
    'WSAL\\WP_Sensors\\Alerts\\WooCommerce_Custom_Alerts' => $baseDir . '/classes/WPSensors/Alerts/class-woocommerce-custom-alerts.php',
    'WSAL\\WP_Sensors\\Alerts\\Yoast_Custom_Alerts' => $baseDir . '/classes/WPSensors/Alerts/class-yoast-custom-alerts.php',
    'WSAL\\WP_Sensors\\BBPress_Sensor' => $baseDir . '/classes/WPSensors/class-bbpress-sensor.php',
    'WSAL\\WP_Sensors\\BBPress_System_Sensor' => $baseDir . '/classes/WPSensors/class-bbpress-system-sensor.php',
    'WSAL\\WP_Sensors\\BBPress_User_Sensor' => $baseDir . '/classes/WPSensors/class-bbpress-user-sensor.php',
    'WSAL\\WP_Sensors\\Gravity_Forms_Sensor' => $baseDir . '/classes/WPSensors/class-gravity-forms-sensor.php',
    'WSAL\\WP_Sensors\\Helpers\\ACF_Helper' => $baseDir . '/classes/WPSensors/Helpers/class-acf-helper.php',
    'WSAL\\WP_Sensors\\Helpers\\BBPress_Helper' => $baseDir . '/classes/WPSensors/Helpers/class-bbpress-helper.php',
    'WSAL\\WP_Sensors\\Helpers\\GravityForms_Helper' => $baseDir . '/classes/WPSensors/Helpers/class-gravityforms-helper.php',
    'WSAL\\WP_Sensors\\Helpers\\MainWP_Server_Helper' => $baseDir . '/classes/WPSensors/Helpers/class-mainwp-server-helper.php',
    'WSAL\\WP_Sensors\\Helpers\\MemberPress_Helper' => $baseDir . '/classes/WPSensors/Helpers/class-memberpress-helper.php',
    'WSAL\\WP_Sensors\\Helpers\\Redirection_Helper' => $baseDir . '/classes/WPSensors/Helpers/class-redirection-helper.php',
    'WSAL\\WP_Sensors\\Helpers\\TablePress_Helper' => $baseDir . '/classes/WPSensors/Helpers/class-tablepress-helper.php',
    'WSAL\\WP_Sensors\\Helpers\\WPForms_Helper' => $baseDir . '/classes/WPSensors/Helpers/class-wpforms-helper.php',
    'WSAL\\WP_Sensors\\Helpers\\WP_2FA_Helper' => $baseDir . '/classes/WPSensors/Helpers/class-wp-2fa-helper.php',
    'WSAL\\WP_Sensors\\Helpers\\Woocommerce_Helper' => $baseDir . '/classes/WPSensors/Helpers/class-woocommerce-helper.php',
    'WSAL\\WP_Sensors\\Helpers\\Yoast_SEO_Helper' => $baseDir . '/classes/WPSensors/Helpers/class-yoast-seo-helper.php',
    'WSAL\\WP_Sensors\\MainWP_Server_Sensor' => $baseDir . '/classes/WPSensors/class-mainwp-server-sensor.php',
    'WSAL\\WP_Sensors\\Main_WP_Sensor' => $baseDir . '/classes/WPSensors/class-main-wp-sensor.php',
    'WSAL\\WP_Sensors\\MemberPress_Sensor' => $baseDir . '/classes/WPSensors/class-memberpress-sensor.php',
    'WSAL\\WP_Sensors\\Multisite_Sign_Up_Sensor' => $baseDir . '/classes/WPSensors/class-multisite-sign-up-sensor.php',
    'WSAL\\WP_Sensors\\Redirection_Sensor' => $baseDir . '/classes/WPSensors/class-redirection-sensor.php',
    'WSAL\\WP_Sensors\\TablePress_Sensor' => $baseDir . '/classes/WPSensors/class-tablepress-sensor.php',
    'WSAL\\WP_Sensors\\WPForms_Sensor' => $baseDir . '/classes/WPSensors/class-wpforms-sensor.php',
    'WSAL\\WP_Sensors\\WP_2FA_Sensor' => $baseDir . '/classes/WPSensors/class-wp-2fa-sensor.php',
    'WSAL\\WP_Sensors\\WP_Comments_Sensor' => $baseDir . '/classes/WPSensors/class-wp-comments-sensor.php',
    'WSAL\\WP_Sensors\\WP_Content_Sensor' => $baseDir . '/classes/WPSensors/class-wp-content-sensor.php',
    'WSAL\\WP_Sensors\\WP_Database_Sensor' => $baseDir . '/classes/WPSensors/class-wp-database-sensor.php',
    'WSAL\\WP_Sensors\\WP_Files_Sensor' => $baseDir . '/classes/WPSensors/class-wp-files-sensor.php',
    'WSAL\\WP_Sensors\\WP_Log_In_Out_Sensor' => $baseDir . '/classes/WPSensors/class-wp-log-in-out-sensor.php',
    'WSAL\\WP_Sensors\\WP_Menus_Sensor' => $baseDir . '/classes/WPSensors/class-wp-menus-sensor.php',
    'WSAL\\WP_Sensors\\WP_Meta_Data_Sensor' => $baseDir . '/classes/WPSensors/class-wp-metadata-sensor.php',
    'WSAL\\WP_Sensors\\WP_Multisite_Sensor' => $baseDir . '/classes/WPSensors/class-wp-multisite-sensor.php',
    'WSAL\\WP_Sensors\\WP_Plugins_Themes_Sensor' => $baseDir . '/classes/WPSensors/class-wp-plugins-themes-sensor.php',
    'WSAL\\WP_Sensors\\WP_Register_Sensor' => $baseDir . '/classes/WPSensors/class-wp-register-sensor.php',
    'WSAL\\WP_Sensors\\WP_Request_Sensor' => $baseDir . '/classes/WPSensors/class-wp-request-sensor.php',
    'WSAL\\WP_Sensors\\WP_System_Sensor' => $baseDir . '/classes/WPSensors/class-wp-system-sensor.php',
    'WSAL\\WP_Sensors\\WP_User_Profile_Sensor' => $baseDir . '/classes/WPSensors/class-wp-user-profile-sensor.php',
    'WSAL\\WP_Sensors\\WSAL_Sensors_Widgets' => $baseDir . '/classes/WPSensors/class-wp-widgets-sensor.php',
    'WSAL\\WP_Sensors\\WooCommerce_Public_Sensor' => $baseDir . '/classes/WPSensors/class-woocommerce-public-sensor.php',
    'WSAL\\WP_Sensors\\WooCommerce_Sensor' => $baseDir . '/classes/WPSensors/class-woocommerce-sensor.php',
    'WSAL\\WP_Sensors\\Yoast_SEO_Sensor' => $baseDir . '/classes/WPSensors/class-yoast-seo-sensor.php',
    'WSAL\\WP_Sensors_Helpers\\WooCommerce_Sensor_Helper' => $baseDir . '/classes/WPSensors/class-woocommerce-sensor-helper.php',
    'WSAL\\WP_Sensors_Helpers\\WooCommerce_Sensor_Helper_Second' => $baseDir . '/classes/WPSensors/class-woocommerce-sensor-helper-second.php',
    'WSAL\\Writers\\CSV_Writer' => $baseDir . '/classes/Writers/class-csv-writer.php',
    'WSAL\\Writers\\HTML_Writer' => $baseDir . '/classes/Writers/class-html-writer.php',
    'WSAL_AbstractLogger' => $baseDir . '/classes/AbstractLogger.php',
    'WSAL_AbstractView' => $baseDir . '/classes/AbstractView.php',
    'WSAL_Views_AuditLog' => $baseDir . '/classes/Views/AuditLog.php',
    'WSAL_Views_Help' => $baseDir . '/classes/Views/Help.php',
    'WSAL_Views_Settings' => $baseDir . '/classes/Views/Settings.php',
    'WSAL_Views_ToggleAlerts' => $baseDir . '/classes/Views/ToggleAlerts.php',
    'WpSecurityAuditLog' => $baseDir . '/classes/class-wp-security-audit-log.php',
);
