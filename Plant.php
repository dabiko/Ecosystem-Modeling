<?php

// Including the Entity class
require_once('Entity.php');

// Class representing a Plant, extending the Entity class
class Plant extends Entity {
    private string $type;

    // Constructor to initialize the properties
    public function __construct($name, $age, $type) {
        parent::__construct($name, $age); // Calling the parent constructor
        $this->type = $type;
    }

    // Implementing the abstract method
    public function describe(): string
    {
        return "Plant: $this->name, Age: $this->age, Type: $this->type";
    }

    // Additional method specific to Plant
    public function grow(): string
    {
        return "$this->name is growing in our ecosystem.";
    }
}
