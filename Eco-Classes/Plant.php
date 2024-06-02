<?php

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