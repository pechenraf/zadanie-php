<?php

class Car {
    private string $brand;
    private string $model;
    private int $year;
    private int $mileage;

    public function __construct(string $brand, string $model, int $year, int $mileage) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->mileage = $mileage;
    }

    public function getInfo(): string {
        return "Машина: {$this->brand}, модель: {$this->model}, год: {$this->year}, пробег: {$this->mileage} км";
    }

    public function drive(int $distance): void {
        if ($distance > 0) {
            $this->mileage += $distance;
        } else {
            echo "Расстояние должно быть положительным числом.\n";
        }
    }

    public function getMileage(): int {
        return $this->mileage;
    }
}

$myCar = new Car("BMW", "X5", 2020, 50000);
echo $myCar->getInfo() . PHP_EOL;

$myCar->drive(150);
echo "Обновленный пробег: " . $myCar->getMileage() . " км" . PHP_EOL;

echo $myCar->getInfo() . PHP_EOL;

