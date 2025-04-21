<?php
require 'Animal.php';
class Zoo {
    private $animals = [];

    public function addAnimal(Animal $animal) {
        $this->animals[] = $animal;
    }

    public function listAnimals() {
        foreach ($this->animals as $animal) {
            echo $animal->getInfo() . "\n";
        }
    }

    public function animalSounds() {
        foreach ($this->animals as $animal) {
            $animal->makeSound();
        }
    }
}
$zoo = new Zoo();
$zoo->addAnimal($dog1);
$zoo->addAnimal($cat1);

echo "Список животных в зоопарке:\n";
$zoo->listAnimals();

echo "\nЗвуки животных:\n";
$zoo->animalSounds();