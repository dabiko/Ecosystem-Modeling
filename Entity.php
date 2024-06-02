<?php

// Abstract base class defining a common interface and properties
abstract class Entity {
    protected string $name;
    protected int $age;

    // Constructor to initialize the properties
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

     public function getName(): string
     {
        return $this->name;
    }

    // Abstract method to be implemented by derived classes
    abstract public function describe();
}