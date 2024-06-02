<?php

// Class representing the Ecosystem
class Ecosystem {
    private $entities = [];

    // Method to add an entity to the ecosystem
    public function addEntity(Entity $entity) {
        $this->entities[] = $entity;
    }

    // Method to describe all entities in the ecosystem
    public function describeEntities() {
        foreach ($this->entities as $entity) {
            echo $entity->describe() . PHP_EOL;
        }
    }

    // Method to interact with all entities in the ecosystem
    public function interactEntities() {
        foreach ($this->entities as $entity) {
            if ($entity instanceof Animal) {
                echo $entity->makeSound() . PHP_EOL;
            } elseif ($entity instanceof Plant) {
                echo $entity->grow() . PHP_EOL;
            } elseif ($entity instanceof Insect) {
                echo $entity->buzz() . PHP_EOL;
            }
        }
    }

    public function getEntityNames() {
        $names = [];
        foreach ($this->entities as $entity) {
            $names[] = $entity->getName();
        }
        return $names;
    }
}



