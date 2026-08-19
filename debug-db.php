<?php
// Force display errors for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header('Content-Type: text/plain');
echo "debug-db.php started.\n";

// Disable theme loading
define('WP_USE_THEMES', false);

$wp_load_path = dirname(dirname(dirname(dirname(__FILE__)))) . '/wp-load.php';
echo "Loading wp-load.php from: " . $wp_load_path . "\n";

if (file_exists($wp_load_path)) {
    require_once $wp_load_path;
    echo "WordPress initialized successfully!\n";
    
    // Print active theme details
    echo "Active Template: " . get_option('template') . "\n";
    echo "Active Stylesheet: " . get_option('stylesheet') . "\n";
    echo "Site URL: " . get_option('siteurl') . "\n";
    echo "Home URL: " . get_option('home') . "\n";
    
    // Check if wimper-program-webb theme folder exists on disk
    $theme_root = get_theme_root();
    echo "Theme Root: " . $theme_root . "\n";
    
    $themes = wp_get_themes();
    echo "Installed Themes:\n";
    foreach ($themes as $slug => $theme) {
        echo " - " . $slug . " (" . $theme->get('Name') . ")\n";
    }
} else {
    echo "wp-load.php not found at the specified path!\n";
}
