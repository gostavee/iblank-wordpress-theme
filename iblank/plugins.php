<?php
$plugins = array(
	// This is an example of how to include a plugin bundled with a theme.
	array(
		'name'               => 'custom-fields', // The plugin name.
		'slug'               => 'advanced-custom-fields', // The plugin slug (typically the folder name).
		'source'             => get_stylesheet_directory() . '/plugins/advanced-custom-fields.zip', // The plugin source.
		'required'           => true, // If false, the plugin is only 'recommended' instead of required.
		'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
		'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
		'force_deactivation' => true, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
		'external_url'       => '', // If set, overrides default API URL and points to an external URL.
		'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
	),
	array(
		'name'               => 'font-awesome', // The plugin name.
		'slug'               => 'advanced-custom-fields-font-awesome', // The plugin slug (typically the folder name).
		'source'             => get_stylesheet_directory() . '/plugins/advanced-custom-fields-font-awesome.zip', // The plugin source.
		'required'           => true, // If false, the plugin is only 'recommended' instead of required.
		'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
		'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
		'force_deactivation' => true, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
		'external_url'       => '', // If set, overrides default API URL and points to an external URL.
		'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
	),
	array(
		'name'               => 'custom-post-type-ui', // The plugin name.
		'slug'               => 'custom-post-type-ui', // The plugin slug (typically the folder name).
		'source'             => get_stylesheet_directory() . '/plugins/custom-post-type-ui.zip', // The plugin source.
		'required'           => true, // If false, the plugin is only 'recommended' instead of required.
		'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
		'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
		'force_deactivation' => true, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
		'external_url'       => '', // If set, overrides default API URL and points to an external URL.
		'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
	),
	array(
		'name'               => 'admin-menu-editor', // The plugin name.
		'slug'               => 'admin-menu-editor', // The plugin slug (typically the folder name).
		'source'             => get_stylesheet_directory() . '/plugins/admin-menu-editor.zip', // The plugin source.
		'required'           => true, // If false, the plugin is only 'recommended' instead of required.
		'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
		'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
		'force_deactivation' => true, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
		'external_url'       => '', // If set, overrides default API URL and points to an external URL.
		'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
	),
	array(
		'name'               => 'siteorigin-panels', // The plugin name.
		'slug'               => 'siteorigin-panels', // The plugin slug (typically the folder name).
		'source'             => get_stylesheet_directory() . '/plugins/siteorigin-panels.zip', // The plugin source.
		'required'           => true, // If false, the plugin is only 'recommended' instead of required.
		'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
		'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
		'force_deactivation' => true, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
		'external_url'       => '', // If set, overrides default API URL and points to an external URL.
		'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
	),
	array(
		'name'               => 'so-widgets-bundle', // The plugin name.
		'slug'               => 'so-widgets-bundle', // The plugin slug (typically the folder name).
		'source'             => get_stylesheet_directory() . '/plugins/so-widgets-bundle.zip', // The plugin source.
		'required'           => true, // If false, the plugin is only 'recommended' instead of required.
		'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
		'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
		'force_deactivation' => true, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
		'external_url'       => '', // If set, overrides default API URL and points to an external URL.
		'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
	),
	array(
		'name'               => 'widgets-for-siteorigin', // The plugin name.
		'slug'               => 'widgets-for-siteorigin', // The plugin slug (typically the folder name).
		'source'             => get_stylesheet_directory() . '/plugins/widgets-for-siteorigin.zip', // The plugin source.
		'required'           => true, // If false, the plugin is only 'recommended' instead of required.
		'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
		'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
		'force_deactivation' => true, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
		'external_url'       => '', // If set, overrides default API URL and points to an external URL.
		'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
	),
	array(
		'name'               => 'livemesh-siteorigin-widgets', // The plugin name.
		'slug'               => 'livemesh-siteorigin-widgets', // The plugin slug (typically the folder name).
		'source'             => get_stylesheet_directory() . '/plugins/livemesh-siteorigin-widgets.zip', // The plugin source.
		'required'           => true, // If false, the plugin is only 'recommended' instead of required.
		'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
		'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
		'force_deactivation' => true, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
		'external_url'       => '', // If set, overrides default API URL and points to an external URL.
		'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
	),
	array(
		'name'               => 'megamenu', // The plugin name.
		'slug'               => 'megamenu', // The plugin slug (typically the folder name).
		'source'             => get_stylesheet_directory() . '/plugins/megamenu.zip', // The plugin source.
		'required'           => true, // If false, the plugin is only 'recommended' instead of required.
		'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
		'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
		'force_deactivation' => true, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
		'external_url'       => '', // If set, overrides default API URL and points to an external URL.
		'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
	),
);
?>
