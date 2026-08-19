<?php
// Force display errors for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header('Content-Type: text/plain');
echo "PHP debug-test.php started.\n";
echo "Current directory: " . __DIR__ . "\n";
echo "Files in current directory:\n";
print_r(scandir(__DIR__));

echo "\nFiles in inc/ directory:\n";
if (is_dir(__DIR__ . '/inc')) {
    print_r(scandir(__DIR__ . '/inc'));
} else {
    echo "inc/ directory does not exist!\n";
}
