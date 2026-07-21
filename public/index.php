<?php
// Load Composer's PSR-4 autoloader
require __DIR__ . '/../vendor/autoload.php';

use App\Controllers\PracticeController;

// Instantiate controller
$controller = new PracticeController();

// Runs the session (pass 15, 30, 45, or 60 miinutes)
$controller->index(30);
?>