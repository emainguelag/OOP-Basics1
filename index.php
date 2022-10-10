<?php

require_once 'Bicycle.php';
$bike = new Bicycle('magenta');
var_dump($bike);
echo '<br>';

$bike-> setColor('blue');
$bike->setCurrentSpeed(0);
var_dump($bike); // then, another dump.
echo '<br>';

echo $bike->forward();
echo '<br>';
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo '<br>';
echo $bike->brake();
echo '<br>';
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo '<br>';
echo $bike->brake();
echo '<br>';
// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle('fushia');
$rockrider->setColor('yellow');

// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle('green');
$tornado->setColor('black');

echo $tornado->forward();
echo '<br>';

var_dump($tornado);
echo '<br>';
echo $tornado->dump();
echo '<br>';

$bike->setCurrentSpeed(-5);
echo $bike->getCurrentSpeed();
echo '<br>';

echo "---CHALLENGE---";
echo '<br>';

require_once 'car.php';

$margeStationWagon = new Car ('orange', 7, 'fioul');
var_dump($margeStationWagon);
echo '<br>';
echo $margeStationWagon->forward();
echo '<br>';
echo $margeStationWagon->brake();