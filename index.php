<?php
include __DIR__ . '/classes/Autovehicle.php';
include  __DIR__ . '/classes/Sport.php';
include  __DIR__ . '/classes/Person.php';

$owner = new Person();
$auto1 = new Autovehicle('Uno', 1000, 100, 20, $owner);
var_dump($auto1);
$autoSport = new Sport('Ferrari', 4, 150, 20, $owner, 12);
$autoSport->setDoors(20);
var_dump($autoSport);

$autoSport->saluta();
$autoSport->nonSo();
echo $autoSport->owner->name;

// $auto1->numberTires = 10000; // da errore perchè numberTires è private
// $auto1->setNumberTires(4)->setMaxVelocity(200); // da errore perchè non c'è return $this; alla fine del metodo
// $auto1->setMaxVelocity(150)->setNumberTires(8);

// echo $auto1->numberTires;
// echo '<br>Number of tires: ' . $auto1->getNumberTires();

// $auto1->fillTank();

// var_dump($auto1);
