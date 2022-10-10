<?php

require_once 'Bicycle.php';
require_once 'car.php';
require_once 'Vehicle.php';
require_once 'truck.php';


$bike = new Bicycle('magenta', 1);
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
$rockrider = new Bicycle('fushia', 1);
$rockrider->setColor('yellow');

// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle('green', 1);
$tornado->setColor('black');

echo $tornado->forward();
echo '<br>';

var_dump($tornado);
echo '<br>';
 // echo $tornado->dump();
echo '<br>';

$bike->setCurrentSpeed(-5);
echo $bike->getCurrentSpeed();
echo '<br>';
echo '<br>';

// challenge
echo "---CHALLENGE---";
echo '<br>';



$margeStationWagon = new Car ('orange', 7, 'fuel');
var_dump($margeStationWagon);
echo '<br>';
echo $margeStationWagon->forward();
echo '<br>';
echo $margeStationWagon->brake();
echo '<br>';
echo '<br>';



// basics2
echo "---PART 2---";
echo '<br>';
$bicycle = new Bicycle('blue', 1);
echo '<br>';
echo $bicycle->forward();
echo '<br>';
var_dump($bicycle);
echo '<br>';
echo '<br>';

$car = new Car('green', 4, 'electric');
echo $car->forward();
echo '<br>';
var_dump($car);
echo '<br>';
echo '<br>';

var_dump(Car::ALLOWED_ENERGIES);
echo '<br>';
$testCar = new Car('green', 4, 'gpl');
echo '<br>';
var_dump($testCar);
echo '<br>';
echo '<br>';

$firstTruck = new Truck('yellow', 3, 'fuel', 4);
var_dump($firstTruck);
echo '<br>';
echo '<br>';

echo $firstTruck->forward();
echo '<br>';
echo $firstTruck->brake();
echo '<br>';