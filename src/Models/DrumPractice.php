<?php
// Jennifer Frei - 1405501
// CS85 Section 1234
// Module 6A MVC-Based PHP App

namespace App\Models;

class DrumPractice{
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

        //All 4 grooves are always practiced
        $this->grooves = [
            ['name' => 'Groove 1 (Kick on 1 | Snare on 2)',
            'tab' => "Count | 1 + 2 +\n C | x x x x\n S | - - o -\n K | o - - -"
            ],
            [
            'name' => 'Groove 2 (Kick on 1 and last + | Snare on 2)',
            'tab' => "Count | 1 + 2 +\n C | x x x x\n S | - - o -\n K | o - - o"
            ],
            [
            'name' => 'Groove 3 (Kick on first + | Snare on 2)',
            'tab' => "Count | 1 + 2 +\n C | x x x x\n S | - - o -\n K | - o - -"
            ],
            [
            'name' => 'Groove 4 (Kick on 1 and 2 | Snare on 2)',
            'tab' => "Count | 1 + 2 +\n C | x x x x\n S | - - o -\n K | o - o -"
            ],
        ];

        // Master Rudiments
        $allRudiments = [
            [
                'name' => 'Single Stroke Roll',
                'tab' => "Count | 1 e + a | 2 e + a | 3 e + a | 4 e + a\n 
                 Hands | R L R L | R L R L | R L R L | R L R L \n"
            ],
            [
                'name' => 'Double Stroke Roll',
                'tab' => "Count | 1 e + a | 2 e + a | 3 e + a | 4 e + a\n 
                 Hands | R R L L | R R L L | R R L L | R R L L \n"
            ],
            [
                'name' => 'Single Paradiddle',
                'tab' => "Count | 1 e + a | 2 e + a | 3 e + a | 4 e + a\n 
                 Hands | R L R R | L R L L | R L R R | L R L L \n"
            ],
            [
                'name' => 'Single Stroke Roll',
                'tab' => "Count | 1 e + a | 2 e + a | 3 e + a | 4 e + a\n 
                 Hands | lR L R | rL R L | lR L R | rL R L \n"
            ]
        ];

        // Master Fills
        $allFills = [
            [
                'name' => 'Snare Fill',
                'tab' => "Count | 1 e + a | 2 e + a | 3 e + a | 4 e + a\n 
                S | o o o o | o o o o | o o o o | o o o o\n
                 K | o - - - | o - - - | o - - - | o - - -"
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
                'tab' => "Count | 1 e + a | 2 e + a | 3 e + a | 4 e + a\n 
                 S | o o - - | o o - - | - - - - | o o o o\n 
                T1 | - - o - | - - o - | o o o o | - - - -\n 
                 K | o - - - | o - - - | o - - - | o - - -"
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
    }
    public function getSummary(){
        return "Drum Practice Routine";
    }
}
?>