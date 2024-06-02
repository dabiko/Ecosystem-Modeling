<?php

// Abstract base class defining a common interface and properties
abstract class Entity {
    protected $name;
    protected $age;

    // Constructor to initialize the properties
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    // Abstract method to be implemented by derived classes
    abstract public function describe();
}

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

// Class representing a Plant, extending the Entity class
class Plant extends Entity {
    private $type;

    // Constructor to initialize the properties
    public function __construct($name, $age, $type) {
        parent::__construct($name, $age); // Calling the parent constructor
        $this->type = $type;
    }

    // Implementing the abstract method
    public function describe() {
        return "Plant: $this->name, Age: $this->age, Type: $this->type";
    }

    // Additional method specific to Plant
    public function grow() {
        return "$this->name is growing in our ecosystem.";
    }
}

// Class representing an Insect, extending the Entity class
class Insect extends Entity {
    private $species;

    // Constructor to initialize the properties
    public function __construct($name, $age, $species) {
        parent::__construct($name, $age); // Calling the parent constructor
        $this->species = $species;
    }

    // Implementing the abstract method
    public function describe() {
        return "Insect: $this->name, Age: $this->age, Species: $this->species";
    }

    // Additional method specific to Insect
    public function buzz() {
        return "$this->name is buzzing around the ecosystem.";
    }
}
