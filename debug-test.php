<?php
// Force display errors for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "Attempting to require functions.php...\n";
require_once dirname(__FILE__) . '/functions.php';
echo "Successfully required functions.php!\n";
