<?php
/**
 * Advanced SEO/LLM Module - Bootstrap
 * Loads all modules and registers meta boxes / hooks
 *
 * @package wimper_Excellence
 * @since 1.0.0
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
	exit;
}

// Global to track missing files
global $wimper_missing_seo_files;
$wimper_missing_seo_files = [];

/**
 * Helper to safely load files
 */
function wimper_safe_require($path)
{
	global $wimper_missing_seo_files;
	if (file_exists($path)) {
		require_once $path;
		return true;
	}
	$wimper_missing_seo_files[] = basename($path);
	return false;
}

/**
 * Load Base Classes & Helpers
 */
wimper_safe_require(__DIR__ . '/class-meta-box-base.php');
wimper_safe_require(__DIR__ . '/class-field-sanitizer.php');
wimper_safe_require(__DIR__ . '/class-fallback-resolver.php');

/**
 * Load Core Classes
 */
wimper_safe_require(__DIR__ . '/class-seo-dashboard.php');
wimper_safe_require(__DIR__ . '/class-citation-datasets.php');
wimper_safe_require(__DIR__ . '/class-image-alt-automation.php');
wimper_safe_require(__DIR__ . '/class-admin-help.php');
wimper_safe_require(__DIR__ . '/class-breadcrumbs.php');
wimper_safe_require(__DIR__ . '/class-schema-types.php');
wimper_safe_require(__DIR__ . '/class-llm-client.php');

// Initialize LLM Client
global $wimper_llm_client;
$wimper_llm_client = new wimper_LLM_Client();

/**
 * Load Meta Boxes
 */
$meta_boxes = [
	'class-location-events.php',
	'class-location-howto.php',
	'class-general-llm-context.php', // Renamed from location-llm-context
	'class-general-llm-prompt.php',  // Renamed from location-llm-prompt
	'class-location-media.php',
	'class-location-pricing.php',
	'class-location-reviews.php',
	'class-location-service-area.php',
	'class-program-relationships.php',
	'class-universal-faq.php',
	'class-hreflang-options.php',
	'class-city-landing-meta.php',
	'class-location-citation-facts.php',
	'class-post-newsroom.php'
];

foreach ($meta_boxes as $file) {
	// Try loading new name first, then fallback to old name if not renamed yet (during transition)
	if (!wimper_safe_require(__DIR__ . '/meta-boxes/' . $file)) {
		// Fallback for transition period
		$old_file = str_replace('general-', 'location-', $file);
		if (file_exists(__DIR__ . '/meta-boxes/' . $old_file)) {
			require_once __DIR__ . '/meta-boxes/' . $old_file;
		}
	}
}

/**
 * Load Endpoints
 */
wimper_safe_require(__DIR__ . '/endpoints/kml-endpoint.php');

/**
 * Load Schema Builders
 */
$schema_builders = [
	'class-event-builder.php',
	'class-howto-builder.php',
	'class-llm-context-builder.php',
	'class-schema-injector.php',
	'class-service-area-builder.php',
	'class-universal-faq-builder.php',
	'class-page-type-builder.php'
];

foreach ($schema_builders as $file) {
	wimper_safe_require(__DIR__ . '/schema-builders/' . $file);
}

/**
 * Initialize Modules
 */
function wimper_advanced_seo_init()
{
	// Core Modules
	if (class_exists('wimper_SEO_Dashboard'))
		(new wimper_SEO_Dashboard())->init();
	if (class_exists('wimper_Citation_Datasets'))
		(new wimper_Citation_Datasets())->init();
	if (class_exists('wimper_Image_Alt_Automation'))
		(new wimper_Image_Alt_Automation())->init();
	if (class_exists('wimper_Admin_Help'))
		(new wimper_Admin_Help())->init();
	if (class_exists('wimper_Breadcrumbs'))
		(new wimper_Breadcrumbs())->init();

	// Meta Boxes
	$meta_classes = [
		'wimper_Location_Citation_Facts',
		'wimper_Location_Events',
		'wimper_Location_HowTo',
		'wimper_General_LLM_Context', // Renamed
		'wimper_General_LLM_Prompt',  // Renamed
		'wimper_Location_Media',
		'wimper_Location_Pricing',
		'wimper_Location_Reviews',
		'wimper_Location_Service_Area',
		'wimper_Program_Relationships',
		'wimper_Universal_FAQ',
		'wimper_Hreflang_Options',
		'wimper_City_Landing_Meta',
		'wimper_Post_Newsroom'
	];

	// Fallback for class names if files haven't been updated yet
	if (!class_exists('wimper_General_LLM_Context') && class_exists('wimper_Location_LLM_Context')) {
		$meta_classes[] = 'wimper_Location_LLM_Context';
	}
	if (!class_exists('wimper_General_LLM_Prompt') && class_exists('wimper_Location_LLM_Prompt')) {
		$meta_classes[] = 'wimper_Location_LLM_Prompt';
	}

	foreach ($meta_classes as $class) {
		if (class_exists($class)) {
			(new $class())->register();
		}
	}

	// Schema Builders (Hooks)
	if (class_exists('wimper_Event_Schema_Builder'))
		add_action('wp_head', ['wimper_Event_Schema_Builder', 'output']);
	if (class_exists('wimper_HowTo_Schema_Builder'))
		add_action('wp_head', ['wimper_HowTo_Schema_Builder', 'output']);
	if (class_exists('wimper_Schema_Injector'))
		add_action('wp_head', ['wimper_Schema_Injector', 'output_person_schema']);
	if (class_exists('wimper_Universal_FAQ_Builder'))
		add_action('wp_head', ['wimper_Universal_FAQ_Builder', 'output']);
	if (class_exists('wimper_Page_Type_Builder'))
		add_action('wp_head', ['wimper_Page_Type_Builder', 'output']);

	// Flush Rewrite Rules if KML rule is missing (One-time check)
	if (get_option('wimper_seo_flush_rewrite') !== 'done') {
		flush_rewrite_rules();
		update_option('wimper_seo_flush_rewrite', 'done');
	}
}
add_action('init', 'wimper_advanced_seo_init');

/**
 * Admin Assets
 */
function wimper_advanced_seo_admin_assets($hook)
{
	// Only load on SEO Dashboard or Post Edit screens
	$screen = get_current_screen();
	$allowed_post_types = ['location', 'program', 'page', 'post', 'city'];

	$is_dashboard = (isset($_GET['page']) && $_GET['page'] === 'kidazzle-seo-dashboard');
	$is_post_edit = ($hook === 'post.php' || $hook === 'post-new.php');
	$is_allowed_type = ($screen && in_array($screen->post_type, $allowed_post_types));

	if (!$is_dashboard && !($is_post_edit && $is_allowed_type)) {
		return;
	}

	?>
	<style>
		.kidazzle-seo-meta-box {
			background: #fff;
		}

		.kidazzle-section-title {
			font-size: 14px;
			font-weight: 600;
			margin: 15px 0 10px;
			border-bottom: 1px solid #eee;
			padding: 10px 0;
		}

		.kidazzle-field-wrapper {
			margin-bottom: 20px;
		}

		.kidazzle-field-wrapper label {
			display: block;
			font-weight: 600;
			margin-bottom: 5px;
		}

		.kidazzle-field-wrapper .description {
			margin-top: 5px;
			font-style: normal;
			color: #666;
		}

		.kidazzle-field-wrapper .fallback-notice {
			color: #2271b1;
			font-style: italic;
		}

		.kidazzle-repeater-field {
			border: 1px solid #ddd;
			padding: 15px;
			background: #f9f9f9;
		}

		.kidazzle-repeater-items {
			margin-bottom: 10px;
		}

		.kidazzle-repeater-item {
			display: flex;
			gap: 10px;
			margin-bottom: 8px;
			align-items: center;
		}

		.kidazzle-repeater-item input {
			flex: 1;
		}

		.kidazzle-remove-item {
			color: #b32d2e;
		}
	</style>
	<script>
		jQuery(document).ready(function ($) {
			// Repeater Add
			$(document).on('click', '.kidazzle-add-item', function (e) {
				e.preventDefault();
				var $wrapper = $(this).closest('.kidazzle-repeater-field');
				var $items = $wrapper.find('.kidazzle-repeater-items');
				var $clone = $items.find('.kidazzle-repeater-item').first().clone();
				$clone.find('input, textarea').val('');
				$items.append($clone);
			});

			// Repeater Remove
			$(document).on('click', '.kidazzle-remove-item', function (e) {
				e.preventDefault();
				if ($(this).closest('.kidazzle-repeater-items').find('.kidazzle-repeater-item').length > 1) {
					$(this).closest('.kidazzle-repeater-item').remove();
				} else {
					$(this).closest('.kidazzle-repeater-item').find('input, textarea').val('');
				}
			});
		});
	</script>
	<?php
}

add_action('admin_enqueue_scripts', 'wimper_advanced_seo_admin_assets');

/**
 * Admin Notice for Missing Files
 */
function wimper_seo_missing_files_notice()
{
	global $wimper_missing_seo_files;
	if (!empty($wimper_missing_seo_files) && current_user_can('manage_options')) {
		echo '<div class="notice notice-warning is-dismissible">';
		echo '<p><strong>Advanced SEO Module Warning:</strong> The following files are missing and could not be loaded:</p>';
		echo '<ul>';
		foreach ($wimper_missing_seo_files as $file) {
			echo '<li>' . esc_html($file) . '</li>';
		}
		echo '</ul>';
		echo '<p>Please ensure all files are uploaded to <code>inc/advanced-seo-llm/</code>.</p>';
		echo '</div>';
	}
}
add_action('admin_notices', 'wimper_seo_missing_files_notice');
