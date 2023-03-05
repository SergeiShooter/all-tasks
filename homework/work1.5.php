<?php
$bmw = array('model' => 'X5',
    'speed' => 120,
    'doors' => 5,
    'year' => 1998);
$toyota = array('model' => 'camry',
    'speed' => 130,
    'doors' => 5,
    'year' => 2005);
$opel = array('model' => 'zafira',
    'speed' => 100,
    'doors' => 5,
    'year' => 2006);

$cars = array('bmw'=>$bmw, 'toyota' => $toyota, 'opel' => $opel);
foreach ($cars as $name => $car) {
    echo " CAR $name <br> ";
    echo "{$car ['model']} {$car ['speed']} {$car ['doors']} {$car ['year']}<br><br>";
}