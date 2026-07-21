<?php
namespace App\Controllers;

use App\Models\DrumPractice;

class PracticeController
{
    public function index(int $minutes = 30):void
    {
        // Instantiate model with session duration
        $practice = new DrumPractice($minutes);
        // Loads view to display formatted routine
        require 'views/practice.php';
    }
}
?>