<?php

namespace Game;

class Character {
    protected $name;
    protected $health;

    public function __construct($name, $health) {
        $this->name = $name;
        $this->health = $health;
    }
    public function attack() {
        echo "Персонаж {$this->name} атакует!\n";
    }
    public function getName(): string {
        return $this->name;
    }
    public function getHealth(): int {
        return $this->health;
    }
    public function setHealth(int $health): void {
        $this->health = $health;
    }
}
namespace Game\Characters;
use Game\Character;
class Warrior extends Character {
    public function __construct($name, $health = 100) {
        parent::__construct($name, $health);
    }

    public function attack() {
        echo "Воин {$this->name} наносит удар мечом!\n";
    }
}

namespace Game\Characters;
use Game\Character;
class Mage extends Character {
    public function __construct($name, $health = 70) {
        parent::__construct($name, $health);
    }

    public function attack() {
        echo "Маг {$this->name} применяет заклинание!\n";
    }
}
namespace Game\Characters;
use Game\Character;

class Archer extends Character {
    public function __construct($name, $health = 80) {
        parent::__construct($name, $health);
    }

    public function attack() {
        echo "Лучник {$this->name} стреляет из лука!\n";
    }
}
namespace Game;
    use Game\Characters\Warrior;
    use Game\Characters\Mage;
    use Game\Characters\Archer;
    $characters = [
        new Warrior("Воин1"),
        new Mage("Маг1"),
        new Archer("Лучник1"),
    ];
    foreach ($characters as $character) {
        $character->attack();
    }
    $warrior = new Warrior("Воин2");
    echo "Имя воина: " . $warrior->getName() . "\n";
    echo "Здоровье воина: " . $warrior->getHealth() . "\n";
