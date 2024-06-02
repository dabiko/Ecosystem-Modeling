<?php

// Including the Entity class
require_once('Entity.php');

// Class representing an Insect, extending the Entity class
class Insect extends Entity {
    private string $species;

    // Constructor to initialize the properties
    public function __construct($name, $age, $species) {
        parent::__construct($name, $age); // Calling the parent constructor
        $this->species = $species;
    }

    // Implementing the abstract method
    public function describe(): string
    {
        return "Insect: $this->name, Age: $this->age, Species: $this->species";
    }

    // Additional method specific to Insect
    public function buzz(): string
    {
        return "$this->name is buzzing around the ecosystem.";
    }
}
