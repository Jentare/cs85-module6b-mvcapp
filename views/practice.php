<?php
echo " Count | 1 + 2 + 3 + 4 +\n";
echo "   C   | x x x x x x x x\n";
echo "   S   | - - o - - - o -\n";
echo "   K   | o - - - o - - -\n";

echo "ROUTINE: " . $practice->getSummary() . "\n";
echo "TOTAL DURATION: " . $practice->totalMinutes . " minutes\n\n";

echo "--- GROOVES (" . $practice->timePerGroove . " mins each) ---\n";
foreach ($practice->grooves as $groove){
    echo ". " . $groove['name'] . "\n";
    echo $groove['tab'] . "\n\n";
}

if ($practice->showRudiments){
    echo "--- RUDIMENTS (" . $practice->$timePerRudiment . " mins each) ---\n";
    foreach ($practice->rudiments as $rudiment){
        echo ". " . $rudiment['name'] . "\n";
        echo $rudiment['tab'] . "\n\n";
    }
}

if ($practice->showFills){
    echo "--- FILLS (" . $practice->timePerFill . " mins each) ---\n";
    foreach ($practice->fills as $fill){
        echo ". " . $fill['name'] . "\n";
        echo $fill['tab'] . "\n\n";
    }
}
?>