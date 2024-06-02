<?php

// Class representing the Ecosystem
class Ecosystem {
    private array $entities = [];

    // Method to add an entity to the ecosystem
    public function addEntity(Entity $entity): void
    {
        $this->entities[] = $entity;
    }

    // Method to describe all entities in the ecosystem
    public function describeEntities(): void
    {
        foreach ($this->entities as $entity) {
            echo $entity->describe() . PHP_EOL;
        }
    }

    // Method to interact with all entities in the ecosystem
    public function interactEntities(): void
    {
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

    // Method to get all entity names in the ecosystem
    public function getEntityNames(): void
    {
        foreach ($this->entities as $entity) {
            if ($entity instanceof Animal) {
                echo "Animal: ". $entity->getName() . PHP_EOL;
            } elseif ($entity instanceof Plant) {
               echo "Plant: ". $entity->getName() . PHP_EOL;
            } elseif ($entity instanceof Insect) {
                echo "Insect: ". $entity->getName() . PHP_EOL;
            }
        }
    }
}
