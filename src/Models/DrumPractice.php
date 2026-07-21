// Jennifer Frei - 1405501
// CS85 Section 1234
// Module 6A MVC-Based PHP App

<?php
namespace App\Models;
// 
class Routine{
    // Property Declarations
    public $totalMinutes;
    public $tiername;
    public $showRudiments = false;
    public $showFills = false;

    public $timePerGroove = 0;
    public $timePerRudiment = 0;
    public $timePerFill = 0;

    public $rudiments = [];
    public $grooves = [];
    public $fills = [];
    
    public function __construct($minutes){
        $this->totalMinutes = $minutes;

        $this->grooves = [
            'name' => 'Groove 1 (Kick on 1 | Snare on 2)',
            'tab' => "Count | 1 + 2 +\n C| x x x x\nS | - - o -\n K | o - - -"
            ],
            [
            'name' => 'Groove 2 (Kick on 1 and last + | Snare on 2)',
            'tab' => "Count | 1 + 2 +\n C| x x x x\nS | - - o -\n K | o - - o"
            ],
            [
            'name' => 'Groove 3 (Kick on first + | Snare on 2)',
            'tab' => "Count | 1 + 2 +\n C| x x x x\nS | - - o -\n K | - o - -"
            ],
            [
            'name' => 'Groove 4 (Kick on 1 and 2 | Snare on 2)',
            'tab' => "Count | 1 + 2 +\n C| x x x x\nS | - - o -\n K | o - o -"
            ],
    }

    }

?>