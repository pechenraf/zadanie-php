<?php
require 'Zoo.php';
class Animal {
    protected $name;
    protected $age;
    protected $species;

    public function __construct($name, $age, $species) {
        $this->name = $name;
        $this->age = $age;
        $this->species = $species;
    }

    public function makeSound() {
        echo "Животное издает звук.\n";
    }

    public function getInfo() {
        return "{$this->name}, вид: {$this->species}, возраст: {$this->age} лет.";
    }
}

class Dog extends Animal {
    private $breed;

    public function __construct($name, $age, $breed) {
        parent::__construct($name, $age, 'Собака');
        $this->breed = $breed;
    }

    public function makeSound() {
        echo "Гав-гав!\n";
    }

    public function getInfo() {
        return parent::getInfo() . " Порода: {$this->breed}.";
    }
}

class Cat extends Animal {
    private $color;

    public function __construct($name, $age, $color) {
        parent::__construct($name, $age, 'Кошка');
        $this->color = $color;
    }

    public function makeSound() {
        echo "Мяу!\n";
    }

    public function getInfo() {
        return parent::getInfo() . " Цвет шерсти: {$this->color}.";
    }
}

$dog1 = new Dog("Собака1", 3, "Ретривер");
$cat1 = new Cat("Кошка1", 2, "Белый");