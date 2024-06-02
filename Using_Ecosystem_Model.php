<?php
// Including the relevant class since separate files were used
require_once('Ecosystem.php');
require_once('Animal.php');
require_once('Plant.php');
require_once('Insect.php');

// Creating the Ecosystem
$ecosystem = new Ecosystem();

// Add Animals
$ecosystem->addEntity(new Animal("Lion", 4,"Mammal"));
$ecosystem->addEntity(new Animal("Eagle", 2,"Bird"));

// Add Plants
$ecosystem->addEntity(new Plant("Oak Tree", 35,"Tree"));
$ecosystem->addEntity(new Plant("Sunflower", 6,"Flower"));

// Add Insects
$ecosystem->addEntity(new Insect("Bee", 1,"Pollinator"));
$ecosystem->addEntity(new Insect("Ant", 1,"Worker"));

echo "Ecosystem Description:" . PHP_EOL;
$ecosystem->describeEntities();

echo PHP_EOL . "Ecosystem Interactions:" . PHP_EOL;
$ecosystem->interactEntities();

// Get Entity Names
echo PHP_EOL . "Getting All Entity Names:" . PHP_EOL;
$ecosystem->getEntityNames();