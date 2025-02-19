<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit16754
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WSAL\\Extensions\\' => 16,
            'WSAL\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WSAL\\Extensions\\' => 
        array (
            0 => __DIR__ . '/../..' . '/extensions',
        ),
        'WSAL\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Tools\\Select2_WPWS' => __DIR__ . '/../..' . '/classes/Select2/class-select2-wpws.php',
        'WSAL\\Actions\\Plugin_Installer' => __DIR__ . '/../..' . '/classes/Actions/class-plugin-installer.php',
        'WSAL\\Controllers\\Alert' => __DIR__ . '/../..' . '/classes/Controllers/class-alert.php',
        'WSAL\\Controllers\\Alert_Manager' => __DIR__ . '/../..' . '/classes/Controllers/class-alert-manager.php',
        'WSAL\\Controllers\\Connection' => __DIR__ . '/../..' . '/classes/Controllers/class-connection.php',
        'WSAL\\Controllers\\Constants' => __DIR__ . '/../..' . '/classes/Controllers/class-constants.php',
        'WSAL\\Controllers\\Cron_Jobs' => __DIR__ . '/../..' . '/classes/Controllers/class-cron-jobs.php',
        'WSAL\\Controllers\\Database_Manager' => __DIR__ . '/../..' . '/classes/Controllers/class-database-manager.php',
        'WSAL\\Controllers\\Plugin_Extensions' => __DIR__ . '/../..' . '/classes/Controllers/class-plugin-extensions.php',
        'WSAL\\Controllers\\Sensors_Load_Manager' => __DIR__ . '/../..' . '/classes/Controllers/class-sensors-load-manager.php',
        'WSAL\\Controllers\\Twilio\\Twilio' => __DIR__ . '/../..' . '/classes/Controllers/twilio/class-twilio.php',
        'WSAL\\Controllers\\Twilio\\Twilio_API' => __DIR__ . '/../..' . '/classes/Controllers/twilio/class-twilio-api.php',
        'WSAL\\Controllers\\WP_CLI\\WP_CLI_Commands' => __DIR__ . '/../..' . '/classes/Controllers/WP_CLI/class-wp-cli-commands.php',
        'WSAL\\Entities\\Abstract_Entity' => __DIR__ . '/../..' . '/classes/Entities/class-abstract-entity.php',
        'WSAL\\Entities\\Archive\\Archive_Records' => __DIR__ . '/../..' . '/classes/Entities/Archive/class-archive-records.php',
        'WSAL\\Entities\\Archive\\Delete_Records' => __DIR__ . '/../..' . '/classes/Entities/Delete/class-delete-records.php',
        'WSAL\\Entities\\Base_Fields' => __DIR__ . '/../..' . '/classes/Entities/Fields/class-base-fields.php',
        'WSAL\\Entities\\Custom_Notifications_Entity' => __DIR__ . '/../..' . '/classes/notification/Entities/class-custom-notifications-entity.php',
        'WSAL\\Entities\\DBConnection\\MySQL_Connection' => __DIR__ . '/../..' . '/classes/Entities/DBConnection/class-mysql-connection.php',
        'WSAL\\Entities\\MainWP_Server_Users' => __DIR__ . '/../..' . '/classes/MainWPAddon/Entities/class-mainwp-server-users-entity.php',
        'WSAL\\Entities\\Metadata_Entity' => __DIR__ . '/../..' . '/classes/Entities/class-metadata-entity.php',
        'WSAL\\Entities\\Occurrences_Entity' => __DIR__ . '/../..' . '/classes/Entities/class-occurrences-entity.php',
        'WSAL\\Entities\\Options_Entity' => __DIR__ . '/../..' . '/classes/Entities/class-options-entity.php',
        'WSAL\\Entities\\Query_Builder_Parser' => __DIR__ . '/../..' . '/classes/Entities/Fields/query-builder-parser/class-query-builder-parser.php',
        'WSAL\\Extensions\\Helpers\\Notification_Helper' => __DIR__ . '/../..' . '/classes/notification/class-notification-helper.php',
        'WSAL\\Extensions\\Helpers\\Notification_Template' => __DIR__ . '/../..' . '/classes/notification/class-notification-template.php',
        'WSAL\\Extensions\\Notifications\\Custom_Notifications' => __DIR__ . '/../..' . '/classes/notification/Lists/class-custom-notifications.php',
        'WSAL\\Helpers\\Assets' => __DIR__ . '/../..' . '/classes/Helpers/class-assets.php',
        'WSAL\\Helpers\\Classes_Helper' => __DIR__ . '/../..' . '/classes/Helpers/class-classes-helper.php',
        'WSAL\\Helpers\\DateTime_Formatter_Helper' => __DIR__ . '/../..' . '/classes/Helpers/class-datetime-formatter-helper.php',
        'WSAL\\Helpers\\Email_Helper' => __DIR__ . '/../..' . '/classes/Helpers/class-email-helper.php',
        'WSAL\\Helpers\\File_Helper' => __DIR__ . '/../..' . '/classes/Helpers/class-file-helper.php',
        'WSAL\\Helpers\\Formatters\\Alert_Formatter' => __DIR__ . '/../..' . '/classes/Helpers/formatters/class-alert-formatter.php',
        'WSAL\\Helpers\\Formatters\\Alert_Formatter_Configuration' => __DIR__ . '/../..' . '/classes/Helpers/formatters/class-alert-formatter-configuration.php',
        'WSAL\\Helpers\\Formatters\\Formatter_Factory' => __DIR__ . '/../..' . '/classes/Helpers/formatters/class-formatter-factory.php',
        'WSAL\\Helpers\\Logger' => __DIR__ . '/../..' . '/classes/Helpers/class-logger.php',
        'WSAL\\Helpers\\Notices' => __DIR__ . '/../..' . '/classes/Helpers/class-notices.php',
        'WSAL\\Helpers\\PHP_Helper' => __DIR__ . '/../..' . '/classes/Helpers/class-php-helper.php',
        'WSAL\\Helpers\\Plugin_Settings_Helper' => __DIR__ . '/../..' . '/classes/Helpers/class-plugin-settings-helper.php',
        'WSAL\\Helpers\\Plugins_Helper' => __DIR__ . '/../..' . '/classes/Helpers/class-plugins-helper.php',
        'WSAL\\Helpers\\Settings\\Settings_Builder' => __DIR__ . '/../..' . '/classes/Helpers/settings/class-settings-builder.php',
        'WSAL\\Helpers\\Settings_Helper' => __DIR__ . '/../..' . '/classes/Helpers/class-settings-helper.php',
        'WSAL\\Helpers\\Uninstall_Helper' => __DIR__ . '/../..' . '/classes/Helpers/class-uninstall-helper.php',
        'WSAL\\Helpers\\Upgrade_Notice' => __DIR__ . '/../..' . '/classes/Helpers/class-upgrade-notice.php',
        'WSAL\\Helpers\\User_Helper' => __DIR__ . '/../..' . '/classes/Helpers/class-user-helper.php',
        'WSAL\\Helpers\\User_Utils' => __DIR__ . '/../..' . '/classes/Helpers/class-user-utils.php',
        'WSAL\\Helpers\\Validator' => __DIR__ . '/../..' . '/classes/Helpers/class-validator.php',
        'WSAL\\Helpers\\View_Manager' => __DIR__ . '/../..' . '/classes/Helpers/class-view-manager.php',
        'WSAL\\Helpers\\WP_Helper' => __DIR__ . '/../..' . '/classes/Helpers/class-wp-helper.php',
        'WSAL\\Helpers\\Widget_Manager' => __DIR__ . '/../..' . '/classes/Helpers/class-widget-manager.php',
        'WSAL\\ListAdminEvents\\List_Events' => __DIR__ . '/../..' . '/classes/ListAdminEvents/class-list-events.php',
        'WSAL\\Loggers\\Database_Logger' => __DIR__ . '/../..' . '/classes/Loggers/class-database-logger.php',
        'WSAL\\Loggers\\Notification_Logger' => __DIR__ . '/../..' . '/classes/notification/class-notification-logger.php',
        'WSAL\\MainWP\\MainWP_API' => __DIR__ . '/../..' . '/classes/MainWPAddon/class-mainwp-api.php',
        'WSAL\\MainWP\\MainWP_Addon' => __DIR__ . '/../..' . '/classes/MainWPAddon/class-mainwp-addon.php',
        'WSAL\\MainWP\\MainWP_Helper' => __DIR__ . '/../..' . '/classes/MainWPAddon/class-mainwp-helper.php',
        'WSAL\\MainWP\\MainWP_Settings' => __DIR__ . '/../..' . '/classes/MainWPAddon/class-mainwp-settings.php',
        'WSAL\\Migration\\Metadata_Migration_440' => __DIR__ . '/../..' . '/classes/Migration/class-metadata-migration-440.php',
        'WSAL\\PluginExtensions\\WFCM_Extension' => __DIR__ . '/../..' . '/classes/PluginExtensions/class-wfcm-extension.php',
        'WSAL\\Utils\\Abstract_Migration' => __DIR__ . '/../..' . '/classes/Migration/class-abstract-migration.php',
        'WSAL\\Utils\\Migrate_53' => __DIR__ . '/../..' . '/classes/Migration/class-migrate-53.php',
        'WSAL\\Utils\\Migration' => __DIR__ . '/../..' . '/classes/Migration/class-migration.php',
        'WSAL\\Views\\Notifications' => __DIR__ . '/../..' . '/classes/notification/class-notifications.php',
        'WSAL\\Views\\Premium_Features' => __DIR__ . '/../..' . '/classes/Views/class-premium-features.php',
        'WSAL\\Views\\Setup_Wizard' => __DIR__ . '/../..' . '/classes/Views/class-setup-wizard.php',
        'WSAL\\WP_Sensors\\ACF_Meta_Sensor' => __DIR__ . '/../..' . '/classes/WPSensors/class-acf-meta-sensor.php',
        'WSAL\\WP_Sensors\\ACF_Sensor' => __DIR__ . '/../..' . '/classes/WPSensors/class-acf-sensor.php',
        'WSAL\\WP_Sensors\\Alerts\\ACF_Custom_Alerts' => __DIR__ . '/../..' . '/classes/WPSensors/Alerts/class-acf-custom-alerts.php',
        'WSAL\\WP_Sensors\\Alerts\\BBPress_Custom_Alerts' => __DIR__ . '/../..' . '/classes/WPSensors/Alerts/class-bbpress-custom-alerts.php',
        'WSAL\\WP_Sensors\\Alerts\\Gravity_Forms_Custom_Alerts' => __DIR__ . '/../..' . '/classes/WPSensors/Alerts/class-gravity-forms-custom-alerts.php',
        'WSAL\\WP_Sensors\\Alerts\\MainWP_Server_Custom_Alerts' => __DIR__ . '/../..' . '/classes/WPSensors/Alerts/class-mainwp-server-custom-alerts.php',
        'WSAL\\WP_Sensors\\Alerts\\Memberpress_Custom_Alerts' => __DIR__ . '/../..' . '/classes/WPSensors/Alerts/class-memberpress-custom-alerts.php',
        'WSAL\\WP_Sensors\\Alerts\\Multisite_Custom_Alerts' => __DIR__ . '/../..' . '/classes/WPSensors/Alerts/class-multisite-custom-alerts.php',
        'WSAL\\WP_Sensors\\Alerts\\Redirection_Custom_Alerts' => __DIR__ . '/../..' . '/classes/WPSensors/Alerts/class-redirection-custom-alerts.php',
        'WSAL\\WP_Sensors\\Alerts\\Tablepress_Custom_Alerts' => __DIR__ . '/../..' . '/classes/WPSensors/Alerts/class-tablepress-custom-alerts.php',
        'WSAL\\WP_Sensors\\Alerts\\WPForms_Custom_Alerts' => __DIR__ . '/../..' . '/classes/WPSensors/Alerts/class-wpforms-custom-alerts.php',
        'WSAL\\WP_Sensors\\Alerts\\WP_2FA_Custom_Alerts' => __DIR__ . '/../..' . '/classes/WPSensors/Alerts/class-wp-2fa-custom-alerts.php',
        'WSAL\\WP_Sensors\\Alerts\\WooCommerce_Custom_Alerts' => __DIR__ . '/../..' . '/classes/WPSensors/Alerts/class-woocommerce-custom-alerts.php',
        'WSAL\\WP_Sensors\\Alerts\\Yoast_Custom_Alerts' => __DIR__ . '/../..' . '/classes/WPSensors/Alerts/class-yoast-custom-alerts.php',
        'WSAL\\WP_Sensors\\BBPress_Sensor' => __DIR__ . '/../..' . '/classes/WPSensors/class-bbpress-sensor.php',
        'WSAL\\WP_Sensors\\BBPress_System_Sensor' => __DIR__ . '/../..' . '/classes/WPSensors/class-bbpress-system-sensor.php',
        'WSAL\\WP_Sensors\\BBPress_User_Sensor' => __DIR__ . '/../..' . '/classes/WPSensors/class-bbpress-user-sensor.php',
        'WSAL\\WP_Sensors\\Gravity_Forms_Sensor' => __DIR__ . '/../..' . '/classes/WPSensors/class-gravity-forms-sensor.php',
        'WSAL\\WP_Sensors\\Helpers\\ACF_Helper' => __DIR__ . '/../..' . '/classes/WPSensors/Helpers/class-acf-helper.php',
        'WSAL\\WP_Sensors\\Helpers\\BBPress_Helper' => __DIR__ . '/../..' . '/classes/WPSensors/Helpers/class-bbpress-helper.php',
        'WSAL\\WP_Sensors\\Helpers\\GravityForms_Helper' => __DIR__ . '/../..' . '/classes/WPSensors/Helpers/class-gravityforms-helper.php',
        'WSAL\\WP_Sensors\\Helpers\\MainWP_Server_Helper' => __DIR__ . '/../..' . '/classes/WPSensors/Helpers/class-mainwp-server-helper.php',
        'WSAL\\WP_Sensors\\Helpers\\MemberPress_Helper' => __DIR__ . '/../..' . '/classes/WPSensors/Helpers/class-memberpress-helper.php',
        'WSAL\\WP_Sensors\\Helpers\\Redirection_Helper' => __DIR__ . '/../..' . '/classes/WPSensors/Helpers/class-redirection-helper.php',
        'WSAL\\WP_Sensors\\Helpers\\TablePress_Helper' => __DIR__ . '/../..' . '/classes/WPSensors/Helpers/class-tablepress-helper.php',
        'WSAL\\WP_Sensors\\Helpers\\WPForms_Helper' => __DIR__ . '/../..' . '/classes/WPSensors/Helpers/class-wpforms-helper.php',
        'WSAL\\WP_Sensors\\Helpers\\WP_2FA_Helper' => __DIR__ . '/../..' . '/classes/WPSensors/Helpers/class-wp-2fa-helper.php',
        'WSAL\\WP_Sensors\\Helpers\\Woocommerce_Helper' => __DIR__ . '/../..' . '/classes/WPSensors/Helpers/class-woocommerce-helper.php',
        'WSAL\\WP_Sensors\\Helpers\\Yoast_SEO_Helper' => __DIR__ . '/../..' . '/classes/WPSensors/Helpers/class-yoast-seo-helper.php',
        'WSAL\\WP_Sensors\\MainWP_Server_Sensor' => __DIR__ . '/../..' . '/classes/WPSensors/class-mainwp-server-sensor.php',
        'WSAL\\WP_Sensors\\Main_WP_Sensor' => __DIR__ . '/../..' . '/classes/WPSensors/class-main-wp-sensor.php',
        'WSAL\\WP_Sensors\\MemberPress_Sensor' => __DIR__ . '/../..' . '/classes/WPSensors/class-memberpress-sensor.php',
        'WSAL\\WP_Sensors\\Multisite_Sign_Up_Sensor' => __DIR__ . '/../..' . '/classes/WPSensors/class-multisite-sign-up-sensor.php',
        'WSAL\\WP_Sensors\\Redirection_Sensor' => __DIR__ . '/../..' . '/classes/WPSensors/class-redirection-sensor.php',
        'WSAL\\WP_Sensors\\TablePress_Sensor' => __DIR__ . '/../..' . '/classes/WPSensors/class-tablepress-sensor.php',
        'WSAL\\WP_Sensors\\WPForms_Sensor' => __DIR__ . '/../..' . '/classes/WPSensors/class-wpforms-sensor.php',
        'WSAL\\WP_Sensors\\WP_2FA_Sensor' => __DIR__ . '/../..' . '/classes/WPSensors/class-wp-2fa-sensor.php',
        'WSAL\\WP_Sensors\\WP_Comments_Sensor' => __DIR__ . '/../..' . '/classes/WPSensors/class-wp-comments-sensor.php',
        'WSAL\\WP_Sensors\\WP_Content_Sensor' => __DIR__ . '/../..' . '/classes/WPSensors/class-wp-content-sensor.php',
        'WSAL\\WP_Sensors\\WP_Database_Sensor' => __DIR__ . '/../..' . '/classes/WPSensors/class-wp-database-sensor.php',
        'WSAL\\WP_Sensors\\WP_Files_Sensor' => __DIR__ . '/../..' . '/classes/WPSensors/class-wp-files-sensor.php',
        'WSAL\\WP_Sensors\\WP_Log_In_Out_Sensor' => __DIR__ . '/../..' . '/classes/WPSensors/class-wp-log-in-out-sensor.php',
        'WSAL\\WP_Sensors\\WP_Menus_Sensor' => __DIR__ . '/../..' . '/classes/WPSensors/class-wp-menus-sensor.php',
        'WSAL\\WP_Sensors\\WP_Meta_Data_Sensor' => __DIR__ . '/../..' . '/classes/WPSensors/class-wp-metadata-sensor.php',
        'WSAL\\WP_Sensors\\WP_Multisite_Sensor' => __DIR__ . '/../..' . '/classes/WPSensors/class-wp-multisite-sensor.php',
        'WSAL\\WP_Sensors\\WP_Plugins_Themes_Sensor' => __DIR__ . '/../..' . '/classes/WPSensors/class-wp-plugins-themes-sensor.php',
        'WSAL\\WP_Sensors\\WP_Register_Sensor' => __DIR__ . '/../..' . '/classes/WPSensors/class-wp-register-sensor.php',
        'WSAL\\WP_Sensors\\WP_Request_Sensor' => __DIR__ . '/../..' . '/classes/WPSensors/class-wp-request-sensor.php',
        'WSAL\\WP_Sensors\\WP_System_Sensor' => __DIR__ . '/../..' . '/classes/WPSensors/class-wp-system-sensor.php',
        'WSAL\\WP_Sensors\\WP_User_Profile_Sensor' => __DIR__ . '/../..' . '/classes/WPSensors/class-wp-user-profile-sensor.php',
        'WSAL\\WP_Sensors\\WSAL_Sensors_Widgets' => __DIR__ . '/../..' . '/classes/WPSensors/class-wp-widgets-sensor.php',
        'WSAL\\WP_Sensors\\WooCommerce_Public_Sensor' => __DIR__ . '/../..' . '/classes/WPSensors/class-woocommerce-public-sensor.php',
        'WSAL\\WP_Sensors\\WooCommerce_Sensor' => __DIR__ . '/../..' . '/classes/WPSensors/class-woocommerce-sensor.php',
        'WSAL\\WP_Sensors\\Yoast_SEO_Sensor' => __DIR__ . '/../..' . '/classes/WPSensors/class-yoast-seo-sensor.php',
        'WSAL\\WP_Sensors_Helpers\\WooCommerce_Sensor_Helper' => __DIR__ . '/../..' . '/classes/WPSensors/class-woocommerce-sensor-helper.php',
        'WSAL\\WP_Sensors_Helpers\\WooCommerce_Sensor_Helper_Second' => __DIR__ . '/../..' . '/classes/WPSensors/class-woocommerce-sensor-helper-second.php',
        'WSAL\\Writers\\CSV_Writer' => __DIR__ . '/../..' . '/classes/Writers/class-csv-writer.php',
        'WSAL\\Writers\\HTML_Writer' => __DIR__ . '/../..' . '/classes/Writers/class-html-writer.php',
        'WSAL_AbstractLogger' => __DIR__ . '/../..' . '/classes/AbstractLogger.php',
        'WSAL_AbstractView' => __DIR__ . '/../..' . '/classes/AbstractView.php',
        'WSAL_Views_AuditLog' => __DIR__ . '/../..' . '/classes/Views/AuditLog.php',
        'WSAL_Views_Help' => __DIR__ . '/../..' . '/classes/Views/Help.php',
        'WSAL_Views_Settings' => __DIR__ . '/../..' . '/classes/Views/Settings.php',
        'WSAL_Views_ToggleAlerts' => __DIR__ . '/../..' . '/classes/Views/ToggleAlerts.php',
        'WpSecurityAuditLog' => __DIR__ . '/../..' . '/classes/class-wp-security-audit-log.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit16754::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit16754::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit16754::$classMap;

        }, null, ClassLoader::class);
    }
}
