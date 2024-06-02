<?php

// Class representing an Animal, extending the Entity class
class Animal extends Entity {
    private $species;

    // Constructor to initialize the properties
    public function __construct($name, $age, $species) {
        parent::__construct($name, $age); // Calling the parent constructor
        $this->species = $species;
    }

    // Implementing the abstract method
    public function describe() {
        return "Animal: $this->name, Age: $this->age, Species: $this->species";
    }

    // Additional method specific to Animal
    public function makeSound() {
        return "$this->name makes a sound in our ecosystem.";
    }
}