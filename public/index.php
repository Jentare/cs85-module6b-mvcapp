<?php
// Load Composer's PSR-4 autoloader
require __DIR__ . '/../vendor/autoload.php';

use App\Controllers\PracticeController;

// Instantiate controller
$controller = new PracticeController();

// Grab minutes; defaults to 30
$minutes = isset($_GET['minutes']) ? (int)$_GET['minutes'] : 30;
// Runs the session (pass 15, 30, 45, or 60 miinutes)
$controller->index($minutes);
?>