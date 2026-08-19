<?php
// Force display errors for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header('Content-Type: text/plain');
echo "debug-db.php started with WP_INSTALLING=true.\n";

// Disable plugin and theme loading
define('WP_INSTALLING', true);
define('WP_USE_THEMES', false);

$wp_load_path = dirname(dirname(dirname(dirname(__FILE__)))) . '/wp-load.php';
echo "Loading wp-load.php from: " . $wp_load_path . "\n";

if (file_exists($wp_load_path)) {
    require_once $wp_load_path;
    echo "WordPress database initialized successfully!\n";
    
    // Print active theme details
    echo "Active Template: " . get_option('template') . "\n";
    echo "Active Stylesheet: " . get_option('stylesheet') . "\n";
    echo "Site URL: " . get_option('siteurl') . "\n";
    echo "Home URL: " . get_option('home') . "\n";
    
    // Check if wimper-program-webb theme folder exists on disk
    $theme_root = get_theme_root();
    echo "Theme Root: " . $theme_root . "\n";
    
    // Query active plugins directly from the options database
    global $wpdb;
    $active_plugins = $wpdb->get_var("SELECT option_value FROM $wpdb->options WHERE option_name = 'active_plugins'");
    if ($active_plugins) {
        echo "Active Plugins:\n";
        print_r(unserialize($active_plugins));
    } else {
        echo "No active plugins found or failed to query database.\n";
    }
} else {
    echo "wp-load.php not found at the specified path!\n";
}
