<?php
// Including the relevant class since separate files were used
require_once('Ecosystem.php');
require_once('Animal.php');
require_once('Plant.php');
require_once('Insect.php');

// Creating the Ecosystem
$ecosystem = new Ecosystem();

// Adding Animals
$ecosystem->addEntity(new Animal("Lion", 4,"Mammal"));
$ecosystem->addEntity(new Animal("Eagle", 2,"Bird"));

// Adding Plants
$ecosystem->addEntity(new Plant("Oak Tree", 35,"Tree"));
$ecosystem->addEntity(new Plant("Sunflower", 6,"Flower"));

// Adding Insects
$ecosystem->addEntity(new Insect("Bee", 1,"Pollinator"));
$ecosystem->addEntity(new Insect("Ant", 1,"Worker"));

// Get Ecosystem Description
echo "Ecosystem Description:" . PHP_EOL;
$ecosystem->describeEntities();

// Get Ecosystem Interactions
echo PHP_EOL . "Ecosystem Interactions:" . PHP_EOL;
$ecosystem->interactEntities();

// Get Ecosystem Entity Names
echo PHP_EOL . "Getting All Entity Names:" . PHP_EOL;
$ecosystem->getEntityNames();