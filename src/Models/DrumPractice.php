<?php
// Jennifer Frei - 1405501
// CS85 Section 1234
// Module 6A MVC-Based PHP App

namespace App\Models;

class DrumPractice{
    // Property Declarations
    public $totalMinutes;
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

        //All 4 grooves are always practiced
        $this->grooves = [
            ['name' => 'Groove 1 (Kick on 1 | Snare on 2)',
            'tab' => "Count | 1 + 2 +\n    C | x x x x\n    S | - - o -\n    K | o - - -"
            ],
            [
            'name' => 'Groove 2 (Kick on 1 and last + | Snare on 2)',
            'tab' => "Count | 1 + 2 +\n    C | x x x x\n    S | - - o -\n    K | o - - o"
            ],
            [
            'name' => 'Groove 3 (Kick on first + | Snare on 2)',
            'tab' => "Count | 1 + 2 +\n    C | x x x x\n    S | - - o -\n    K | - o - -"
            ],
            [
            'name' => 'Groove 4 (Kick on 1 and 2 | Snare on 2)',
            'tab' => "Count | 1 + 2 +\n    C | x x x x\n    S | - - o -\n    K | o - o -"
            ],
        ];

        // Master Rudiments
        $allRudiments = [
            [
            'name' => 'Single Stroke Roll',
            'tab' => "Count | 1 e + a | 2 e + a | 3 e + a | 4 e + a\nHands | R L R L | R L R L | R L R L | R L R L \n"
            ],
            [
            'name' => 'Double Stroke Roll',
            'tab' => "Count | 1 e + a | 2 e + a | 3 e + a | 4 e + a\nHands | R R L L | R R L L | R R L L | R R L L \n"
            ],
            [
            'name' => 'Single Paradiddle',
            'tab' => "Count | 1 e + a | 2 e + a | 3 e + a | 4 e + a\nHands | R L R R | L R L L | R L R R | L R L L \n"
            ],
            [
            'name' => 'Flam Accent',
            'tab' => "Count | 1 e + a | 2 e + a | 3 e + a | 4 e + a\nHands | lR L R | rL R L | lR L R | rL R L \n"
            ]
        ];

        // Master Fills
        $allFills = [
            [
            'name' => 'Snare Fill',
            'tab' => "Count | 1 e + a | 2 e + a | 3 e + a | 4 e + a\n    S | o o o o | o o o o | o o o o | o o o o\n    K | o - - - | o - - - | o - - - | o - - -"
            ],
            [
            'name' => 'Around the kit Fill',
            'tab' => "Count | 1 e + a | 2 e + a | 3 e + a | 4 e + a\n 
    S | o o o o | - - - - | - - - - | - - - -\n 
   T1 | - - - - | o o o o | - - - - | - - - -\n 
   T2 | - - - - | - - - - | o o o o | - - - -\n 
   FT | - - - - | - - - - | - - - - | o o o o\n
    K | o - - - | o - - - | o - - - | o - - -"
            ],
            [
            'name' => '2-beat Snare to tom Fill',
            'tab' => "Count | 1 e + a | 2 e + a | 3 e + a | 4 e + a\n    S | o o - - | o o - - | - - - - | o o o o\n   T1 | - - o - | - - o - | o o o o | - - - -\n    K | o - - - | o - - - | o - - - | o - - -"
            ],
            [
            'name' => '2-beat Snare Fill',
            'tab' => "Count | 1 e + a | 2 e + a | 3 e + a | 4 e + a\n 
    S | - - o o | - - o o | o o - - | - - - -\n 
   T1 | - o - - | - o - - | - - o o | - - - -\n 
   T2 | - - - - | - - - - | - - - - | o o - -\n 
   FT | o - - - | o - - - | - - - - | - - o o\n
    K | o - - - | o - - - | o - - - | o - - -"
            ]
        ];

    // TIER LOGIC
    $tiers = [
    15 => ['rudimentCount' => 2, 'rudimentTime' => 3.5, 'fillCount' => 0, 'fillTime' => 0, 'grooveTime' => 2.0],
    30 => ['rudimentCount' => 4, 'rudimentTime' => 3.0, 'fillCount' => 2, 'fillTime' => 3.0, 'grooveTime' => 3.0],
    45 => ['rudimentCount' => 4, 'rudimentTime' => 4.0, 'fillCount' => 4, 'fillTime' => 3.25, 'grooveTime' => 4.0],
    60 => ['rudimentCount' => 4, 'rudimentTime' => 5.0, 'fillCount' => 4, 'fillTime' => 5.0, 'grooveTime' => 5.0],
    ];

    // default to 30 minutes
    $config = $tiers[$this->totalMinutes] ?? $tiers[30];

    // set groove time
    $this->timePerGroove = $config['grooveTime'];

    // slice rudiments and set time / visibility
    $this->rudiments = array_slice($allRudiments, 0, $config['rudimentCount']);
    $this->timePerRudiment = $config['rudimentTime'];
    $this->showRudiments = count($this->rudiments) > 0;

    // slice fills and set time / visibility
    $this->fills = array_slice($allFills, 0, $config['fillCount']);
    $this->timePerFill = $config['fillTime'];
    $this->showFills = count($this->fills) > 0;
    }
    public function getSummary(){
        return "Drum Practice Routine";
    }
}
?>